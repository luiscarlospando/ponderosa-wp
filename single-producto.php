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
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 my-auto">
                        <figure>
                            <?php the_post_thumbnail("thumb-large", [
                                "class" => "img-fluid",
                            ]); ?>
                        </figure>
                    </div>
                    <div class="col-xl-8 my-auto">
                        <div class="row">
                            <div class="col-12">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                <?php edit_post_link(); ?>

                                <?php
                                $receta_popular = get_field("receta_popular");
                                if ($receta_popular): ?>
                                    <h2>Receta popular</h2>
                                    <div class="card mb-4">
                                        <a href="<?php echo esc_html(
                                            get_permalink($receta_popular->ID)
                                        ); ?>" class="thumb-link">
                                            <?php echo get_the_post_thumbnail(
                                                $receta_popular->ID,
                                                "thumb-receta",
                                                [
                                                    "class" =>
                                                        "card-img-left img-fluid",
                                                ]
                                            ); ?>
                                        </a>
                                        <div class="card-body">
                                            <h1 class="card-title">
                                                <?php echo esc_html(
                                                    $receta_popular->post_title
                                                ); ?>
                                            </h1>
                                            <p class="card-text">
                                                <?php
                                                $content = apply_filters(
                                                    "the_content",
                                                    $receta_popular->post_content
                                                );
                                                echo wp_strip_all_tags(
                                                    $content
                                                );
                                                ?>
                                            </p>
                                            <a href="<?php echo esc_html(
                                                get_permalink(
                                                    $receta_popular->ID
                                                )
                                            ); ?>" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                <?php endif;
                                ?>

                                <div class="row">
                                    <div class="col-md-4">
                                        <?php if (have_rows("presentacion")): ?>
                                            <h2>Presentación</h2>
                                            <?php while (
                                                have_rows("presentacion")
                                            ):
                                                the_row(); ?>
                                            <?php
                                            endwhile; ?>
                                        <?php endif; ?>

                                        <ul class="listado-presentacion list-inline">
                                            <?php if (
                                                have_rows("presentacion")
                                            ):
                                                while (
                                                    have_rows("presentacion")
                                                ):
                                                    the_row(); ?>
                                                <?php if (
                                                    get_sub_field("piezas")
                                                ): ?>
                                                    <li class="list-inline-item">- <?php the_sub_field(
                                                        "piezas"
                                                    ); ?></li>
                                                <?php endif; ?>
                                            <?php
                                                endwhile; ?>
                                            <?php
                                            else:
                                                 ?>
                                            <?php
                                            endif; ?>
                                        </ul>
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="list-inline especificaciones">
                                            <?php if (get_field("porcion")): ?>
                                                <li class="list-inline-item">
                                                    <div class="especificacion">
                                                        <div><?php the_field(
                                                            "porcion"
                                                        ); ?></div>
                                                        <div>Porción</div>
                                                    </div>
                                                </li>

                                            <?php endif; ?>
                                            <?php if (
                                                get_field(
                                                    "contenido_energetico"
                                                )
                                            ): ?>
                                                <li class="list-inline-item">
                                                    <div class="especificacion">
                                                        <div><?php the_field(
                                                            "contenido_energetico"
                                                        ); ?></div>
                                                        <div>Contenido energético</div>
                                                    </div>
                                                </li>

                                            <?php endif; ?>
                                            <?php if (
                                                get_field("proteinas")
                                            ): ?>
                                                <li class="list-inline-item">
                                                    <div class="especificacion">
                                                        <div><?php the_field(
                                                            "proteinas"
                                                        ); ?></div>
                                                        <div>Proteínas</div>
                                                    </div>
                                                </li>

                                            <?php endif; ?>
                                            <?php if (
                                                get_field("grasas_lipidos")
                                            ): ?>
                                                <li class="list-inline-item">
                                                    <div class="especificacion">
                                                        <div><?php the_field(
                                                            "grasas_lipidos"
                                                        ); ?></div>
                                                        <div>Grasas (lípidos)</div>
                                                    </div>
                                                </li>

                                            <?php endif; ?>
                                            <?php if (
                                                get_field("grasa_saturada")
                                            ): ?>
                                                <li class="list-inline-item">
                                                    <div class="especificacion">
                                                        <div><?php the_field(
                                                            "grasa_saturada"
                                                        ); ?></div>
                                                        <div>Grasa saturada</div>
                                                    </div>
                                                </li>

                                            <?php endif; ?>
                                            <?php if (
                                                get_field("carbohidratos")
                                            ): ?>
                                                <li class="list-inline-item">
                                                    <div class="especificacion">
                                                        <div><?php the_field(
                                                            "carbohidratos"
                                                        ); ?></div>
                                                        <div>Carbohidratos</div>
                                                    </div>
                                                </li>

                                            <?php endif; ?>
                                            <?php if (get_field("azucares")): ?>
                                                <li class="list-inline-item">
                                                    <div class="especificacion">
                                                        <div><?php the_field(
                                                            "azucares"
                                                        ); ?></div>
                                                        <div>Azúcares</div>
                                                    </div>
                                                </li>

                                            <?php endif; ?>
                                            <?php if (get_field("sodio")): ?>
                                                <li class="list-inline-item">
                                                    <div class="especificacion">
                                                        <div><?php the_field(
                                                            "sodio"
                                                        ); ?></div>
                                                        <div>Sodio</div>
                                                    </div>
                                                </li>

                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php
        endwhile; ?>
    <?php
    else:
         ?>
    <?php
    endif; ?>

    <section id="productos" class="section-gray py-60">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h1>Productos Relacionados</h1>
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

<?php get_footer(); ?>
