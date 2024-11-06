<?php get_header(); ?>

    <section id="jumbotron" style="background: url('<?php echo esc_url(
        get_the_post_thumbnail_url(get_the_ID(), "full")
    ); ?>') no-repeat; background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        <strong><?php the_title(); ?></strong><br>
                        con productos <strong>Ponderosa</strong>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section id="receta" class="pt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1><?php the_title(); ?></h1>

                    <?php
                    // Get the values of the custom fields 'tiempo_de_preparacion'
                    $tiempo_de_preparacion = get_field("tiempo_de_preparacion");
                    if (!empty($tiempo_de_preparacion)): ?>
                        <div class="my-4">
                            <i class="fa-solid fa-clock"></i> Tiempo de preparación: <?php echo esc_html(
                                $tiempo_de_preparacion
                            ); ?>
                        </div>
                    <?php else: ?>
                        <div class="my-4">
                            <i class="fa-solid fa-clock"></i> Tiempo no especificado
                        </div>
                    <?php endif;
                    ?>

                    <?php
                    // Get the values of the custom fields 'ingredientes'
                    $ingredientes = get_field("ingredientes");

                    // Print the custom fields if they have values
                    if ($ingredientes):
                        echo "<h2>Ingredientes:</h2>";
                        echo $ingredientes;
                    endif;
                    ?>
                </div>
                <div class="col-lg-7">
                    <?php
                    // Get the values of the custom fields 'instrucciones'
                    $instrucciones = get_field("instrucciones");

                    // Print the custom fields if they have values
                    if ($instrucciones):
                        echo "<h2>Instrucciones:</h2>";
                        echo $instrucciones;
                    endif;
                    ?>

                    <?php if (have_rows("productos_utilizados")): ?>
                        <h2>Productos Utilizados</h2>
                        <ul class="list-inline">
                            <?php while (have_rows("productos_utilizados")):

                                the_row();
                                $producto = get_sub_field("producto");
                                if ($producto): ?>
                                    <li class="list-inline-item">
                                        <div class="card mb-4" style="max-width: 300px;">
                                            <a href="<?php echo esc_html(
                                                get_permalink($producto->ID)
                                            ); ?>" class="thumb-link">
                                                <?php echo get_the_post_thumbnail(
                                                    $producto->ID,
                                                    "small",
                                                    [
                                                        "class" =>
                                                            "card-img-top img-fluid",
                                                    ]
                                                ); ?>
                                            </a>
                                            <div class="card-body">
                                                <h1 class="card-title">
                                                    <?php echo esc_html(
                                                        $producto->post_title
                                                    ); ?>
                                                </h1>
                                                <p class="card-text">
                                                    <?php
                                                    $content = apply_filters(
                                                        "the_content",
                                                        $producto->post_content
                                                    );
                                                    echo wp_strip_all_tags(
                                                        $content
                                                    );
                                                    ?>
                                                </p>
                                                <a href="<?php echo esc_html(
                                                    get_permalink($producto->ID)
                                                ); ?>" class="btn btn-primary">
                                                    Ver producto
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php endif;
                                ?>
                            <?php
                            endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section  class="recetas-generico section-gray py-60">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h1>Conoce más recetas</h1>
                </div>
            </div>
            <div class="row">
                <?php
                $loopRecetas = locate_template("includes/loop-recetas.php");
                if ($loopRecetas) {
                    load_template($loopRecetas, true);
                }
                ?>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="<?php echo esc_url(
                        get_permalink(35)
                    ); ?>" class="btn btn-primary">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- section id="consejos" class="section-white">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h1>Consejos Útiles</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- ?php
                    $swiperConsejos = locate_template(
                        "includes/swiper-consejos.php"
                    );
                    if ($swiperConsejos) {
                        load_template($swiperConsejos, true);
                    }
                    ?>
                </div>
            </div>
        </div>
    </section -->

    <section id="productos" class="section-bg-salchichas py-60">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h1>Productos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php
                    $swiperProductos = locate_template(
                        "includes/swiper-productos.php"
                    );
                    if ($swiperProductos) {
                        load_template($swiperProductos, true);
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
