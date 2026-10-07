<?php
/**
 * Configuración inicial al activar el tema:
 * importa logo y fotos a la Biblioteca de medios, crea páginas, menús,
 * encabezado/pie editables y dos noticias de ejemplo.
 * Solo se ejecuta una vez (opción fc_starter_pages_done).
 *
 * @package fundacion-casanare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Copia una imagen del tema a la Biblioteca de medios (una sola vez).
 */
function fc_import_media( $file, $title, $alt = '' ) {
	$key = 'fc_media_' . sanitize_key( pathinfo( $file, PATHINFO_FILENAME ) );
	$id  = (int) get_option( $key );
	if ( $id && get_post( $id ) ) {
		return $id;
	}
	$src = get_theme_file_path( 'assets/images/' . $file );
	if ( ! file_exists( $src ) ) {
		return 0;
	}
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';
	require_once ABSPATH . 'wp-admin/includes/image.php';
	$tmp = wp_tempnam( $file );
	copy( $src, $tmp );
	$id = media_handle_sideload( array( 'name' => $file, 'tmp_name' => $tmp ), 0, $title );
	if ( is_wp_error( $id ) ) {
		@unlink( $tmp ); // phpcs:ignore
		return 0;
	}
	if ( $alt ) {
		update_post_meta( $id, '_wp_attachment_image_alt', $alt );
	}
	update_option( $key, $id );
	return $id;
}

/**
 * Sustituye las referencias a patrones por su contenido (recursivo).
 */
function fc_expand_patterns( $content, $depth = 0 ) {
	if ( $depth > 4 ) {
		return $content;
	}
	$registry = WP_Block_Patterns_Registry::get_instance();
	return preg_replace_callback(
		'/<!-- wp:pattern \{"slug":"([^"]+)"\} \/-->/',
		function ( $m ) use ( $registry, $depth ) {
			$p = $registry->get_registered( $m[1] );
			return $p ? fc_expand_patterns( $p['content'], $depth + 1 ) : '';
		},
		$content
	);
}

/**
 * Cambia las URL de imágenes del tema por las de la Biblioteca de medios.
 */
function fc_media_urls( $content, $map ) {
	// Enlaces internos relativos ("/contacto/") → URL completa del sitio (sirve también en subcarpetas).
	$content = str_replace( 'href="/', 'href="' . esc_url( home_url( '/' ) ), $content );
	foreach ( $map as $name => $id ) {
		$url = wp_get_attachment_url( $id );
		if ( $url ) {
			$content = str_replace( get_theme_file_uri( 'assets/images/' . $name . '.webp' ), $url, $content );
		}
	}
	return $content;
}

/**
 * Crea un menú de navegación (wp_navigation) con enlaces a páginas.
 */
function fc_create_menu( $title, $items ) {
	$blocks = array();
	foreach ( $items as $label => $page_id ) {
		$blocks[] = sprintf(
			'<!-- wp:navigation-link {"label":"%s","type":"page","id":%d,"url":"%s","kind":"post-type"} /-->',
			esc_attr( $label ),
			(int) $page_id,
			esc_url( get_permalink( $page_id ) )
		);
	}
	return wp_insert_post(
		array(
			'post_type'    => 'wp_navigation',
			'post_status'  => 'publish',
			'post_title'   => $title,
			'post_content' => implode( "\n", $blocks ),
		)
	);
}

/**
 * Guarda una parte de plantilla en la base de datos, enlazando el menú creado.
 */
function fc_store_part( $slug, $area, $title, $nav_class, $nav_id ) {
	$content = file_get_contents( get_theme_file_path( 'parts/' . $slug . '.html' ) ); // phpcs:ignore
	$content = preg_replace_callback(
		'/<!-- wp:navigation (\{[^\n]*"className":"' . preg_quote( $nav_class, '/' ) . '"[^\n]*\}) -->.*?<!-- \/wp:navigation -->/s',
		function ( $m ) use ( $nav_id ) {
			$attrs        = json_decode( $m[1], true );
			$attrs        = array( 'ref' => (int) $nav_id ) + $attrs;
			return '<!-- wp:navigation ' . wp_json_encode( $attrs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . ' /-->';
		},
		$content
	);
	$content  = fc_media_urls( $content, array() );
	$existing = get_posts(
		array(
			'post_type'   => 'wp_template_part',
			'name'        => $slug,
			'post_status' => 'any',
			'tax_query'   => array( array( 'taxonomy' => 'wp_theme', 'field' => 'name', 'terms' => get_stylesheet() ) ), // phpcs:ignore
		)
	);
	if ( $existing ) {
		return;
	}
	$id = wp_insert_post(
		array(
			'post_type'    => 'wp_template_part',
			'post_status'  => 'publish',
			'post_name'    => $slug,
			'post_title'   => $title,
			'post_content' => $content,
		)
	);
	if ( $id && ! is_wp_error( $id ) ) {
		wp_set_post_terms( $id, get_stylesheet(), 'wp_theme' );
		wp_set_post_terms( $id, $area, 'wp_template_part_area' );
	}
}

/**
 * Rutina principal de activación.
 */
function fc_create_starter_pages() {
	if ( get_option( 'fc_starter_pages_done' ) ) {
		return;
	}

	// 1. Medios: logo, icono y fotografías.
	$logo = fc_import_media( 'logo-fundacion-casanare.png', 'Logo Fundación Casanare', 'Fundación Casanare — Para hacer las cosas bien' );
	$icon = fc_import_media( 'favicon.png', 'Icono Fundación Casanare' );
	if ( $logo && ! get_theme_mod( 'custom_logo' ) ) {
		set_theme_mod( 'custom_logo', $logo );
	}
	if ( $icon && ! get_option( 'site_icon' ) ) {
		update_option( 'site_icon', $icon );
	}
	$map = array();
	foreach ( fc_galeria() as $name => $alt ) {
		$id = fc_import_media( $name . '.webp', $alt, $alt );
		if ( $id ) {
			$map[ $name ] = $id;
		}
	}

	// 2. Nombre y eslogan del sitio (solo si siguen por defecto).
	$name = get_option( 'blogname' );
	if ( ! $name || in_array( $name, array( 'My WordPress Website', 'Mi sitio', 'WordPress' ), true ) ) {
		update_option( 'blogname', 'Fundación Casanare' );
	}
	$desc = get_option( 'blogdescription' );
	if ( ! $desc || in_array( $desc, array( 'Just another WordPress site', 'Otro sitio realizado con WordPress' ), true ) ) {
		update_option( 'blogdescription', 'Para hacer las cosas bien' );
	}

	// 3. Páginas.
	$pages = array(
		'inicio'              => array( 'Inicio', 'fundacion-casanare/pagina-inicio' ),
		'quienes-somos'       => array( 'Quiénes somos', 'fundacion-casanare/pagina-quienes-somos' ),
		'lineas-estrategicas' => array( 'Líneas estratégicas', 'fundacion-casanare/pagina-lineas' ),
		'galeria'             => array( 'Galería', 'fundacion-casanare/pagina-galeria' ),
		'sumate'              => array( 'Súmate', 'fundacion-casanare/pagina-sumate' ),
		'contacto'            => array( 'Contacto', 'fundacion-casanare/pagina-contacto' ),
		'noticias'            => array( 'Noticias', '' ),
	);
	$ids = array();
	kses_remove_filters(); // Los patrones incluyen formularios HTML.
	foreach ( $pages as $slug => $data ) {
		$found = get_page_by_path( $slug );
		if ( $found ) {
			$ids[ $slug ] = $found->ID;
			continue;
		}
		$content = $data[1] ? fc_media_urls( fc_expand_patterns( '<!-- wp:pattern {"slug":"' . $data[1] . '"} /-->' ), $map ) : '';
		$id      = wp_insert_post(
			array(
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_title'   => $data[0],
				'post_name'    => $slug,
				'post_content' => $content,
			)
		);
		if ( $id && ! is_wp_error( $id ) ) {
			$ids[ $slug ] = $id;
			if ( $data[1] && 'inicio' !== $slug ) {
				update_post_meta( $id, '_wp_page_template', 'page-wide' );
			}
		}
	}

	if ( ! get_page_by_path( 'politica-de-datos' ) ) {
		$privacy = wp_insert_post(
			array(
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_title'   => 'Política de tratamiento de datos personales',
				'post_name'    => 'politica-de-datos',
				'post_content' => "<!-- wp:paragraph -->\n<p>En cumplimiento de la Ley 1581 de 2012 y el Decreto 1377 de 2013, la Fundación Casanare informa que los datos personales recolectados a través de este sitio (formularios de contacto, voluntariado y donaciones) se usarán únicamente para responder solicitudes, gestionar donaciones y enviar información de la fundación cuando el titular lo autorice.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>El titular puede conocer, actualizar, rectificar o solicitar la supresión de sus datos escribiendo al correo de contacto de la fundación. <strong>Revisa y ajusta este texto con tu asesor legal antes de publicar.</strong></p>\n<!-- /wp:paragraph -->",
			)
		);
		if ( $privacy && ! is_wp_error( $privacy ) ) {
			update_option( 'wp_page_for_privacy_policy', $privacy );
			$ids['politica-de-datos'] = $privacy;
		}
	}

	// 4. Noticias de ejemplo con contenido real.
	$posts = array(
		array(
			'Firmamos convenio marco de cooperación con UNIMINUTO',
			'2017-12-20 10:00:00',
			'convenio-uniminuto',
			"<!-- wp:paragraph -->\n<p>El 20 de diciembre de 2017, en Bogotá, la Fundación Casanare y la Corporación Universitaria Minuto de Dios – UNIMINUTO firmaron un convenio marco de cooperación para aunar esfuerzos en favor de las comunidades.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>El convenio fue suscrito por el representante legal de la fundación, Leonel Rodríguez Walteros, y por Santiago Alberto Vélez Álvarez en representación de UNIMINUTO. Esta alianza con la academia hace parte de nuestra apuesta por fortalecer la educación, la formación y el desarrollo de capacidades en los territorios.</p>\n<!-- /wp:paragraph -->",
		),
		array(
			'Construimos nuestro Plan Estratégico',
			'',
			'equipo',
			"<!-- wp:paragraph -->\n<p>La Fundación Casanare construyó su Plan Estratégico, que define nuestra misión, nuestra visión al año 2030, diez valores institucionales y siete líneas estratégicas de intervención: vivienda digna; agricultura y seguridad alimentaria; educación; empoderamiento económico; igualdad de género; cultura, patrimonio y juventudes; e inclusión de poblaciones vulnerables.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>El plan reafirma nuestra filosofía: todo aporte moviliza el desarrollo. También nos alinea con ocho Objetivos de Desarrollo Sostenible de la Agenda 2030.</p>\n<!-- /wp:paragraph -->",
		),
	);
	foreach ( $posts as $p ) {
		if ( get_page_by_title( $p[0], OBJECT, 'post' ) ) { // phpcs:ignore
			continue;
		}
		$args = array(
			'post_type'    => 'post',
			'post_status'  => 'publish',
			'post_title'   => $p[0],
			'post_content' => $p[3],
		);
		if ( $p[1] ) {
			$args['post_date'] = $p[1];
		}
		$pid = wp_insert_post( $args );
		if ( $pid && ! is_wp_error( $pid ) && ! empty( $map[ $p[2] ] ) ) {
			set_post_thumbnail( $pid, $map[ $p[2] ] );
		}
	}
	kses_init_filters();

	// 5. Menús y partes de plantilla editables.
	if ( ! empty( $ids['quienes-somos'] ) ) {
		$main   = fc_create_menu(
			'Menú principal',
			array(
				'Quiénes somos'       => $ids['quienes-somos'],
				'Líneas estratégicas' => $ids['lineas-estrategicas'],
				'Galería'             => $ids['galeria'],
				'Noticias'            => $ids['noticias'],
				'Contacto'            => $ids['contacto'],
			)
		);
		$footer = fc_create_menu(
			'Menú del pie',
			array(
				'Quiénes somos'       => $ids['quienes-somos'],
				'Líneas estratégicas' => $ids['lineas-estrategicas'],
				'Galería'             => $ids['galeria'],
				'Súmate'              => $ids['sumate'],
				'Contacto'            => $ids['contacto'],
			)
		);
		if ( $main && ! is_wp_error( $main ) ) {
			fc_store_part( 'header', 'header', 'Encabezado', 'fc-nav-main', $main );
		}
		if ( $footer && ! is_wp_error( $footer ) ) {
			fc_store_part( 'footer', 'footer', 'Pie de página', 'fc-nav-footer', $footer );
		}
	}

	// 6. Portada estática y página de noticias.
	if ( ! empty( $ids['inicio'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $ids['inicio'] );
		update_option( 'page_for_posts', $ids['noticias'] );
	}
	update_option( 'fc_starter_pages_done', 1 );
}
add_action( 'after_switch_theme', 'fc_create_starter_pages' );
