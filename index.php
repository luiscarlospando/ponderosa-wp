<?php get_header(); ?>

    <?php
    $jumbotron = locate_template("includes/jumbotron.php");
    if ($jumbotron) {
        load_template($jumbotron, true);
    }
    ?>

    <section id="productos" class="section-gray py-60">
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

    <!-- section id="before-recetario"></section -->

    <section id="recetario" class="section-red curved-div-inward">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h1>Recetario Ponderosa®</h1>
                </div>
            </div>
            <div class="row">
                <?php
                $loopRecetarioPonderosa = locate_template(
                    "includes/loop-recetario-ponderosa.php"
                );
                if ($loopRecetarioPonderosa) {
                    load_template($loopRecetarioPonderosa, true);
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

    <!-- section id="after-recetario"></section -->

    <!-- section id="nuestra-historia" class="py-60">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Nuestra <span>historia</span></h1>
                    <p>
                        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati reiciendis numquam, voluptates atque veritatis provident nulla accusamus animi sit! Quo quae doloribus tempore labore ipsum placeat! Cumque temporibus illo magnam?</span>
                    </p>
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint dolor aut corporis aspernatur delectus at odio explicabo cupiditate, doloribus aliquid? Quos debitis at autem amet quam, temporibus id cumque quia.</p>
                    <a href="<?php echo esc_url(
                        get_permalink(2)
                    ); ?>" class="btn">Conoce la historia completa <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section -->

    <!-- section class="before-consejos"></section -->

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

    <!-- section class="after-consejos"></section -->

<?php get_footer(); ?>
