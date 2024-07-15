<?php get_header(); ?>

    <section id="productos" class="section-gray py-60">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h1><?php single_cat_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Swiper -->
                    <div class="swiper swiper-productos">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/thumb-embutidos.png" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <h1 class="card-title">Embutidos</h1 >
                                        <a href="#" class="btn btn-primary">
                                            Ver productos
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/thumb-salchichas.png" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <h1 class="card-title">Salchichas</h1 >
                                        <a href="#" class="btn btn-primary">
                                            Ver productos
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/thumb-quesos.png" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <h1 class="card-title">Quesos</h1 >
                                        <a href="#" class="btn btn-primary">
                                            Ver productos
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/thumb-embutidos.png" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <h1 class="card-title">Embutidos</h1 >
                                        <a href="#" class="btn btn-primary">
                                            Ver productos
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/thumb-salchichas.png" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <h1 class="card-title">Salchichas</h1 >
                                        <a href="#" class="btn btn-primary">
                                            Ver productos
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/thumb-quesos.png" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <h1 class="card-title">Quesos</h1 >
                                        <a href="#" class="btn btn-primary">
                                            Ver productos
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
