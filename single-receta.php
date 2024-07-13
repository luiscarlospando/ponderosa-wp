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

        <section id="receta" class="section-bg-sandwich pt-60 pb-0">
            <div class="overlay"></div>
            <div class="container">
                <div class="row mb-5 text-center">
                    <div class="col">
                        <h1>Sándwich casero</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="contenedor-receta">
                            <div class="row">
                                <div class="col-lg-6 p-5 pb-0 pb-lg-5 border-lg-end">
                                    <h2>Ingredientes:</h2>
                                    <ul>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 p-5">
                                    <h2>Intrucciones:</h2>
                                    <ol>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ratione. Ea delectus sed adipisci illo cumque neque temporibus doloribus qui! Aspernatur, minus veritatis. Ratione, placeat vel est laboriosam possimus animi!</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="before-consejos"></section>

        <section  class="recetas-generico section-white py-60">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <h1>Conoce más recetas</h1>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $args = [
                        "post_type" => "receta", // Custom post type
                        "posts_per_page" => 3, // Number of posts to display
                        "orderby" => "date", // Order by date
                        "order" => "DESC", // Latest posts first
                        "post__not_in" => [$current_post_id], // Exclude the current post
                    ];

                    $receta_query = new WP_Query($args);

                    if ($receta_query->have_posts()):
                        while ($receta_query->have_posts()):
                            $receta_query->the_post(); ?>
                            <div class="col-lg-4 mb-4">
                                <div class="card">
                                    <?php the_post_thumbnail("thumb-receta", [
                                        "class" => "card-img-left img-fluid",
                                    ]); ?>
                                    <div class="card-body">
                                        <h1 class="card-title"><?php the_title(); ?></h1>
                                        <p class="card-text"><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                         ?>
                        <p>No se encontraron recetas.</p>
                    <?php
                    endif;
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

        <section id="productos" class="section-gray py-60">
            <div class="container">
                <div class="row mb-5">
                    <div class="col">
                        <h1>Productos</h1>
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
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Embutidos</h1 >
                                            <a href="#" class="btn btn-primary">
                                                Ver producto
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Salchichas</h1 >
                                            <a href="#" class="btn btn-primary">
                                                Ver producto
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Quesos</h1 >
                                            <a href="#" class="btn btn-primary">
                                                Ver producto
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Embutidos</h1 >
                                            <a href="#" class="btn btn-primary">
                                                Ver producto
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Salchichas</h1 >
                                            <a href="#" class="btn btn-primary">
                                                Ver producto
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Quesos</h1 >
                                            <a href="#" class="btn btn-primary">
                                                Ver producto
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Embutidos</h1 >
                                            <a href="#" class="btn btn-primary">
                                                Ver producto
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Salchichas</h1 >
                                            <a href="#" class="btn btn-primary">
                                                Ver producto
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Quesos</h1 >
                                            <a href="#" class="btn btn-primary">
                                                Ver producto
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

        <section id="before-recetario"></section>

        <section id="recetario" class="section-red curved-div-inward">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <h1>Recetario Ponderosa®</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates ea voluptatum error eius, hic ullam optio impedit reiciendis doloremque nihil molestias eligendi ratione sint harum architecto culpa veniam cum accusantium!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
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
                    <div class="col-lg-6 mb-4">
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
                    <div class="col-lg-6 mb-4">
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
                    <div class="col-lg-6 mb-4">
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
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="#" class="btn btn-primary">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="after-recetario"></section>

        <section id="nuestra-historia" class="py-60">
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
                        <a href="#" class="btn">Conoce la historia completa <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

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
                        <!-- Swiper -->
                        <div class="swiper swiper-consejos">
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-square.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Cómo hacer el mejor queso fundido regio</h1>
                                            <a href="#" class="btn-ver">
                                                Ver <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-square.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Cómo hacer el mejor queso fundido regio</h1>
                                            <a href="#" class="btn-ver">
                                                Ver <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-square.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Cómo hacer el mejor queso fundido regio</h1>
                                            <a href="#" class="btn-ver">
                                                Ver <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-square.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Cómo hacer el mejor queso fundido regio</h1>
                                            <a href="#" class="btn-ver">
                                                Ver <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-square.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Cómo hacer el mejor queso fundido regio</h1>
                                            <a href="#" class="btn-ver">
                                                Ver <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-square.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Cómo hacer el mejor queso fundido regio</h1>
                                            <a href="#" class="btn-ver">
                                                Ver <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-square.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Cómo hacer el mejor queso fundido regio</h1>
                                            <a href="#" class="btn-ver">
                                                Ver <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-square.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Cómo hacer el mejor queso fundido regio</h1>
                                            <a href="#" class="btn-ver">
                                                Ver <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-square.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Cómo hacer el mejor queso fundido regio</h1>
                                            <a href="#" class="btn-ver">
                                                Ver <i class="fa-solid fa-arrow-right"></i>
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

        <!-- section class="after-consejos"></section -->

<?php get_footer(); ?>
