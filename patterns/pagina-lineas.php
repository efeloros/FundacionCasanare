<?php
/**
 * Title: Página — Líneas estratégicas
 * Slug: fundacion-casanare/pagina-lineas
 * Categories: fundacion-casanare-paginas
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: líneas, programas, objetivos
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"780px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Líneas estratégicas</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"2xl"} -->
<h1 class="wp-block-heading has-2-xl-font-size">Un modelo integral, territorial y participativo</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">Nuestras siete líneas se complementan entre sí para responder a una vulnerabilidad que es multidimensional. Conoce el objetivo general y los objetivos específicos de cada una.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"fc-toc"} -->
<ul class="wp-block-list fc-toc"><?php foreach ( fc_lineas() as $fc_i => $fc_l ) : ?><!-- wp:list-item -->
<li><a href="#<?php echo esc_attr( $fc_l['slug'] ); ?>"><?php echo esc_html( sprintf( '%02d', $fc_i + 1 ) . ' · ' . $fc_l['short'] ); ?></a></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php foreach ( fc_lineas() as $fc_i => $fc_l ) : $fc_right = ( 1 === $fc_i % 2 ); ?>

<!-- wp:group {"align":"full","anchor":"<?php echo esc_attr( $fc_l['slug'] ); ?>","className":"fc-line-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $fc_l['slug'] ); ?>" class="wp-block-group alignfull fc-line-section" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:media-text {"align":"wide","mediaPosition":"<?php echo $fc_right ? 'right' : 'left'; ?>","mediaType":"image","mediaWidth":42,"verticalAlignment":"top","className":"fc-media-text"} -->
<div class="wp-block-media-text alignwide<?php echo $fc_right ? ' has-media-on-the-right' : ''; ?> is-stacked-on-mobile is-vertically-aligned-top fc-media-text" style="grid-template-columns:<?php echo $fc_right ? 'auto 42%' : '42% auto'; ?>"><figure class="wp-block-media-text__media"><img src="<?php echo fc_img( $fc_l['img'] ); ?>" alt="<?php echo esc_attr( $fc_l['alt'] ); ?>"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"className":"fc-program__index"} -->
<p class="fc-program__index">Línea <?php echo esc_html( sprintf( '%02d', $fc_i + 1 ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xl"} -->
<h2 class="wp-block-heading has-xl-font-size"><?php echo esc_html( $fc_l['title'] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"sm","className":"fc-label"} -->
<h3 class="wp-block-heading fc-label has-sm-font-size">Objetivo general</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $fc_l['general'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:details {"className":"fc-details"} -->
<details class="wp-block-details fc-details"><summary>Objetivos específicos</summary><!-- wp:list {"className":"fc-checks"} -->
<ul class="wp-block-list fc-checks"><?php foreach ( $fc_l['especificos'] as $fc_e ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $fc_e ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></details>
<!-- /wp:details --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->
<?php endforeach; ?>

<!-- wp:pattern {"slug":"fundacion-casanare/sumate"} /-->
