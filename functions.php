<?php
/**
 * Fundación Casanare — funciones del tema.
 *
 * @package fundacion-casanare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'FC_VERSION', '2.0.0' );

require_once get_template_directory() . '/inc/content.php';
require_once get_template_directory() . '/inc/setup.php';

/**
 * Configuración básica del tema.
 */
function fc_setup() {
	load_theme_textdomain( 'fundacion-casanare', get_template_directory() . '/languages' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 265, 'width' => 833, 'flex-height' => true, 'flex-width' => true ) );
	add_editor_style( 'assets/css/theme.css' );
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'fc_setup' );

/**
 * Hojas de estilo y scripts del frontend.
 */
function fc_assets() {
	wp_enqueue_style( 'fundacion-casanare', get_theme_file_uri( 'assets/css/theme.css' ), array(), FC_VERSION );
	wp_enqueue_script( 'fundacion-casanare', get_theme_file_uri( 'assets/js/theme.js' ), array(), FC_VERSION, array( 'strategy' => 'defer', 'in_footer' => true ) );
}
add_action( 'wp_enqueue_scripts', 'fc_assets' );

/**
 * Precarga la imagen de portada en la página de inicio (mejora LCP).
 */
function fc_preload_hero() {
	if ( is_front_page() ) {
		$id  = (int) get_option( 'fc_media_colina' );
		$url = $id ? wp_get_attachment_url( $id ) : get_theme_file_uri( 'assets/images/colina.webp' );
		printf( '<link rel="preload" as="image" href="%s" fetchpriority="high">' . "\n", esc_url( $url ) );
	}
}
add_action( 'wp_head', 'fc_preload_hero', 2 );

/**
 * Categorías de patrones propias.
 */
function fc_pattern_categories() {
	register_block_pattern_category( 'fundacion-casanare', array( 'label' => __( 'Fundación Casanare', 'fundacion-casanare' ) ) );
	register_block_pattern_category( 'fundacion-casanare-paginas', array( 'label' => __( 'Fundación Casanare · Páginas', 'fundacion-casanare' ) ) );
}
add_action( 'init', 'fc_pattern_categories' );

/**
 * Estilos de bloque personalizados.
 */
function fc_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'eyebrow', 'label' => __( 'Antetítulo', 'fundacion-casanare' ) ) );
	register_block_style( 'core/group', array( 'name' => 'card', 'label' => __( 'Tarjeta', 'fundacion-casanare' ) ) );
	register_block_style( 'core/image', array( 'name' => 'arch', 'label' => __( 'Arco', 'fundacion-casanare' ) ) );
}
add_action( 'init', 'fc_block_styles' );

