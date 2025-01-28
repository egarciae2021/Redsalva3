<?php
/**
 * Plugin Name: Custom Nav and Footer Integration
 * Description: Integra el header (estilos), nav y footer personalizados de tu web PHP en WordPress.
 * Version: 3.3
 * Author: Tu Nombre
 */

// Asegúrate de que el archivo no se ejecute directamente.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Rutas absolutas a los archivos personalizados
define( 'CUSTOM_ESTILOS_PATH', '/homepages/5/d644353367/htdocs/Clientes2024/Montesur/estilos.php' );
define( 'CUSTOM_NAV_PATH', '/homepages/5/d644353367/htdocs/Clientes2024/Montesur/nav.php' );
define( 'CUSTOM_FOOTER_PATH', '/homepages/5/d644353367/htdocs/Clientes2024/Montesur/footer.php' );

// URL base para cargar estilos
define( 'CUSTOM_BASE_URL', 'https://clinicamontesur.com.pe' );

/**
 * Inserta los estilos del archivo estilos.php en el <head>.
 */
function custom_insert_estilos() {
    if ( file_exists( CUSTOM_ESTILOS_PATH ) ) {
        require CUSTOM_ESTILOS_PATH;
    } else {
        error_log( 'Archivo estilos.php no encontrado: ' . CUSTOM_ESTILOS_PATH );
        echo '<!-- Archivo estilos.php no encontrado -->';
    }
}
add_action( 'wp_head', 'custom_insert_estilos', 1 ); // Prioridad alta para que se cargue temprano

/**
 * Inserta el archivo nav.php después de abrir <main>.
 */
function custom_insert_nav() {
    if ( file_exists( CUSTOM_NAV_PATH ) ) {
        echo '<main>'; // Abre el <main> antes del nav si no está en el tema
        require CUSTOM_NAV_PATH;
    } else {
        error_log( 'Archivo nav.php no encontrado: ' . CUSTOM_NAV_PATH );
        echo '<!-- Archivo nav.php no encontrado -->';
    }
}
add_action( 'wp_body_open', 'custom_insert_nav', 1 ); // Usa wp_body_open para asegurarte de que está al inicio de <body>

/**
 * Inserta el archivo footer.php en el footer.
 */
function custom_insert_footer() {
    if ( file_exists( CUSTOM_FOOTER_PATH ) ) {
        require CUSTOM_FOOTER_PATH;
    } else {
        error_log( 'Archivo footer.php no encontrado: ' . CUSTOM_FOOTER_PATH );
        echo '<!-- Archivo footer.php no encontrado -->';
    }
}
add_action( 'wp_footer', 'custom_insert_footer', 1 ); // Prioridad alta para que se cargue al inicio del footer

/**
 * Registrar rutas en el footer para depuración.
 */
add_action( 'wp_footer', function() {
    echo '<!-- CUSTOM_ESTILOS_PATH: ' . CUSTOM_ESTILOS_PATH . ' -->';
    echo '<!-- CUSTOM_NAV_PATH: ' . CUSTOM_NAV_PATH . ' -->';
    echo '<!-- CUSTOM_FOOTER_PATH: ' . CUSTOM_FOOTER_PATH . ' -->';
});
