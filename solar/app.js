/* ==========================================================================
   JJ-Computer.fr — Solar Flare
   GSAP + ScrollTrigger + Lenis. Shader WebGL adapté du composant
   « Mesh Gradient Shader » (21st.dev / nlace-com), tilt + spotlight adaptés
   de « Tilt Card » (21st.dev / tom_ui), palette Solar Flare.
   ========================================================================== */
(function () {
  "use strict";

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches ||
    /[?&]static/.test(window.location.search);
  if (/[?&]qa/.test(window.location.search)) {
    document.documentElement.classList.add("qa");
  }
  var finePointer = window.matchMedia("(hover: hover) and (pointer: fine)").matches;
  var hasGsap = typeof window.gsap !== "undefined";

  /* ------------------------------------------------------------------
     Shader de fond — mesh gradient « Solar Flare »
     ------------------------------------------------------------------ */
  var VERT = "attribute vec2 a; void main(){ gl_Position = vec4(a,0.,1.); }";
  var FRAG = [
    "precision highp float;",
    "uniform vec2 u_res; uniform float u_time; uniform vec2 u_mouse;",
    "uniform float u_intensity; uniform float u_grain;",
    "const vec3 MAGENTA=vec3(1.,.180,.388);",
    "const vec3 ORANGE =vec3(1.,.420,.208);",
    "const vec3 GOLD   =vec3(1.,.757,.271);",
    "const vec3 VIOLET =vec3(.38,.14,.50);",
    "const vec3 DEEP   =vec3(.043,.039,.078);",
    "float hash(vec2 p){ return fract(sin(dot(p,vec2(419.2,371.9)))*833458.57832); }",
    "void main(){",
    "  vec2 uv=gl_FragCoord.xy/u_res.xy;",
    "  vec2 asp=vec2(u_res.x/u_res.y,1.);",
    "  float t=u_time*.10;",
    "  vec2 p0=vec2(.26+.15*sin(t*1.1), .62+.13*cos(t*.9));",
    "  p0=mix(p0,u_mouse,.35);",
    "  vec2 p1=vec2(.78+.13*cos(t*.8), .70+.15*sin(t*1.2));",
    "  vec2 p2=vec2(.55+.19*sin(t*.7), .24+.13*cos(t*.85));",
    "  vec2 p3=vec2(.14+.13*cos(t*1.3), .22+.12*sin(t*.75));",
    "  float e=1.6;",
    "  float w0=pow(1./(distance(uv*asp,p0*asp)+.14),e);",
    "  float w1=pow(1./(distance(uv*asp,p1*asp)+.14),e)*.85;",
    "  float w2=pow(1./(distance(uv*asp,p2*asp)+.14),e)*.9;",
    "  float w3=pow(1./(distance(uv*asp,p3*asp)+.14),e)*1.1;",
    "  float ws=w0+w1+w2+w3;",
    "  vec3 col=(MAGENTA*w0+ORANGE*w1+GOLD*w2+VIOLET*w3)/ws;",
    "  float glow=smoothstep(1.8,9.5,ws);",
    "  float pulse=.92+.08*sin(u_time*.7);",
    "  vec3 base=DEEP+VIOLET*.10*(1.-uv.y);",
    "  col=mix(base,col,min(glow*u_intensity*pulse,.92));",
    "  col*=1.-.42*smoothstep(.4,1.,length(uv-vec2(.5,.45)));",
    "  col+=(hash(uv*u_res.xy*.5+fract(u_time)*61.7)-.5)*.028*u_grain;",
    "  gl_FragColor=vec4(col,1.);",
    "}"
  ].join("\n");

  function SolarShader(canvas, opts) {
    opts = opts || {};
    var gl = canvas.getContext("webgl", { antialias: false, alpha: false });
    if (!gl) return null;

    function compile(type, src) {
      var s = gl.createShader(type);
      gl.shaderSource(s, src);
      gl.compileShader(s);
      return s;
    }
    var prog = gl.createProgram();
    gl.attachShader(prog, compile(gl.VERTEX_SHADER, VERT));
    gl.attachShader(prog, compile(gl.FRAGMENT_SHADER, FRAG));
    gl.linkProgram(prog);
    gl.useProgram(prog);

    var buf = gl.createBuffer();
    gl.bindBuffer(gl.ARRAY_BUFFER, buf);
    gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([-1, -1, 3, -1, -1, 3]), gl.STATIC_DRAW);
    var aLoc = gl.getAttribLocation(prog, "a");
    gl.enableVertexAttribArray(aLoc);
    gl.vertexAttribPointer(aLoc, 2, gl.FLOAT, false, 0, 0);

    var u = {
      res: gl.getUniformLocation(prog, "u_res"),
      time: gl.getUniformLocation(prog, "u_time"),
      mouse: gl.getUniformLocation(prog, "u_mouse"),
      intensity: gl.getUniformLocation(prog, "u_intensity"),
      grain: gl.getUniformLocation(prog, "u_grain")
    };

    var mouse = { x: 0.5, y: 0.5 }, target = { x: 0.5, y: 0.5 };
    var visible = true, raf = 0, t0 = performance.now();

    function resize() {
      var dpr = Math.min(window.devicePixelRatio || 1, 1.5);
      var w = Math.max(1, Math.floor(canvas.clientWidth * dpr));
      var h = Math.max(1, Math.floor(canvas.clientHeight * dpr));
      if (canvas.width !== w || canvas.height !== h) { canvas.width = w; canvas.height = h; }
    }
    window.addEventListener("resize", resize);

    if (opts.mouse) {
      window.addEventListener("pointermove", function (e) {
        var r = canvas.getBoundingClientRect();
        if (e.clientY < r.top - 200 || e.clientY > r.bottom + 200) return;
        target.x = (e.clientX - r.left) / r.width;
        target.y = 1 - (e.clientY - r.top) / r.height;
      }, { passive: true });
    }

    new IntersectionObserver(function (entries) {
      visible = entries[0].isIntersecting;
    }, { rootMargin: "80px" }).observe(canvas);

    function frame() {
      raf = requestAnimationFrame(frame);
      if (!visible) return;
      resize();
      mouse.x += (target.x - mouse.x) * 0.045;
      mouse.y += (target.y - mouse.y) * 0.045;
      gl.viewport(0, 0, gl.drawingBufferWidth, gl.drawingBufferHeight);
      gl.uniform2f(u.res, gl.drawingBufferWidth, gl.drawingBufferHeight);
      gl.uniform1f(u.time, (performance.now() - t0) / 1000);
      gl.uniform2f(u.mouse, mouse.x, mouse.y);
      gl.uniform1f(u.intensity, opts.intensity != null ? opts.intensity : 1);
      gl.uniform1f(u.grain, 0.8);
      gl.drawArrays(gl.TRIANGLES, 0, 3);
    }
    raf = requestAnimationFrame(frame);
    return { stop: function () { cancelAnimationFrame(raf); } };
  }

  /* ------------------------------------------------------------------
     Découpe des titres en mots (les <em> restent des blocs entiers :
     ils portent le dégradé et le glow en CSS)
     ------------------------------------------------------------------ */
  function splitWords(el) {
    var words = [];
    function process(node, parent) {
      Array.prototype.slice.call(node.childNodes).forEach(function (child) {
        if (child.nodeType === 3) {
          var frag = document.createDocumentFragment();
          child.textContent.split(/(\s+)/).forEach(function (piece) {
            if (!piece) return;
            if (/^\s+$/.test(piece)) { frag.appendChild(document.createTextNode(" ")); return; }
            var span = document.createElement("span");
            span.className = "word";
            span.textContent = piece;
            frag.appendChild(span);
            words.push(span);
          });
          parent.replaceChild(frag, child);
        } else if (child.nodeType === 1 && child.tagName === "BR") {
          /* conservé tel quel */
        } else if (child.nodeType === 1 && child.tagName === "EM") {
          child.classList.add("word");
          words.push(child);
        }
      });
    }
    process(el, el);
    return words;
  }

  /* ------------------------------------------------------------------
     Dashboard : compteur + flux de leads
     ------------------------------------------------------------------ */
  var LEADS = [
    ["Rénovation énergétique", "Lyon"],
    ["Assurance santé", "Bordeaux"],
    ["Immobilier", "Nantes"],
    ["Finance & crédit", "Lille"],
    ["Télécom & énergie", "Toulouse"],
    ["Automobile", "Marseille"],
    ["Rénovation énergétique", "Strasbourg"],
    ["Immobilier", "Rennes"]
  ];

  function startDashboardLoop() {
    var feed = document.getElementById("dash-feed");
    var countEl = document.getElementById("dash-count");
    if (!feed || !countEl) return;
    var count = 247, idx = 3;

    setInterval(function () {
      count += 1;
      countEl.textContent = count;
      if (hasGsap) {
        gsap.fromTo(countEl.parentNode,
          { scale: 1.12, filter: "drop-shadow(0 0 26px rgba(255,107,53,.75))" },
          { scale: 1, filter: "drop-shadow(0 0 18px rgba(255,107,53,.35))", duration: .7, ease: "power3.out" });
      }

      var lead = LEADS[idx % LEADS.length]; idx++;
      var li = feed.lastElementChild;
      li.querySelector(".dash__lead-txt span").textContent = lead[0] + " — " + lead[1];
      feed.insertBefore(li, feed.firstElementChild);
      if (hasGsap) {
        gsap.from(li, { y: -14, opacity: 0, duration: .55, ease: "power3.out" });
        gsap.from(feed.children, { y: function (i) { return i === 0 ? 0 : -4; }, duration: .4, ease: "power2.out", clearProps: "y" });
      }
    }, 4500);
  }

  /* ------------------------------------------------------------------
     Sans GSAP ou avec motion réduite : page statique, tout visible
     ------------------------------------------------------------------ */
  if (reduceMotion || !hasGsap) {
    document.documentElement.classList.add("static");
    /* Compteurs à leur valeur finale */
    Array.prototype.forEach.call(document.querySelectorAll(".count"), function (el) {
      el.textContent = el.dataset.target;
    });
    if (!reduceMotion) startDashboardLoop();
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  /* ------------------------------------------------------------------
     Lenis — scroll inertiel
     ------------------------------------------------------------------ */
  var lenis = null;
  if (typeof window.Lenis !== "undefined") {
    lenis = new Lenis({ lerp: 0.1, wheelMultiplier: 1 });
    lenis.on("scroll", ScrollTrigger.update);
    gsap.ticker.add(function (time) { lenis.raf(time * 1000); });
    gsap.ticker.lagSmoothing(0);
  }

  /* ------------------------------------------------------------------
     Nav : état scrollé
     ------------------------------------------------------------------ */
  var nav = document.getElementById("nav");
  function updateNav() {
    nav.classList.toggle("is-scrolled", window.scrollY > 60);
  }
  window.addEventListener("scroll", updateNav, { passive: true });
  updateNav();

  /* ------------------------------------------------------------------
     Shaders
     ------------------------------------------------------------------ */
  var heroCanvas = document.getElementById("shader-hero");
  var ctaCanvas = document.getElementById("shader-cta");
  if (heroCanvas) SolarShader(heroCanvas, { mouse: finePointer, intensity: 1 });
  if (ctaCanvas) SolarShader(ctaCanvas, { mouse: false, intensity: 0.75 });

  /* ------------------------------------------------------------------
     Hero : reveal en cascade + parallax
     ------------------------------------------------------------------ */
  var heroTitleText = document.querySelector(".hero__title-text");
  var heroWords = splitWords(heroTitleText);

  var heroReveals = gsap.utils.toArray(".hero [data-reveal]");
  gsap.set(heroReveals, { opacity: 0, y: 26 });
  gsap.set(heroWords, { opacity: 0, y: "0.6em", rotate: 3, filter: "blur(14px)" });
  gsap.set("#dash-wrap", { opacity: 0, y: 70, rotateX: -14, scale: 0.94 });

  function heroIntro() {
    var tl = gsap.timeline({ defaults: { ease: "power4.out" } });
    tl.to(".hero .eyebrow", { opacity: 1, y: 0, duration: .8 }, 0.05)
      .to(heroWords, {
        opacity: 1, y: 0, rotate: 0, filter: "blur(0px)",
        duration: 1.1, stagger: 0.07,
        clearProps: "filter"
      }, 0.15)
      .to(".hero__sub", { opacity: 1, y: 0, duration: .9 }, 0.75)
      .to(".hero__cta", { opacity: 1, y: 0, duration: .9 }, 0.9)
      .to(".hero__badges", { opacity: 1, y: 0, duration: .9 }, 1.0)
      .to("#dash-wrap", {
        opacity: 1, y: 0, rotateX: 0, scale: 1,
        duration: 1.4, ease: "expo.out",
        onComplete: startDashChart
      }, 0.7);
  }

  var started = false;
  function startOnce() { if (!started) { started = true; heroIntro(); } }
  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(startOnce);
    setTimeout(startOnce, 1400);
  } else { startOnce(); }

  /* Parallax du hero au scroll */
  gsap.to(".hero__copy", {
    yPercent: -14, opacity: 0.25, filter: "blur(5px)", ease: "none",
    scrollTrigger: { trigger: ".hero", start: "top top", end: "bottom 30%", scrub: true }
  });
  gsap.to("#dash-wrap", {
    yPercent: 12, rotateX: 8, ease: "none",
    scrollTrigger: { trigger: ".hero", start: "top top", end: "bottom 30%", scrub: true }
  });
  gsap.to(".hero__scroll", {
    opacity: 0, ease: "none",
    scrollTrigger: { trigger: ".hero", start: "top top", end: "12% top", scrub: true }
  });

  /* ------------------------------------------------------------------
     Dashboard : dessin du graphique puis boucle
     ------------------------------------------------------------------ */
  function startDashChart() {
    var line = document.getElementById("chart-line");
    var area = document.getElementById("chart-area");
    var tip = document.getElementById("chart-tip");
    if (line) {
      var len = line.getTotalLength();
      gsap.set(line, { strokeDasharray: len, strokeDashoffset: len });
      gsap.set(area, { opacity: 0 });
      gsap.set(tip, { scale: 0, transformOrigin: "center" });
      gsap.timeline()
        .to(line, { strokeDashoffset: 0, duration: 2, ease: "power2.inOut" })
        .to(area, { opacity: 1, duration: .9, ease: "power2.out" }, "-=0.9")
        .to(tip, { scale: 1, duration: .5, ease: "back.out(3)" }, "-=0.3");
    }
    startDashboardLoop();
  }

  /* Tilt 3D + glare du dashboard (adapté de Tilt Card / 21st.dev) */
  var dash = document.getElementById("dash");
  if (dash && finePointer) {
    var dashWrap = document.getElementById("dash-wrap");
    var rx = gsap.quickTo(dash, "rotationX", { duration: .5, ease: "power3.out" });
    var ry = gsap.quickTo(dash, "rotationY", { duration: .5, ease: "power3.out" });
    dashWrap.addEventListener("pointermove", function (e) {
      var r = dash.getBoundingClientRect();
      var px = (e.clientX - r.left) / r.width;
      var py = (e.clientY - r.top) / r.height;
      rx((0.5 - py) * 16);
      ry((px - 0.5) * 18);
      dash.style.setProperty("--gx", (px * 100) + "%");
      dash.style.setProperty("--gy", (py * 100) + "%");
    });
    dashWrap.addEventListener("pointerleave", function () { rx(0); ry(0); });
  }

  /* ------------------------------------------------------------------
     Boutons magnétiques (pattern « Button Magnetic » 21st.dev)
     ------------------------------------------------------------------ */
  if (finePointer) {
    gsap.utils.toArray("[data-magnetic]").forEach(function (btn) {
      var label = btn.querySelector(".btn__label");
      var xTo = gsap.quickTo(btn, "x", { duration: .4, ease: "power3.out" });
      var yTo = gsap.quickTo(btn, "y", { duration: .4, ease: "power3.out" });
      var lx = label ? gsap.quickTo(label, "x", { duration: .4, ease: "power3.out" }) : null;
      var ly = label ? gsap.quickTo(label, "y", { duration: .4, ease: "power3.out" }) : null;

      btn.addEventListener("pointermove", function (e) {
        var r = btn.getBoundingClientRect();
        var dx = e.clientX - (r.left + r.width / 2);
        var dy = e.clientY - (r.top + r.height / 2);
        xTo(dx * 0.32); yTo(dy * 0.32);
        if (lx) { lx(dx * 0.12); ly(dy * 0.12); }
      });
      btn.addEventListener("pointerleave", function () {
        gsap.to(btn, { x: 0, y: 0, duration: .8, ease: "elastic.out(1,0.45)" });
        if (label) gsap.to(label, { x: 0, y: 0, duration: .8, ease: "elastic.out(1,0.45)" });
      });
    });
  }

  /* ------------------------------------------------------------------
     Tilt + spotlight des cartes (adapté de Tilt Card / 21st.dev)
     ------------------------------------------------------------------ */
  if (finePointer) {
    gsap.utils.toArray("[data-tilt]").forEach(function (card) {
      var spot = document.createElement("i");
      spot.className = "tilt-spot";
      spot.setAttribute("aria-hidden", "true");
      card.appendChild(spot);

      var rx = gsap.quickTo(card, "rotationX", { duration: .45, ease: "power3.out" });
      var ry = gsap.quickTo(card, "rotationY", { duration: .45, ease: "power3.out" });

      card.addEventListener("pointermove", function (e) {
        var r = card.getBoundingClientRect();
        var px = (e.clientX - r.left) / r.width;
        var py = (e.clientY - r.top) / r.height;
        gsap.set(card, { transformPerspective: 900 });
        rx((0.5 - py) * 12);
        ry((px - 0.5) * 14);
        card.style.setProperty("--sx", (px * 100) + "%");
        card.style.setProperty("--sy", (py * 100) + "%");
      });
      card.addEventListener("pointerleave", function () { rx(0); ry(0); });
    });
  }

  /* ------------------------------------------------------------------
     Ticker : vitesse indexée sur la vélocité du scroll + skew
     ------------------------------------------------------------------ */
  (function () {
    var track = document.getElementById("ticker-track");
    var pauseBtn = document.getElementById("ticker-pause");
    if (!track) return;
    var x = 0, paused = false, groupW = 0, skew = 0;

    function measure() { groupW = track.children[0].getBoundingClientRect().width; }
    measure();
    window.addEventListener("resize", measure);

    gsap.ticker.add(function (time, dt) {
      if (paused || !groupW) return;
      var vel = lenis ? Math.abs(lenis.velocity) : 0;
      var speed = 55 + Math.min(vel * 5, 420);
      x -= speed * (dt / 1000);
      if (x <= -groupW) x += groupW;
      var targetSkew = gsap.utils.clamp(-8, 8, (lenis ? lenis.velocity : 0) * 0.28);
      skew += (targetSkew - skew) * 0.1;
      track.style.transform = "translate3d(" + x + "px,0,0) skewX(" + skew + "deg)";
    });

    pauseBtn.addEventListener("click", function () {
      paused = !paused;
      pauseBtn.setAttribute("aria-pressed", String(paused));
      pauseBtn.setAttribute("aria-label", paused
        ? "Relancer le défilement des secteurs"
        : "Mettre en pause le défilement des secteurs");
    });
  })();

  /* ------------------------------------------------------------------
     Titres de section : cascade blur → net au scroll
     ------------------------------------------------------------------ */
  gsap.utils.toArray("[data-split]").forEach(function (title) {
    var words = splitWords(title);
    gsap.set(words, { opacity: 0, y: "0.55em", filter: "blur(9px)" });
    gsap.to(words, {
      opacity: 1, y: 0, filter: "blur(0px)",
      duration: .9, stagger: 0.05, ease: "power4.out",
      clearProps: "filter",
      scrollTrigger: { trigger: title, start: "top 86%", once: true }
    });
  });

  /* ------------------------------------------------------------------
     Reveals génériques + cartes (stagger, rotation, scale)
     ------------------------------------------------------------------ */
  gsap.utils.toArray("[data-reveal]").forEach(function (el) {
    if (el.closest(".hero")) return;
    gsap.set(el, { opacity: 0, y: 40 });
    gsap.to(el, {
      opacity: 1, y: 0, duration: 1, ease: "power4.out",
      scrollTrigger: { trigger: el, start: "top 88%", once: true }
    });
  });

  gsap.utils.toArray(".channels__grid, .stats__grid").forEach(function (grid) {
    var cards = Array.prototype.slice.call(grid.children);
    gsap.set(cards, { opacity: 0, y: 54, scale: 0.94, rotate: function (i) { return i % 2 ? 2.5 : -2.5; } });
    gsap.to(cards, {
      opacity: 1, y: 0, scale: 1, rotate: 0,
      duration: 1.05, stagger: 0.09, ease: "power4.out",
      scrollTrigger: { trigger: grid, start: "top 84%", once: true }
    });
  });

  /* ------------------------------------------------------------------
     Stats : count-up avec glow
     ------------------------------------------------------------------ */
  gsap.utils.toArray(".count").forEach(function (el) {
    var target = parseInt(el.dataset.target, 10);
    var obj = { v: 0 };
    ScrollTrigger.create({
      trigger: el, start: "top 85%", once: true,
      onEnter: function () {
        gsap.to(obj, {
          v: target, duration: 1.8, ease: "expo.out",
          onUpdate: function () { el.textContent = Math.round(obj.v); }
        });
        gsap.fromTo(el.closest(".stat__num"),
          { filter: "drop-shadow(0 4px 40px rgba(255,90,70,.65))" },
          { filter: "drop-shadow(0 4px 22px rgba(255,90,70,.25))", duration: 1.8, ease: "power2.out" });
      }
    });
  });

  /* ------------------------------------------------------------------
     Comment ça marche : section épinglée, ligne de progression
     ------------------------------------------------------------------ */
  var mm = gsap.matchMedia();
  mm.add("(min-width: 900px)", function () {
    var panels = gsap.utils.toArray(".process__panel");
    var milestones = gsap.utils.toArray(".process__milestones li");
    gsap.set(panels, { opacity: 0, y: 46, filter: "blur(6px)" });
    gsap.set(panels[0], { opacity: 1, y: 0, filter: "blur(0px)" });

    function activate(i) {
      milestones.forEach(function (li, j) { li.classList.toggle("is-active", j === i); });
      panels.forEach(function (p, j) { p.classList.toggle("is-active", j === i); });
    }
    activate(0);

    var tl = gsap.timeline({
      scrollTrigger: {
        trigger: "#process",
        start: "top top",
        end: "+=220%",
        pin: true,
        scrub: 0.6,
        onUpdate: function (self) {
          activate(Math.min(2, Math.floor(self.progress * 3)));
        }
      }
    });
    tl.to("#process-fill", { scaleY: 1, ease: "none", duration: 3 }, 0)
      .to(panels[0], { opacity: 0, y: -40, filter: "blur(6px)", duration: .45, ease: "power2.in" }, 0.78)
      .to(panels[1], { opacity: 1, y: 0, filter: "blur(0px)", duration: .5, ease: "power3.out" }, 1.05)
      .to(panels[1], { opacity: 0, y: -40, filter: "blur(6px)", duration: .45, ease: "power2.in" }, 1.78)
      .to(panels[2], { opacity: 1, y: 0, filter: "blur(0px)", duration: .5, ease: "power3.out" }, 2.05);

    return function () {
      gsap.set(panels, { clearProps: "all" });
    };
  });

  /* ------------------------------------------------------------------
     Secteurs : galerie horizontale épinglée
     ------------------------------------------------------------------ */
  mm.add("(min-width: 900px)", function () {
    var track = document.getElementById("sectors-track");
    var pinEl = document.getElementById("sectors-pin");
    if (!track || !pinEl) return;

    function distance() {
      return Math.max(0, track.scrollWidth - window.innerWidth + 40);
    }

    gsap.to(track, {
      x: function () { return -distance(); },
      ease: "none",
      scrollTrigger: {
        trigger: "#secteurs",
        start: "top top",
        end: function () { return "+=" + (distance() + window.innerHeight * 0.2); },
        pin: pinEl,
        scrub: 0.7,
        invalidateOnRefresh: true
      }
    });

    var cards = gsap.utils.toArray(".sector");
    gsap.set(cards, { opacity: 0, y: 60, rotate: function (i) { return i % 2 ? 2 : -2; } });
    gsap.to(cards, {
      opacity: 1, y: 0, rotate: 0, duration: 1, stagger: 0.1, ease: "power4.out",
      scrollTrigger: { trigger: "#secteurs", start: "top 65%", once: true }
    });

    return function () { gsap.set(cards, { clearProps: "all" }); };
  });

  mm.add("(max-width: 899px)", function () {
    var cards = gsap.utils.toArray(".sector");
    gsap.set(cards, { opacity: 0, y: 50 });
    cards.forEach(function (card) {
      gsap.to(card, {
        opacity: 1, y: 0, duration: .9, ease: "power4.out",
        scrollTrigger: { trigger: card, start: "top 88%", once: true }
      });
    });
    return function () { gsap.set(cards, { clearProps: "all" }); };
  });

  /* ------------------------------------------------------------------
     Pourquoi : lignes qui se dévoilent
     ------------------------------------------------------------------ */
  gsap.utils.toArray(".why__item").forEach(function (item, i) {
    gsap.fromTo(item.querySelector(".why__num"),
      { opacity: 0, x: -22, filter: "blur(4px)" },
      {
        opacity: 1, x: 0, filter: "blur(0px)", duration: .9, ease: "power3.out",
        scrollTrigger: { trigger: item, start: "top 86%", once: true }
      });
  });

  /* ------------------------------------------------------------------
     FAQ : ouverture animée des <details>
     ------------------------------------------------------------------ */
  gsap.utils.toArray(".faq__item").forEach(function (item) {
    var summary = item.querySelector("summary");
    var body = item.querySelector(".faq__body");
    summary.addEventListener("click", function (e) {
      e.preventDefault();
      if (item.open) {
        gsap.to(body, {
          height: 0, opacity: 0, duration: .4, ease: "power2.inOut",
          onComplete: function () { item.open = false; gsap.set(body, { clearProps: "all" }); }
        });
      } else {
        item.open = true;
        gsap.from(body, { height: 0, opacity: 0, duration: .5, ease: "power3.out", clearProps: "all" });
      }
    });
  });

  /* ------------------------------------------------------------------
     CTA final : zoom léger du fond
     ------------------------------------------------------------------ */
  gsap.fromTo("#shader-cta", { scale: 1.15 }, {
    scale: 1, ease: "none",
    scrollTrigger: { trigger: "#cta", start: "top bottom", end: "center center", scrub: true }
  });

})();
