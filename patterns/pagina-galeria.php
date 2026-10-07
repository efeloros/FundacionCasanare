<?php
/**
 * Title: Página — Galería
 * Slug: fundacion-casanare/pagina-galeria
 * Categories: fundacion-casanare-paginas
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: galería, fotos
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Galería</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"2xl"} -->
<h1 class="wp-block-heading has-2-xl-font-size">Nuestro trabajo en imágenes</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">Jornadas, encuentros y alianzas junto a las comunidades que acompañamos.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:gallery {"columns":3,"linkTo":"none","align":"wide","className":"fc-gallery"} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-3 is-cropped fc-gallery"><?php foreach ( fc_galeria() as $fc_f => $fc_c ) : ?><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo fc_img( $fc_f ); ?>" alt="<?php echo esc_attr( $fc_c ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( $fc_c ); ?></figcaption></figure>
<!-- /wp:image --><?php endforeach; ?></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->
