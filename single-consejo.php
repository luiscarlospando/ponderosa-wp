<?php get_header(); ?>

    <?php
    $jumbotron = locate_template("includes/jumbotron.php");
    if ($jumbotron) {
        load_template($jumbotron, true);
    }
    ?>

    <section id="consejos" class="section-white">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
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
