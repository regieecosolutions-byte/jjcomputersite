<?php
/**
 * Thème enfant JJ-Computer — modèle « Accueil refonte JJ ».
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'JJ_REFONTE_TEMPLATE', 'template-accueil-refonte.php' );
define( 'JJ_REFONTE_VERSION', '1.0.0' );

/** La page courante utilise-t-elle le modèle de la refonte ? */
function jj_refonte_is_active() {
	return is_page_template( JJ_REFONTE_TEMPLATE );
}

/**
 * Feuilles de style.
 * Sur la refonte : on écarte les styles du thème parent et d'Elementor,
 * inutiles ici et source de conflits, puis on charge les nôtres.
 * Partout ailleurs : comportement normal du thème enfant.
 */
add_action( 'wp_enqueue_scripts', function () {
	if ( jj_refonte_is_active() ) {
		wp_dequeue_style( 'hello-elementor' );
		wp_dequeue_style( 'hello-elementor-theme-style' );
		wp_dequeue_style( 'hello-elementor-header-footer' );
		wp_dequeue_style( 'elementor-frontend' );

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

/** Titre du document, repris à l'identique de la maquette validée. */
add_filter( 'pre_get_document_title', function ( $title ) {
	if ( jj_refonte_is_active() ) {
		return 'Achat de leads qualifiés exclusifs en France | JJ-Computer.fr';
	}
	return $title;
}, 99 );

/**
 * Métadonnées de la refonte : description, keywords, Open Graph, JSON-LD.
 * Tant que la page n'est pas l'accueil du site (phase de test sur /refonte/),
 * elle est mise en noindex pour ne pas créer de contenu dupliqué.
 * Le canonical est laissé à WordPress, qui produit https://jj-computer.fr/ une
 * fois la page déclarée comme page d'accueil.
 */
add_action( 'wp_head', function () {
	if ( ! jj_refonte_is_active() ) {
		return;
	}

	$desc = "JJ-Computer.fr, fournisseur français de leads qualifiés exclusifs : rénovation énergétique, immobilier, assurance, finance, télécom et automobile. Livraison sous 48h, 100% conformes RGPD.";
	?>
<meta name="description" content="<?php echo esc_attr( $desc ); ?>">
<meta name="keywords" content="achat leads qualifiés, leads exclusifs, fournisseur de leads France, leads rénovation énergétique, leads immobilier, leads assurance, génération de leads, leads RGPD">
<meta property="og:title" content="Achat de leads qualifiés exclusifs en France | JJ-Computer.fr">
<meta property="og:description" content="<?php echo esc_attr( $desc ); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://jj-computer.fr/">
<meta name="theme-color" content="#F4F2ED">
	<?php if ( ! is_front_page() ) : ?>
<meta name="robots" content="noindex,nofollow">
	<?php endif; ?>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Organization","name":"JJ-Computer.fr","url":"https://jj-computer.fr/","description":"Fournisseur français de leads qualifiés exclusifs. Acquisition multi-canal, qualification stricte et livraison en temps réel pour la rénovation énergétique, l'immobilier, l'assurance, la finance, le télécom et l'automobile.","contactPoint":{"@type":"ContactPoint","email":"leads@jj-computer.fr","contactType":"sales"}}
</script>
	<?php
}, 2 );
