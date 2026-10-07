<?php
/**
 * Title: Página — Súmate (donaciones, voluntariado, alianzas)
 * Slug: fundacion-casanare/pagina-sumate
 * Categories: fundacion-casanare-paginas
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: donar, voluntariado, alianzas
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Súmate</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"2xl"} -->
<h1 class="wp-block-heading has-2-xl-font-size">Convirtamos tu aporte en oportunidades</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">Aspiramos a convertir cada recurso, alianza y capacidad movilizada en una oportunidad concreta de transformación para personas, familias y comunidades en condición de vulnerabilidad.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo fc_img( 'encuentro-banderas' ); ?>" alt="Encuentro comunitario con el pendón de la Fundación Casanare" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","anchor":"donar","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="donar" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Donaciones</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xl"} -->
<h2 class="wp-block-heading has-xl-font-size">Cómo donar</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:paragraph -->
<p>Puedes apoyar cualquiera de nuestras siete líneas estratégicas o dejar que destinemos tu aporte donde más se necesite. Te enviaremos la información de la donación y el reporte de cómo se usó.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"fc-contact"} -->
<ul class="wp-block-list fc-contact"><!-- wp:list-item -->
<li><span>Banco</span>Nombre del banco · Cuenta de ahorros 000-000000-00</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>Titular</span>Fundación Casanare · NIT 000.000.000-0</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>Comprobante</span><a href="mailto:contacto@fundacioncasanare.org">contacto@fundacioncasanare.org</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contacto/">Quiero hacer una donación</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","anchor":"voluntariado","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"elements":{"link":{"color":{"text":"var:preset|color|on-dark"}}}},"backgroundColor":"primary-deep","textColor":"on-dark","layout":{"type":"constrained"}} -->
<div id="voluntariado" class="wp-block-group alignfull has-on-dark-color has-primary-deep-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"gold"} -->
<p class="is-style-eyebrow has-gold-color has-text-color">Voluntariado</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xl"} -->
<h2 class="wp-block-heading has-xl-font-size">Pon tu vocación de servicio en el territorio</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fc-involve__lead"} -->
<p class="fc-involve__lead">Profesionales, estudiantes y personas con ganas de servir: tu tiempo y tus conocimientos pueden fortalecer procesos de vivienda, agricultura, educación, emprendimiento, cultura e inclusión.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:html -->
<form class="fc-form fc-form--dark" action="mailto:contacto@fundacioncasanare.org" method="post" enctype="text/plain">
	<div class="fc-form__row">
		<label>Nombre completo<input type="text" name="nombre" autocomplete="name" required></label>
		<label>Correo electrónico<input type="email" name="correo" autocomplete="email" required></label>
	</div>
	<label>¿En qué línea te gustaría apoyar?
		<select name="linea"><option>Vivienda digna</option><option>Agricultura y seguridad alimentaria</option><option>Educación y formación</option><option>Emprendimiento</option><option>Igualdad de género</option><option>Cultura, patrimonio y juventudes</option><option>Inclusión y protección</option></select>
	</label>
	<label>Cuéntanos sobre ti<textarea name="mensaje" rows="4"></textarea></label>
	<label class="fc-form__check"><input type="checkbox" required> Autorizo el tratamiento de mis datos personales según la Ley 1581 de 2012.</label>
	<button type="submit" class="wp-element-button">Enviar inscripción</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","anchor":"alianzas","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="alianzas" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Alianzas · ODS 17</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xl"} -->
<h2 class="wp-block-heading has-xl-font-size">Las transformaciones sostenibles requieren esfuerzos colectivos</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Promovemos la articulación con entidades territoriales, gremios, SENA, universidades, organizaciones de la sociedad civil y otros actores capaces de aportar conocimiento, recursos, asistencia técnica y oportunidades a las comunidades.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">Desde 2017 contamos con un convenio marco de cooperación con la Corporación Universitaria Minuto de Dios – UNIMINUTO.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"on-dark"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-on-dark-color has-primary-background-color has-text-color has-background wp-element-button" href="/contacto/">Propón una alianza</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo fc_img( 'convenio-uniminuto' ); ?>" alt="Convenio marco de cooperación entre la Fundación Casanare y UNIMINUTO, 2017"/><figcaption class="wp-element-caption">Convenio marco de cooperación con UNIMINUTO (2017).</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
