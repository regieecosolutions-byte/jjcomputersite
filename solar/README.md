# JJ-Computer.fr — direction « Solar Flare »

Troisième direction artistique, repartie de zéro : noir-violet velouté `#0B0A14`,
dégradé signature magenta → orange → doré, cyan électrique en contrepoint,
respirations en blanc cassé chaud `#F5F1EA`.

## Fichiers

| Fichier | Rôle |
|---|---|
| `index.html` | Structure, contenu intégral repris de la version en ligne, SEO (title, meta, OG, canonical, JSON-LD Organization + FAQPage) |
| `styles.css` | Système Solar Flare : verre, dégradés, typo XXL, respirations claires arrondies |
| `app.js` | GSAP + ScrollTrigger + Lenis : shader de fond, reveals, pins, ticker, magnétisme, dashboard |
| `sectors-3d.js` | Module Three.js : 6 objets 3D des cartes secteurs (un seul contexte WebGL, rendu par ciseaux) |

## Prévisualiser

```bash
cd ~/Documents/jjcomputersite && python3 -m http.server 4177
# → http://localhost:4177/solar/
```

Modes de test : `?static` force le chemin « motion réduite » (page complète sans
animation), `&qa` neutralise le `min-height:100svh` du hero pour les captures
pleine page.

## Système de design

| | |
|---|---|
| Fond principal | `#0B0A14` (noir-violet), respirations `#F5F1EA` |
| Dégradé signature | `linear-gradient(135deg,#FF2E63,#FF6B35,#FFC145)` |
| Contrepoint données | `#4CC9F0` (cyan) |
| Succès (badges, avec libellé) | `#39FF88` (menthe) |
| Titres | Syne 700/800 |
| Texte | DM Sans |
| Méta, étiquettes | DM Mono |

## Composants adaptés de 21st.dev (MCP Magic)

- **Mesh Gradient Shader** (nlace-com) → fond WebGL du hero et du CTA final,
  palette recolorée Solar Flare, blob principal qui suit la souris, grain,
  vignette. WebGL 1, DPR plafonné à 1.5, rendu coupé hors viewport.
- **Tilt Card** (tom_ui) → tilt 3D + spotlight des cartes secteurs, du dashboard
  et des cartes canaux (pointeur fin uniquement).
- Patterns boutons magnétiques, word-stagger blur→net, marquee et accordéon
  repris des fiches de la bibliothèque et réécrits en vanilla.

## Mouvement

- Intro hero : cascade mot à mot blur→net, dégradé continu recalculé par mot,
  halo de titre, dashboard qui se redresse en 3D puis courbe cyan qui se dessine,
  notifications de leads en boucle, compteur qui s'incrémente.
- « Comment ça marche » épinglé : ligne de progression dégradée + panneaux en
  fondu (desktop ≥ 900px).
- Secteurs : galerie horizontale épinglée au scroll (desktop), objets 3D
  Three.js par carte, accélération de rotation au survol.
- Ticker : vitesse indexée sur la vélocité Lenis + skew, bouton pause
  (WCAG 2.2.2).
- Stats : count-up avec flash de glow.
- CTA magnétiques, dégradé animé, flèche décalée au survol.

## Accessibilité / robustesse

- `prefers-reduced-motion` (ou `?static`) : page statique complète — compteurs
  à leur valeur finale, panneaux du process empilés, secteurs en grille,
  shaders et 3D coupés.
- Sans JavaScript : tout le contenu reste visible (FAQ en `<details>` natifs,
  grille secteurs, valeurs finales dans le HTML).
- Menthe/cyan validés (contraste ≥ 3:1 sur fond sombre, séparation CVD) ;
  la menthe n'est jamais une couleur seule (icône + libellé « Qualifié »).

## Avant mise en production

- Héberger polices (Syne, DM Sans, DM Mono) et bibliothèques (GSAP,
  ScrollTrigger, Lenis, Three.js) en local, comme fait pour le thème WordPress
  des deux autres directions (RGPD + robustesse).
- Remplacer le logo texte par le fichier officiel si souhaité.
