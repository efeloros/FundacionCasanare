<?php
/**
 * Title: Página — Contacto
 * Slug: fundacion-casanare/pagina-contacto
 * Categories: fundacion-casanare-paginas
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: contacto, formulario
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Contacto</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"2xl"} -->
<h1 class="wp-block-heading has-2-xl-font-size">Hablemos</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">Escríbenos para donaciones, alianzas, voluntariado o para proponer una iniciativa en tu comunidad.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"fc-contact"} -->
<ul class="wp-block-list fc-contact"><!-- wp:list-item -->
<li><span>Sede</span>Dirección de la sede, Casanare</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>Correo</span><a href="mailto:contacto@fundacioncasanare.org">contacto@fundacioncasanare.org</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>Teléfono</span><a href="tel:+570000000000">+57 300 000 0000</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>Representante legal</span>Leonel Rodríguez Walteros</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:html -->
<form class="fc-form" action="mailto:contacto@fundacioncasanare.org" method="post" enctype="text/plain">
	<div class="fc-form__row">
		<label>Nombre<input type="text" name="nombre" autocomplete="name" required></label>
		<label>Correo electrónico<input type="email" name="correo" autocomplete="email" required></label>
	</div>
	<label>Motivo
		<select name="motivo"><option>Donación</option><option>Alianza institucional</option><option>Voluntariado</option><option>Proponer una iniciativa</option><option>Otro</option></select>
	</label>
	<label>Mensaje<textarea name="mensaje" rows="6" required></textarea></label>
	<label class="fc-form__check"><input type="checkbox" required> Autorizo el tratamiento de mis datos personales según la Ley 1581 de 2012.</label>
	<button type="submit" class="wp-element-button">Enviar mensaje</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
