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

    <section id="receta" class="section-bg-sandwich pt-60 pb-0" style="background: url('<?php echo esc_url(
        get_the_post_thumbnail_url(get_the_ID(), "full")
    ); ?>') no-repeat; background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="contenedor-receta">
                        <div class="row">
                            <div class="col-lg-6 p-5 pb-0 pb-lg-5 border-lg-end">
                                <?php
                                // Get the values of the custom fields 'ingredientes' and 'instrucciones'
                                $ingredientes = get_field("ingredientes");

                                // Print the custom fields if they have values
                                if ($ingredientes):
                                    echo "<h2>Ingredientes:</h2>";
                                    echo $ingredientes;
                                endif;
                                ?>
                            </div>
                            <div class="col-lg-6 p-5">
                                <?php
                                // Get the values of the custom fields 'ingredientes' and 'instrucciones'
                                $instrucciones = get_field("instrucciones");

                                // Print the custom fields if they have values
                                if ($instrucciones):
                                    echo "<h2>Instrucciones:</h2>";
                                    echo $instrucciones;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="before-consejos"></section>

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
                    <a href="#" class="btn btn-primary">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="after-consejos"></section>

    <section class="before-consejos"></section>

    <section id="consejos" class="section-white">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h1>Consejos Útiles</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates ea voluptatum error eius, hic ullam optio impedit reiciendis doloremque nihil molestias eligendi ratione sint harum architecto culpa veniam cum accusantium!</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php
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
    </section>

    <section class="after-consejos"></section>

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
