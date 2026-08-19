/* ==========================================================================
   JJ-Computer.fr — Solar Flare : objets 3D des cartes secteurs
   Un seul contexte WebGL (rendu par ciseaux dans le rectangle de chaque
   carte), matériaux sombres métalliques, éclairage 3 points
   magenta / doré / cyan repris de la palette.
   ========================================================================== */
import * as THREE from "three";

const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches ||
  /[?&]static/.test(window.location.search);
const canvas = document.getElementById("sectors-gl");
const section = document.getElementById("secteurs");
if (!reduceMotion && canvas && section) init();

function init() {
  const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.75));
  renderer.setScissorTest(true);

  const COLORS = {
    body: 0x3a3258,
    body2: 0x453a68,
    magenta: 0xff2e63,
    orange: 0xff6b35,
    gold: 0xffc145,
    cyan: 0x4cc9f0,
    violet: 0x2a1840
  };

  /* Sans environment map, un matériau très métallique rend presque noir :
     on reste sur un métal modéré, plus clair, qui accroche les lumières. */
  function baseMaterial(extra) {
    return new THREE.MeshStandardMaterial(Object.assign({
      color: COLORS.body, metalness: 0.5, roughness: 0.35, flatShading: false
    }, extra || {}));
  }
  function edgeLines(geo, color, opacity) {
    return new THREE.LineSegments(
      new THREE.EdgesGeometry(geo, 12),
      new THREE.LineBasicMaterial({ color: color, transparent: true, opacity: opacity == null ? 0.75 : opacity })
    );
  }

  /* ---------- Les six objets ---------- */
  const builders = {

    /* Panneau solaire : plaque inclinée + grille de cellules + pied */
    solar() {
      const g = new THREE.Group();
      const panelGeo = new THREE.BoxGeometry(2.3, 1.5, 0.09);
      const panel = new THREE.Mesh(panelGeo, baseMaterial({ roughness: 0.22 }));
      panel.add(edgeLines(panelGeo, COLORS.orange, 0.65));

      /* cellules */
      const grid = new THREE.Group();
      const pts = [];
      for (let i = 1; i < 4; i++) pts.push(-1.15, -0.75 + i * 0.5, 0.055, 1.15, -0.75 + i * 0.5, 0.055);
      for (let i = 1; i < 6; i++) pts.push(-1.15 + i * (2.3 / 6), -0.75, 0.055, -1.15 + i * (2.3 / 6), 0.75, 0.055);
      const gridGeo = new THREE.BufferGeometry();
      gridGeo.setAttribute("position", new THREE.Float32BufferAttribute(pts, 3));
      grid.add(new THREE.LineSegments(gridGeo,
        new THREE.LineBasicMaterial({ color: COLORS.gold, transparent: true, opacity: 0.4 })));
      panel.add(grid);
      panel.rotation.x = -0.5;
      panel.position.y = 0.25;
      g.add(panel);

      const legGeo = new THREE.CylinderGeometry(0.05, 0.07, 1.0, 12);
      const leg = new THREE.Mesh(legGeo, baseMaterial({ color: COLORS.body2 }));
      leg.position.y = -0.55;
      g.add(leg);
      return { group: g, spin: 0.35 };
    },

    /* Maison géométrique : volume + toit pyramidal */
    house() {
      const g = new THREE.Group();
      const bodyGeo = new THREE.BoxGeometry(1.5, 1.05, 1.5);
      const body = new THREE.Mesh(bodyGeo, baseMaterial());
      body.add(edgeLines(bodyGeo, COLORS.orange, 0.55));
      body.position.y = -0.35;
      g.add(body);

      const roofGeo = new THREE.ConeGeometry(1.28, 0.95, 4);
      const roof = new THREE.Mesh(roofGeo, baseMaterial({
        color: COLORS.body2, roughness: 0.25, flatShading: true
      }));
      roof.rotation.y = Math.PI / 4;
      roof.position.y = 0.66;
      roof.add(edgeLines(roofGeo, COLORS.gold, 0.6));
      g.add(roof);

      const doorGeo = new THREE.BoxGeometry(0.34, 0.55, 0.05);
      const door = new THREE.Mesh(doorGeo, new THREE.MeshStandardMaterial({
        color: 0x0b0a14, emissive: COLORS.orange, emissiveIntensity: 0.9, roughness: 0.4
      }));
      door.position.set(0, -0.6, 0.78);
      g.add(door);
      return { group: g, spin: 0.4 };
    },

    /* Bouclier : sphère facettée + anneau orbital */
    shield() {
      const g = new THREE.Group();
      const coreGeo = new THREE.IcosahedronGeometry(0.95, 1);
      const core = new THREE.Mesh(coreGeo, baseMaterial({ flatShading: true, roughness: 0.28 }));
      core.add(edgeLines(coreGeo, COLORS.magenta, 0.45));
      g.add(core);

      const ringGeo = new THREE.TorusGeometry(1.4, 0.035, 12, 90);
      const ring = new THREE.Mesh(ringGeo, new THREE.MeshStandardMaterial({
        color: COLORS.body2, metalness: 0.7, roughness: 0.25,
        emissive: COLORS.gold, emissiveIntensity: 0.55
      }));
      ring.rotation.x = 1.1;
      g.add(ring);
      return { group: g, spin: 0.5, ring };
    },

    /* Finance : blocs empilés en décalage */
    blocks() {
      const g = new THREE.Group();
      const dims = [[1.9, 0.42, 1.25], [1.55, 0.42, 1.05], [1.2, 0.42, 0.85]];
      dims.forEach(function (d, i) {
        const geo = new THREE.BoxGeometry(d[0], d[1], d[2]);
        const m = new THREE.Mesh(geo, baseMaterial({ color: i === 2 ? COLORS.body2 : COLORS.body }));
        m.add(edgeLines(geo, i === 2 ? COLORS.gold : COLORS.orange, 0.55));
        m.position.y = -0.55 + i * 0.55;
        m.rotation.y = (i - 1) * 0.28;
        g.add(m);
      });
      return { group: g, spin: 0.38 };
    },

    /* Télécom : ondes concentriques + noyau */
    wave() {
      const g = new THREE.Group();
      const radii = [0.55, 0.95, 1.35];
      radii.forEach(function (r, i) {
        const torusGeo = new THREE.TorusGeometry(r, 0.035, 10, 80);
        const t = new THREE.Mesh(torusGeo, new THREE.MeshStandardMaterial({
          color: COLORS.body2, metalness: 0.6, roughness: 0.3,
          emissive: i === 1 ? COLORS.cyan : COLORS.orange,
          emissiveIntensity: 0.65 - i * 0.1
        }));
        t.rotation.x = Math.PI / 3.6;
        g.add(t);
      });
      const core = new THREE.Mesh(new THREE.SphereGeometry(0.22, 24, 24),
        new THREE.MeshStandardMaterial({
          color: 0x0b0a14, emissive: COLORS.cyan, emissiveIntensity: 1.5, roughness: 0.3
        }));
      g.add(core);
      return { group: g, spin: 0.45 };
    },

    /* Automobile : forme fluide (nœud torique) */
    flow() {
      const g = new THREE.Group();
      const knotGeo = new THREE.TorusKnotGeometry(0.82, 0.26, 150, 24);
      const knot = new THREE.Mesh(knotGeo, baseMaterial({
        color: COLORS.body2, metalness: 0.6, roughness: 0.25
      }));
      g.add(knot);
      return { group: g, spin: 0.55 };
    }
  };

  /* ---------- Une scène par carte ---------- */
  const cards = Array.prototype.slice.call(document.querySelectorAll(".sector"));
  const views = cards.map(function (card, i) {
    const slot = card.querySelector("[data-gl-slot]");
    const type = card.dataset.object;
    const scene = new THREE.Scene();

    scene.add(new THREE.AmbientLight(0x8a7ab8, 1.6));
    scene.add(new THREE.HemisphereLight(COLORS.gold, COLORS.violet, 1.3));
    const key = new THREE.PointLight(COLORS.magenta, 4.2, 0, 0);
    key.position.set(-3, 2.2, 4);
    scene.add(key);
    const fill = new THREE.PointLight(COLORS.gold, 3.2, 0, 0);
    fill.position.set(3.2, -1, 3.2);
    scene.add(fill);
    /* Rim chaud : détache les contours du fond sombre avec le dégradé signature. */
    const rimWarm = new THREE.DirectionalLight(COLORS.orange, 2.6);
    rimWarm.position.set(-1.5, 2.5, -3.5);
    scene.add(rimWarm);
    const rim = new THREE.DirectionalLight(COLORS.cyan, 1.5);
    rim.position.set(1.5, 0.5, -3);
    scene.add(rim);

    const built = (builders[type] || builders.flow)();
    built.group.scale.setScalar(0.92);
    scene.add(built.group);

    const camera = new THREE.PerspectiveCamera(34, 2, 0.1, 30);
    camera.position.set(0, 0.15, 5.4);
    camera.lookAt(0, 0, 0);

    const state = { hover: 0, hoverTarget: 0 };
    card.addEventListener("pointerenter", function () { state.hoverTarget = 1; });
    card.addEventListener("pointerleave", function () { state.hoverTarget = 0; });

    return { slot: slot, scene: scene, camera: camera, obj: built.group, spin: built.spin, ring: built.ring, state: state, seed: i * 1.7 };
  });

  /* ---------- Boucle de rendu par ciseaux ---------- */
  let visible = false;
  new IntersectionObserver(function (entries) {
    visible = entries[0].isIntersecting;
    canvas.classList.toggle("is-on", visible);
  }, { rootMargin: "60px" }).observe(section);

  function resize() {
    const w = window.innerWidth, h = window.innerHeight;
    if (canvas.width !== w || canvas.height !== h) renderer.setSize(w, h, false);
  }
  window.addEventListener("resize", resize);
  resize();

  const clock = new THREE.Clock();
  function frame() {
    requestAnimationFrame(frame);
    if (!visible) return;
    resize();
    const dt = Math.min(clock.getDelta(), 0.05);
    const t = clock.elapsedTime;
    const H = renderer.domElement.height / renderer.getPixelRatio();

    renderer.setClearColor(0x000000, 0);
    renderer.setScissorTest(false);
    renderer.clear();
    renderer.setScissorTest(true);
    views.forEach(function (v) {
      const r = v.slot.getBoundingClientRect();
      if (r.width === 0 || r.bottom < 0 || r.top > window.innerHeight || r.right < 0 || r.left > window.innerWidth) return;

      v.state.hover += (v.state.hoverTarget - v.state.hover) * 0.08;
      const boost = 1 + v.state.hover * 2.4;
      v.obj.rotation.y += dt * v.spin * boost;
      v.obj.rotation.x = 0.14 + Math.sin(t * 0.5 + v.seed) * 0.1 + v.state.hover * 0.12;
      v.obj.position.y = Math.sin(t * 0.8 + v.seed) * 0.08;
      const s = 0.92 + v.state.hover * 0.07;
      v.obj.scale.setScalar(s);
      if (v.ring) v.ring.rotation.z += dt * 0.6 * boost;

      v.camera.aspect = r.width / r.height;
      v.camera.updateProjectionMatrix();

      const x = r.left, y = H - r.bottom;
      renderer.setViewport(x, y, r.width, r.height);
      renderer.setScissor(x, y, r.width, r.height);
      renderer.render(v.scene, v.camera);
    });
  }
  frame();
}
