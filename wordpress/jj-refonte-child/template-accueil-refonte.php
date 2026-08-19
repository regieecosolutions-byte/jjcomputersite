<?php
/**
 * Template Name: Accueil refonte JJ
 *
 * Page autonome : elle n'utilise ni le header ni le footer du thème parent,
 * mais appelle wp_head() / wp_footer() pour que Complianz (bandeau cookies),
 * WP Statistics et les autres extensions continuent de fonctionner.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'jj-refonte' ); ?>>
<a class="skip" href="#main">Aller au contenu</a>
<script>document.documentElement.classList.add('js');</script>

<!-- ============================ NAV ============================ -->
<header class="nav" id="nav">
  <div class="wrap nav-in">
    <a class="brand" href="https://jj-computer.fr" aria-label="JJ.Computer, accueil">
      <span class="dot" aria-hidden="true"></span><span class="mark">JJ<em>.</em>Computer</span>
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
  <a href="https://jj-computer.fr/blog/">Blog <span>01</span></a>
  <a href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Secteurs <span>02</span></a>
  <a class="btn" href="https://jj-computer.fr/contact/">Recevoir des leads <span class="arw" aria-hidden="true">&rarr;</span></a>
</div>

<main id="main">

<!-- ============================ HERO ============================ -->
<section class="hero" id="hero">
  <canvas id="hero-gl" aria-hidden="true"></canvas>
  <div class="wrap hero-in">
    <p class="eyebrow hero-eyebrow" data-hero>
      <span class="pulse" aria-hidden="true"></span>
      Achat leads qualifiés — Fournisseur exclusif France
    </p>

    <h1 id="hero-title">
      <span class="line"><span>L'achat de leads</span></span>
      <span class="line"><span>qualifiés le plus</span></span>
      <span class="line"><span><span class="serif-i">simple</span> de France</span></span>
    </h1>

    <p class="hero-lede" data-hero>
      Zéro campagne à gérer, zéro budget publicitaire à avancer. Nous générons, qualifions
      et vous livrons des prospects exclusifs, prêts à être contactés.
    </p>

    <div class="hero-cta" data-hero>
      <a class="btn" href="https://jj-computer.fr/contact/">Recevoir des leads <span class="arw" aria-hidden="true">&rarr;</span></a>
      <a class="btn btn--ghost" href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">Voir les secteurs</a>
    </div>

    <ul class="trust-row" data-hero>
      <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 3l7 3v5.5c0 4.5-3 8.2-7 9.5-4-1.3-7-5-7-9.5V6l7-3z"/></svg>Conforme RGPD</li>
      <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="8.5"/><path d="M12 7v5l3.5 2"/></svg>Livraison sous 48h</li>
      <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 19V9m5 10V5m5 14v-7m5 7V8"/></svg>Volume scalable</li>
      <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 3.5l2.6 5.6 6 .8-4.4 4.2 1.1 6-5.3-3-5.3 3 1.1-6L3.4 9.9l6-.8L12 3.5z"/></svg>Exclusivité disponible</li>
    </ul>
  </div>
  <div class="scroll-cue" aria-hidden="true"><i></i>Défiler</div>
</section>

<!-- ============================ TICKER ============================ -->
<div class="ticker" aria-label="Secteurs couverts">
  <div class="ticker-track" id="ticker">
    <div class="ticker-set">
      <span class="ticker-item">Rénovation énergétique</span><span class="ticker-item">Immobilier</span><span class="ticker-item">Assurance</span><span class="ticker-item">Finance &amp; crédit</span><span class="ticker-item">Télécom &amp; énergie</span><span class="ticker-item">Automobile</span><span class="ticker-item">BTP &amp; artisans</span><span class="ticker-item">Formation</span>
    </div>
    <div class="ticker-set" aria-hidden="true">
      <span class="ticker-item">Rénovation énergétique</span><span class="ticker-item">Immobilier</span><span class="ticker-item">Assurance</span><span class="ticker-item">Finance &amp; crédit</span><span class="ticker-item">Télécom &amp; énergie</span><span class="ticker-item">Automobile</span><span class="ticker-item">BTP &amp; artisans</span><span class="ticker-item">Formation</span>
    </div>
  </div>
  <button class="ticker-pause" id="ticker-pause" aria-pressed="false" aria-label="Mettre en pause le défilement des secteurs">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><rect x="6" y="4" width="4" height="16" rx="1"/><rect x="14" y="4" width="4" height="16" rx="1"/></svg>
  </button>
</div>

<!-- ============================ STATS ============================ -->
<section class="section" id="chiffres">
  <div class="wrap">
    <div class="sec-head">
      <span class="sec-num">01</span>
      <h2 class="sec-title">Les chiffres qui <span class="serif-i">comptent</span></h2>
      <p class="sec-lede">Une production continue, mesurée lead par lead, zone par zone.</p>
    </div>
    <div class="stats-grid" data-stats>
      <div class="stat" data-reveal>
        <span class="idx">01</span>
        <span class="k is-word grad-num" data-word>Des milliers</span>
        <span class="l">de leads générés pour les partenaires en France</span>
      </div>
      <div class="stat" data-reveal>
        <span class="idx">02</span>
        <span class="k grad-num"><span data-count="48">0</span>h</span>
        <span class="l">délai moyen de réception</span>
      </div>
      <div class="stat" data-reveal>
        <span class="idx">03</span>
        <span class="k grad-num"><span data-count="6">0</span>+</span>
        <span class="l">secteurs couverts avec ciblage géographique précis</span>
      </div>
      <div class="stat" data-reveal>
        <span class="idx">04</span>
        <span class="k grad-num"><span data-count="100">0</span>%</span>
        <span class="l">conformes RGPD (consentement tracé et documenté)</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================ ÉTAPES (PINNED) ============================ -->
<section class="section steps" id="methode">
  <div class="wrap">
    <div class="sec-head">
      <span class="sec-num">02</span>
      <h2 class="sec-title">Comment ça <span class="serif-i">marche</span></h2>
      <p class="sec-lede" style="color:var(--on-dark-mute)">Trois étapes, de la campagne publicitaire jusqu'à votre CRM.</p>
    </div>

    <div class="steps-in">
      <aside class="steps-aside">
        <div class="progress" aria-hidden="true">
          <div class="progress-rail"><span class="progress-fill" id="progress-fill"></span></div>
          <ul class="progress-labels" id="progress-labels">
            <li><b>01</b> Acquisition</li>
            <li><b>02</b> Qualification</li>
            <li><b>03</b> Livraison</li>
          </ul>
        </div>
      </aside>

      <div class="step-stack">
        <article class="step" data-step>
          <div class="step-k"><span>Étape 01</span></div>
          <h3>Acquisition multi-canal</h3>
          <p>Nous lançons et pilotons des campagnes Google Ads, Meta Ads et TikTok Ads qui captent des prospects en intention d'achat active. Les campagnes sont optimisées en continu.</p>
          <div class="step-meta"><span class="tag">Google Ads</span><span class="tag">Meta Ads</span><span class="tag">TikTok Ads</span></div>
        </article>
        <article class="step" data-step>
          <div class="step-k"><span>Étape 02</span></div>
          <h3>Qualification &amp; filtrage</h3>
          <p>Chaque prospect passe par un tunnel avec formulaire intelligent et des critères précis : zone, budget, besoin, délai. Seuls les prospects à forte intention vous sont transmis.</p>
          <div class="step-meta"><span class="tag">Zone</span><span class="tag">Budget</span><span class="tag">Besoin</span><span class="tag">Délai</span></div>
        </article>
        <article class="step" data-step>
          <div class="step-k"><span>Étape 03</span></div>
          <h3>Livraison en temps réel</h3>
          <p>Les leads vous sont envoyés par email, par fichier ou directement dans votre CRM via webhook/API. Vous pouvez rappeler le prospect dans les minutes qui suivent sa demande.</p>
          <div class="step-meta"><span class="tag">Email</span><span class="tag">Fichier</span><span class="tag">Webhook / API</span></div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- ============================ BANDEAU CONFIANCE ============================ -->
<section class="trust-band">
  <div class="wrap">
    <p data-reveal>
      Nos campagnes et nos traitements respectent le
      <a class="link-underline" href="https://www.cnil.fr/fr/rgpd-de-quoi-parle-t-on" target="_blank" rel="noopener noreferrer">Règlement Général sur la Protection des Données (CNIL)</a>.
      Elles sont diffusées via
      <a class="link-underline" href="https://www.facebook.com/business/ads" target="_blank" rel="noopener noreferrer">Meta Business Ads</a>
      et
      <a class="link-underline" href="https://ads.google.com" target="_blank" rel="noopener noreferrer">Google Ads</a>.
    </p>
    <div class="marks" data-reveal>
      <span>Consentement tracé</span><span>Données documentées</span><span>Diffusion officielle</span>
    </div>
  </div>
</section>

<!-- ============================ SECTEURS ============================ -->
<section class="section" id="secteurs">
  <div class="wrap">
    <div class="sec-head">
      <span class="sec-num">03</span>
      <h2 class="sec-title">Six secteurs, un même <span class="serif-i">niveau d'exigence</span></h2>
      <p class="sec-lede">Chaque secteur a ses critères de qualification. Nous les calibrons avec vous avant la première livraison.</p>
    </div>

    <div class="card-grid" data-cards>
      <a class="card" data-clip href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
        <span class="card-idx grad-label">S / 01</span>
        <h3>Rénovation énergétique</h3>
        <p>Panneaux solaires, isolation, pompes à chaleur. Les aides financières mobilisables sont identifiées en amont.</p>
        <span class="link-arrow">Voir ce secteur <span class="arw" aria-hidden="true">&rarr;</span></span>
      </a>
      <a class="card" data-clip href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
        <span class="card-idx grad-label">S / 02</span>
        <h3>Immobilier</h3>
        <p>Leads vendeurs et acquéreurs, avec ciblage géographique à la maille de votre secteur d'activité.</p>
        <span class="link-arrow">Voir ce secteur <span class="arw" aria-hidden="true">&rarr;</span></span>
      </a>
      <a class="card" data-clip href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
        <span class="card-idx grad-label">S / 03</span>
        <h3>Assurance</h3>
        <p>Auto, santé, habitation. Des prospects vérifiés, qui ont exprimé un besoin de couverture réel.</p>
        <span class="link-arrow">Voir ce secteur <span class="arw" aria-hidden="true">&rarr;</span></span>
      </a>
      <a class="card" data-clip href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
        <span class="card-idx grad-label">S / 04</span>
        <h3>Finance &amp; crédit</h3>
        <p>Crédit immobilier, regroupement de crédits, rachat de crédit. Dossiers cadrés dès la prise de contact.</p>
        <span class="link-arrow">Voir ce secteur <span class="arw" aria-hidden="true">&rarr;</span></span>
      </a>
      <a class="card" data-clip href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
        <span class="card-idx grad-label">S / 05</span>
        <h3>Télécom &amp; énergie</h3>
        <p>Prospects en démarche active de changement de fournisseur, box, mobile ou contrat d'énergie.</p>
        <span class="link-arrow">Voir ce secteur <span class="arw" aria-hidden="true">&rarr;</span></span>
      </a>
      <a class="card" data-clip href="https://jj-computer.fr/achat-leads-qualifies-secteurs/">
        <span class="card-idx grad-label">S / 06</span>
        <h3>Automobile</h3>
        <p>LOA, leasing, véhicules neufs et occasion. Le mode de financement souhaité est qualifié en amont.</p>
        <span class="link-arrow">Voir ce secteur <span class="arw" aria-hidden="true">&rarr;</span></span>
      </a>
    </div>
  </div>
</section>

<!-- ============================ CANAUX ============================ -->
<section class="section rule-top" id="canaux">
  <div class="wrap">
    <div class="sec-head">
      <span class="sec-num">04</span>
      <h2 class="sec-title">Nos canaux <span class="serif-i">d'acquisition</span></h2>
      <p class="sec-lede">Quatre sources complémentaires, arbitrées selon votre secteur et votre coût par lead cible.</p>
    </div>

    <div class="channels-grid" data-cards>
      <article class="channel" data-clip>
        <span class="num grad-num">01</span>
        <h3>Meta Ads</h3>
        <p>Facebook &amp; Instagram. Ciblage comportemental et lead forms natifs, pour un remplissage sans friction.</p>
      </article>
      <article class="channel" data-clip>
        <span class="num grad-num">02</span>
        <h3>Google Ads</h3>
        <p>Search intent : le prospect cherche déjà votre service au moment où il vous découvre.</p>
      </article>
      <article class="channel" data-clip>
        <span class="num grad-num">03</span>
        <h3>TikTok Ads</h3>
        <p>CPL compétitif, particulièrement efficace sur la formation, les services locaux et le BTC.</p>
      </article>
      <article class="channel" data-clip>
        <span class="num grad-num">04</span>
        <h3>Display &amp; Native</h3>
        <p>Taboola et réseaux natifs, en haut de funnel, pour alimenter le volume et tester de nouvelles audiences.</p>
      </article>
    </div>
  </div>
</section>

<!-- ============================ POURQUOI ============================ -->
<section class="section rule-top" id="pourquoi">
  <div class="wrap why-in">
    <div class="why-sticky">
      <div class="sec-head" style="display:block;margin-bottom:0">
        <span class="sec-num">05</span>
        <h2 class="sec-title" style="margin-top:1rem">Pourquoi <span class="serif-i">JJ-Computer</span></h2>
        <p class="sec-lede" style="margin:1.5rem 0 0">Cinq engagements écrits avant le démarrage, pas après le premier litige.</p>
      </div>
    </div>

    <ul class="why-list">
      <li data-reveal>
        <div class="why-row">
          <span class="n">01</span>
          <div>
            <h3>Des leads exclusifs</h3>
            <p>Un lead exclusif n'est jamais revendu à plusieurs acheteurs. Lorsque des leads partagés sont proposés, ils sont <b>identifiés comme tels et tarifés différemment</b>.</p>
          </div>
        </div>
      </li>
      <li data-reveal>
        <div class="why-row">
          <span class="n">02</span>
          <div>
            <h3>Livraison en temps réel</h3>
            <p>Le lead arrive chez vous à la seconde où il est qualifié. Un rappel dans les <b>30 minutes multiplie par 7 le taux de conversion</b>.</p>
          </div>
        </div>
      </li>
      <li data-reveal>
        <div class="why-row">
          <span class="n">03</span>
          <div>
            <h3>Ciblage géographique précis</h3>
            <p>Vous définissez votre périmètre d'intervention, nous le respectons. <b>Aucun lead hors périmètre ne vous est facturé.</b></p>
          </div>
        </div>
      </li>
      <li data-reveal>
        <div class="why-row">
          <span class="n">04</span>
          <div>
            <h3>100% conforme RGPD</h3>
            <p>Consentement collecté, tracé et documenté pour chaque prospect. Un <b>DPA est disponible sur demande</b>.</p>
          </div>
        </div>
      </li>
      <li data-reveal>
        <div class="why-row">
          <span class="n">05</span>
          <div>
            <h3>Politique de remplacement</h3>
            <p>Lead non joignable, numéro incorrect, doublon : les cas de remplacement et leurs <b>règles sont définies en amont</b>, avant le démarrage.</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- ============================ FAQ ============================ -->
<section class="section rule-top" id="faq">
  <div class="wrap faq-in">
    <div class="why-sticky">
      <span class="sec-num">06</span>
      <h2 class="sec-title" style="margin-top:1rem">Questions <span class="serif-i">fréquentes</span></h2>
      <p class="sec-lede" style="margin:1.5rem 0 0">Une question qui n'est pas ici ? Écrivez-nous, réponse sous 24h.</p>
    </div>

    <div class="faq-list" id="faq-list">
      <div class="faq-item" data-reveal>
        <h3><button class="faq-q" aria-expanded="false"><span>Vos leads sont-ils vraiment exclusifs ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>Oui, selon la formule choisie. En <b>exclusif</b>, le lead n'est transmis qu'à un seul acheteur : vous. En <b>semi-exclusif</b>, il est partagé entre 2 à 3 acheteurs maximum, ce qui permet un coût par lead plus bas. Le niveau d'exclusivité est toujours précisé en amont, avant le démarrage, et il n'évolue jamais en cours de contrat.</p></div>
      </div>
      <div class="faq-item" data-reveal>
        <h3><button class="faq-q" aria-expanded="false"><span>Quel délai pour recevoir mes premiers leads ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>En général 24 à 48 heures après validation de votre secteur, de votre zone géographique et de vos critères de qualification. Pour des volumes importants, nous construisons un plan de lancement personnalisé afin de monter en puissance progressivement, sans dégrader la qualité des prospects.</p></div>
      </div>
      <div class="faq-item" data-reveal>
        <h3><button class="faq-q" aria-expanded="false"><span>Comment je reçois les leads concrètement ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>En temps réel, au choix : par email dès qu'un prospect est qualifié, sous forme de fichier selon la fréquence qui vous convient, ou directement dans votre CRM via une intégration webhook/API. La plupart de nos partenaires combinent notification email et injection CRM.</p></div>
      </div>
      <div class="faq-item" data-reveal>
        <h3><button class="faq-q" aria-expanded="false"><span>Que se passe-t-il si un lead est invalide ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>Chaque offre inclut une politique de contrôle et de remplacement : lead non joignable après plusieurs tentatives, numéro incorrect, doublon. Les règles exactes, nombre de tentatives, délai de signalement et modalités de remplacement, sont définies avec vous avant le démarrage.</p></div>
      </div>
      <div class="faq-item" data-reveal>
        <h3><button class="faq-q" aria-expanded="false"><span>Puis-je cibler une ville ou un département précis ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>Oui. Le ciblage peut se faire à la ville, au code postal, au département ou à la région. Plus le périmètre est resserré, plus le volume disponible se réduit : nous arbitrons ensemble entre volume et précision pour trouver le bon équilibre.</p></div>
      </div>
      <div class="faq-item" data-reveal>
        <h3><button class="faq-q" aria-expanded="false"><span>Mon secteur est-il couvert ?</span><span class="faq-ico" aria-hidden="true"></span></button></h3>
        <div class="faq-a"><p>Nous couvrons aujourd'hui la rénovation énergétique, l'immobilier, l'assurance, la finance &amp; crédit, le télécom &amp; énergie et l'automobile. D'autres secteurs peuvent être développés sur demande : présentez-nous votre activité, nous vous dirons rapidement si nous pouvons produire du volume qualifié.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ CTA FINAL ============================ -->
<section class="cta" id="devis">
  <canvas class="cta-lines" id="cta-gl" aria-hidden="true"></canvas>
  <div class="wrap">
    <div class="cta-grid">
      <div>
        <p class="mention" data-reveal>Prospects exclusifs · Livraison sous 48h · Conformes RGPD</p>
        <h2 data-reveal>Prêt à développer <span class="serif-i">votre activité ?</span></h2>
        <p class="lede" data-reveal>Recevez vos premiers leads dès cette semaine.</p>
      </div>
      <div data-reveal>
        <a class="btn" href="https://jj-computer.fr/contact/">Demander un devis <span class="arw" aria-hidden="true">&rarr;</span></a>
        <p class="after">Réponse sous 24h · Aucun engagement</p>
      </div>
    </div>
  </div>
</section>

</main>

<!-- ============================ FOOTER ============================ -->
<footer class="footer">
  <div class="wrap">
    <div class="f-grid">
      <div class="f-brand">
        <a class="brand" href="https://jj-computer.fr">
          <span class="dot" aria-hidden="true"></span><span class="mark">JJ<em>.</em>Computer</span>
        </a>
        <p>Fournisseur français de leads qualifiés exclusifs. Acquisition multi-canal, qualification stricte et livraison en temps réel, partout en France.</p>
        <a class="f-mail" href="mailto:leads@jj-computer.fr">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="1.5"/><path d="M3 6.5l9 6 9-6"/></svg>
          <span class="link-underline">leads@jj-computer.fr</span>
        </a>
      </div>

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
      <svg viewBox="0 0 160 44" role="img" aria-label="Logo JJ.Computer" xmlns="http://www.w3.org/2000/svg">
        <rect x="0.6" y="0.6" width="158.8" height="42.8" rx="2" fill="none" stroke="currentColor" stroke-opacity=".3"/>
        <text x="18" y="29" font-family="Instrument Serif, Georgia, serif" font-style="italic" font-size="23" fill="currentColor">JJ</text>
        <circle cx="54" cy="25.5" r="2.4" fill="#E0512B"/>
        <text x="64" y="29" font-family="Inter, Helvetica, Arial, sans-serif" font-size="14" letter-spacing="-.4" fill="currentColor">Computer</text>
      </svg>
    </a>
  </div>

  <div class="wrap">
    <div class="f-bottom">
      <p><a class="link-underline" href="https://jj-computer.fr">© 2026 JJ-Computer.fr</a> — Tous droits réservés</p>
      <span class="rgpd">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 3l7 3v5.5c0 4.5-3 8.2-7 9.5-4-1.3-7-5-7-9.5V6l7-3z"/></svg>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js"></script>
<script>
(function () {
  'use strict';
  var root = document.documentElement;
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* Filet de sécurité : si GSAP n'a pas chargé, tout reste visible. */
  if (!window.gsap || reduced) {
    root.classList.add('no-motion');
  }
  if (!window.gsap) {
    root.classList.remove('js');
  }

  /* ---------------- Menu mobile + nav ---------------- */
  var nav = document.getElementById('nav');
  var burger = document.getElementById('burger');
  var menu = document.getElementById('mobile-menu');
  var menuOpen = false;

  function setMenu(open) {
    menuOpen = open;
    root.classList.toggle('menu-open', open);
    burger.setAttribute('aria-expanded', String(open));
    burger.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');
    menu.setAttribute('aria-hidden', String(!open));
    document.body.style.overflow = open ? 'hidden' : '';
    if (window.gsap && !reduced) {
      gsap.to(menu, {
        clipPath: open ? 'inset(0% 0% 0% 0%)' : 'inset(0% 0% 100% 0%)',
        duration: 0.65, ease: 'expo.inOut'
      });
      if (open) {
        gsap.fromTo(menu.children,
          { y: 24, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.5, stagger: 0.06, delay: 0.18, ease: 'power2.out' });
      }
    } else {
      menu.style.clipPath = open ? 'inset(0% 0% 0% 0%)' : 'inset(0% 0% 100% 0%)';
    }
  }
  burger.addEventListener('click', function () { setMenu(!menuOpen); });
  menu.addEventListener('click', function (e) { if (e.target.closest('a')) setMenu(false); });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && menuOpen) setMenu(false); });

  function onScrollNav() { nav.classList.toggle('is-stuck', window.scrollY > 24); }
  onScrollNav();
  window.addEventListener('scroll', onScrollNav, { passive: true });

  if (!window.gsap) return;
  gsap.registerPlugin(ScrollTrigger);

  /* ---------------- FAQ ---------------- */
  gsap.utils.toArray('.faq-item').forEach(function (item, i) {
    var btn = item.querySelector('.faq-q');
    var panel = item.querySelector('.faq-a');
    panel.id = 'faq-panel-' + (i + 1);
    btn.setAttribute('aria-controls', panel.id);
    btn.addEventListener('click', function () {
      var open = item.classList.toggle('open');
      btn.setAttribute('aria-expanded', String(open));
      gsap.to(panel, {
        height: open ? 'auto' : 0, duration: reduced ? 0 : 0.55, ease: 'expo.out',
        onComplete: function () { ScrollTrigger.refresh(); }
      });
    });
  });


  /* ---------------- Smooth scroll (Lenis) ---------------- */
  var lenis = null;
  if (window.Lenis && !reduced) {
    lenis = new Lenis({ duration: 1.15, lerp: 0.09, wheelMultiplier: 1, smoothWheel: true });
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add(function (t) { lenis.raf(t * 1000); });
    gsap.ticker.lagSmoothing(0);
  }

  if (reduced) { ScrollTrigger.getAll().forEach(function (s) { s.kill(); }); return; }

  /* ---------------- Hero : ouverture ---------------- */
  var heroLines = gsap.utils.toArray('#hero-title .line > span');
  gsap.set(heroLines, { yPercent: 112 });

  gsap.set('[data-hero]', { opacity: 0, y: 18 });
  gsap.set('.trust-row li', { opacity: 0, y: 14 });

  var intro = gsap.timeline({ delay: 0.15, defaults: { ease: 'expo.out' } });
  intro.to(heroLines, { yPercent: 0, duration: 1.25, stagger: 0.09 })
       .to('.hero-eyebrow', { opacity: 1, y: 0, duration: 0.8 }, 0.05)
       .to('.hero-lede', { opacity: 1, y: 0, duration: 0.9 }, 0.55)
       .to('.hero-cta', { opacity: 1, y: 0, duration: 0.9 }, 0.68)
       .to('.trust-row', { opacity: 1, y: 0, duration: 0.6 }, 0.78)
       .to('.trust-row li', { opacity: 1, y: 0, duration: 0.7, stagger: 0.07 }, 0.82);

  /* Parallaxe légère du bloc hero */
  gsap.to('.hero-in', {
    yPercent: -12, opacity: 0.25, ease: 'none',
    scrollTrigger: { trigger: '.hero', start: 'top top', end: 'bottom top', scrub: 0.6 }
  });

  /* ---------------- Révélations génériques ---------------- */
  gsap.utils.toArray('[data-reveal]').forEach(function (el) {
    gsap.fromTo(el, { opacity: 0, y: 22 }, {
      opacity: 1, y: 0, duration: 0.8, ease: 'power3.out',
      scrollTrigger: { trigger: el, start: 'top 88%', once: true }
    });
  });

  /* Titres de section : masque vertical */
  gsap.utils.toArray('.sec-title').forEach(function (el) {
    gsap.fromTo(el,
      { clipPath: 'inset(0 0 105% 0)', y: 12 },
      {
        clipPath: 'inset(0 0 -5% 0)', y: 0, duration: 1.05, ease: 'expo.out',
        scrollTrigger: { trigger: el, start: 'top 90%', once: true }
      });
  });

  /* Cartes : révélation par clip-path, en cascade */
  gsap.utils.toArray('[data-cards]').forEach(function (grid) {
    gsap.to(grid.querySelectorAll('[data-clip]'), {
      clipPath: 'inset(0 0 0% 0)', duration: 1.1, ease: 'expo.out', stagger: 0.07,
      scrollTrigger: { trigger: grid, start: 'top 82%', once: true }
    });
  });

  /* ---------------- Ticker en boucle, réactif au scroll ---------------- */
  var track = document.getElementById('ticker');
  var tickerTween = gsap.to(track, { xPercent: -50, duration: 42, ease: 'none', repeat: -1 });
  var tickerBoost = { v: 1 };
  if (lenis) {
    lenis.on('scroll', function (e) {
      var v = Math.min(Math.abs(e.velocity || 0) / 12, 5);
      tickerBoost.v = 1 + v;
      tickerTween.timeScale(tickerBoost.v * ((e.direction || 1) < 0 ? -1 : 1));
      gsap.to(tickerBoost, {
        v: 1, duration: 1.1, ease: 'power2.out', overwrite: true,
        onUpdate: function () { tickerTween.timeScale(tickerBoost.v); }
      });
    });
  }
  var tickerEl = document.querySelector('.ticker');
  var tickerPaused = false;
  tickerEl.addEventListener('pointerenter', function () { if (!tickerPaused) gsap.to(tickerTween, { timeScale: 0.25, duration: 0.5 }); });
  tickerEl.addEventListener('pointerleave', function () { if (!tickerPaused) gsap.to(tickerTween, { timeScale: 1, duration: 0.5 }); });

  var tickerBtn = document.getElementById('ticker-pause');
  var ICON_PAUSE = '<rect x="6" y="4" width="4" height="16" rx="1"/><rect x="14" y="4" width="4" height="16" rx="1"/>';
  var ICON_PLAY = '<path d="M7 4.5l12 7.5-12 7.5z"/>';
  tickerBtn.addEventListener('click', function () {
    tickerPaused = !tickerPaused;
    tickerTween.paused(tickerPaused);
    tickerBtn.setAttribute('aria-pressed', String(tickerPaused));
    tickerBtn.setAttribute('aria-label', tickerPaused ? 'Reprendre le défilement des secteurs' : 'Mettre en pause le défilement des secteurs');
    tickerBtn.querySelector('svg').innerHTML = tickerPaused ? ICON_PLAY : ICON_PAUSE;
  });

  /* ---------------- Compteurs ---------------- */
  gsap.utils.toArray('[data-count]').forEach(function (el) {
    var target = parseFloat(el.getAttribute('data-count'));
    var obj = { v: 0 };
    gsap.to(obj, {
      v: target, duration: 2.1, ease: 'power2.out',
      scrollTrigger: { trigger: el, start: 'top 88%', once: true },
      onUpdate: function () { el.textContent = Math.round(obj.v).toString(); }
    });
  });
  /* Le chiffre écrit en toutes lettres se révèle en masque */
  gsap.utils.toArray('[data-word]').forEach(function (el) {
    gsap.fromTo(el, { clipPath: 'inset(0 100% 0 0)' }, {
      clipPath: 'inset(0 0% 0 0)', duration: 1.4, ease: 'expo.out',
      scrollTrigger: { trigger: el, start: 'top 88%', once: true }
    });
  });

  /* ---------------- Étapes : section épinglée + ligne de progression ---------------- */
  var mm = gsap.matchMedia();
  var steps = gsap.utils.toArray('[data-step]');
  var fill = document.getElementById('progress-fill');
  var labels = gsap.utils.toArray('#progress-labels li');

  function setActive(i) {
    labels.forEach(function (l, n) { l.classList.toggle('on', n === i); });
  }

  mm.add('(min-width: 901px)', function () {
    var stack = document.querySelector('.step-stack');
    var h = 0;
    steps.forEach(function (s) { h = Math.max(h, s.offsetHeight); });
    stack.style.height = h + 'px';
    stack.style.position = 'relative';
    steps.forEach(function (s) {
      s.style.position = 'absolute';
      s.style.inset = '0';
      s.style.width = '100%';
    });
    gsap.set(steps, { opacity: 0, y: 40 });
    gsap.set(steps[0], { opacity: 1, y: 0 });
    setActive(0);

    var tl = gsap.timeline({
      scrollTrigger: {
        trigger: '#methode',
        start: 'top top',
        end: '+=240%',
        pin: true,
        scrub: 0.7,
        anticipatePin: 1,
        onUpdate: function (self) {
          fill.style.height = (self.progress * 100).toFixed(2) + '%';
          setActive(Math.min(2, Math.floor(self.progress * 3.02)));
        }
      }
    });
    tl.to(steps[0], { opacity: 0, y: -40, duration: 0.8 }, 1)
      .fromTo(steps[1], { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 0.8 }, 1)
      .to(steps[1], { opacity: 0, y: -40, duration: 0.8 }, 2.2)
      .fromTo(steps[2], { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 0.8 }, 2.2)
      .to({}, { duration: 0.6 });

    return function () {
      stack.style.height = '';
      steps.forEach(function (s) { s.style.position = ''; s.style.inset = ''; s.style.width = ''; });
      gsap.set(steps, { clearProps: 'all' });
    };
  });

  mm.add('(max-width: 900px)', function () {
    steps.forEach(function (s) {
      gsap.fromTo(s, { opacity: 0, y: 26 }, {
        opacity: 1, y: 0, duration: 0.8, ease: 'power3.out',
        scrollTrigger: { trigger: s, start: 'top 85%', once: true }
      });
    });
  });

  /* ---------------- Profondeur au survol des cartes ---------------- */
  var canTilt = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
  if (canTilt) {
    gsap.utils.toArray('.card, .channel').forEach(function (el) {
      var rx = gsap.quickTo(el, 'rotationX', { duration: 0.6, ease: 'power3.out' });
      var ry = gsap.quickTo(el, 'rotationY', { duration: 0.6, ease: 'power3.out' });
      var tz = gsap.quickTo(el, 'z', { duration: 0.6, ease: 'power3.out' });
      gsap.set(el, { transformPerspective: 800, transformOrigin: 'center' });
      el.addEventListener('pointermove', function (e) {
        var r = el.getBoundingClientRect();
        var px = (e.clientX - r.left) / r.width - 0.5;
        var py = (e.clientY - r.top) / r.height - 0.5;
        ry(px * 7); rx(-py * 7); tz(18);
      });
      el.addEventListener('pointerleave', function () { rx(0); ry(0); tz(0); });
    });
  }

  /* ---------------- Recalage après chargement des polices ---------------- */
  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(function () { ScrollTrigger.refresh(); });
  }
  window.addEventListener('load', function () { ScrollTrigger.refresh(); });
})();
</script>

<script type="importmap">
{ "imports": { "three": "https://unpkg.com/three@0.160.1/build/three.module.js" } }
</script>
<script type="module">
/* ------------------------------------------------------------------
   WebGL, avec parcimonie.
   1. Hero  : champ de points qui ondule, traversé par des paquets
              vermillon (le flux de leads en temps réel).
   2. CTA   : le même champ, inversé sur fond encre.
   3. Cartes: un seul contexte partagé, déplacé de carte en carte au
              survol, qui distord légèrement la trame autour du curseur.
   ------------------------------------------------------------------ */
const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const fine = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

function webglOK() {
  try {
    const c = document.createElement('canvas');
    return !!(window.WebGLRenderingContext && (c.getContext('webgl') || c.getContext('experimental-webgl')));
  } catch (e) { return false; }
}
if (reduced || !webglOK()) { throw new Error('webgl skipped'); }

const THREE = await import('three');

const VERT = `
void main(){ gl_Position = vec4(position.xy, 0.0, 1.0); }
`;

const FIELD = `
precision mediump float;
uniform vec2 uRes; uniform float uTime; uniform vec2 uMouse;
uniform float uDark; uniform float uGrid; uniform float uAlpha;
void main(){
  vec2 p = gl_FragCoord.xy;
  vec2 uv = p / uRes;
  float grid = uGrid;
  vec2 id = floor(p / grid);
  vec2 cell = mod(p, grid) - grid * 0.5;
  float d = length(cell);

  float w = sin(id.x * 0.16 + id.y * 0.11 - uTime * 0.7) * 0.5 + 0.5;
  float r = 1.0 + w * 1.4;

  float md = length(p - uMouse);
  float lens = exp(-(md * md) / (2.0 * 170.0 * 170.0));
  r += lens * 2.2;

  float dotm = smoothstep(r, r - 1.3, d);

  float seed = fract(sin(id.y * 91.7) * 43758.5453);
  float speed = 0.05 + seed * 0.07;
  float px = fract(uTime * speed + seed);
  float cx = (id.x * grid) / uRes.x;
  float packet = smoothstep(0.055, 0.0, abs(cx - px)) * step(0.72, seed);

  float mask = mix(1.0, (smoothstep(0.12, 0.8, uv.x) * 0.78 + 0.22) * (smoothstep(0.05, 0.65, uv.y) * 0.65 + 0.35), 1.0 - uDark);
  if (uDark > 0.5) { mask = 0.5 + 0.5 * smoothstep(0.0, 0.9, uv.x); }

  vec3 ink = mix(vec3(0.063, 0.071, 0.086), vec3(0.937, 0.925, 0.898), uDark);
  vec3 acc = vec3(0.878, 0.318, 0.169);
  vec3 col = mix(ink, acc, packet);

  float a = dotm * ((0.15 + lens * 0.20) + packet * 0.75) * mask * uAlpha;
  if (a < 0.003) discard;
  gl_FragColor = vec4(col, a);
}
`;

const HOVER = `
precision mediump float;
uniform vec2 uRes; uniform float uTime; uniform vec2 uMouse; uniform float uEnter;
void main(){
  vec2 p = gl_FragCoord.xy;
  float d = distance(p, uMouse);
  float ripple = sin(d * 0.055 - uTime * 2.4) * exp(-d * 0.0055);
  vec2 dir = normalize(p - uMouse + vec2(0.001));
  vec2 q = p + dir * ripple * 11.0;

  float grid = 20.0;
  vec2 cell = mod(q, grid) - grid * 0.5;
  float dotm = smoothstep(1.7, 0.4, length(cell));
  float glow = exp(-d * 0.0038);

  vec3 warm = vec3(0.46, 0.17, 0.07);
  vec3 acc = vec3(0.941, 0.337, 0.42);
  vec3 col = mix(warm, acc, glow * 0.75);

  float a = (dotm * (0.10 + glow * 0.30) + glow * 0.07) * uEnter;
  if (a < 0.003) discard;
  gl_FragColor = vec4(col, a);
}
`;

/* --- bruit simplex 3D (Ashima Arts / Stefan Gustavson, MIT) --- */
const SNOISE = `
vec3 mod289(vec3 x){return x - floor(x*(1.0/289.0))*289.0;}
vec4 mod289(vec4 x){return x - floor(x*(1.0/289.0))*289.0;}
vec4 permute(vec4 x){return mod289(((x*34.0)+1.0)*x);}
vec4 taylorInvSqrt(vec4 r){return 1.79284291400159 - 0.85373472095314*r;}
float snoise(vec3 v){
  const vec2 C = vec2(1.0/6.0, 1.0/3.0);
  const vec4 D = vec4(0.0, 0.5, 1.0, 2.0);
  vec3 i  = floor(v + dot(v, C.yyy));
  vec3 x0 = v - i + dot(i, C.xxx);
  vec3 g = step(x0.yzx, x0.xyz);
  vec3 l = 1.0 - g;
  vec3 i1 = min(g.xyz, l.zxy);
  vec3 i2 = max(g.xyz, l.zxy);
  vec3 x1 = x0 - i1 + C.xxx;
  vec3 x2 = x0 - i2 + C.yyy;
  vec3 x3 = x0 - D.yyy;
  i = mod289(i);
  vec4 p = permute(permute(permute(
             i.z + vec4(0.0, i1.z, i2.z, 1.0))
           + i.y + vec4(0.0, i1.y, i2.y, 1.0))
           + i.x + vec4(0.0, i1.x, i2.x, 1.0));
  float n_ = 0.142857142857;
  vec3 ns = n_ * D.wyz - D.xzx;
  vec4 j = p - 49.0 * floor(p * ns.z * ns.z);
  vec4 x_ = floor(j * ns.z);
  vec4 y_ = floor(j - 7.0 * x_);
  vec4 x = x_ * ns.x + ns.yyyy;
  vec4 y = y_ * ns.x + ns.yyyy;
  vec4 h = 1.0 - abs(x) - abs(y);
  vec4 b0 = vec4(x.xy, y.xy);
  vec4 b1 = vec4(x.zw, y.zw);
  vec4 s0 = floor(b0)*2.0 + 1.0;
  vec4 s1 = floor(b1)*2.0 + 1.0;
  vec4 sh = -step(h, vec4(0.0));
  vec4 a0 = b0.xzyw + s0.xzyw*sh.xxyy;
  vec4 a1 = b1.xzyw + s1.xzyw*sh.zzww;
  vec3 p0 = vec3(a0.xy, h.x);
  vec3 p1 = vec3(a0.zw, h.y);
  vec3 p2 = vec3(a1.xy, h.z);
  vec3 p3 = vec3(a1.zw, h.w);
  vec4 norm = taylorInvSqrt(vec4(dot(p0,p0), dot(p1,p1), dot(p2,p2), dot(p3,p3)));
  p0 *= norm.x; p1 *= norm.y; p2 *= norm.z; p3 *= norm.w;
  vec4 m = max(0.6 - vec4(dot(x0,x0), dot(x1,x1), dot(x2,x2), dot(x3,x3)), 0.0);
  m = m * m;
  return 42.0 * dot(m*m, vec4(dot(p0,x0), dot(p1,x1), dot(p2,x2), dot(p3,x3)));
}
`;

const BLOB_VERT = SNOISE + `
uniform float uTime; uniform float uAmp; uniform float uFreq; uniform float uScroll;
varying float vN; varying vec3 vNrm;

float fbm(vec3 p){
  float n1 = snoise(p * uFreq + vec3(0.0, 0.0, uTime * 0.17));
  float n2 = snoise(p * (uFreq * 1.75) + vec3(uTime * 0.11, 0.0, 0.0)) * 0.28;
  return n1 + n2;
}
vec3 dispPos(vec3 sp, float amp){ return sp * (1.0 + fbm(sp) * amp); }

void main(){
  float amp = uAmp + uScroll * 0.20;
  vec3 sp = normalize(position);
  vec3 tang = normalize(abs(sp.y) < 0.99 ? cross(sp, vec3(0.0, 1.0, 0.0)) : vec3(1.0, 0.0, 0.0));
  vec3 bitan = cross(sp, tang);
  float e = 0.04;
  vec3 P  = dispPos(sp, amp);
  vec3 Pt = dispPos(normalize(sp + tang * e), amp);
  vec3 Pb = dispPos(normalize(sp + bitan * e), amp);
  vec3 nrm = normalize(cross(Pt - P, Pb - P));
  if (dot(nrm, sp) < 0.0) nrm = -nrm;

  vN = fbm(sp);
  vNrm = normalize(normalMatrix * nrm);
  gl_Position = projectionMatrix * modelViewMatrix * vec4(P, 1.0);
}
`;

const BLOB_FRAG = `
precision mediump float;
uniform vec3 cA; uniform vec3 cB; uniform vec3 cC; uniform float uFade;
varying float vN; varying vec3 vNrm;
void main(){
  vec3 N = normalize(vNrm);
  vec3 L = normalize(vec3(-0.30, 0.62, 0.72));
  float lam = clamp(dot(N, L) * 0.5 + 0.5, 0.0, 1.0);
  float t = clamp(vN * 0.55 + 0.5, 0.0, 1.0);

  vec3 col = mix(cA, cB, smoothstep(0.22, 0.62, t));
  col = mix(col, cC, smoothstep(0.52, 0.95, t) * 0.85);
  col *= 0.84 + 0.30 * lam;

  float fres = pow(1.0 - abs(dot(N, vec3(0.0, 0.0, 1.0))), 2.4);
  col += fres * vec3(0.26, 0.13, 0.03);

  gl_FragColor = vec4(col, uFade);
}
`;

/* Blob organique : morphing continu par bruit, parallaxe souris, distorsion au scroll. */
function createBlob(renderer) {
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(42, 1, 0.1, 100);
  camera.position.set(0, 0, 4.2);
  const group = new THREE.Group();
  scene.add(group);

  const u = {
    uTime: { value: 0 }, uAmp: { value: 0.26 }, uFreq: { value: 0.72 },
    uScroll: { value: 0 }, uFade: { value: 1 },
    cA: { value: new THREE.Color('#E8400C') },
    cB: { value: new THREE.Color('#F0566B') },
    cC: { value: new THREE.Color('#FFC24A') }
  };

  /* moins de sommets sur petit écran : le blob fait 9 appels de bruit par sommet */
  const detail = window.innerWidth < 760 ? 16 : 26;
  const blob = new THREE.Mesh(
    new THREE.IcosahedronGeometry(1, detail),
    new THREE.ShaderMaterial({ vertexShader: BLOB_VERT, fragmentShader: BLOB_FRAG, uniforms: u, transparent: true })
  );
  group.add(blob);

  const aim = { x: 0, y: 0 };
  const cur = { x: 0, y: 0 };
  let baseY = 0.12;

  return {
    uniforms: u,
    pointer(nx, ny) { aim.x = nx; aim.y = ny; },
    scroll(p) { u.uScroll.value = p; },
    resize(w, h) {
      camera.aspect = w / h;
      camera.updateProjectionMatrix();
      if (w < 760) {
        group.position.x = 0.52; baseY = 1.30;
        group.scale.setScalar(0.34);
        u.uFade.value = 0.72;
      } else if (w < 1100) {
        group.position.x = 1.28; baseY = 0.22;
        group.scale.setScalar(0.56);
        u.uFade.value = 0.95;
      } else {
        group.position.x = 1.56; baseY = 0.12;
        group.scale.setScalar(0.62);
        u.uFade.value = 1;
      }
    },
    render(t) {
      u.uTime.value = t;
      cur.x += (aim.x - cur.x) * 0.045;
      cur.y += (aim.y - cur.y) * 0.045;
      group.rotation.y = t * 0.055 + cur.x * 0.4;
      group.rotation.x = cur.y * -0.28;
      group.position.y = baseY + Math.sin(t * 0.35) * 0.07;
      camera.position.z = 4.2 - u.uScroll.value * 0.8;
      camera.position.x = cur.x * -0.1;
      renderer.render(scene, camera);
    }
  };
}

function makeQuad(canvas, frag, extra) {
  const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: false, powerPreference: 'low-power' });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 1.75));
  const scene = new THREE.Scene();
  const camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);
  const uniforms = Object.assign({
    uRes: { value: new THREE.Vector2(1, 1) },
    uTime: { value: 0 },
    uMouse: { value: new THREE.Vector2(-9999, -9999) }
  }, extra || {});
  const mesh = new THREE.Mesh(
    new THREE.PlaneGeometry(2, 2),
    new THREE.ShaderMaterial({ vertexShader: VERT, fragmentShader: frag, uniforms, transparent: true, depthTest: false, depthWrite: false })
  );
  scene.add(mesh);
  const api = {
    uniforms, renderer,
    resize(w, h) {
      if (w <= 0 || h <= 0) return;
      renderer.setSize(w, h, false);
      const dpr = renderer.getPixelRatio();
      uniforms.uRes.value.set(w * dpr, h * dpr);
    },
    render(t) { uniforms.uTime.value = t; renderer.render(scene, camera); }
  };
  return api;
}

/* ---------- 1. Hero ---------- */
const heroCanvas = document.getElementById('hero-gl');
const heroSec = document.getElementById('hero');
const hero = makeQuad(heroCanvas, FIELD, {
  uDark: { value: 0 }, uGrid: { value: 32 }, uAlpha: { value: 0.75 }
});
/* la trame et le blob partagent un seul contexte : deux passes, un seul canvas */
hero.renderer.autoClear = false;
const blob = createBlob(hero.renderer);

function sizeHero() {
  const w = heroSec.clientWidth, h = heroSec.clientHeight;
  hero.resize(w, h);
  blob.resize(w, h);
}
sizeHero();

heroSec.addEventListener('pointermove', (e) => {
  const r = heroSec.getBoundingClientRect();
  const dpr = hero.renderer.getPixelRatio();
  hero.uniforms.uMouse.value.set((e.clientX - r.left) * dpr, (r.height - (e.clientY - r.top)) * dpr);
  blob.pointer(((e.clientX - r.left) / r.width) * 2 - 1, ((e.clientY - r.top) / r.height) * 2 - 1);
});
heroSec.addEventListener('pointerleave', () => {
  hero.uniforms.uMouse.value.set(-9999, -9999);
  blob.pointer(0, 0);
});

/* le scroll creuse la distorsion et rapproche la caméra */
function onHeroScroll() {
  const p = Math.min(Math.max(window.scrollY / Math.max(heroSec.clientHeight, 1), 0), 1);
  blob.scroll(p);
}
onHeroScroll();
window.addEventListener('scroll', onHeroScroll, { passive: true });

/* ---------- 2. CTA ---------- */
const ctaCanvas = document.getElementById('cta-gl');
const ctaSec = document.getElementById('devis');
const cta = makeQuad(ctaCanvas, FIELD, {
  uDark: { value: 1 }, uGrid: { value: 26 }, uAlpha: { value: 0.85 }
});
function sizeCta() { cta.resize(ctaSec.clientWidth, ctaSec.clientHeight); }
sizeCta();

/* ---------- 3. Survol des cartes : un seul contexte partagé ---------- */
let hover = null, hoverCanvas = null, hoverTarget = null, hoverEnter = 0, hoverAim = 0;
if (fine) {
  hoverCanvas = document.createElement('canvas');
  hoverCanvas.className = 'gl-hover';
  hoverCanvas.setAttribute('aria-hidden', 'true');
  hover = makeQuad(hoverCanvas, HOVER, { uEnter: { value: 0 } });

  document.querySelectorAll('.card, .channel').forEach((el) => {
    el.addEventListener('pointerenter', () => {
      hoverTarget = el;
      el.appendChild(hoverCanvas);
      const r = el.getBoundingClientRect();
      hover.resize(r.width, r.height);
      hoverCanvas.style.opacity = '1';
      hoverAim = 1;
    });
    el.addEventListener('pointermove', (e) => {
      if (hoverTarget !== el) return;
      const r = el.getBoundingClientRect();
      const dpr = hover.renderer.getPixelRatio();
      hover.uniforms.uMouse.value.set((e.clientX - r.left) * dpr, (r.height - (e.clientY - r.top)) * dpr);
    });
    el.addEventListener('pointerleave', () => {
      if (hoverTarget === el) { hoverAim = 0; hoverCanvas.style.opacity = '0'; }
    });
  });
}

/* ---------- visibilité + boucle unique ---------- */
let heroVisible = true, ctaVisible = false;
if ('IntersectionObserver' in window) {
  const io = new IntersectionObserver((entries) => {
    entries.forEach((en) => {
      if (en.target === heroSec) heroVisible = en.isIntersecting;
      if (en.target === ctaSec) ctaVisible = en.isIntersecting;
    });
  }, { rootMargin: '80px' });
  io.observe(heroSec); io.observe(ctaSec);
}

let started = false;
const clock = new THREE.Clock();
function loop() {
  const t = clock.getElapsedTime();
  if (heroVisible) {
    hero.renderer.clear();
    hero.render(t);
    blob.render(t);
  }
  if (ctaVisible) cta.render(t);
  if (hover) {
    hoverEnter += (hoverAim - hoverEnter) * 0.09;
    hover.uniforms.uEnter.value = hoverEnter;
    if (hoverEnter > 0.004) hover.render(t);
  }
  if (!started) { started = true; heroCanvas.classList.add('ready'); }
  requestAnimationFrame(loop);
}
requestAnimationFrame(loop);

let rt;
window.addEventListener('resize', () => {
  clearTimeout(rt);
  rt = setTimeout(() => {
    sizeHero(); sizeCta();
    if (hover && hoverTarget) {
      const r = hoverTarget.getBoundingClientRect();
      hover.resize(r.width, r.height);
    }
  }, 140);
});
</script>

<?php wp_footer(); ?>
</body>
</html>
