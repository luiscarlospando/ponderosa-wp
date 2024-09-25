			<section id="bg-aleatorio" class="">
            <img src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/images/logo-bg-aleatorio@2x.png" alt="" class="logo img-fluid">
        </section>

        <footer id="contacto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-6 mb-4 mb-lg-0 col-lg-3 text-lg-center border-lg-end">
                                <h1>Menú</h1>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                href="<?php echo is_home()
                                                    ? "#productos"
                                                    : site_url() .
                                                        "#productos"; ?>"
                                                <?php if (
                                                    is_home()
                                                ): ?>class="anchor"<?php endif; ?>
                                            >Productos</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(
                                                get_permalink(2)
                                            ); ?>">Nuestra Historia</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(
                                                get_permalink(35)
                                            ); ?>">Recetas</a>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo is_home()
                                                    ? "#consejos"
                                                    : site_url() .
                                                        "#consejos"; ?>"
                                                <?php if (
                                                    is_home()
                                                ): ?>class="anchor"<?php endif; ?>
                                            >Consejos Prácticos</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-6 mb-4 mb-lg-0 col-lg-3 text-lg-center border-lg-end">
                                <h1>Productos</h1>
                                <nav>
                                    <ul class="list-unstyled">
                                        <?php
                                        // Define the custom query
                                        $args = [
                                            "post_type" => "producto",
                                            "posts_per_page" => 5,
                                            "orderby" => "rand", // Order by random
                                        ];

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()):
                                            while ($query->have_posts()):
                                                $query->the_post(); ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </li>

                                        <?php
                                            endwhile;
                                        else:
                                        endif;
                                        // Reset post data
                                        wp_reset_postdata();
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-6 mb-4 mb-lg-0 col-lg-3 text-lg-center border-lg-end">
                                <h1>Recetas</h1>
                                <nav>
                                    <ul class="list-unstyled">
                                        <?php
                                        // Define the custom query
                                        $args = [
                                            "post_type" => "receta",
                                            "posts_per_page" => 5,
                                            "orderby" => "rand", // Order by random
                                        ];

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()):
                                            while ($query->have_posts()):
                                                $query->the_post(); ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </li>

                                        <?php
                                            endwhile;
                                        else:
                                        endif;
                                        // Reset post data
                                        wp_reset_postdata();
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-6 mb-4 mb-lg-0 col-lg-3 text-lg-center border-lg-end">
                                <h1>Consejos</h1>
                                <nav>
                                    <ul class="list-unstyled">
                                        <?php
                                        // Define the custom query
                                        $args = [
                                            "post_type" => "consejo",
                                            "posts_per_page" => 5,
                                            "orderby" => "rand", // Order by random
                                        ];

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()):
                                            while ($query->have_posts()):
                                                $query->the_post(); ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </li>

                                        <?php
                                            endwhile;
                                        else:
                                        endif;
                                        // Reset post data
                                        wp_reset_postdata();
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <p class="text-uppercase fw-bold">Síguenos en nuestras redes</p>
                        <ul class="social list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/ponderosamx/" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/PONDEPONDEROSA?locale=es_LA" target="_blank">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.tiktok.com/@ponderosamx" target="_blank">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="list-unstyled">
                            <li>
                                <address>
                                    <i class="fa-solid fa-location-pin"></i> José Santos Chocano 970<br>
                                    San Nicolás de los Garza, N.L. México
                                </address>
                            </li>
                            <li>
                                <i class="fa-solid fa-headset"></i> <a href="tel:+528181581717">81 8158 1717</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i> <a href="mailto:ponderosa@bafar.com.mx">ponderosa@bafar.com.mx</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12 mb-4">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/logo-rojo@2x.png" alt="" class="logo img-fluid">
                        </a>
                    </div>
                    <div class="col-12">
                        <p class="copyright-text">© <?php echo date(
                            "Y"
                        ); ?> <a href="https://grupobafar.com/" target="_blank"">Grupo Bafar</a>. Todos los derechos reservados.</p >
                    </div>
                </div>
            </div>
        </footer>

        <!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a -->

        <?php wp_footer(); ?>

        <?php if (is_singular("producto")): ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const anchor = document.getElementById("producto");
                    if (anchor) {
                        anchor.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            </script>
        <?php endif; ?>

        <?php if (is_singular("consejo")): ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const anchor = document.getElementById("consejos");
                    if (anchor) {
                        anchor.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            </script>
        <?php endif; ?>

        <?php if (is_tax()): ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const anchor = document.getElementById("productos");
                    if (anchor) {
                        anchor.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            </script>
        <?php endif; ?>

        <?php if (is_page(2)): ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const anchor = document.getElementById("historia");
                    if (anchor) {
                        anchor.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            </script>
        <?php endif; ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/js/app.bundle.js"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BJFYV974CL"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-BJFYV974CL');
        </script>
    </body>
</html>
