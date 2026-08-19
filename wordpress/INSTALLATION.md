# Mettre la refonte en ligne sur jj-computer.fr (WordPress)

Ton site : WordPress 6.9.7, thème **Hello Elementor**, avec Elementor Pro, Fluent Forms,
Complianz (bandeau cookies) et WP Statistics.

Ce paquet est un **thème enfant**. Il n'écrase rien : il ajoute un modèle de page.
Le blog, la page Secteurs, le formulaire de contact et le bandeau cookies continuent
de fonctionner exactement comme avant.

---

## 1. Sauvegarde (2 minutes, à ne pas sauter)

Avant toute manipulation sur un site en production, fais une sauvegarde complète
(base de données + fichiers) depuis ton hébergeur ou une extension type UpdraftPlus.

## 2. Installer le thème enfant

1. Dans l'administration WordPress : **Apparence → Thèmes → Ajouter un thème → Téléverser un thème**
2. Choisis le fichier `jj-refonte-child.zip`, puis **Installer**
3. Clique sur **Activer**

À l'activation, ton site garde exactement la même apparence : un thème enfant de
Hello Elementor hérite de tout le parent. Seul un nouveau modèle de page apparaît.

> Si WordPress refuse le fichier au motif que le thème parent est absent, vérifie que
> le thème **Hello Elementor** est bien installé (il l'est, c'est ton thème actuel).

## Deux directions disponibles

Depuis la version 1.2.0, le thème propose **deux modèles de page d'accueil**. Tu choisis
lequel appliquer à une page, et tu peux même les publier tous les deux sur des adresses
différentes pour les comparer avant de trancher.

| Modèle | Direction |
|---|---|
| **Accueil refonte JJ** | Éditorial : papier chaud, encre, accent vermillon, blob 3D dans le hero. C'est la version actuellement en ligne. |
| **Accueil Apple JJ** | Blanc et gris clair, typographie et palette Apple, hero avec tableau de bord flottant, objets 3D dans les secteurs. |

La procédure ci-dessous est identique pour les deux : seule change l'entrée choisie dans
le menu **Modèle**.

## 3. Créer la page de test

1. **Pages → Ajouter**
2. Titre : `Refonte` (l'adresse sera `https://jj-computer.fr/refonte/`)
3. Dans la colonne de droite, section **Attributs de page** → **Modèle** :
   choisis **Accueil refonte JJ** ou **Accueil Apple JJ**
4. Ne mets aucun contenu dans l'éditeur : la page est entièrement portée par le modèle
5. **Publier**

Ouvre `https://jj-computer.fr/refonte/` et vérifie sur ordinateur **et** sur mobile.
Tant que cette page n'est pas l'accueil du site, elle est automatiquement en `noindex` :
Google ne l'indexera pas et tu ne crées pas de contenu dupliqué.

## 4. Basculer l'accueil (quand tu as validé)

**Réglages → Lecture → Votre page d'accueil affiche** → coche **Une page statique**,
puis choisis `Refonte` comme **Page d'accueil**. Enregistre.

Le `noindex` disparaît de lui-même, et WordPress produit le canonical
`https://jj-computer.fr/` attendu.

### Revenir en arrière

Même écran, tu remets l'ancienne page d'accueil. L'opération prend dix secondes et
ne détruit rien.

---

## Ce que contient le paquet

| Fichier | Rôle |
|---|---|
| `style.css` | En-tête du thème enfant (déclare Hello Elementor comme parent) |
| `functions.php` | Charge les styles, écarte ceux d'Elementor sur cette page, produit titre, meta, Open Graph et JSON-LD |
| `template-accueil-refonte.php` | Le modèle : structure de la page et scripts d'animation |
| `assets/refonte.css` | Toute la mise en forme |

Le modèle appelle `wp_head()` et `wp_footer()`, donc **Complianz et WP Statistics
s'injectent normalement** : le bandeau de consentement et le suivi restent en place.

## Mettre à jour le thème (version 1.1.0 et suivantes)

Même chemin que pour l'installation : **Apparence → Thèmes → Ajouter un thème →
Téléverser un thème**, choisis le nouveau ZIP, puis **Installer**. WordPress détecte
qu'une version est déjà présente et affiche un tableau comparatif : clique sur
**Remplacer l'actuel par celui téléversé**. Ta page et tes réglages sont conservés.

### Ce qu'apporte la 1.2.0

Le second modèle, **Accueil Apple JJ**, avec ses propres styles (`assets/apple.css`) et
ses objets 3D. Il n'utilise aucune police téléchargée : la pile SF Pro d'Apple est déjà
présente sur les appareils Apple et retombe sur Helvetica ailleurs. Il partage les mêmes
bibliothèques locales que l'autre modèle, et les mêmes réglages SEO côté Yoast.

### Ce que corrige la 1.1.1

Sur mobile, la page débordait d'environ 47 px vers la droite : le navigateur élargissait
le viewport de mise en page jusqu'à la piste du ticker, et l'écran s'ouvrait décalé.
`overflow-x: hidden` posé sur le seul `body` ne suffit pas à l'empêcher. La règle passe
en `overflow-x: clip` sur `html` et `body`, avec `hidden` conservé en repli pour Safari 15
et antérieurs. Mesuré avant/après : largeur de défilement 437 px, désormais 390 px sur un
écran de 390 px.

### Ce que corrige la 1.1.0

Le site utilise **Yoast SEO**, qui produit lui aussi titre, description, Open Graph,
canonical et graphe schema.org. En 1.0.0, le thème produisait les siens en parallèle :
sur la page de test, cela donnait deux balises `og:title`, deux balises `robots`
contradictoires et deux blocs `Organization`.

Désormais, quand Yoast est actif, le thème ne produit plus ces balises : il **alimente
Yoast** par ses filtres, avec le titre et la description validés. Yoast reste seul
maître à bord, et la mise en `noindex` de la page de test passe aussi par lui. Sans
Yoast, le thème reprend la main et produit tout lui-même.

## Aucune dépendance externe

Les polices (Inter, Instrument Serif, JetBrains Mono) et les bibliothèques d'animation
(GSAP, ScrollTrigger, Lenis, Three.js) sont **hébergées sur ton domaine**, dans
`assets/fonts/` et `assets/vendor/`. La page ne fait aucune requête vers Google, cdnjs
ou unpkg.

Deux conséquences concrètes :

- **RGPD.** Le chargement des Google Fonts depuis les serveurs de Google transmet
  l'adresse IP du visiteur ; la CNIL le traite comme un transfert de données. Ici la
  question ne se pose plus, ce qui est cohérent avec un site qui met la conformité en avant.
- **Robustesse.** Plus de dépendance à la disponibilité d'un CDN, et les versions sont
  figées : une mise à jour amont ne peut pas casser la page du jour au lendemain.

Poids des ressources, une fois compressées par le serveur : environ 60 Ko de polices
réellement chargées et 212 Ko de JavaScript, dont 163 Ko pour Three.js. Le module 3D est
chargé en différé (`type="module"`), il ne retarde pas l'affichage du texte. Vérifie que
la compression gzip ou brotli est active chez ton hébergeur, c'est ce qui fait passer
Three.js de 656 Ko à 163 Ko.

Les licences des composants embarqués sont listées dans `LICENCES.md`.

## Si quelque chose se passe mal

Une erreur PHP sur un thème peut rendre l'administration inaccessible. La parade :
connecte-toi en FTP/SFTP et renomme le dossier `wp-content/themes/jj-refonte-child`.
WordPress rebascule aussitôt sur Hello Elementor et le site revient à son état actuel.

Les trois fichiers PHP ont été validés avec `php -l` (PHP 8.5) et le modèle a été rendu
hors WordPress pour vérifier que la page s'affiche à l'identique.
