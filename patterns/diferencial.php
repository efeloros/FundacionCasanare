<?php
/**
 * Title: Lo que nos diferencia y ODS
 * Slug: fundacion-casanare/diferencial
 * Categories: fundacion-casanare, about
 * Keywords: diferencial, ODS, agenda 2030
 * Viewport Width: 1400
 */
$fc_dif = array(
	'Coherencia'           => 'Lo que decimos es lo que hacemos: cada recurso y alianza se convierte en una acción concreta.',
	'Arraigo'              => 'Conocemos el territorio, su identidad y sus dinámicas sociales porque somos parte de él.',
	'Territorio'           => 'Cada iniciativa responde a necesidades y potencialidades reales de la comunidad.',
	'Capacidad de gestión' => 'Articulamos entidades, gremios, academia y cooperación para multiplicar el impacto.',
);
?>
<!-- wp:group {"align":"full","className":"fc-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fc-section" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Lo que nos diferencia</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"2xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size">Capacidades que permanecen después de cada intervención</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"fc-diff","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group alignwide fc-diff" style="margin-top:var(--wp--preset--spacing--50)"><?php $fc_n = 0; foreach ( $fc_dif as $fc_t => $fc_d ) : $fc_n++; ?><!-- wp:group {"className":"fc-diff__item fc-diff__item--<?php echo (int) $fc_n; ?>","layout":{"type":"default"}} -->
<div class="wp-block-group fc-diff__item fc-diff__item--<?php echo (int) $fc_n; ?>"><!-- wp:heading {"level":3,"fontFamily":"display","fontSize":"xl"} -->
<h3 class="wp-block-heading has-display-font-family has-xl-font-size"><?php echo esc_html( $fc_t ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"sm"} -->
<p class="has-muted-color has-text-color has-sm-font-size"><?php echo esc_html( $fc_d ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"fc-ods","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide fc-ods" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"fc-ods__label"} -->
<p class="fc-ods__label">Alineados con la Agenda 2030 para el Desarrollo Sostenible</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"fc-ods__list"} -->
<ul class="wp-block-list fc-ods__list"><?php foreach ( fc_ods() as $fc_k => $fc_v ) : ?><!-- wp:list-item -->
<li><strong>ODS <?php echo (int) $fc_k; ?></strong> <?php echo esc_html( $fc_v ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
