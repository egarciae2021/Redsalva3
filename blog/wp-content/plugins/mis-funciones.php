<?php
/*
Plugin Name: Funciones personalizadas
Description: Funciones para el uso de posteos en la web
Version: 0.1
Author: Pablo Palacios
Author URI: https://medicca.pe
*/


// Función para obtener atributos globales
function get_global_post_attributes($post) {
    $post_title = $post->post_title;
    $post_name = $post->post_name;
    $post_permalink = "/blog/" . $post_name;
    $thumbnail = '';

    if (has_post_thumbnail($post->ID)) {
        $thumbnail_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
        $thumbnail = $thumbnail_data[0];
    }

    $post_date = date("d M", strtotime($post->post_date));
    $months = [
        'Jan' => 'enero', 'Feb' => 'febrero', 'Mar' => 'marzo', 'Apr' => 'abril',
        'May' => 'mayo', 'Jun' => 'junio', 'Jul' => 'julio', 'Aug' => 'agosto',
        'Sep' => 'setiembre', 'Oct' => 'octubre', 'Nov' => 'noviembre', 'Dec' => 'diciembre'
    ];
    $fecha = strtr($post_date, $months);

    // Devolver un arreglo asociativo con los atributos globales
    return [
        'post_title' => $post_title,
        'post_permalink' => $post_permalink,
        'thumbnail' => $thumbnail,
        'fecha' => $fecha,
    ];
}

function posthome2_shortcode() {
    $args = array(
        'numberposts' => 2,
        'offset' => 1,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'suppress_filters' => false
    );
    $post_array = get_posts($args);

    ob_start(); // Iniciar el búfer de salida

    foreach ($post_array as $post) {
        // Obtener los atributos globales utilizando la función
        $global_attributes = get_global_post_attributes($post);

        // Acceder a los atributos globales
        $post_title = $global_attributes['post_title'];
        $post_permalink = $global_attributes['post_permalink'];
        $thumbnail = $global_attributes['thumbnail'];
        // Resto del código para mostrar la publicación
		?>
        <a class="card bg-soft-primary mb-5" href="<?php echo $post_permalink;?>">
			<img loading="lazy" class="card-img-top" src="<?php echo $thumbnail; ?>" alt="Image Description">
			<div class="card-body">
				<h4><?php echo $post_title ?></h4>
			</div>
		</a>
        <?php

    }

    return ob_get_clean(); // Obtener y limpiar el contenido del búfer de salida
}
add_shortcode('posthome2', 'posthome2_shortcode');

function posthome_shortcode() {
    $args = array(
        'numberposts' => 1,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'suppress_filters' => true
    );

    $post_array = get_posts($args);

    ob_start(); // Iniciar el búfer de salida

    foreach ($post_array as $post) {
        // Obtener los atributos globales utilizando la función
        $global_attributes = get_global_post_attributes($post);

        // Acceder a los atributos globales
        $post_title = $global_attributes['post_title'];
        $post_permalink = $global_attributes['post_permalink'];
        $thumbnail = $global_attributes['thumbnail'];

        // Obtener el contenido del post y acortarlo a 25 palabras
        $post_content = $post->post_content;
        $post_content = wp_trim_words($post_content, 30, '...');

        ?>
        <a class="card card-borderless card-transition-zoom bg-soft-primary mb-4" href="<?php echo $post_permalink; ?>">
            <div class="card-transition-zoom-item">
                <img loading="lazy" class="card-img" src="<?php echo $thumbnail; ?>" alt="<?php echo $post_title; ?>">
                <span class="badge bg-primary text-white card-pinned-top-end">NUEVO</span>
            </div>
            <div class="card-body">
                <h1><?php echo $post_title; ?></h1>
                <p><?php echo $post_content; ?></p>
            </div>
        </a>
        <?php
    }

    return ob_get_clean(); // Obtener y limpiar el contenido del búfer de salida
}
add_shortcode('posthome', 'posthome_shortcode');

function postfooter_shortcode() {
    $args = array(
        'numberposts' => 4,
        'offset' => 3,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'suppress_filters' => true
    );

    $post_array = get_posts($args);

    ob_start(); // Iniciar el búfer de salida

    ?>
    <div class="card-group card-group-sm-break">
    <?php
    foreach ($post_array as $post) {
        // Obtener los atributos globales utilizando la función
        $global_attributes = get_global_post_attributes($post);

        // Acceder a los atributos globales
        $post_title = $global_attributes['post_title'];
        $post_permalink = $global_attributes['post_permalink'];
        $thumbnail = $global_attributes['thumbnail'];

        ?>
        <a class="card bg-soft-primary" href="<?php echo $post_permalink; ?>">
            <img loading="lazy" class="card-img-top" src="<?php echo $thumbnail; ?>" alt="Image Description">
            <div class="card-body">
                <h6><?php echo $post_title; ?></h6>
            </div>
        </a>
        <?php
    }
    ?>
    </div>
    <?php

    return ob_get_clean(); // Obtener y limpiar el contenido del búfer de salida
}
add_shortcode('postfooter', 'postfooter_shortcode');
function custom_postfooter_shortcode() {
    $args = array(
        'numberposts' => 140, // Ajusta el número de posts que deseas obtener
        'offset' => 7, // Saltar los primeros 8 posts
        'suppress_filters' => true
    );

    $post_array = get_posts($args);

    ob_start(); // Iniciar el búfer de salida

    ?>
    <div class="row">
    <?php
    foreach ($post_array as $post) {
        // Obtener los atributos globales utilizando la función
        $global_attributes = get_global_post_attributes($post);

        // Acceder a los atributos globales
        $post_title = $global_attributes['post_title'];
        $post_permalink = $global_attributes['post_permalink'];
        $thumbnail = $global_attributes['thumbnail']; // Asegúrate de que el atributo 'thumbnail' está disponible

        ?>
        <div class="col-12 col-md-4 mb-3">
            <a class="d-block" href="<?php echo $post_permalink; ?>">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar avatar-lg">
                            <img loading="lazy" class="avatar-img" src="<?php echo $thumbnail; ?>" alt="Image Description">
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="text-inherit mb-0"><?php echo $post_title; ?></h6>
                    </div>
                </div>
            </a>
        </div>
        <?php
    }
    ?>
    </div>
    <?php

    return ob_get_clean(); // Obtener y limpiar el contenido del búfer de salida
}
add_shortcode('custom_postfooter', 'custom_postfooter_shortcode');


function get_category_posts_shortcode($atts) {
    // Atributos por defecto para el shortcode
    $atts = shortcode_atts(
        [
            'posts_per_category' => 5, // Número de posts por categoría
        ],
        $atts,
        'category_posts'
    );

    // Obtener todas las categorías
    $categories = get_categories();

    ob_start(); // Iniciar el búfer de salida

    echo '<div class="row">'; // Inicia el contenedor principal

    // Recorrer cada categoría
    foreach ($categories as $category) {
        $args = [
            'cat' => $category->term_id, // ID de la categoría
            'posts_per_page' => $atts['posts_per_category'], // Número de posts a mostrar
            'orderby' => 'date', // Ordenar por fecha
            'order' => 'DESC', // Orden descendente
            'fields' => 'ids', // Obtener solo los IDs para conteo
        ];

        $query = new WP_Query($args);

        // Solo mostrar la categoría si tiene al menos 5 publicaciones
        if ($query->found_posts >= $atts['posts_per_category']) {
            echo '<div class="col-12 mb-4"><h2 class="text-primary">' . esc_html($category->name) . '</h2></div>';
            
            $posts_args = [
                'cat' => $category->term_id,
                'posts_per_page' => $atts['posts_per_category'],
                'orderby' => 'date',
                'order' => 'DESC',
            ];

            $posts_query = new WP_Query($posts_args);

            // Mostrar las publicaciones en formato card
            while ($posts_query->have_posts()) {
                $posts_query->the_post();

                $post_title = get_the_title();
                $post_permalink = get_permalink();
                $post_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : ''; // Miniatura

                ?>
                <div class="col-12 col-md-4 mb-3">
                    <a class="d-block" href="<?php echo esc_url($post_permalink); ?>">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avatar avatar-lg">
                                    <img loading="lazy" class="avatar-img" src="<?php echo esc_url($post_thumbnail); ?>" alt="<?php echo esc_attr($post_title); ?>">
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="text-inherit mb-0"><?php echo esc_html($post_title); ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }

            // Resetear la consulta de posts para cada categoría
            wp_reset_postdata();
        }
    }

    echo '</div>'; // Cierra el contenedor principal

    return ob_get_clean(); // Devolver el contenido del búfer de salida
}

add_shortcode('category_posts', 'get_category_posts_shortcode');

?>