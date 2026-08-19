<?php
/**
 * Template Name: Accueil Solar JJ
 *
 * Troisième direction : « Solar Flare ». Noir-violet velouté, dégradé
 * magenta→orange→doré réservé aux mots-clés, dashboard vivant dans le hero,
 * sections épinglées, objets 3D Three.js dans les cartes secteurs.
 * Comme les deux autres modèles, elle appelle wp_head() / wp_footer() :
 * Complianz, WP Statistics et Yoast continuent de fonctionner.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$jj_assets = get_stylesheet_directory_uri() . '/assets';
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'jj-solar' ); ?>>
<script>document.documentElement.classList.replace('no-js','js');</script>


<a class="skip-link" href="#contenu">Aller au contenu</a>

<!-- ============================== NAV ============================== -->
<header class="nav" id="nav">
  <div class="nav__inner glass">
    <a class="nav__logo" href="https://jj-computer.fr" aria-label="JJ-Computer.fr — accueil">
      JJ<span class="nav__logo-dot">.</span>Computer
    </a>
    <nav class="nav__links" aria-label="Navigation principale">
      <a href="https://jj-computer.fr/blog/">Blog</a>
      <a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Secteurs</a>
    </nav>
    <a class="btn btn--primary btn--sm" data-magnetic href="https://jj-computer.fr/contact/">
      <span class="btn__label">Recevoir des leads</span>
    </a>
  </div>
</header>

<main id="contenu">

<!-- ============================== HERO ============================== -->
<section class="hero" id="hero">
  <canvas class="hero__shader" id="shader-hero" aria-hidden="true"></canvas>
  <div class="hero__vignette" aria-hidden="true"></div>

  <div class="wrap hero__grid">
    <div class="hero__copy">
      <p class="eyebrow" data-reveal>
        <span class="eyebrow__dot" aria-hidden="true"></span>
        Achat leads qualifiés — Fournisseur exclusif France
      </p>

      <h1 class="hero__title" id="hero-title">
        <span class="hero__title-text">L'achat de leads qualifiés le plus <em>simple de France</em></span>
      </h1>

      <p class="hero__sub" data-reveal>
        Zéro campagne à gérer, zéro budget publicitaire à avancer. Nous générons,
        qualifions et vous livrons des prospects exclusifs, prêts à être contactés.
      </p>

      <div class="hero__cta" data-reveal>
        <a class="btn btn--primary" data-magnetic href="https://jj-computer.fr/contact/">
          <span class="btn__label">Recevoir des leads <span class="btn__arrow" aria-hidden="true">→</span></span>
        </a>
        <a class="btn btn--ghost" data-magnetic href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
          <span class="btn__label">Voir les secteurs</span>
        </a>
      </div>

      <ul class="hero__badges" data-reveal role="list">
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l7 3v6c0 5-3.1 8.6-7 11-3.9-2.4-7-6-7-11V5l7-3z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M8.8 12.2l2.2 2.2 4.2-4.6" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>Conforme RGPD</li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.6"/><path d="M12 7v5l3.2 2" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>Livraison sous 48h</li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 18l5-6 4 3 7-9" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 6h5v5" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>Volume scalable</li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="3.4" fill="none" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19.5c.9-3.4 3.4-5 6.5-5s5.6 1.6 6.5 5" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>Exclusivité disponible</li>
      </ul>
    </div>

    <!-- Dashboard flottant -->
    <div class="hero__dash-wrap" id="dash-wrap">
      <div class="dash glass" id="dash">
        <div class="dash__glare" aria-hidden="true"></div>
        <header class="dash__head">
          <span class="dash__dots" aria-hidden="true"><i></i><i></i><i></i></span>
          <span class="dash__title">Livraison temps réel</span>
          <span class="dash__live"><i aria-hidden="true"></i>En direct</span>
        </header>

        <div class="dash__counter">
          <strong><span id="dash-count">247</span></strong>
          <span>leads livrés cette semaine</span>
        </div>

        <figure class="dash__chart" aria-label="Courbe des leads livrés sur 7 jours, en progression">
          <svg viewBox="0 0 340 130" preserveAspectRatio="none" aria-hidden="true">
            <defs>
              <linearGradient id="area-fill" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0" stop-color="#4CC9F0" stop-opacity=".28"/>
                <stop offset="1" stop-color="#4CC9F0" stop-opacity="0"/>
              </linearGradient>
            </defs>
            <g class="dash__grid-lines">
              <line x1="0" y1="42" x2="340" y2="42"/>
              <line x1="0" y1="84" x2="340" y2="84"/>
            </g>
            <path id="chart-area" fill="url(#area-fill)"
              d="M0,108 C30,102 48,96 72,92 C100,87 118,90 144,80 C170,70 190,72 216,58 C242,44 262,50 288,34 C306,23 322,18 340,12 L340,130 L0,130 Z"/>
            <path id="chart-line" fill="none" stroke="#4CC9F0" stroke-width="2.5" stroke-linecap="round"
              d="M0,108 C30,102 48,96 72,92 C100,87 118,90 144,80 C170,70 190,72 216,58 C242,44 262,50 288,34 C306,23 322,18 340,12"/>
            <circle id="chart-tip" cx="340" cy="12" r="4" fill="#4CC9F0"/>
          </svg>
          <figcaption class="dash__chart-cap"><span class="dot dot--cyan" aria-hidden="true"></span>7 derniers jours</figcaption>
        </figure>

        <ul class="dash__feed" id="dash-feed" role="list" aria-live="off">
          <li class="dash__lead">
            <div class="dash__lead-txt"><strong>Nouveau lead</strong><span>Rénovation énergétique — Lyon</span></div>
            <span class="tag tag--mint"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>Qualifié</span>
          </li>
          <li class="dash__lead">
            <div class="dash__lead-txt"><strong>Nouveau lead</strong><span>Assurance santé — Bordeaux</span></div>
            <span class="tag tag--mint"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>Qualifié</span>
          </li>
          <li class="dash__lead">
            <div class="dash__lead-txt"><strong>Nouveau lead</strong><span>Immobilier — Nantes</span></div>
            <span class="tag tag--mint"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>Qualifié</span>
          </li>
        </ul>

        <footer class="dash__foot">
          <span class="dot dot--cyan" aria-hidden="true"></span>Webhook CRM — connecté
        </footer>
      </div>
    </div>
  </div>

  <p class="hero__scroll" aria-hidden="true">Défiler<span class="hero__scroll-line"></span></p>
</section>

<!-- ============================== TICKER ============================== -->
<div class="ticker" aria-label="Secteurs couverts">
  <button class="ticker__pause" id="ticker-pause" aria-pressed="false" aria-label="Mettre en pause le défilement des secteurs">
    <svg class="ic-pause" viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5.5v13M16 5.5v13" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg>
    <svg class="ic-play" viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5.5l11 6.5-11 6.5z" fill="currentColor"/></svg>
  </button>
  <div class="ticker__mask">
    <div class="ticker__track" id="ticker-track">
      <div class="ticker__group">
        <span>Rénovation énergétique</span><i aria-hidden="true"></i>
        <span>Immobilier</span><i aria-hidden="true"></i>
        <span>Assurance</span><i aria-hidden="true"></i>
        <span>Finance &amp; crédit</span><i aria-hidden="true"></i>
        <span>Télécom &amp; énergie</span><i aria-hidden="true"></i>
        <span>Automobile</span><i aria-hidden="true"></i>
        <span>BTP &amp; artisans</span><i aria-hidden="true"></i>
        <span>Formation</span><i aria-hidden="true"></i>
      </div>
      <div class="ticker__group" aria-hidden="true">
        <span>Rénovation énergétique</span><i></i>
        <span>Immobilier</span><i></i>
        <span>Assurance</span><i></i>
        <span>Finance &amp; crédit</span><i></i>
        <span>Télécom &amp; énergie</span><i></i>
        <span>Automobile</span><i></i>
        <span>BTP &amp; artisans</span><i></i>
        <span>Formation</span><i></i>
      </div>
    </div>
  </div>
</div>

<!-- ============================== STATS (respiration claire) ============================== -->
<section class="sec sec--light stats" id="stats" aria-labelledby="stats-title">
  <div class="wrap">
    <header class="sec__head">
      <p class="eyebrow eyebrow--dark"><span class="eyebrow__dot" aria-hidden="true"></span>01 — Les chiffres qui comptent</p>
      <h2 class="sec__title" id="stats-title" data-split>Une production continue,<br>mesurée <em>lead par lead</em></h2>
    </header>

    <div class="stats__grid">
      <article class="stat" data-reveal>
        <p class="stat__num stat__num--word">Des milliers</p>
        <p class="stat__label">de leads générés pour les partenaires en France</p>
      </article>
      <article class="stat" data-reveal>
        <p class="stat__num"><span class="count" data-target="48">48</span><span class="stat__unit">h</span></p>
        <p class="stat__label">délai moyen de réception</p>
      </article>
      <article class="stat" data-reveal>
        <p class="stat__num"><span class="count" data-target="6">6</span><span class="stat__unit">+</span></p>
        <p class="stat__label">secteurs couverts avec ciblage géographique précis</p>
      </article>
      <article class="stat" data-reveal>
        <p class="stat__num"><span class="count" data-target="100">100</span><span class="stat__unit">%</span></p>
        <p class="stat__label">conformes RGPD (consentement tracé et documenté)</p>
      </article>
    </div>
  </div>
</section>

<!-- ============================== COMMENT ÇA MARCHE (pinned) ============================== -->
<section class="sec process" id="process" aria-labelledby="process-title">
  <div class="wrap">
    <header class="sec__head">
      <p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>02 — Comment ça marche</p>
      <h2 class="sec__title" id="process-title" data-split>Trois étapes, de la campagne<br>jusqu'à <em>votre CRM</em></h2>
    </header>

    <div class="process__stage" id="process-stage">
      <div class="process__rail" aria-hidden="true">
        <span class="process__rail-line"><span class="process__rail-fill" id="process-fill"></span></span>
        <ol class="process__milestones">
          <li data-step="0"><b>01</b>Acquisition</li>
          <li data-step="1"><b>02</b>Qualification</li>
          <li data-step="2"><b>03</b>Livraison</li>
        </ol>
      </div>

      <div class="process__panels" id="process-panels">
        <article class="process__panel glass is-active">
          <p class="process__step">Étape 01</p>
          <h3>Acquisition multi-canal</h3>
          <p>Nous lançons et pilotons des campagnes Google&nbsp;Ads, Meta&nbsp;Ads et TikTok&nbsp;Ads qui captent
             des prospects en intention d'achat active. Les campagnes sont optimisées en continu.</p>
          <ul class="chips" role="list"><li>Google Ads</li><li>Meta Ads</li><li>TikTok Ads</li></ul>
        </article>
        <article class="process__panel glass">
          <p class="process__step">Étape 02</p>
          <h3>Qualification &amp; filtrage</h3>
          <p>Chaque prospect passe par un tunnel avec formulaire intelligent et des critères précis :
             zone, budget, besoin, délai. Seuls les prospects à forte intention vous sont transmis.</p>
          <ul class="chips" role="list"><li>Zone</li><li>Budget</li><li>Besoin</li><li>Délai</li></ul>
        </article>
        <article class="process__panel glass">
          <p class="process__step">Étape 03</p>
          <h3>Livraison en temps réel</h3>
          <p>Les leads vous sont envoyés par email, par fichier ou directement dans votre CRM via
             webhook/API. Vous pouvez rappeler le prospect dans les minutes qui suivent sa demande.</p>
          <ul class="chips" role="list"><li>Email</li><li>Fichier</li><li>Webhook / API</li></ul>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- ============================== BANDEAU CONFIANCE ============================== -->
<aside class="trust" aria-label="Conformité et diffusion">
  <div class="wrap trust__inner glass" data-reveal>
    <p>
      Nos campagnes et nos traitements respectent le
      <a href="https://www.cnil.fr/fr/rgpd-de-quoi-parle-t-on" rel="noopener" target="_blank">Règlement Général sur la Protection des Données (CNIL)</a>.
      Elles sont diffusées via
      <a href="https://www.facebook.com/business/ads" rel="noopener" target="_blank">Meta Business Ads</a> et
      <a href="https://ads.google.com" rel="noopener" target="_blank">Google Ads</a>.
    </p>
    <ul class="trust__tags" role="list">
      <li>Consentement tracé</li><li>Données documentées</li><li>Diffusion officielle</li>
    </ul>
  </div>
</aside>

<!-- ============================== SECTEURS (pinned horizontal + 3D) ============================== -->
<section class="sec sectors" id="secteurs" aria-labelledby="sectors-title">
  <canvas id="sectors-gl" aria-hidden="true"></canvas>
  <div class="sectors__pin" id="sectors-pin">
    <div class="wrap">
      <header class="sec__head">
        <p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>03 — Secteurs</p>
        <h2 class="sec__title" id="sectors-title" data-split>Six secteurs, un même<br><em>niveau d'exigence</em></h2>
        <p class="sec__lede">Chaque secteur a ses critères de qualification. Nous les calibrons avec vous avant la première livraison.</p>
      </header>
    </div>

    <div class="sectors__viewport">
      <div class="sectors__track" id="sectors-track">

        <a class="sector glass" data-tilt data-object="solar" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
          <span class="sector__idx">S / 01</span>
          <span class="sector__stage" data-gl-slot aria-hidden="true"></span>
          <h3>Rénovation énergétique</h3>
          <p>Panneaux solaires, isolation, pompes à chaleur. Les aides financières mobilisables sont identifiées en amont.</p>
          <span class="sector__link">Voir ce secteur <span aria-hidden="true">→</span></span>
        </a>

        <a class="sector glass" data-tilt data-object="house" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
          <span class="sector__idx">S / 02</span>
          <span class="sector__stage" data-gl-slot aria-hidden="true"></span>
          <h3>Immobilier</h3>
          <p>Leads vendeurs et acquéreurs, avec ciblage géographique à la maille de votre secteur d'activité.</p>
          <span class="sector__link">Voir ce secteur <span aria-hidden="true">→</span></span>
        </a>

        <a class="sector glass" data-tilt data-object="shield" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
          <span class="sector__idx">S / 03</span>
          <span class="sector__stage" data-gl-slot aria-hidden="true"></span>
          <h3>Assurance</h3>
          <p>Auto, santé, habitation. Des prospects vérifiés, qui ont exprimé un besoin de couverture réel.</p>
          <span class="sector__link">Voir ce secteur <span aria-hidden="true">→</span></span>
        </a>

        <a class="sector glass" data-tilt data-object="blocks" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
          <span class="sector__idx">S / 04</span>
          <span class="sector__stage" data-gl-slot aria-hidden="true"></span>
          <h3>Finance &amp; crédit</h3>
          <p>Crédit immobilier, regroupement de crédits, rachat de crédit. Dossiers cadrés dès la prise de contact.</p>
          <span class="sector__link">Voir ce secteur <span aria-hidden="true">→</span></span>
        </a>

        <a class="sector glass" data-tilt data-object="wave" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
          <span class="sector__idx">S / 05</span>
          <span class="sector__stage" data-gl-slot aria-hidden="true"></span>
          <h3>Télécom &amp; énergie</h3>
          <p>Prospects en démarche active de changement de fournisseur, box, mobile ou contrat d'énergie.</p>
          <span class="sector__link">Voir ce secteur <span aria-hidden="true">→</span></span>
        </a>

        <a class="sector glass" data-tilt data-object="flow" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
          <span class="sector__idx">S / 06</span>
          <span class="sector__stage" data-gl-slot aria-hidden="true"></span>
          <h3>Automobile</h3>
          <p>LOA, leasing, véhicules neufs et occasion. Le mode de financement souhaité est qualifié en amont.</p>
          <span class="sector__link">Voir ce secteur <span aria-hidden="true">→</span></span>
        </a>

      </div>
    </div>
  </div>
</section>

<!-- ============================== CANAUX (respiration claire) ============================== -->
<section class="sec sec--light channels" id="canaux" aria-labelledby="channels-title">
  <div class="wrap">
    <header class="sec__head">
      <p class="eyebrow eyebrow--dark"><span class="eyebrow__dot" aria-hidden="true"></span>04 — Nos canaux d'acquisition</p>
      <h2 class="sec__title" id="channels-title" data-split>Quatre sources<br><em>complémentaires</em></h2>
      <p class="sec__lede">Arbitrées selon votre secteur et votre coût par lead cible.</p>
    </header>

    <div class="channels__grid">
      <article class="channel" data-tilt data-reveal>
        <span class="channel__idx">01</span>
        <h3>Meta Ads</h3>
        <p>Facebook &amp; Instagram. Ciblage comportemental et lead forms natifs, pour un remplissage sans friction.</p>
      </article>
      <article class="channel" data-tilt data-reveal>
        <span class="channel__idx">02</span>
        <h3>Google Ads</h3>
        <p>Search intent : le prospect cherche déjà votre service au moment où il vous découvre.</p>
      </article>
      <article class="channel" data-tilt data-reveal>
        <span class="channel__idx">03</span>
        <h3>TikTok Ads</h3>
        <p>CPL compétitif, particulièrement efficace sur la formation, les services locaux et le BTC.</p>
      </article>
      <article class="channel" data-tilt data-reveal>
        <span class="channel__idx">04</span>
        <h3>Display &amp; Native</h3>
        <p>Taboola et réseaux natifs, en haut de funnel, pour alimenter le volume et tester de nouvelles audiences.</p>
      </article>
    </div>
  </div>
</section>

<!-- ============================== POURQUOI ============================== -->
<section class="sec why" id="pourquoi" aria-labelledby="why-title">
  <div class="wrap why__grid">
    <header class="sec__head why__head">
      <p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>05 — Pourquoi JJ-Computer</p>
      <h2 class="sec__title" id="why-title" data-split>Cinq engagements<br>écrits <em>avant</em> le démarrage</h2>
      <p class="sec__lede">Pas après le premier litige.</p>
    </header>

    <ol class="why__list" role="list">
      <li class="why__item" data-reveal>
        <span class="why__num">01</span>
        <div><h3>Des leads exclusifs</h3>
        <p>Un lead exclusif n'est jamais revendu à plusieurs acheteurs. Lorsque des leads partagés sont proposés,
           ils sont <strong>identifiés comme tels et tarifés différemment</strong>.</p></div>
      </li>
      <li class="why__item" data-reveal>
        <span class="why__num">02</span>
        <div><h3>Livraison en temps réel</h3>
        <p>Le lead arrive chez vous à la seconde où il est qualifié. Un rappel dans les
           <strong>30 minutes multiplie par 7 le taux de conversion</strong>.</p></div>
      </li>
      <li class="why__item" data-reveal>
        <span class="why__num">03</span>
        <div><h3>Ciblage géographique précis</h3>
        <p>Vous définissez votre périmètre d'intervention, nous le respectons.
           <strong>Aucun lead hors périmètre ne vous est facturé.</strong></p></div>
      </li>
      <li class="why__item" data-reveal>
        <span class="why__num">04</span>
        <div><h3>100% conforme RGPD</h3>
        <p>Consentement collecté, tracé et documenté pour chaque prospect. Un
           <strong>DPA est disponible sur demande</strong>.</p></div>
      </li>
      <li class="why__item" data-reveal>
        <span class="why__num">05</span>
        <div><h3>Politique de remplacement</h3>
        <p>Lead non joignable, numéro incorrect, doublon : les cas de remplacement et leurs
           <strong>règles sont définies en amont</strong>, avant le démarrage.</p></div>
      </li>
    </ol>
  </div>
</section>

<!-- ============================== FAQ ============================== -->
<section class="sec faq" id="faq" aria-labelledby="faq-title">
  <div class="wrap faq__grid">
    <header class="sec__head">
      <p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>06 — Questions fréquentes</p>
      <h2 class="sec__title" id="faq-title" data-split>Questions<br><em>fréquentes</em></h2>
      <p class="sec__lede">Une question qui n'est pas ici ? Écrivez-nous, réponse sous 24h.</p>
    </header>

    <div class="faq__list">
      <details class="faq__item glass" data-reveal>
        <summary><span>Vos leads sont-ils vraiment exclusifs ?</span><i class="faq__icon" aria-hidden="true"></i></summary>
        <div class="faq__body"><p>Oui, selon la formule choisie. En <strong>exclusif</strong>, le lead n'est transmis qu'à un seul
        acheteur : vous. En <strong>semi-exclusif</strong>, il est partagé entre 2 à 3 acheteurs maximum, ce qui permet un coût
        par lead plus bas. Le niveau d'exclusivité est toujours précisé en amont, avant le démarrage, et il n'évolue jamais
        en cours de contrat.</p></div>
      </details>
      <details class="faq__item glass" data-reveal>
        <summary><span>Quel délai pour recevoir mes premiers leads ?</span><i class="faq__icon" aria-hidden="true"></i></summary>
        <div class="faq__body"><p>En général 24 à 48 heures après validation de votre secteur, de votre zone géographique et de
        vos critères de qualification. Pour des volumes importants, nous construisons un plan de lancement personnalisé afin
        de monter en puissance progressivement, sans dégrader la qualité des prospects.</p></div>
      </details>
      <details class="faq__item glass" data-reveal>
        <summary><span>Comment je reçois les leads concrètement ?</span><i class="faq__icon" aria-hidden="true"></i></summary>
        <div class="faq__body"><p>En temps réel, au choix : par email dès qu'un prospect est qualifié, sous forme de fichier selon
        la fréquence qui vous convient, ou directement dans votre CRM via une intégration webhook/API. La plupart de nos
        partenaires combinent notification email et injection CRM.</p></div>
      </details>
      <details class="faq__item glass" data-reveal>
        <summary><span>Que se passe-t-il si un lead est invalide ?</span><i class="faq__icon" aria-hidden="true"></i></summary>
        <div class="faq__body"><p>Chaque offre inclut une politique de contrôle et de remplacement : lead non joignable après
        plusieurs tentatives, numéro incorrect, doublon. Les règles exactes, nombre de tentatives, délai de signalement et
        modalités de remplacement, sont définies avec vous avant le démarrage.</p></div>
      </details>
      <details class="faq__item glass" data-reveal>
        <summary><span>Puis-je cibler une ville ou un département précis ?</span><i class="faq__icon" aria-hidden="true"></i></summary>
        <div class="faq__body"><p>Oui. Le ciblage peut se faire à la ville, au code postal, au département ou à la région. Plus le
        périmètre est resserré, plus le volume disponible se réduit : nous arbitrons ensemble entre volume et précision pour
        trouver le bon équilibre.</p></div>
      </details>
      <details class="faq__item glass" data-reveal>
        <summary><span>Mon secteur est-il couvert ?</span><i class="faq__icon" aria-hidden="true"></i></summary>
        <div class="faq__body"><p>Nous couvrons aujourd'hui la rénovation énergétique, l'immobilier, l'assurance, la finance &amp;
        crédit, le télécom &amp; énergie et l'automobile. D'autres secteurs peuvent être développés sur demande : présentez-nous
        votre activité, nous vous dirons rapidement si nous pouvons produire du volume qualifié.</p></div>
      </details>
    </div>
  </div>
</section>

<!-- ============================== CTA FINAL ============================== -->
<section class="cta" id="cta" aria-labelledby="cta-title">
  <canvas class="cta__shader" id="shader-cta" aria-hidden="true"></canvas>
  <div class="wrap cta__inner">
    <p class="cta__meta" data-reveal>Prospects exclusifs · Livraison sous 48h · Conformes RGPD</p>
    <h2 class="cta__title" id="cta-title" data-split>Prêt à développer<br><em>votre activité ?</em></h2>
    <p class="cta__sub" data-reveal>Recevez vos premiers leads dès cette semaine.</p>
    <div class="cta__actions" data-reveal>
      <a class="btn btn--primary btn--xl" data-magnetic href="https://jj-computer.fr/contact/">
        <span class="btn__label">Demander un devis <span class="btn__arrow" aria-hidden="true">→</span></span>
      </a>
    </div>
    <p class="cta__note" data-reveal>Réponse sous 24h · Aucun engagement</p>
  </div>
</section>

</main>

<!-- ============================== FOOTER ============================== -->
<footer class="footer">
  <div class="wrap footer__grid">
    <div class="footer__brand">
      <p class="footer__logo">JJ<span>.</span>Computer</p>
      <p class="footer__desc">Fournisseur français de leads qualifiés exclusifs. Acquisition multi-canal,
         qualification stricte et livraison en temps réel, partout en France.</p>
      <a class="footer__mail" href="mailto:leads@jj-computer.fr">leads@jj-computer.fr</a>
    </div>
    <nav class="footer__col" aria-label="Navigation">
      <h3>Navigation</h3>
      <a href="https://jj-computer.fr">Accueil</a>
      <a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Secteurs</a>
      <a href="https://jj-computer.fr/blog/">Blog</a>
      <a href="https://jj-computer.fr/contact/">Contact</a>
    </nav>
    <nav class="footer__col" aria-label="Secteurs">
      <h3>Secteurs</h3>
      <a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Rénovation</a>
      <a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Immobilier</a>
      <a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Assurance</a>
      <a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Finance</a>
      <a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Automobile</a>
    </nav>
    <nav class="footer__col" aria-label="Ressources">
      <h3>Ressources</h3>
      <a href="https://jj-computer.fr/generation-de-leads-qualifies-en-2026-guide-complet-pour-developper-son-entreprise/">Guide leads 2026</a>
      <a href="https://jj-computer.fr/leads-qualifies-meta-ads-2026/">Meta Ads</a>
      <a href="https://jj-computer.fr/leads-qualifies-tiktok-ads-2026/">TikTok Ads</a>
      <a href="https://jj-computer.fr/generer-leads-qualifies-2026/">Générer des leads</a>
      <a href="https://jj-computer.fr/politique-de-confidentialite/">Confidentialité</a>
    </nav>
  </div>
  <div class="wrap footer__bar">
    <p>© 2026 JJ-Computer.fr — Tous droits réservés</p>
    <p class="footer__rgpd"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l7 3v6c0 5-3.1 8.6-7 11-3.9-2.4-7-6-7-11V5l7-3z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M8.8 12.2l2.2 2.2 4.2-4.6" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>Conforme RGPD</p>
  </div>
</footer>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Vos leads sont-ils vraiment exclusifs ?","acceptedAnswer":{"@type":"Answer","text":"Oui, selon la formule choisie. En exclusif, le lead n'est transmis qu'à un seul acheteur : vous. En semi-exclusif, il est partagé entre 2 à 3 acheteurs maximum, ce qui permet un coût par lead plus bas. Le niveau d'exclusivité est toujours précisé en amont, avant le démarrage, et il n'évolue jamais en cours de contrat."}},
    {"@type":"Question","name":"Quel délai pour recevoir mes premiers leads ?","acceptedAnswer":{"@type":"Answer","text":"En général 24 à 48 heures après validation de votre secteur, de votre zone géographique et de vos critères de qualification. Pour des volumes importants, nous construisons un plan de lancement personnalisé afin de monter en puissance progressivement, sans dégrader la qualité des prospects."}},
    {"@type":"Question","name":"Comment je reçois les leads concrètement ?","acceptedAnswer":{"@type":"Answer","text":"En temps réel, au choix : par email dès qu'un prospect est qualifié, sous forme de fichier selon la fréquence qui vous convient, ou directement dans votre CRM via une intégration webhook/API. La plupart de nos partenaires combinent notification email et injection CRM."}},
    {"@type":"Question","name":"Que se passe-t-il si un lead est invalide ?","acceptedAnswer":{"@type":"Answer","text":"Chaque offre inclut une politique de contrôle et de remplacement : lead non joignable après plusieurs tentatives, numéro incorrect, doublon. Les règles exactes, nombre de tentatives, délai de signalement et modalités de remplacement, sont définies avec vous avant le démarrage."}},
    {"@type":"Question","name":"Puis-je cibler une ville ou un département précis ?","acceptedAnswer":{"@type":"Answer","text":"Oui. Le ciblage peut se faire à la ville, au code postal, au département ou à la région. Plus le périmètre est resserré, plus le volume disponible se réduit : nous arbitrons ensemble entre volume et précision pour trouver le bon équilibre."}},
    {"@type":"Question","name":"Mon secteur est-il couvert ?","acceptedAnswer":{"@type":"Answer","text":"Nous couvrons aujourd'hui la rénovation énergétique, l'immobilier, l'assurance, la finance & crédit, le télécom & énergie et l'automobile. D'autres secteurs peuvent être développés sur demande : présentez-nous votre activité, nous vous dirons rapidement si nous pouvons produire du volume qualifié."}}
  ]
}
</script>

<script src="<?php echo esc_url( $jj_assets ); ?>/vendor/gsap.min.js"></script>
<script src="<?php echo esc_url( $jj_assets ); ?>/vendor/ScrollTrigger.min.js"></script>
<script src="<?php echo esc_url( $jj_assets ); ?>/vendor/lenis.min.js"></script>
<script>
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
</script>

<script type="importmap">
{ "imports": { "three": "<?php echo esc_url( $jj_assets ); ?>/vendor/three.module.min.js" } }
</script>
<script type="module">
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
    body: 0x171426,
    body2: 0x1e1930,
    magenta: 0xff2e63,
    orange: 0xff6b35,
    gold: 0xffc145,
    cyan: 0x4cc9f0,
    violet: 0x2a1840
  };

  function baseMaterial(extra) {
    return new THREE.MeshStandardMaterial(Object.assign({
      color: COLORS.body, metalness: 0.9, roughness: 0.3, flatShading: false
    }, extra || {}));
  }
  function edgeLines(geo, color, opacity) {
    return new THREE.LineSegments(
      new THREE.EdgesGeometry(geo, 12),
      new THREE.LineBasicMaterial({ color: color, transparent: true, opacity: opacity == null ? 0.5 : opacity })
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
        color: 0x0b0a14, emissive: COLORS.orange, emissiveIntensity: 0.55, roughness: 0.4
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
        color: COLORS.body2, metalness: 0.95, roughness: 0.2,
        emissive: COLORS.gold, emissiveIntensity: 0.35
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
          color: COLORS.body2, metalness: 0.9, roughness: 0.25,
          emissive: i === 1 ? COLORS.cyan : COLORS.orange,
          emissiveIntensity: 0.4 - i * 0.08
        }));
        t.rotation.x = Math.PI / 2.4;
        g.add(t);
      });
      const core = new THREE.Mesh(new THREE.SphereGeometry(0.22, 24, 24),
        new THREE.MeshStandardMaterial({
          color: 0x0b0a14, emissive: COLORS.cyan, emissiveIntensity: 1.1, roughness: 0.3
        }));
      g.add(core);
      return { group: g, spin: 0.45 };
    },

    /* Automobile : forme fluide (nœud torique) */
    flow() {
      const g = new THREE.Group();
      const knotGeo = new THREE.TorusKnotGeometry(0.82, 0.26, 150, 24);
      const knot = new THREE.Mesh(knotGeo, baseMaterial({
        color: COLORS.body2, metalness: 0.95, roughness: 0.18
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

    scene.add(new THREE.AmbientLight(COLORS.violet, 2.2));
    const key = new THREE.PointLight(COLORS.magenta, 2.4, 0, 0);
    key.position.set(-3, 2.2, 4);
    scene.add(key);
    const fill = new THREE.PointLight(COLORS.gold, 1.9, 0, 0);
    fill.position.set(3.2, -1, 3.2);
    scene.add(fill);
    const rim = new THREE.DirectionalLight(COLORS.cyan, 1.1);
    rim.position.set(0.5, 1.5, -3);
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
</script>

<?php wp_footer(); ?>
</body>
</html>
