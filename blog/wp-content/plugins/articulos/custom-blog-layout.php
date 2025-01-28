<?php
/**
 * Plugin Name: Custom Blog Layout
 * Description: Aplica un diseño personalizado a la página de entradas con un formato dinámico.
 * Version: 1.0
 * Author: Pablo Palacios
 */

// Asegúrate de que no se ejecute directamente.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Sobrescribir el template para la página de entradas.
 */
function custom_blog_template( $template ) {
    if ( is_home() ) {
        // Carga el template del plugin
        $plugin_template = plugin_dir_path( __FILE__ ) . 'templates/blog-layout.php';
        if ( file_exists( $plugin_template ) ) {
            return $plugin_template;
        }
    }
    return $template;
}
add_filter( 'template_include', 'custom_blog_template' );

/**
 * Registrar los estilos necesarios.
 */
function custom_blog_enqueue_styles() {
    if ( is_home() ) {
        // Reemplaza las siguientes líneas con las rutas reales de tus archivos CSS.
        wp_enqueue_style( 'custom-blog-styles', plugin_dir_url( __FILE__ ) . 'assets/css/custom-blog.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'custom_blog_enqueue_styles' );
