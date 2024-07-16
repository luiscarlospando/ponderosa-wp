<?php get_header(); ?>

    <?php
    $jumbotron = locate_template("includes/jumbotron.php");
    if ($jumbotron) {
        load_template($jumbotron, true);
    }
    ?>

    <section id="historia" class="section-bg-salchichas py-60">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row mb-5 text-center">
                <div class="col">
                    <h1>Nuestra historia</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Swiper Años -->
                    <div class="swiper swiper-anos">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">Inicio</div>
                            <div class="swiper-slide">1998</div>
                            <div class="swiper-slide">2004</div>
                            <div class="swiper-slide">2012</div>
                            <div class="swiper-slide">2024</div>
                            <div class="swiper-slide">La historia continúa</div>
                        </div>
                    </div>

                    <!-- Swiper Historia -->
                    <div class="swiper swiper-historia">
                        <div class="swiper-wrapper timeline">
                            <div class="swiper-slide swiper-start">
                                <div class="status">
                                    <div class="icn-start"></div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-year="1998">
                                <div class="timestamp">
                                    <span class="date">1998<span>
                                </div>
                                <div class="timeline_icn"></div>
                                <div class="status">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Título</h1 >
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae error ratione ipsum. Optio, minus! Minus illum iste voluptatibus veritatis, excepturi exercitationem optio sint repellendus provident soluta, rem vel impedit sequi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-year="2004">
                                <div class="timestamp">
                                    <span class="date">2004<span>
                                </div>
                                <div class="timeline_icn"></div>
                                <div class="status">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Título</h1 >
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae error ratione ipsum. Optio, minus! Minus illum iste voluptatibus veritatis, excepturi exercitationem optio sint repellendus provident soluta, rem vel impedit sequi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-year="2012">
                                <div class="timestamp">
                                    <span class="date">2012<span>
                                </div>
                                <div class="timeline_icn"></div>
                                <div class="status">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Título</h1 >
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae error ratione ipsum. Optio, minus! Minus illum iste voluptatibus veritatis, excepturi exercitationem optio sint repellendus provident soluta, rem vel impedit sequi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-year="2024">
                                <div class="timestamp">
                                    <span class="date">2024<span>
                                </div>
                                <div class="timeline_icn"></div>
                                <div class="status">
                                    <div class="card">
                                        <img src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/thumb-vertical.png" class="card-img-top img-fluid" alt="">
                                        <div class="card-body">
                                            <h1 class="card-title">Título</h1 >
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae error ratione ipsum. Optio, minus! Minus illum iste voluptatibus veritatis, excepturi exercitationem optio sint repellendus provident soluta, rem vel impedit sequi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide swiper-end">
                                <div class="status">
                                    <div class="icn-end"></div>
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

    <section id="recetas-de-temporada" class="section-bg-salchichas py-60">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h1>Recetas de temporada</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
                            <a href="#" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
                            <a href="#" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
                            <a href="#" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
                            <a href="#" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
                            <a href="#" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
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

    <section  class="recetas-generico section-white py-60">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h1>Recetas pa'la carnita asada</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
                            <a href="#" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
                            <a href="#" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
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

    <section  class="recetas-generico section-red py-60">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h1>Recetas de temporada</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
                            <a href="#" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
                            <a href="#" class="btn btn-primary">Ver receta <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-receta.png" class="card-img-left img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">Quesadillas con queso y chorizo Ponderosa</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis?</p>
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

    <!-- section class="after-consejos"></section -->

<?php get_footer(); ?>
