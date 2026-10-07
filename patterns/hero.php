<?php
/**
 * Title: Portada principal
 * Slug: fundacion-casanare/hero
 * Categories: fundacion-casanare, banner
 * Keywords: portada, hero, cover
 * Viewport Width: 1400
 */
$fc_url = fc_img( 'colina' );
?>
<!-- wp:cover {"url":"<?php echo $fc_url; ?>","dimRatio":100,"customGradient":"linear-gradient(90deg,rgba(14,26,16,0.82) 0%,rgba(14,26,16,0.55) 45%,rgba(14,26,16,0.10) 100%)","minHeight":86,"minHeightUnit":"vh","contentPosition":"center left","isDark":true,"align":"full","className":"fc-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"textColor":"on-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left fc-hero has-on-dark-color has-text-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:86vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo $fc_url; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(90deg,rgba(14,26,16,0.82) 0%,rgba(14,26,16,0.55) 45%,rgba(14,26,16,0.10) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-tagline {"className":"fc-hero__tagline","textColor":"gold","fontSize":"lg"} /-->

<!-- wp:heading {"level":1,"className":"fc-hero__title","fontSize":"hero"} -->
<h1 class="wp-block-heading fc-hero__title has-hero-font-size">Todo aporte <em>moviliza</em> el desarrollo</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fc-hero__lead","fontSize":"lg"} -->
<p class="fc-hero__lead has-lg-font-size">Articulamos iniciativas, capacidades y liderazgos para mejorar la calidad de vida de personas, familias y comunidades en condición de vulnerabilidad.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/lineas-estrategicas/">Conoce nuestras líneas</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline fc-btn-light"} -->
<div class="wp-block-button is-style-outline fc-btn-light"><a class="wp-block-button__link wp-element-button" href="/sumate/">Súmate</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
