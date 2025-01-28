<?php

// Eliminar mensajes adicionales del footer
function remove_wp_footer_message() {
    remove_action( 'wp_footer', 'the_generator' );
    remove_action( 'wp_footer', 'wp_admin_bar_render', 1000 );
}
add_action( 'init', 'remove_wp_footer_message' );

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Cargar header y navbar
get_header();

// Consulta de los posts
$query = new WP_Query( [
    'post_type'      => 'post',
    'posts_per_page' => -1, // Cargar todos los posts para procesarlos dinámicamente
    'orderby'        => 'date',
    'order'          => 'DESC',
] );
?>
<section class="py-5">
    <div class="container py-4">
        <h2 class="text-center text-primary pb-3">
            Nuestro<span class="color-naranja"> BLOG</span>
        </h2>

        <div class="row">
            <?php if ( $query->have_posts() ): ?>
                <?php
                $i = 0; // Contador global para determinar la posición del post.
                $additionalPosts = []; // Arreglo para los posts adicionales (a partir del 8vo).
                while ( $query->have_posts() ): $query->the_post();
                    $post_image = get_the_post_thumbnail_url( get_the_ID(), 'large' ) ?: 'https://via.placeholder.com/600x400';
                    $post_title = get_the_title();
                    $post_excerpt = wp_trim_words( get_the_excerpt(), 20 );
                    $post_url = get_permalink();

                    // Posts principales y secundarios
                    if ( $i === 0 ): // Post principal ?>
                        <div class="col-md-8">
                            <a class="card card-borderless card-transition-zoom bg-soft-primary mb-4" href="<?php echo esc_url( $post_url ); ?>">
                                <div class="card-transition-zoom-item">
                                    <img loading="lazy" class="card-img" src="<?php echo esc_url( $post_image ); ?>" alt="<?php echo esc_attr( $post_title ); ?>">
                                    <span class="badge bg-primary text-white card-pinned-top-end">NUEVO</span>
                                </div>
                                <div class="card-body">
                                    <h1 class="color-azul color-naranja-hover"><?php echo esc_html( $post_title ); ?></h1>
                                    <p><?php echo esc_html( $post_excerpt ); ?></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                    <?php elseif ( $i > 0 && $i < 3 ): // Posts secundarios ?>
                            <a class="card bg-soft-primary mb-5" href="<?php echo esc_url( $post_url ); ?>">
                                <img loading="lazy" class="card-img-top" src="<?php echo esc_url( $post_image ); ?>" alt="<?php echo esc_attr( $post_title ); ?>">
                                <div class="card-body">
                                    <h4 class="color-azul color-naranja-hover"><?php echo esc_html( $post_title ); ?></h4>
                                </div>
                            </a>
                    <?php elseif ( $i === 3 ): // Inicio del grupo de posts pequeños ?>
                        </div>
                        <div class="col-12">
                            <div class="card-group card-group-sm-break">
                    <?php elseif ( $i >= 3 && $i < 8 ): // Posts pequeños (máximo 4) ?>
                        <a class="card bg-soft-primary" href="<?php echo esc_url( $post_url ); ?>">
                            <img loading="lazy" class="card-img-top" src="<?php echo esc_url( $post_image ); ?>" alt="<?php echo esc_attr( $post_title ); ?>">
                            <div class="card-body">
                                <h6 class="color-azul color-naranja-hover"><?php echo esc_html( $post_title ); ?></h6>
                            </div>
                        </a>
                    <?php elseif ( $i === 8 ): // Fin del grupo de posts pequeños ?>
                            </div>
                        </div>
                    <?php else: // Posts adicionales para paginación ?>
                        <?php
                        $additionalPosts[] = [
                            'image'   => $post_image,
                            'title'   => $post_title,
                            'excerpt' => $post_excerpt,
                            'url'     => $post_url,
                        ];
                        ?>
                    <?php endif;
                    $i++;
                endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <!-- Contenedor para posts paginados -->
        <div class="row" id="paginated-posts">
            <!-- Los posts adicionales se renderizarán aquí mediante JavaScript -->
        </div>

        <!-- Paginación -->
        <nav aria-label="Paginación">
            <ul class="pagination justify-content-center mt-4" id="pagination-controls">
                <li class="page-item">
                    <button class="page-link" id="go-first">&laquo; Inicio</button>
                </li>
                <!-- Los números de página se generarán dinámicamente -->
                <li class="page-item">
                    <button class="page-link" id="go-last">Fin &raquo;</button>
                </li>
            </ul>
        </nav>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const postsPerPage = 4; // Número de posts por página
    const additionalPosts = <?php echo json_encode( $additionalPosts ); ?>; // Cargar los posts adicionales desde PHP
    const paginatedPostsContainer = document.getElementById('paginated-posts');
    const paginationControls = document.getElementById('pagination-controls');
    const totalPages = Math.ceil(additionalPosts.length / postsPerPage);
    let currentPage = 1;

    function renderPage(page) {
        paginatedPostsContainer.innerHTML = ''; // Limpiar posts existentes
        const start = (page - 1) * postsPerPage;
        const end = start + postsPerPage;
        const postsToShow = additionalPosts.slice(start, end);

        // Renderizar los posts actuales
        postsToShow.forEach(post => {
            const postHTML = `
                <div class="col-12 mb-4">
                    <div class="d-flex align-items-center p-3">
                        <div class="flex-shrink-0">
                            <img loading="lazy" class="rounded" src="${post.image}" alt="${post.title}" style="width: 120px; height: 120px; object-fit: cover;">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-1 color-azul color-naranja-hover">${post.title}</h4>
                            <p class="mb-0">${post.excerpt}</p>
                        </div>
                        <div class="ms-5 col-3 d-flex flex-column align-items-end">
                            <a href="${post.url}" class="btn btn-primary btn-sm mb-2 w-100">Ver más</a>
                            <a href="https://wa.me/?text=Consulta%20sobre%20${encodeURIComponent(post.title)}" class="btn btn-naranja btn-sm w-100">Solicitar cita</a>
                        </div>
                    </div>
                </div>
            `;
            paginatedPostsContainer.insertAdjacentHTML('beforeend', postHTML);
        });

        // Actualizar botones de paginación
        updatePaginationControls(page);
    }

    function updatePaginationControls(page) {
        const firstButton = document.getElementById('go-first');
        const lastButton = document.getElementById('go-last');

        firstButton.disabled = page === 1;
        lastButton.disabled = page === totalPages;

        // Generar números de página dinámicamente
        const pageNumbers = Array.from({ length: totalPages }, (_, i) => i + 1);
        const pageButtons = pageNumbers
            .map(p => `
                <li class="page-item ${p === page ? 'active' : ''}">
                    <button class="page-link pagination-number" data-page="${p}">${p}</button>
                </li>
            `)
            .join('');

        paginationControls.innerHTML = `
            <li class="page-item">
                <button class="page-link" id="go-first" ${page === 1 ? 'disabled' : ''}>&laquo; Inicio</button>
            </li>
            ${pageButtons}
            <li class="page-item">
                <button class="page-link" id="go-last" ${page === totalPages ? 'disabled' : ''}>Fin &raquo;</button>
            </li>
        `;

        // Asignar eventos a los botones
        document.querySelectorAll('.pagination-number').forEach(button => {
            button.addEventListener('click', () => renderPage(parseInt(button.dataset.page)));
        });

        firstButton.addEventListener('click', () => renderPage(1));
        lastButton.addEventListener('click', () => renderPage(totalPages));
    }

    // Inicializar la primera página
    renderPage(currentPage);
});
</script>

<?php
// Cargar footer
get_footer();
