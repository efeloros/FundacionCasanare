<?php
/**
 * Title: Líneas estratégicas (resumen)
 * Slug: fundacion-casanare/lineas
 * Categories: fundacion-casanare, featured
 * Keywords: líneas, programas, proyectos
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"fc-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fc-section has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%","className":"fc-sticky"} -->
<div class="wp-block-column fc-sticky" style="flex-basis:40%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Líneas estratégicas</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"2xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size">Siete caminos para transformar territorios</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">Un modelo de intervención social integral, territorial y participativo. Cada línea responde a realidades concretas y busca dejar capacidades instaladas en las comunidades.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo fc_img( 'encuentro-banderas' ); ?>" alt="Encuentro comunitario con banderas y el pendón de la Fundación Casanare" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"fc-lines","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group fc-lines"><?php foreach ( fc_lineas() as $fc_i => $fc_l ) : ?><!-- wp:group {"className":"fc-line","layout":{"type":"default"}} -->
<div class="wp-block-group fc-line"><!-- wp:paragraph {"className":"fc-line__num"} -->
<p class="fc-line__num"><?php echo esc_html( sprintf( '%02d', $fc_i + 1 ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/lineas-estrategicas/#<?php echo esc_attr( $fc_l['slug'] ); ?>"><?php echo esc_html( $fc_l['title'] ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"sm"} -->
<p class="has-muted-color has-text-color has-sm-font-size"><?php echo esc_html( $fc_l['resumen'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
