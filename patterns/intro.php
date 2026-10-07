<?php
/**
 * Title: Quiénes somos (resumen) y cifras
 * Slug: fundacion-casanare/intro
 * Categories: fundacion-casanare, about
 * Keywords: quiénes somos, poblaciones, cifras
 * Viewport Width: 1400
 */
$fc_stats = array(
	array( '7', 'líneas estratégicas de intervención' ),
	array( '6', 'poblaciones prioritarias' ),
	array( '8', 'Objetivos de Desarrollo Sostenible' ),
	array( '2030', 'año de nuestra visión institucional' ),
);
$fc_pob = array( 'Primera infancia', 'Jóvenes', 'Adultos mayores', 'Madres cabeza de hogar', 'Personas con discapacidad', 'Comunidades indígenas' );
?>
<!-- wp:group {"align":"full","className":"fc-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fc-section" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Quiénes somos</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"2xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size">La vulnerabilidad es multidimensional. Nuestra respuesta también.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Somos una organización social colombiana que nace de la necesidad de dar una estructura institucional sólida, transparente y sostenible a diferentes acciones de carácter social y comunitario.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">Una familia puede enfrentar al mismo tiempo precariedad habitacional, limitaciones económicas, barreras educativas y falta de oportunidades productivas. Por eso articulamos vivienda digna, agricultura, educación, empoderamiento económico e igualdad de género en una visión integral.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fc-link-arrow"} -->
<p class="fc-link-arrow"><a href="/quienes-somos/">Conoce nuestra historia, misión y valores</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%","className":"fc-collage"} -->
<div class="wp-block-column fc-collage" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"fc-collage__main"} -->
<figure class="wp-block-image size-full fc-collage__main"><img src="<?php echo fc_img( 'pendon-comunidad' ); ?>" alt="Comunidad reunida junto al pendón de la Fundación Casanare" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"fc-collage__inset"} -->
<figure class="wp-block-image size-full fc-collage__inset"><img src="<?php echo fc_img( 'taller' ); ?>" alt="Taller de formación con mujeres de la comunidad" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"fc-pob","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide fc-pob" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"fc-pob__label"} -->
<p class="fc-pob__label">Trabajamos con</p>
<!-- /wp:paragraph -->
<?php foreach ( $fc_pob as $fc_p ) : ?>
<!-- wp:paragraph {"className":"fc-chip"} -->
<p class="fc-chip"><?php echo esc_html( $fc_p ); ?></p>
<!-- /wp:paragraph -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"fc-stats","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
<div class="wp-block-group alignwide fc-stats" style="margin-top:var(--wp--preset--spacing--50)"><?php foreach ( $fc_stats as $fc_s ) : ?><!-- wp:group {"className":"fc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group fc-stat"><!-- wp:paragraph {"className":"fc-stat__num"} -->
<p class="fc-stat__num"><?php echo esc_html( $fc_s[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fc-stat__label"} -->
<p class="fc-stat__label"><?php echo esc_html( $fc_s[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
