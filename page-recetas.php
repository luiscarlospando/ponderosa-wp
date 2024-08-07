<?php
/*
    Template Name: Recetas
    */

get_header(); ?>

    <section id="jumbotron" style="background: url('<?php echo esc_url(
        get_the_post_thumbnail_url(get_the_ID(), "full")
    ); ?>') no-repeat; background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        <strong>Ponderosa:</strong><br>
                        creando <strong>recetas</strong><br>
                        para la <strong>familia</strong>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section  class="recetas-generico section-red py-60" style="padding-top: 100px;">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h1>Recetas de temporada</h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $loopRecetasDeTemporada = locate_template(
                            "includes/loop-recetas-de-temporada.php"
                        );
                        if ($loopRecetasDeTemporada) {
                            load_template($loopRecetasDeTemporada, true);
                        }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="<?php echo site_url(); ?>/categoria-recetas/recetas-de-temporada/" class="btn btn-primary">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h1>Recetas pa' la carnita asada</h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $loopRecetasPaLaCarnitaAsada = locate_template(
                            "includes/loop-recetas-pa-la-carnita-asada.php"
                        );
                        if ($loopRecetasPaLaCarnitaAsada) {
                            load_template($loopRecetasPaLaCarnitaAsada, true);
                        }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="<?php echo site_url(); ?>/categoria-recetas/recetas-de-temporada/" class="btn btn-primary">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h1>Recetas de temporada</h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $loopRecetasDeTemporadaOffset3 = locate_template(
                            "includes/loop-recetas-de-temporada-3.php"
                        );
                        if ($loopRecetasDeTemporadaOffset3) {
                            load_template($loopRecetasDeTemporadaOffset3, true);
                        }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="<?php echo site_url(); ?>/categoria-recetas/recetas-de-temporada/" class="btn btn-primary">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="consejos" class="section-white">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h1>Consejos Útiles</h1>
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
