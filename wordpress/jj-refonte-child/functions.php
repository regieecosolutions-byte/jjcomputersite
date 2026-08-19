<?php
/**
 * Thème enfant JJ-Computer — modèles « Accueil refonte JJ »,
 * « Accueil Apple JJ » et « Accueil Solar JJ ».
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! defined( 'JJ_REFONTE_TEMPLATE' ) ) {
	define( 'JJ_REFONTE_TEMPLATE', 'template-accueil-refonte.php' );
}
if ( ! defined( 'JJ_APPLE_TEMPLATE' ) ) {
	define( 'JJ_APPLE_TEMPLATE', 'template-accueil-apple.php' );
}
if ( ! defined( 'JJ_SOLAR_TEMPLATE' ) ) {
	define( 'JJ_SOLAR_TEMPLATE', 'template-accueil-solar.php' );
}
if ( ! defined( 'JJ_REFONTE_VERSION' ) ) {
	define( 'JJ_REFONTE_VERSION', '1.3.1' );
}

/** La page courante utilise-t-elle le modèle éditorial ? */
function jj_refonte_is_active() {
	return is_page_template( JJ_REFONTE_TEMPLATE );
}

/** La page courante utilise-t-elle le modèle Apple ? */
function jj_apple_is_active() {
	return is_page_template( JJ_APPLE_TEMPLATE );
}

/** La page courante utilise-t-elle le modèle Solar Flare ? */
function jj_solar_is_active() {
	return is_page_template( JJ_SOLAR_TEMPLATE );
}

/** L'une des trois refontes. */
function jj_any_refonte() {
	return jj_refonte_is_active() || jj_apple_is_active() || jj_solar_is_active();
}

/** Yoast SEO est-il actif ? Si oui, c'est lui qui pilote les balises. */
function jj_refonte_has_yoast() {
	return defined( 'WPSEO_VERSION' );
}

/** Titre et description de la refonte, définis une seule fois. */
function jj_refonte_title() {
	return 'Achat de leads qualifiés exclusifs en France | JJ-Computer.fr';
}
function jj_refonte_description() {
	return "JJ-Computer.fr, fournisseur français de leads qualifiés exclusifs : rénovation énergétique, immobilier, assurance, finance, télécom et automobile. Livraison sous 48h, 100% conformes RGPD.";
}

/**
 * Feuilles de style.
 * Sur la refonte : on écarte les styles du thème parent et d'Elementor,
 * inutiles ici et source de conflits, puis on charge les nôtres.
 * Partout ailleurs : comportement normal du thème enfant.
 */
add_action( 'wp_enqueue_scripts', function () {
	if ( jj_any_refonte() ) {
		wp_dequeue_style( 'hello-elementor' );
		wp_dequeue_style( 'hello-elementor-theme-style' );
		wp_dequeue_style( 'hello-elementor-header-footer' );
		wp_dequeue_style( 'elementor-frontend' );

		if ( jj_apple_is_active() ) {
			// Direction Apple : pile SF Pro du système, aucune police à charger.
			wp_enqueue_style(
				'jj-apple',
				get_stylesheet_directory_uri() . '/assets/apple.css',
				array(),
				JJ_REFONTE_VERSION
			);
			return;
		}

		if ( jj_solar_is_active() ) {
			// Les styles globaux (kit Elementor, theme.json) colorent h1/h2/h3
			// avec l'ancienne charte : on les écarte sur ce modèle autonome.
			wp_dequeue_style( 'elementor-global' );
			wp_dequeue_style( 'global-styles' );
			wp_dequeue_style( 'classic-theme-styles' );
			$jj_kit = (int) get_option( 'elementor_active_kit' );
			if ( $jj_kit ) {
				wp_dequeue_style( 'elementor-post-' . $jj_kit );
			}

			// Direction Solar Flare : Syne, DM Sans et DM Mono hébergées sur le domaine.
			wp_enqueue_style(
				'jj-solar-fonts',
				get_stylesheet_directory_uri() . '/assets/solar-fonts.css',
				array(),
				JJ_REFONTE_VERSION
			);
			wp_enqueue_style(
				'jj-solar',
				get_stylesheet_directory_uri() . '/assets/solar.css',
				array(),
				JJ_REFONTE_VERSION
			);
			return;
		}

		// Polices hébergées sur le domaine : aucun appel aux serveurs de Google.
		wp_enqueue_style(
			'jj-refonte-fonts',
			get_stylesheet_directory_uri() . '/assets/fonts.css',
			array(),
			JJ_REFONTE_VERSION
		);
		wp_enqueue_style(
			'jj-refonte',
			get_stylesheet_directory_uri() . '/assets/refonte.css',
			array(),
			JJ_REFONTE_VERSION
		);
		return;
	}

	wp_enqueue_style( 'hello-elementor-parent', get_template_directory_uri() . '/style.css', array(), null );
}, 20 );

/** Titre du document (cas où Yoast n'est pas actif). */
add_filter( 'pre_get_document_title', function ( $title ) {
	return jj_any_refonte() ? jj_refonte_title() : $title;
}, 99 );

/**
 * Cohabitation avec Yoast SEO.
 * Plutôt que de produire des balises concurrentes, on alimente Yoast :
 * il reste seul responsable du titre, de la description, de l'Open Graph,
 * du canonical et du graphe schema.org. Zéro balise en double.
 */
add_filter( 'wpseo_title', function ( $title ) {
	return jj_any_refonte() ? jj_refonte_title() : $title;
}, 99 );

add_filter( 'wpseo_opengraph_title', function ( $title ) {
	return jj_any_refonte() ? jj_refonte_title() : $title;
}, 99 );

add_filter( 'wpseo_metadesc', function ( $desc ) {
	return jj_any_refonte() ? jj_refonte_description() : $desc;
}, 99 );

add_filter( 'wpseo_opengraph_desc', function ( $desc ) {
	return jj_any_refonte() ? jj_refonte_description() : $desc;
}, 99 );

/**
 * Phase de test : tant que la refonte n'est pas la page d'accueil, on demande
 * à Yoast de la passer en noindex. Une fois déclarée comme accueil, la règle
 * ne s'applique plus et la page est indexable normalement.
 */
add_filter( 'wpseo_robots', function ( $robots ) {
	if ( jj_any_refonte() && ! is_front_page() ) {
		return 'noindex, nofollow';
	}
	return $robots;
}, 99 );

add_filter( 'wpseo_robots_array', function ( $robots ) {
	if ( jj_any_refonte() && ! is_front_page() ) {
		$robots['index']  = 'noindex';
		$robots['follow'] = 'nofollow';
	}
	return $robots;
}, 99 );

/**
 * Métadonnées de la refonte : description, keywords, Open Graph, JSON-LD.
 * Tant que la page n'est pas l'accueil du site (phase de test sur /refonte/),
 * elle est mise en noindex pour ne pas créer de contenu dupliqué.
 * Le canonical est laissé à WordPress, qui produit https://jj-computer.fr/ une
 * fois la page déclarée comme page d'accueil.
 */
add_action( 'wp_head', function () {
	if ( ! jj_any_refonte() ) {
		return;
	}
	?>
<meta name="theme-color" content="<?php echo jj_solar_is_active() ? '#0B0A14' : ( jj_apple_is_active() ? '#ffffff' : '#F4F2ED' ); ?>">
<meta name="keywords" content="achat leads qualifiés, leads exclusifs, fournisseur de leads France, leads rénovation énergétique, leads immobilier, leads assurance, génération de leads, leads RGPD">
	<?php
	// Avec Yoast, tout le reste est déjà produit par l'extension.
	if ( jj_refonte_has_yoast() ) {
		return;
	}

	$desc = jj_refonte_description();
	?>
<meta name="description" content="<?php echo esc_attr( $desc ); ?>">
<meta property="og:title" content="<?php echo esc_attr( jj_refonte_title() ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $desc ); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://jj-computer.fr/">
	<?php if ( ! is_front_page() ) : ?>
<meta name="robots" content="noindex,nofollow">
	<?php endif; ?>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Organization","name":"JJ-Computer.fr","url":"https://jj-computer.fr/","description":"Fournisseur français de leads qualifiés exclusifs. Acquisition multi-canal, qualification stricte et livraison en temps réel pour la rénovation énergétique, l'immobilier, l'assurance, la finance, le télécom et l'automobile.","contactPoint":{"@type":"ContactPoint","email":"leads@jj-computer.fr","contactType":"sales"}}
</script>
	<?php
}, 2 );
