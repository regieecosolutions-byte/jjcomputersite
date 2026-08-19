# JJ-Computer.fr — refonte de la page d'accueil

Page unique, autonome : `index.html`. Aucune étape de build.

## Prévisualiser

```bash
cd ~/Downloads/jj-computer-refonte && python3 -m http.server 4177
```

Puis http://localhost:4177/ (ouvrir le fichier en `file://` marche aussi, mais le module
Three.js est plus fiable via HTTP).

## Système de design

| | |
|---|---|
| Encre | `#101216` |
| Papier | `#F4F2ED` |
| Vermillon (libellés, filets, signaux) | `#C93A18` |
| Chaud vif (blob, halos, lavis) | `#E8400C` → `#F0566B` → `#FFC24A` |
| Dégradé CTA | `#B32D08` → `#D63706` → `#C2354F` |
| Dégradé chiffres | `#EE4A0A` → `#D93A3F` → `#B0295E` |
| Titres / interface | Inter |
| Accents éditoriaux | Instrument Serif italique |
| Étiquettes, chiffres, méta | JetBrains Mono |

Tout est en variables CSS dans le `:root` de `index.html`.

## Dépendances (CDN)

- GSAP 3.13 + ScrollTrigger (cdnjs)
- Lenis 1.1.20 (unpkg) — scroll inertiel
- Three.js 0.160 (unpkg, import map ES module)

Pour un site en production, héberger ces trois fichiers en local plutôt que via CDN.

## Mouvement

- Ouverture du hero : titre révélé ligne par ligne sous masque.
- Parallaxe légère du bloc hero au scroll.
- Titres de section révélés par `clip-path`, cartes révélées en cascade.
- Ticker des secteurs : boucle infinie, vitesse indexée sur la vélocité du scroll,
  ralenti au survol, bouton pause (WCAG 2.2.2).
- Compteurs animés sur les statistiques (48h, 6+, 100%).
- Section « Comment ça marche » épinglée : les 3 étapes défilent en place pendant que
  la ligne de progression se dessine et que les libellés s'activent. Désactivé sous 900px.
- WebGL (Three.js) :
  - hero : blob organique en morphing continu (bruit simplex 3D sur les sommets, normales
    recalculées par différences finies pour un vrai volume), dégradé orange → corail → doré,
    parallaxe douce à la souris, distorsion et rapprochement caméra au scroll. Il partage le
    canvas du hero avec la trame de points : deux passes, un seul contexte WebGL ;
  - hero et CTA final : trame de points qui ondule, traversée par des paquets vermillon
    (métaphore du flux de leads en temps réel) ;
  - cartes secteurs et canaux : un seul contexte WebGL partagé, déplacé de carte en carte
    au survol, qui distord la trame autour du curseur, doublé d'une légère inclinaison 3D.

`prefers-reduced-motion: reduce` coupe Lenis, GSAP et le WebGL, et affiche la page
dans son état final. Sans JavaScript, tout le contenu reste visible (réponses de la FAQ
comprises).

## SEO

`title`, meta description, keywords, Open Graph, canonical et JSON-LD Organization
repris à l'identique. Un bloc JSON-LD `FAQPage` a été ajouté à partir des six questions
déjà présentes sur la page.

## À remplacer avant mise en ligne

Le logo réduit du bas de page est un SVG provisoire (monogramme « JJ.Computer »).
Remplacer le `<svg>` dans `.f-logo` par `<img src="…" alt="JJ-Computer.fr" width="…" height="…">`
avec le fichier officiel.
