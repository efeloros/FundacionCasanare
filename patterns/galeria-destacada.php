<?php
/**
 * Title: Galería destacada (mosaico)
 * Slug: fundacion-casanare/galeria-destacada
 * Categories: fundacion-casanare, gallery
 * Keywords: fotos, galería, territorio
 * Viewport Width: 1400
 */
$fc_g = array(
	array( 'quebrada', 'Trabajo comunitario en una quebrada' ),
	array( 'equipo', 'Equipo de la Fundación Casanare junto al pendón institucional' ),
	array( 'campamento', 'Campamento durante una jornada en el territorio' ),
	array( 'fogata', 'Fogata en un encuentro comunitario' ),
	array( 'escuela-vereda', 'Escuela y cancha en una vereda' ),
);
?>
<!-- wp:group {"align":"full","className":"fc-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fc-section" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">En el territorio</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"2xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size">Así movilizamos el desarrollo</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"fc-link-arrow"} -->
<p class="fc-link-arrow"><a href="/galeria/">Ver la galería completa</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"fc-mosaic","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide fc-mosaic"><?php foreach ( $fc_g as $fc_x ) : ?><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo fc_img( $fc_x[0] ); ?>" alt="<?php echo esc_attr( $fc_x[1] ); ?>"/></figure>
<!-- /wp:image --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
