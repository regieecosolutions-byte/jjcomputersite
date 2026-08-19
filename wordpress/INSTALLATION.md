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

## 3. Créer la page de test

1. **Pages → Ajouter**
2. Titre : `Refonte` (l'adresse sera `https://jj-computer.fr/refonte/`)
3. Dans la colonne de droite, section **Attributs de page** → **Modèle** :
   choisis **Accueil refonte JJ**
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

## Deux points à traiter ensuite

**Les polices Google.** Elles sont chargées depuis les serveurs de Google. La CNIL
considère ce chargement comme un transfert de données ; sur un site qui met en avant sa
conformité RGPD, mieux vaut héberger les trois familles (Inter, Instrument Serif,
JetBrains Mono) dans `assets/fonts/` et servir le CSS localement. C'est une demi-heure
de travail, dis-le-moi et je le fais.

**Les bibliothèques d'animation.** GSAP, Lenis et Three.js sont chargés depuis des CDN
publics (cdnjs, unpkg). Pour la production, il est plus sain de les copier dans
`assets/vendor/` : tu ne dépends plus d'un service tiers et tu maîtrises les versions.

## Si quelque chose se passe mal

Une erreur PHP sur un thème peut rendre l'administration inaccessible. La parade :
connecte-toi en FTP/SFTP et renomme le dossier `wp-content/themes/jj-refonte-child`.
WordPress rebascule aussitôt sur Hello Elementor et le site revient à son état actuel.

Les trois fichiers PHP ont été validés avec `php -l` (PHP 8.5) et le modèle a été rendu
hors WordPress pour vérifier que la page s'affiche à l'identique.
