<?php
/**
 * Template Name: Accueil Apple JJ
 *
 * Seconde direction : blanc et gris clair, typographie Apple, hero avec
 * tableau de bord flottant et objets 3D dans la section secteurs.
 * Comme l'autre modèle, elle appelle wp_head() / wp_footer() : Complianz,
 * WP Statistics et Yoast continuent de fonctionner.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$jj_assets = get_stylesheet_directory_uri() . '/assets';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'jj-apple' ); ?>>
<script>document.documentElement.classList.add('js');</script>
<a class="skip" href="#main">Aller au contenu</a>

<!-- ============================ NAV ============================ -->
<header class="nav" id="nav">
  <div class="wrap wrap--wide nav-in">
    <a class="brand" href="https://jj-computer.fr" aria-label="JJ.Computer, accueil">
      <span class="dot" aria-hidden="true"></span><span>JJ.Computer</span>
    </a>
    <nav class="nav-links" aria-label="Navigation principale">
      <a href="https://jj-computer.fr/blog/">Blog</a>
      <a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Secteurs</a>
      <a class="btn" href="https://jj-computer.fr/contact/">Recevoir des leads</a>
    </nav>
    <button class="burger" id="burger" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mobile-menu">
      <span aria-hidden="true"></span>
    </button>
  </div>
</header>

<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
  <a href="https://jj-computer.fr/blog/">Blog</a>
  <a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Secteurs</a>
  <a class="btn" href="https://jj-computer.fr/contact/">Recevoir des leads</a>
</div>

<main id="main">

<!-- ============================ HERO ============================ -->
<section class="hero" id="hero">
  <div class="wrap wrap--wide">
    <p class="eyebrow hero-eyebrow" data-hero>Achat leads qualifiés — Fournisseur exclusif France</p>

    <h1 id="hero-title">
      <span class="lite">L'achat de leads qualifiés</span><br>
      le plus simple de France
    </h1>

    <p class="lede hero-lede" data-hero>
      Zéro campagne à gérer, zéro budget publicitaire à avancer. Nous générons, qualifions
      et vous livrons des prospects exclusifs, prêts à être contactés.
    </p>

    <div class="hero-cta" data-hero>
      <a class="btn" href="https://jj-computer.fr/contact/">Recevoir des leads <span aria-hidden="true">&rarr;</span></a>
      <a class="btn btn--ghost" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Voir les secteurs</a>
    </div>

    <ul class="hero-badges" data-hero>
      <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true"><path d="M12 3l7 3v5.5c0 4.5-3 8.2-7 9.5-4-1.3-7-5-7-9.5V6l7-3z"/></svg>Conforme RGPD</li>
      <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true"><circle cx="12" cy="12" r="8.5"/><path d="M12 7v5l3.5 2"/></svg>Livraison sous 48h</li>
      <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true"><path d="M4 19V9m5 10V5m5 14v-7m5 7V8"/></svg>Volume scalable</li>
      <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true"><path d="M12 3.5l2.6 5.6 6 .8-4.4 4.2 1.1 6-5.3-3-5.3 3 1.1-6L3.4 9.9l6-.8L12 3.5z"/></svg>Exclusivité disponible</li>
    </ul>

    <!-- panneau flottant -->
    <div class="stage" id="stage">
      <div class="panel" id="panel" role="img"
           aria-label="Aperçu du tableau de bord : 247 leads livrés cette semaine, courbe de progression et derniers leads reçus.">
        <div class="panel-top">
          <div>
            <div class="panel-count"><span id="count">0</span> leads</div>
            <div class="panel-label">livrés cette semaine</div>
          </div>
          <span class="live"><span class="live-dot" aria-hidden="true"></span>En direct</span>
        </div>

        <svg class="chart" viewBox="0 0 520 130" preserveAspectRatio="none" aria-hidden="true">
          <defs>
            <linearGradient id="jjFade" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%" stop-color="#0071e3" stop-opacity=".16"/>
              <stop offset="100%" stop-color="#0071e3" stop-opacity="0"/>
            </linearGradient>
          </defs>
          <line class="base" x1="0" y1="129" x2="520" y2="129"/>
          <path class="area" id="chartArea" d="M0,112 L43,104 L87,108 L130,93 L173,85 L217,89 L260,72 L303,61 L347,64 L390,47 L433,38 L477,42 L520,20 L520,130 L0,130 Z"/>
          <path class="line" id="chartLine" d="M0,112 L43,104 L87,108 L130,93 L173,85 L217,89 L260,72 L303,61 L347,64 L390,47 L433,38 L477,42 L520,20"/>
          <circle class="tip" id="chartTip" cx="520" cy="20" r="4"/>
        </svg>

        <ul class="feed" id="feed" aria-hidden="true">
          <li class="feed-item"><span class="feed-dot"></span><span class="feed-txt"></span><span class="feed-time"></span></li>
          <li class="feed-item"><span class="feed-dot"></span><span class="feed-txt"></span><span class="feed-time"></span></li>
          <li class="feed-item"><span class="feed-dot"></span><span class="feed-txt"></span><span class="feed-time"></span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============================ TICKER ============================ -->
<div class="ticker ticker-mask" aria-label="Secteurs couverts">
  <p class="ticker-head">Les secteurs sur lesquels nous produisons du volume</p>
  <div class="ticker-track" id="ticker">
    <div style="display:flex">
      <span class="ticker-item">Rénovation énergétique</span><span class="ticker-item">Immobilier</span><span class="ticker-item">Assurance</span><span class="ticker-item">Finance &amp; crédit</span><span class="ticker-item">Télécom &amp; énergie</span><span class="ticker-item">Automobile</span><span class="ticker-item">BTP &amp; artisans</span><span class="ticker-item">Formation</span>
    </div>
    <div style="display:flex" aria-hidden="true">
      <span class="ticker-item">Rénovation énergétique</span><span class="ticker-item">Immobilier</span><span class="ticker-item">Assurance</span><span class="ticker-item">Finance &amp; crédit</span><span class="ticker-item">Télécom &amp; énergie</span><span class="ticker-item">Automobile</span><span class="ticker-item">BTP &amp; artisans</span><span class="ticker-item">Formation</span>
    </div>
  </div>
</div>

<!-- ============================ STATS ============================ -->
<section class="stats" id="chiffres" aria-label="Les chiffres qui comptent">
  <div class="stats-view" id="statsView">
    <article class="stat">
      <p class="k word">Des milliers</p>
      <p class="l">de leads générés pour les partenaires en France</p>
    </article>
    <article class="stat">
      <p class="k"><span data-count="48">0</span><span class="unit">h</span></p>
      <p class="l">délai moyen de réception</p>
    </article>
    <article class="stat">
      <p class="k"><span data-count="6">0</span><span class="unit">+</span></p>
      <p class="l">secteurs couverts avec ciblage géographique précis</p>
    </article>
    <article class="stat">
      <p class="k"><span data-count="100">0</span><span class="unit">%</span></p>
      <p class="l">conformes RGPD, consentement tracé et documenté</p>
    </article>
    <div class="stats-progress" id="statsProgress" aria-hidden="true">
      <i><b></b></i><i><b></b></i><i><b></b></i><i><b></b></i>
    </div>
  </div>
</section>

<!-- ============================ ÉTAPES (PIN) ============================ -->
<section class="steps" id="methode">
  <div class="screen">
    <div class="wrap steps-in">
      <div class="steps-visual" aria-hidden="true">
        <svg viewBox="0 0 400 400">
          <circle class="sv-ring" cx="200" cy="200" r="150"/>
          <circle class="sv-ring" cx="200" cy="200" r="104"/>
          <path class="sv-arc" id="svArc" d="M200,50 A150,150 0 0,1 200,350 A150,150 0 0,1 200,50"/>
          <circle class="sv-core" cx="200" cy="200" r="5"/>
          <circle class="sv-pulse" id="svPulse" cx="200" cy="200" r="26"/>
          <g id="svNodes">
            <circle class="sv-node" cx="200" cy="50" r="14"/>
            <circle class="sv-node" cx="330" cy="275" r="14"/>
            <circle class="sv-node" cx="70" cy="275" r="14"/>
          </g>
          <text class="sv-label" x="200" y="24" text-anchor="middle">ACQUISITION</text>
          <text class="sv-label" x="330" y="312" text-anchor="middle">LIVRAISON</text>
          <text class="sv-label" x="70" y="312" text-anchor="middle">QUALIFICATION</text>
        </svg>
      </div>

      <div class="steps-texts" id="stepsTexts">
        <article class="step">
          <p class="num">Étape 01</p>
          <h3>Acquisition multi-canal</h3>
          <p>Nous lançons et pilotons des campagnes Google Ads, Meta Ads et TikTok Ads qui captent des prospects en intention d'achat active. Les campagnes sont optimisées en continu.</p>
          <div class="tags"><span>Google Ads</span><span>Meta Ads</span><span>TikTok Ads</span></div>
        </article>
        <article class="step">
          <p class="num">Étape 02</p>
          <h3>Qualification &amp; filtrage</h3>
          <p>Chaque prospect passe par un tunnel avec formulaire intelligent et des critères précis : zone, budget, besoin, délai. Seuls les prospects à forte intention vous sont transmis.</p>
          <div class="tags"><span>Zone</span><span>Budget</span><span>Besoin</span><span>Délai</span></div>
        </article>
        <article class="step">
          <p class="num">Étape 03</p>
          <h3>Livraison en temps réel</h3>
          <p>Les leads vous sont envoyés par email, par fichier ou directement dans votre CRM via webhook/API. Vous pouvez rappeler le prospect dans les minutes qui suivent sa demande.</p>
          <div class="tags"><span>Email</span><span>Fichier</span><span>Webhook / API</span></div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- ============================ BANDEAU CONFIANCE ============================ -->
<section class="screen trust">
  <div class="wrap">
    <p data-rise>
      Nos campagnes respectent le
      <a href="https://www.cnil.fr/fr/rgpd-de-quoi-parle-t-on" target="_blank" rel="noopener noreferrer">Règlement Général sur la Protection des Données (CNIL)</a>,
      et sont diffusées via
      <a href="https://www.facebook.com/business/ads" target="_blank" rel="noopener noreferrer">Meta Business Ads</a>
      et <a href="https://ads.google.com" target="_blank" rel="noopener noreferrer">Google Ads</a>.
    </p>
    <p class="fine" data-rise>Consentement tracé · Données documentées · Diffusion officielle</p>
  </div>
</section>

<!-- ============================ SECTEURS (PIN HORIZONTAL) ============================ -->
<section class="sectors" id="secteurs">
  <div class="sectors-head">
    <h2 class="h-section wide" data-rise>Six secteurs. Un même niveau d'exigence.</h2>
  </div>
  <div class="rail" id="rail">
    <article class="sector">
      <div>
        <p class="idx">Secteur 01</p>
        <h3>Rénovation énergétique</h3>
        <p>Panneaux solaires, isolation, pompes à chaleur. Les aides financières mobilisables sont identifiées en amont.</p>
        <a class="link" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Voir ce secteur <span class="chev" aria-hidden="true">&rsaquo;</span></a>
      </div>
      <div class="sector-art" aria-hidden="true">
        <svg viewBox="0 0 200 200"><path class="st" d="M40 150h120M55 150l18-70h54l18 70"/><path class="st" d="M68 105h64M62 128h76"/><path class="ac" d="M100 20v22M74 32l10 16M126 32l-10 16M56 58h20M144 58h-20"/><circle class="ac" cx="100" cy="62" r="12"/></svg>
      </div>
    </article>

    <article class="sector">
      <div>
        <p class="idx">Secteur 02</p>
        <h3>Immobilier</h3>
        <p>Leads vendeurs et acquéreurs, avec ciblage géographique à la maille de votre secteur d'activité.</p>
        <a class="link" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Voir ce secteur <span class="chev" aria-hidden="true">&rsaquo;</span></a>
      </div>
      <div class="sector-art" aria-hidden="true">
        <svg viewBox="0 0 200 200"><path class="st" d="M40 100l60-46 60 46v58H40z"/><path class="st" d="M86 158v-36h28v36"/><path class="ac" d="M100 30v14M136 74v-22h-14"/><circle class="ac" cx="100" cy="88" r="9"/></svg>
      </div>
    </article>

    <article class="sector">
      <div>
        <p class="idx">Secteur 03</p>
        <h3>Assurance</h3>
        <p>Auto, santé, habitation. Des prospects vérifiés, qui ont exprimé un besoin de couverture réel.</p>
        <a class="link" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Voir ce secteur <span class="chev" aria-hidden="true">&rsaquo;</span></a>
      </div>
      <div class="sector-art" aria-hidden="true">
        <svg viewBox="0 0 200 200"><path class="st" d="M100 34l52 22v44c0 34-22 60-52 70-30-10-52-36-52-70V56z"/><path class="ac" d="M80 104l14 15 28-31"/></svg>
      </div>
    </article>

    <article class="sector">
      <div>
        <p class="idx">Secteur 04</p>
        <h3>Finance &amp; crédit</h3>
        <p>Crédit immobilier, regroupement de crédits, rachat de crédit. Dossiers cadrés dès la prise de contact.</p>
        <a class="link" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Voir ce secteur <span class="chev" aria-hidden="true">&rsaquo;</span></a>
      </div>
      <div class="sector-art" aria-hidden="true">
        <svg viewBox="0 0 200 200"><path class="st" d="M44 152h112M44 152V92l56-38 56 38v60"/><path class="st" d="M74 152v-38M100 152v-38M126 152v-38"/><path class="ac" d="M84 74h32M78 62h38"/></svg>
      </div>
    </article>

    <article class="sector">
      <div>
        <p class="idx">Secteur 05</p>
        <h3>Télécom &amp; énergie</h3>
        <p>Prospects en démarche active de changement de fournisseur, box, mobile ou contrat d'énergie.</p>
        <a class="link" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Voir ce secteur <span class="chev" aria-hidden="true">&rsaquo;</span></a>
      </div>
      <div class="sector-art" aria-hidden="true">
        <svg viewBox="0 0 200 200"><path class="st" d="M62 150V70a12 12 0 0 1 12-12h52a12 12 0 0 1 12 12v80z"/><path class="st" d="M62 150h76"/><path class="ac" d="M104 76l-16 34h24l-16 34"/></svg>
      </div>
    </article>

    <article class="sector">
      <div>
        <p class="idx">Secteur 06</p>
        <h3>Automobile</h3>
        <p>LOA, leasing, véhicules neufs et occasion. Le mode de financement souhaité est qualifié en amont.</p>
        <a class="link" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Voir ce secteur <span class="chev" aria-hidden="true">&rsaquo;</span></a>
      </div>
      <div class="sector-art" aria-hidden="true">
        <svg viewBox="0 0 200 200"><path class="st" d="M38 122h124M46 122l12-34a14 14 0 0 1 13-9h58a14 14 0 0 1 13 9l12 34v22h-14M60 144H46v-22"/><circle class="st" cx="70" cy="144" r="12"/><circle class="st" cx="130" cy="144" r="12"/><path class="ac" d="M70 88h60"/></svg>
      </div>
    </article>
  </div>
</section>

<!-- ============================ CANAUX ============================ -->
<section class="screen channels" id="canaux">
  <div class="wrap">
    <h2 class="h-section" data-rise>Quatre canaux. Une seule exigence de qualité.</h2>
    <p class="lede" data-rise style="margin-top:1.5rem">Nous arbitrons entre eux selon votre secteur et votre coût par lead cible.</p>

    <div style="margin-top:clamp(2.5rem,6vh,4rem)">
      <article class="channel" data-rise>
        <p class="n">01</p>
        <div>
          <h3>Meta Ads</h3>
          <p>Facebook &amp; Instagram. Ciblage comportemental et lead forms natifs, pour un remplissage sans friction.</p>
        </div>
      </article>
      <article class="channel" data-rise>
        <p class="n">02</p>
        <div>
          <h3>Google Ads</h3>
          <p>Search intent : le prospect cherche déjà votre service au moment où il vous découvre.</p>
        </div>
      </article>
      <article class="channel" data-rise>
        <p class="n">03</p>
        <div>
          <h3>TikTok Ads</h3>
          <p>CPL compétitif, particulièrement efficace sur la formation, les services locaux et le BTC.</p>
        </div>
      </article>
      <article class="channel" data-rise>
        <p class="n">04</p>
        <div>
          <h3>Display &amp; Native</h3>
          <p>Taboola et réseaux natifs, en haut de funnel, pour alimenter le volume et tester de nouvelles audiences.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ============================ POURQUOI ============================ -->
<section id="pourquoi" aria-label="Pourquoi JJ-Computer">
  <div class="why-item">
    <div class="wrap center">
      <p class="n" data-rise>Pourquoi JJ-Computer · 01</p>
      <h3 data-rise>Des leads exclusifs, jamais revendus.</h3>
      <p data-rise>Un lead exclusif n'est transmis qu'à un seul acheteur. Lorsque des leads partagés sont proposés, ils sont <b>identifiés comme tels et tarifés différemment</b>.</p>
    </div>
  </div>
  <div class="why-item grey">
    <div class="wrap center">
      <p class="n" data-rise>02</p>
      <h3 data-rise>Livrés en temps réel.</h3>
      <p data-rise>Le lead arrive chez vous à la seconde où il est qualifié. Un rappel dans les <b>30 minutes multiplie par 7 le taux de conversion</b>.</p>
    </div>
  </div>
  <div class="why-item">
    <div class="wrap center">
      <p class="n" data-rise>03</p>
      <h3 data-rise>Ciblés à la ville près.</h3>
      <p data-rise>Vous définissez votre périmètre d'intervention, nous le respectons. <b>Aucun lead hors périmètre ne vous est facturé.</b></p>
    </div>
  </div>
  <div class="why-item grey">
    <div class="wrap center">
      <p class="n" data-rise>04</p>
      <h3 data-rise>100% conformes au RGPD.</h3>
      <p data-rise>Consentement collecté, tracé et documenté pour chaque prospect. Un <b>DPA est disponible sur demande</b>.</p>
    </div>
  </div>
  <div class="why-item">
    <div class="wrap center">
      <p class="n" data-rise>05</p>
      <h3 data-rise>Une politique de remplacement écrite.</h3>
      <p data-rise>Lead non joignable, numéro incorrect, doublon : les cas de remplacement et leurs <b>règles sont définies en amont</b>, avant le démarrage.</p>
    </div>
  </div>
</section>

<!-- ============================ FAQ ============================ -->
<section class="screen faq" id="faq">
  <div class="wrap center">
    <h2 class="h-section" data-rise>Questions fréquentes</h2>

    <div class="faq-list" style="text-align:left">
      <div class="faq-item" data-rise>
        <h3><button class="faq-q" aria-expanded="false"><span>Vos leads sont-ils vraiment exclusifs ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>Oui, selon la formule choisie. En <b>exclusif</b>, le lead n'est transmis qu'à un seul acheteur : vous. En <b>semi-exclusif</b>, il est partagé entre 2 à 3 acheteurs maximum, ce qui permet un coût par lead plus bas. Le niveau d'exclusivité est toujours précisé en amont, avant le démarrage, et il n'évolue jamais en cours de contrat.</p></div>
      </div>
      <div class="faq-item" data-rise>
        <h3><button class="faq-q" aria-expanded="false"><span>Quel délai pour recevoir mes premiers leads ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>En général 24 à 48 heures après validation de votre secteur, de votre zone géographique et de vos critères de qualification. Pour des volumes importants, nous construisons un plan de lancement personnalisé afin de monter en puissance progressivement, sans dégrader la qualité des prospects.</p></div>
      </div>
      <div class="faq-item" data-rise>
        <h3><button class="faq-q" aria-expanded="false"><span>Comment je reçois les leads concrètement ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>En temps réel, au choix : par email dès qu'un prospect est qualifié, sous forme de fichier selon la fréquence qui vous convient, ou directement dans votre CRM via une intégration webhook/API. La plupart de nos partenaires combinent notification email et injection CRM.</p></div>
      </div>
      <div class="faq-item" data-rise>
        <h3><button class="faq-q" aria-expanded="false"><span>Que se passe-t-il si un lead est invalide ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>Chaque offre inclut une politique de contrôle et de remplacement : lead non joignable après plusieurs tentatives, numéro incorrect, doublon. Les règles exactes, nombre de tentatives, délai de signalement et modalités de remplacement, sont définies avec vous avant le démarrage.</p></div>
      </div>
      <div class="faq-item" data-rise>
        <h3><button class="faq-q" aria-expanded="false"><span>Puis-je cibler une ville ou un département précis ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>Oui. Le ciblage peut se faire à la ville, au code postal, au département ou à la région. Plus le périmètre est resserré, plus le volume disponible se réduit : nous arbitrons ensemble entre volume et précision pour trouver le bon équilibre.</p></div>
      </div>
      <div class="faq-item" data-rise>
        <h3><button class="faq-q" aria-expanded="false"><span>Mon secteur est-il couvert ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>Nous couvrons aujourd'hui la rénovation énergétique, l'immobilier, l'assurance, la finance &amp; crédit, le télécom &amp; énergie et l'automobile. D'autres secteurs peuvent être développés sur demande : présentez-nous votre activité, nous vous dirons rapidement si nous pouvons produire du volume qualifié.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ CTA FINAL ============================ -->
<section class="screen final" id="devis">
  <div class="wrap">
    <h2 data-rise>Prêt à développer votre activité ?</h2>
    <p class="lede" data-rise>Recevez vos premiers leads dès cette semaine.</p>
    <p class="mention" data-rise>Prospects exclusifs · Livraison sous 48h · Conformes RGPD</p>
    <div data-rise>
      <a class="btn btn--big" href="https://jj-computer.fr/contact/">Demander un devis <span aria-hidden="true">&rarr;</span></a>
    </div>
    <p class="after" data-rise>Réponse sous 24h · Aucun engagement</p>
  </div>
</section>

</main>

<!-- ============================ FOOTER ============================ -->
<footer class="footer">
  <div class="wrap">
    <div class="f-top">
      <a class="brand" href="https://jj-computer.fr"><span class="dot" aria-hidden="true"></span><span>JJ.Computer</span></a>
      <p>Fournisseur français de leads qualifiés exclusifs. Acquisition multi-canal, qualification stricte et livraison en temps réel, partout en France.</p>
      <a class="f-mail" href="mailto:leads@jj-computer.fr">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="1.5"/><path d="M3 6.5l9 6 9-6"/></svg>
        leads@jj-computer.fr
      </a>
    </div>

    <div class="f-grid">
      <div class="f-col">
        <h4>Navigation</h4>
        <ul>
          <li><a href="https://jj-computer.fr/">Accueil</a></li>
          <li><a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Secteurs</a></li>
          <li><a href="https://jj-computer.fr/blog/">Blog</a></li>
          <li><a href="https://jj-computer.fr/contact/">Contact</a></li>
        </ul>
      </div>
      <div class="f-col">
        <h4>Secteurs</h4>
        <ul>
          <li><a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Rénovation</a></li>
          <li><a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Immobilier</a></li>
          <li><a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Assurance</a></li>
          <li><a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Finance</a></li>
          <li><a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Automobile</a></li>
        </ul>
      </div>
      <div class="f-col">
        <h4>Ressources</h4>
        <ul>
          <li><a href="https://jj-computer.fr/generation-de-leads-qualifies-en-2026-guide-complet-pour-developper-son-entreprise/">Guide leads 2026</a></li>
          <li><a href="https://jj-computer.fr/leads-qualifies-meta-ads-2026/">Meta Ads</a></li>
          <li><a href="https://jj-computer.fr/leads-qualifies-tiktok-ads-2026/">TikTok Ads</a></li>
          <li><a href="https://jj-computer.fr/generer-leads-qualifies-2026/">Générer des leads</a></li>
          <li><a href="https://jj-computer.fr/politique-de-confidentialite/">Confidentialité</a></li>
          <li><a href="https://jj-computer.fr/mentions-legales/">Mentions légales</a></li>
        </ul>
      </div>
    </div>

    <a class="f-logo" href="https://jj-computer.fr" aria-label="JJ.Computer">
      <svg viewBox="0 0 160 40" role="img" aria-label="Logo JJ.Computer" xmlns="http://www.w3.org/2000/svg">
        <text x="10" y="27" font-family="-apple-system, Inter, Helvetica, Arial, sans-serif" font-size="20" font-weight="600" letter-spacing="-.8" fill="currentColor">JJ</text>
        <circle cx="44" cy="21" r="2.6" fill="#0071e3"/>
        <text x="54" y="27" font-family="-apple-system, Inter, Helvetica, Arial, sans-serif" font-size="17" font-weight="400" letter-spacing="-.6" fill="currentColor">Computer</text>
      </svg>
    </a>

    <div class="f-bottom">
      <p><a href="https://jj-computer.fr">© 2026 JJ-Computer.fr</a> — Tous droits réservés</p>
      <span class="rgpd">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true"><path d="M12 3l7 3v5.5c0 4.5-3 8.2-7 9.5-4-1.3-7-5-7-9.5V6l7-3z"/></svg>
        Conforme RGPD
      </span>
    </div>
  </div>
</footer>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"FAQPage",
  "mainEntity":[
    {"@type":"Question","name":"Vos leads sont-ils vraiment exclusifs ?","acceptedAnswer":{"@type":"Answer","text":"Oui, selon la formule choisie. En exclusif, le lead n'est transmis qu'à un seul acheteur. En semi-exclusif, il est partagé entre 2 à 3 acheteurs maximum, ce qui permet un coût par lead plus bas. Le niveau d'exclusivité est toujours précisé en amont."}},
    {"@type":"Question","name":"Quel délai pour recevoir mes premiers leads ?","acceptedAnswer":{"@type":"Answer","text":"En général 24 à 48 heures après validation de votre secteur, de votre zone géographique et de vos critères de qualification. Pour des volumes importants, un plan de lancement personnalisé est construit."}},
    {"@type":"Question","name":"Comment je reçois les leads concrètement ?","acceptedAnswer":{"@type":"Answer","text":"En temps réel : par email dès qu'un prospect est qualifié, sous forme de fichier, ou directement dans votre CRM via une intégration webhook/API."}},
    {"@type":"Question","name":"Que se passe-t-il si un lead est invalide ?","acceptedAnswer":{"@type":"Answer","text":"Chaque offre inclut une politique de contrôle et de remplacement : lead non joignable, numéro incorrect, doublon. Les règles exactes sont définies avant le démarrage."}},
    {"@type":"Question","name":"Puis-je cibler une ville ou un département précis ?","acceptedAnswer":{"@type":"Answer","text":"Oui. Le ciblage peut se faire à la ville, au code postal, au département ou à la région, avec un arbitrage entre volume disponible et précision."}},
    {"@type":"Question","name":"Mon secteur est-il couvert ?","acceptedAnswer":{"@type":"Answer","text":"Rénovation énergétique, immobilier, assurance, finance & crédit, télécom & énergie et automobile sont couverts. D'autres secteurs peuvent être développés sur demande."}}
  ]
}
</script>

<!-- ============================ SCRIPTS ============================ -->
<script src="<?php echo esc_url( $jj_assets ); ?>/vendor/gsap.min.js"></script>
<script src="<?php echo esc_url( $jj_assets ); ?>/vendor/ScrollTrigger.min.js"></script>
<script src="<?php echo esc_url( $jj_assets ); ?>/vendor/lenis.min.js"></script>
<script>
(function () {
  'use strict';
  var root = document.documentElement;
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!window.gsap || reduced) root.classList.add('no-motion');
  if (!window.gsap) root.classList.remove('js');

  /* ---------------- nav + menu ---------------- */
  var nav = document.getElementById('nav');
  var burger = document.getElementById('burger');
  var menu = document.getElementById('mobile-menu');
  var open = false;
  function setMenu(v) {
    open = v;
    root.classList.toggle('menu-open', v);
    burger.setAttribute('aria-expanded', String(v));
    burger.setAttribute('aria-label', v ? 'Fermer le menu' : 'Ouvrir le menu');
    menu.setAttribute('aria-hidden', String(!v));
    document.body.style.overflow = v ? 'hidden' : '';
    if (window.gsap) {
      gsap.to(menu, { opacity: v ? 1 : 0, duration: reduced ? 0 : 0.32, ease: 'power2.out' });
      if (v) gsap.fromTo(menu.children, { y: 14, opacity: 0 }, { y: 0, opacity: 1, duration: 0.4, stagger: 0.05, delay: 0.06 });
    } else {
      menu.style.opacity = v ? 1 : 0;
    }
  }
  burger.addEventListener('click', function () { setMenu(!open); });
  menu.addEventListener('click', function (e) { if (e.target.closest('a')) setMenu(false); });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && open) setMenu(false); });
  function onScroll() { nav.classList.toggle('is-stuck', window.scrollY > 8); }
  onScroll(); window.addEventListener('scroll', onScroll, { passive: true });

  if (!window.gsap) return;
  gsap.registerPlugin(ScrollTrigger);

  /* ---------------- FAQ (avant toute sortie anticipée) ---------------- */
  gsap.utils.toArray('.faq-item').forEach(function (item, i) {
    var btn = item.querySelector('.faq-q');
    var panel = item.querySelector('.faq-a');
    panel.id = 'faq-panel-' + (i + 1);
    btn.setAttribute('aria-controls', panel.id);
    btn.addEventListener('click', function () {
      var o = item.classList.toggle('open');
      btn.setAttribute('aria-expanded', String(o));
      gsap.to(panel, {
        height: o ? 'auto' : 0, duration: reduced ? 0 : 0.5, ease: 'power2.inOut',
        onComplete: function () { ScrollTrigger.refresh(); }
      });
    });
  });

  /* ---------------- flux de leads du panneau ---------------- */
  var FEED = [
    { t: 'Nouveau lead', s: 'Rénovation énergétique', v: 'Lyon', d: 'il y a 2 min' },
    { t: 'Lead qualifié', s: 'Assurance auto', v: 'Bordeaux', d: 'il y a 6 min' },
    { t: 'Nouveau lead', s: 'Immobilier', v: 'Nantes', d: 'il y a 9 min' },
    { t: 'Lead qualifié', s: 'Crédit immobilier', v: 'Toulouse', d: 'il y a 14 min' },
    { t: 'Nouveau lead', s: 'Pompe à chaleur', v: 'Lille', d: 'il y a 18 min' }
  ];
  var slots = gsap.utils.toArray('#feed .feed-item');
  function paint(offset) {
    slots.forEach(function (el, i) {
      var m = FEED[(offset + i) % FEED.length];
      el.querySelector('.feed-txt').innerHTML = '<b>' + m.t + '</b> <span>— ' + m.s + ' — ' + m.v + '</span>';
      el.querySelector('.feed-time').textContent = m.d;
    });
  }
  paint(0);

  if (reduced) { gsap.set('#feed .feed-item', { opacity: 1 }); return; }

  /* ---------------- smooth scroll ---------------- */
  var lenis = null;
  if (window.Lenis) {
    lenis = new Lenis({ duration: 1.1, lerp: 0.085, smoothWheel: true });
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add(function (t) { lenis.raf(t * 1000); });
    gsap.ticker.lagSmoothing(0);
  }

  /* ---------------- ouverture : titre, puis panneau ---------------- */
  var line = document.getElementById('chartLine');
  var len = line.getTotalLength();
  gsap.set(line, { strokeDasharray: len, strokeDashoffset: len });
  gsap.set('[data-hero]', { opacity: 0, y: 18 });
  gsap.set('#hero-title', { opacity: 0, y: 22 });
  gsap.set('#stage', { opacity: 0, y: 40, scale: 0.965 });
  gsap.set(slots, { opacity: 0, y: 10 });

  var intro = gsap.timeline({ delay: 0.12, defaults: { ease: 'power3.out' } });
  intro
    .to('#hero-title', { opacity: 1, y: 0, duration: 1 })
    .to('.hero-eyebrow', { opacity: 1, y: 0, duration: 0.7 }, 0.05)
    .to('.hero-lede', { opacity: 1, y: 0, duration: 0.8 }, 0.35)
    .to('.hero-cta', { opacity: 1, y: 0, duration: 0.8 }, 0.45)
    .to('.hero-badges', { opacity: 1, y: 0, duration: 0.8 }, 0.55)
    .to('#stage', { opacity: 1, y: 0, scale: 1, duration: 1.25, ease: 'expo.out' }, 0.6)
    .to(line, { strokeDashoffset: 0, duration: 1.9, ease: 'power1.inOut' }, 1.0)
    .to('#chartArea', { opacity: 1, duration: 1.2 }, 1.6)
    .to('#chartTip', { opacity: 1, duration: 0.5 }, 2.6)
    .to(slots, { opacity: 1, y: 0, duration: 0.7, stagger: 0.14 }, 1.5);

  /* compteur, lent et sans rebond */
  var counter = { v: 0 };
  intro.to(counter, {
    v: 247, duration: 2.8, ease: 'power1.out',
    onUpdate: function () { document.getElementById('count').textContent = Math.round(counter.v); }
  }, 0.9);

  /* rotation du flux */
  var idx = 0;
  function cycle() {
    gsap.to(slots, {
      opacity: 0, y: -8, duration: 0.42, stagger: 0.05, ease: 'power2.in',
      onComplete: function () {
        idx = (idx + 1) % FEED.length;
        paint(idx);
        gsap.fromTo(slots, { opacity: 0, y: 10 }, { opacity: 1, y: 0, duration: 0.55, stagger: 0.08, ease: 'power2.out' });
      }
    });
  }
  gsap.delayedCall(5.2, function tick() { cycle(); gsap.delayedCall(3.4, tick); });

  /* respiration + parallaxe souris */
  var panel = document.getElementById('panel');
  gsap.to(panel, { y: -9, duration: 3.6, ease: 'sine.inOut', yoyo: true, repeat: -1 });
  var rx = gsap.quickTo(panel, 'rotationX', { duration: 0.9, ease: 'power2.out' });
  var ry = gsap.quickTo(panel, 'rotationY', { duration: 0.9, ease: 'power2.out' });
  gsap.set(panel, { transformPerspective: 1400, rotationX: 4, rotationY: -4 });
  if (window.matchMedia('(hover:hover) and (pointer:fine)').matches) {
    window.addEventListener('pointermove', function (e) {
      var px = e.clientX / window.innerWidth - 0.5;
      var py = e.clientY / window.innerHeight - 0.5;
      ry(-4 + px * 5); rx(4 - py * 4);
    }, { passive: true });
  }

  /* le panneau s'éloigne quand on quitte le hero */
  gsap.to('#stage', {
    scale: 0.9, opacity: 0, y: -30, ease: 'none',
    scrollTrigger: { trigger: '#hero', start: 'bottom 92%', end: 'bottom 30%', scrub: 0.6 }
  });

  /* ---------------- apparitions génériques ---------------- */
  gsap.utils.toArray('[data-rise]').forEach(function (el) {
    gsap.fromTo(el, { opacity: 0, y: 26, scale: 0.985 }, {
      opacity: 1, y: 0, scale: 1, duration: 1, ease: 'power3.out',
      scrollTrigger: { trigger: el, start: 'top 85%', once: true }
    });
  });

  /* profondeur : la section sortante recule */
  gsap.utils.toArray('.trust, .channels, .why-item, .faq').forEach(function (el) {
    gsap.to(el, {
      scale: 0.955, opacity: 0.25, ease: 'none',
      scrollTrigger: { trigger: el, start: 'bottom 85%', end: 'bottom top', scrub: 0.5 }
    });
  });

  /* ---------------- ticker ---------------- */
  var track = document.getElementById('ticker');
  gsap.to(track, { xPercent: -50, duration: 46, ease: 'none', repeat: -1 });

  var mm = gsap.matchMedia();

  /* ---------------- stats : une spec par écran ---------------- */
  var stats = gsap.utils.toArray('#chiffres .stat');
  var bars = gsap.utils.toArray('#statsProgress b');
  var counted = [];
  function runCount(i) {
    if (counted[i]) return;
    counted[i] = true;
    var el = stats[i].querySelector('[data-count]');
    if (!el) return;
    var o = { v: 0 };
    gsap.to(o, {
      v: parseFloat(el.getAttribute('data-count')), duration: 1.8, ease: 'power1.out',
      onUpdate: function () { el.textContent = Math.round(o.v); }
    });
  }
  gsap.set(stats, { opacity: 0, y: 30, scale: 0.985 });
  gsap.set(stats[0], { opacity: 1, y: 0, scale: 1 });

  var statsTl = gsap.timeline({
    scrollTrigger: {
      trigger: '#chiffres', start: 'top top', end: '+=320%', pin: true, scrub: 0.65, anticipatePin: 1,
      onUpdate: function (self) {
        var p = self.progress * 4;
        bars.forEach(function (b, i) { b.style.width = (Math.min(Math.max(p - i, 0), 1) * 100).toFixed(1) + '%'; });
      }
    }
  });
  statsTl.add(function () { runCount(0); }, 0.05);
  for (var i = 1; i < stats.length; i++) {
    (function (i) {
      statsTl.to(stats[i - 1], { opacity: 0, y: -30, scale: 0.985, duration: 0.45 }, i - 0.22)
             .fromTo(stats[i], { opacity: 0, y: 30, scale: 0.985 }, { opacity: 1, y: 0, scale: 1, duration: 0.45 }, i - 0.22)
             .add(function () { runCount(i); }, i - 0.1);
    })(i);
  }
  statsTl.to({}, { duration: 0.6 });

  /* ---------------- étapes : visuel figé, texte qui défile ---------------- */
  var steps = gsap.utils.toArray('#stepsTexts .step');
  var nodes = gsap.utils.toArray('#svNodes .sv-node');
  var arc = document.getElementById('svArc');
  var arcLen = arc.getTotalLength();
  gsap.set(arc, { strokeDasharray: arcLen, strokeDashoffset: arcLen });
  gsap.set(steps, { opacity: 0, y: 26 });
  gsap.set(steps[0], { opacity: 1, y: 0 });
  nodes[0].classList.add('on');

  function setNode(i) { nodes.forEach(function (n, k) { n.classList.toggle('on', k === i); }); }

  var stepsTl = gsap.timeline({
    scrollTrigger: { trigger: '#methode', start: 'top top', end: '+=260%', pin: true, scrub: 0.65, anticipatePin: 1 }
  });
  stepsTl.to(arc, { strokeDashoffset: 0, ease: 'none', duration: 3 }, 0)
         .to('#svPulse', { opacity: 0.14, scale: 1.5, transformOrigin: '200px 200px', duration: 1.5, yoyo: true, repeat: 1 }, 0);
  for (var s = 1; s < steps.length; s++) {
    (function (s) {
      stepsTl.to(steps[s - 1], { opacity: 0, y: -26, duration: 0.4 }, s - 0.2)
             .fromTo(steps[s], { opacity: 0, y: 26 }, { opacity: 1, y: 0, duration: 0.4 }, s - 0.2)
             .add(function () { setNode(s); }, s - 0.1);
    })(s);
  }

  /* ---------------- secteurs : défilement horizontal épinglé ---------------- */
  mm.add('(min-width: 881px)', function () {
    var rail = document.getElementById('rail');
    var st = gsap.to(rail, {
      x: function () { return -(rail.scrollWidth - window.innerWidth); },
      ease: 'none',
      scrollTrigger: {
        trigger: '#secteurs', start: 'top top',
        end: function () { return '+=' + (rail.scrollWidth - window.innerWidth); },
        pin: true, scrub: 0.8, invalidateOnRefresh: true, anticipatePin: 1
      }
    });
    return function () { st.scrollTrigger && st.scrollTrigger.kill(); st.kill(); gsap.set(rail, { x: 0 }); };
  });

  if (document.fonts && document.fonts.ready) document.fonts.ready.then(function () { ScrollTrigger.refresh(); });
  window.addEventListener('load', function () { ScrollTrigger.refresh(); });
})();
</script>

<script type="importmap">
{ "imports": {
  "three": "<?php echo esc_url( $jj_assets ); ?>/vendor/three.module.min.js"
} }
</script>
<script type="module">
/* ------------------------------------------------------------------
   Objets 3D des cartes secteurs.
   Un seul contexte WebGL pour les six cartes : le canvas est fixe et
   chaque objet est rendu dans la fenêtre de sa carte (scissor + viewport).
   Six contextes séparés satureraient le navigateur.
   ------------------------------------------------------------------ */
const REDUCED = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

/* Reflet de marque sur les matériaux. Passer à '#0071e3' pour rester
   strictement dans la palette Apple du reste de la page. */
const RIM = '#e8400c';

function webglOK(){
  try { const c = document.createElement('canvas');
    return !!(window.WebGLRenderingContext && (c.getContext('webgl2') || c.getContext('webgl'))); }
  catch(e){ return false; }
}
const arts = [...document.querySelectorAll('.sector-art')];
if (REDUCED || !webglOK() || !arts.length) throw new Error('3D ignorée, les icônes de repli restent affichées');

const THREE = await import('three');

/* ---------- canvas partagé ---------- */
const canvas = document.createElement('canvas');
canvas.id = 'sectorsGL';
canvas.setAttribute('aria-hidden', 'true');
document.body.appendChild(canvas);

const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true, powerPreference: 'high-performance' });
renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
renderer.setScissorTest(true);
renderer.toneMapping = THREE.ACESFilmicToneMapping;
renderer.toneMappingExposure = 1;

/* Studio maison plutôt que RoomEnvironment : ce dernier émet des valeurs
   HDR bien supérieures à 1, ce qui transforme tout métal en miroir blanc.
   Ici le dégradé reste dans [0,1], les reflets sont prévisibles. */
const envMap = (() => {
  const c = document.createElement('canvas'); c.width = 512; c.height = 256;
  const x = c.getContext('2d');
  const g = x.createLinearGradient(0, 0, 0, 256);
  g.addColorStop(0, '#ffffff');    // plafond lumineux
  g.addColorStop(.45, '#e6e9ee');  // horizon
  g.addColorStop(.62, '#aeb5bf');
  g.addColorStop(1, '#6c727b');    // sol
  x.fillStyle = g; x.fillRect(0, 0, 512, 256);
  // deux boîtes à lumière, pour des hautes lumières franches
  x.fillStyle = '#ffffff'; x.fillRect(120, 8, 150, 70);
  x.fillStyle = 'rgba(255,255,255,.75)'; x.fillRect(340, 20, 110, 50);
  const tex = new THREE.CanvasTexture(c);
  tex.mapping = THREE.EquirectangularReflectionMapping;
  tex.colorSpace = THREE.SRGBColorSpace;
  const pmrem = new THREE.PMREMGenerator(renderer);
  const env = pmrem.fromEquirectangular(tex).texture;
  pmrem.dispose(); tex.dispose();
  return env;
})();

const camera = new THREE.PerspectiveCamera(34, 1, 0.1, 100);
camera.position.set(0, 0.75, 3.7);
camera.lookAt(0, -0.05, 0);

/* ---------- ombre douce projetée (texture, pas de shadow map) ---------- */
const shadowTex = (() => {
  const c = document.createElement('canvas'); c.width = c.height = 256;
  const g = c.getContext('2d').createRadialGradient(128, 128, 8, 128, 128, 126);
  g.addColorStop(0, 'rgba(0,0,0,.42)'); g.addColorStop(.55, 'rgba(0,0,0,.15)'); g.addColorStop(1, 'rgba(0,0,0,0)');
  const ctx = c.getContext('2d'); ctx.fillStyle = g; ctx.fillRect(0, 0, 256, 256);
  return new THREE.CanvasTexture(c);
})();
function addShadow(scene, w = 2.1, y = -0.92) {
  const m = new THREE.Mesh(
    new THREE.PlaneGeometry(w, w * 0.62),
    new THREE.MeshBasicMaterial({ map: shadowTex, transparent: true, depthWrite: false, opacity: .9 })
  );
  m.rotation.x = -Math.PI / 2; m.position.y = y; scene.add(m);
}

/* ---------- matériaux : blanc/gris dominant, reflets discrets ---------- */
const mat = {
  /* Gris soutenus : sur un fond #f5f5f7, des matières trop claires
     disparaissent. Le volume vient du contraste, pas de l'ajout de lumière. */
  cells:  () => new THREE.MeshPhysicalMaterial({ color: '#14293c', metalness: .55, roughness: .22, clearcoat: .6, clearcoatRoughness: .12, envMap, envMapIntensity: 1 }),
  glass:  () => new THREE.MeshPhysicalMaterial({ color: '#9aa5b2', metalness: .5, roughness: .2, clearcoat: .8, clearcoatRoughness: .12, envMap, envMapIntensity: 1.1 }),
  metal:  () => new THREE.MeshPhysicalMaterial({ color: '#8d939d', metalness: .92, roughness: .24, envMap, envMapIntensity: 1.25 }),
  matte:  () => new THREE.MeshPhysicalMaterial({ color: '#cfd4da', metalness: .04, roughness: .66, envMap, envMapIntensity: .6 }),
  satin:  () => new THREE.MeshPhysicalMaterial({ color: '#b4bac4', metalness: .4, roughness: .32, clearcoat: .6, clearcoatRoughness: .25, envMap, envMapIntensity: 1 }),
  accent: (e = .14) => new THREE.MeshPhysicalMaterial({ color: '#b9bec7', metalness: .6, roughness: .26, emissive: RIM, emissiveIntensity: e, envMap, envMapIntensity: 1.1 })
};

/* ---------- lumières : key, fill, rim orange ---------- */
function light(scene) {
  const key = new THREE.DirectionalLight(0xffffff, 3.2); key.position.set(3, 4.5, 4);
  const fill = new THREE.DirectionalLight(0xffffff, .45); fill.position.set(-4, .5, 2.5);
  const rim = new THREE.PointLight(new THREE.Color(RIM), 11, 8, 2); rim.position.set(-1.9, 1.1, -1.9);
  scene.add(key, fill, rim, new THREE.AmbientLight(0xffffff, .12));
}

/* ---------- les six objets ---------- */
function extrude(shape, depth, bevel) {
  return new THREE.ExtrudeGeometry(shape, { depth, bevelEnabled: true, bevelThickness: bevel, bevelSize: bevel, bevelSegments: 5, curveSegments: 48 });
}

const build = {
  /* panneau solaire : cadre métal, cellules vitrées, léger piètement */
  solaire() {
    const g = new THREE.Group(), panel = new THREE.Group();
    const frame = new THREE.Mesh(new THREE.BoxGeometry(1.72, .07, 1.14), mat.metal());
    const cells = new THREE.Mesh(new THREE.BoxGeometry(1.6, .04, 1.02), mat.cells());
    cells.position.y = .04;
    for (let i = -3; i <= 3; i++) {
      const bar = new THREE.Mesh(new THREE.BoxGeometry(.016, .05, 1.02), mat.metal());
      bar.position.set(i * .215, .065, 0); panel.add(bar);
    }
    const cross = new THREE.Mesh(new THREE.BoxGeometry(1.6, .05, .012), mat.metal());
    cross.position.y = .06;
    panel.add(frame, cells, cross);
    panel.rotation.x = -.62;
    const foot = new THREE.Mesh(new THREE.CylinderGeometry(.05, .07, .8, 24), mat.metal());
    foot.position.y = -.52;
    g.add(panel, foot);
    return { group: g, spin: .17 };
  },
  /* maison low-poly : volume mat, toit en prisme */
  immobilier() {
    const g = new THREE.Group();
    const body = new THREE.Mesh(new THREE.BoxGeometry(1.15, .82, 1.0), mat.matte());
    body.position.y = -.18;
    /* toit en triangle extrudé : l'orientation d'un prisme CylinderGeometry
       dépend de thetaStart, une Shape est prévisible */
    const tri = new THREE.Shape();
    tri.moveTo(-.72, 0); tri.lineTo(.72, 0); tri.lineTo(0, .56); tri.closePath();
    const roof = new THREE.Mesh(
      new THREE.ExtrudeGeometry(tri, { depth: 1.04, bevelEnabled: true, bevelThickness: .02, bevelSize: .02, bevelSegments: 2 }),
      mat.satin()
    );
    roof.geometry.center();
    roof.position.y = .5;
    const door = new THREE.Mesh(new THREE.BoxGeometry(.26, .38, .04), mat.accent(.1));
    door.position.set(0, -.4, .51);
    g.add(body, roof, door);
    return { group: g, spin: .12 };
  },
  /* bouclier satiné */
  assurance() {
    const sh = new THREE.Shape();
    sh.moveTo(0, .95);
    sh.bezierCurveTo(.62, .78, .74, .62, .74, .18);
    sh.bezierCurveTo(.74, -.42, .38, -.82, 0, -.98);
    sh.bezierCurveTo(-.38, -.82, -.74, -.42, -.74, .18);
    sh.bezierCurveTo(-.74, .62, -.62, .78, 0, .95);
    const m = new THREE.Mesh(extrude(sh, .16, .05), mat.satin());
    m.geometry.center();
    const g = new THREE.Group(); g.add(m);
    const core = new THREE.Mesh(new THREE.SphereGeometry(.2, 40, 28), mat.accent(.09));
    core.position.z = .16; g.add(core);
    return { group: g, spin: .14 };
  },
  /* pile de disques métalliques */
  finance() {
    const g = new THREE.Group();
    for (let i = 0; i < 5; i++) {
      const c = new THREE.Mesh(new THREE.CylinderGeometry(.52 - i * .015, .52 - i * .015, .13, 56), i === 2 ? mat.accent(.09) : mat.metal());
      c.position.y = -.52 + i * .155;
      c.rotation.y = i * .22;
      c.position.x = Math.sin(i * 1.7) * .035;
      g.add(c);
    }
    return { group: g, spin: .16 };
  },
  /* onde torsadée, très légère émission */
  telecom() {
    const g = new THREE.Group();
    const knot = new THREE.Mesh(new THREE.TorusKnotGeometry(.58, .15, 220, 32, 2, 3), mat.accent(.12));
    g.add(knot);
    return { group: g, spin: .2 };
  },
  /* aileron : profil galbé extrudé, évoque le mouvement */
  automobile() {
    const sh = new THREE.Shape();
    sh.moveTo(-1.0, -.12);
    sh.bezierCurveTo(-.4, .5, .5, .62, 1.02, .16);
    sh.bezierCurveTo(.72, .1, .2, -.06, -1.0, -.12);
    const m = new THREE.Mesh(extrude(sh, .3, .06), mat.glass());
    m.geometry.center();
    const g = new THREE.Group(); g.add(m);
    m.rotation.z = .12;
    const trail = new THREE.Mesh(new THREE.TorusGeometry(.72, .022, 20, 90, Math.PI * 1.15), mat.accent(.22));
    trail.rotation.set(Math.PI / 2, 0, .5); trail.position.y = -.42;
    g.add(trail);
    return { group: g, spin: .15 };
  }
};

const ORDER = ['solaire', 'immobilier', 'assurance', 'finance', 'telecom', 'automobile'];

/* ---------- une scène par carte ---------- */
const items = arts.map((art, i) => {
  const scene = new THREE.Scene();
  scene.environment = envMap;
  light(scene);
  const { group, spin } = build[ORDER[i] || 'assurance']();
  const holder = new THREE.Group();
  holder.add(group);
  holder.scale.setScalar(.8);
  scene.add(holder);
  addShadow(scene);
  art.classList.add('gl');

  const it = { art, scene, holder, group, spin, phase: i * 1.1, aimX: 0, aimY: 0, curX: 0, curY: 0, shown: false };

  const card = art.closest('.sector');
  card.addEventListener('pointermove', (e) => {
    const r = card.getBoundingClientRect();
    it.aimY = ((e.clientX - r.left) / r.width - .5) * .55;
    it.aimX = ((e.clientY - r.top) / r.height - .5) * .4;
  });
  card.addEventListener('pointerleave', () => { it.aimX = 0; it.aimY = 0; });
  return it;
});

/* ---------- apparition à l'entrée dans le viewport ---------- */
const io = new IntersectionObserver((entries) => {
  entries.forEach((en) => {
    if (!en.isIntersecting) return;
    const it = items.find((x) => x.art === en.target);
    if (!it || it.shown) return;
    it.shown = true;
    if (window.gsap) gsap.to(it.holder.scale, { x: 1, y: 1, z: 1, duration: 1.1, ease: 'expo.out' });
    else it.holder.scale.setScalar(1);
  });
}, { threshold: .25 });
items.forEach((it) => io.observe(it.art));

/* ---------- boucle unique, rendu par ciseaux ---------- */
function resize() {
  const w = window.innerWidth, h = window.innerHeight;
  if (canvas.width !== w * renderer.getPixelRatio()) renderer.setSize(w, h, false);
}
resize();
window.addEventListener('resize', resize);

const clock = new THREE.Clock();
let started = false;
function loop() {
  const t = clock.getElapsedTime();
  const dt = Math.min(clock.getDelta(), .05);
  const H = renderer.domElement.clientHeight || window.innerHeight;

  items.forEach((it) => {
    const r = it.art.getBoundingClientRect();
    if (r.bottom < -40 || r.top > window.innerHeight + 40 || r.right < 0 || r.left > window.innerWidth) return;

    /* apesanteur + rotation lente sur Y */
    it.group.position.y = Math.sin(t * .7 + it.phase) * .07;
    it.group.rotation.y += dt * it.spin;
    /* inclinaison douce vers le curseur */
    it.curX += (it.aimX - it.curX) * .06;
    it.curY += (it.aimY - it.curY) * .06;
    it.holder.rotation.x = it.curX;
    it.holder.rotation.z = it.curY * .35;
    it.holder.rotation.y = it.curY;

    const x = r.left, y = H - r.bottom, w = r.width, h = r.height;
    renderer.setViewport(x, y, w, h);
    renderer.setScissor(x, y, w, h);
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
    renderer.render(it.scene, camera);
  });

  if (!started) { started = true; canvas.classList.add('on'); }
  requestAnimationFrame(loop);
}
requestAnimationFrame(loop);
</script>

<?php wp_footer(); ?>
</body>
</html>
