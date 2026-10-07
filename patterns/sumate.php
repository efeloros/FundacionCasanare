<?php
/**
 * Title: Súmate — Donar, voluntariado, alianzas
 * Slug: fundacion-casanare/sumate
 * Categories: fundacion-casanare, call-to-action
 * Keywords: donar, voluntariado, alianzas
 * Viewport Width: 1400
 */
$fc_ways = array(
	array( 'Dona', 'Cada aporte se convierte en una oportunidad concreta de transformación para las familias y comunidades que acompañamos.', 'Quiero donar', '/sumate/#donar', true ),
	array( 'Sé voluntario', 'Pon tu tiempo, tus conocimientos y tu vocación de servicio al lado de las comunidades.', 'Inscribirme', '/sumate/#voluntariado', false ),
	array( 'Construyamos alianzas', 'Entidades territoriales, gremios, SENA, universidades, empresas y cooperación: juntos ampliamos el impacto.', 'Hablemos', '/contacto/', false ),
);
?>
<!-- wp:group {"align":"full","className":"fc-section fc-involve","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"elements":{"link":{"color":{"text":"var:preset|color|on-dark"}}}},"backgroundColor":"primary-deep","textColor":"on-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fc-section fc-involve has-on-dark-color has-primary-deep-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"gold"} -->
<p class="is-style-eyebrow has-gold-color has-text-color">Súmate</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xl"} -->
<h2 class="wp-block-heading has-xl-font-size">Las transformaciones sostenibles se construyen entre todos</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fc-involve__lead"} -->
<p class="fc-involve__lead">Agradecemos a cada persona, voluntario, institución y cooperante que contribuye a nuestra misión. Elige cómo caminar con nosotros.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"fc-ways","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group fc-ways"><?php foreach ( $fc_ways as $fc_w ) : ?><!-- wp:group {"className":"fc-way","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group fc-way"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"420px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontFamily":"display","fontSize":"xl"} -->
<h3 class="wp-block-heading has-display-font-family has-xl-font-size"><?php echo esc_html( $fc_w[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fc-involve__muted","fontSize":"sm"} -->
<p class="fc-involve__muted has-sm-font-size"><?php echo esc_html( $fc_w[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><?php if ( $fc_w[4] ) : ?><!-- wp:button {"backgroundColor":"gold","textColor":"contrast"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-gold-background-color has-text-color has-background wp-element-button" href="<?php echo esc_attr( $fc_w[3] ); ?>"><?php echo esc_html( $fc_w[2] ); ?></a></div>
<!-- /wp:button --><?php else : ?><!-- wp:button {"className":"is-style-outline fc-btn-light"} -->
<div class="wp-block-button is-style-outline fc-btn-light"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_attr( $fc_w[3] ); ?>"><?php echo esc_html( $fc_w[2] ); ?></a></div>
<!-- /wp:button --><?php endif; ?></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
