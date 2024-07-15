<?php get_header(); ?>

    <?php
    $jumbotron = locate_template("includes/jumbotron.php");
    if ($jumbotron) {
        load_template($jumbotron, true);
    }
    ?>

    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

        <section id="producto" class="section-white">
            <!-- Swiper -->
            <div class="swiper swiper-producto">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-4 my-auto">
                                    <figure>
                                        <?php the_post_thumbnail(
                                            "thumb-large",
                                            [
                                                "class" => "img-fluid",
                                            ]
                                        ); ?>
                                    </figure>
                                </div>
                                <div class="col-xl-8 my-auto">
                                    <div class="row">
                                        <div class="col-xl-8 mb-4 mb-xl-0">
                                            <h1><?php the_title(); ?></h1>
                                            <?php the_content(); ?>
                                            <?php edit_post_link();
            // Always handy to have Edit Post Links available.
            ?>
                                            <h2>Presentación</h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">- 8 pz</li>
                                                <li class="list-inline-item">- 12 px</li>
                                            </ul>
                                            <h2>Receta popular</h2>
                                            <div class="card">
                                                <img src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                                                <div class="card-body">
                                                    <h1 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis? Fuga accusantium eius ad? Ipsa non doloremque quas provident, eum error!</p>
                                                    <a href="#" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <ul class="list-unstyled especificaciones">
                                                <li>
                                                    <div class="especificacion">
                                                        <div>420 g</div>
                                                        <div>Porción</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="especificacion">
                                                        <div>144.5</div>
                                                        <div>Contenido energético /kcal</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="especificacion">
                                                        <div>7.5 g</div>
                                                        <div>Proteínas</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="especificacion">
                                                        <div>7.5 g</div>
                                                        <div>Grasas (lípidos)</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="especificacion">
                                                        <div>4.94 g</div>
                                                        <div>Grasa saturada</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="especificacion">
                                                        <div>12.00 g</div>
                                                        <div>Carbohidratos</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="especificacion">
                                                        <div>12.00 g</div>
                                                        <div>Azúcares</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="especificacion">
                                                        <div>125 mg</div>
                                                        <div>Sodio</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- div class="swiper-navigation-container">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div -->
            </div>
        </section>

    <?php
        endwhile; ?>
    <?php
    else:
         ?>
    <?php
    endif; ?>

<?php get_footer(); ?>
