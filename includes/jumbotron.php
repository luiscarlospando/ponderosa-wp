<section id="jumbotron">
    <div class="swiper swiper-jumbotron">
        <div class="swiper-pagination"></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-jumbotron-1">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>
                                <strong>Creadores</strong><br>
                                de la <strong>salchicha</strong><br>
                                para <strong>asar</strong>
                            </h1>
                            <a href="<?php echo is_home()
                                ? "#productos"
                                : site_url() .
                                    "#productos"; ?>" class="btn btn-primary">Conoce más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide bg-jumbotron-2">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>
                                <strong>Ponderosa:</strong><br>
                                Creando <strong>amistades</strong><br>
                                que duran <strong>siempre</strong>
                            </h1>
                            <a href="<?php echo is_home()
                                ? "#productos"
                                : site_url() .
                                    "#productos"; ?>" class="btn btn-primary">Conoce más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide bg-jumbotron-3">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>
                                <strong>Ponderosa:</strong><br>
                                Creando <strong>productos</strong><br>
                                para la <strong>familia</strong>
                            </h1>
                            <a href="<?php echo is_home()
                                ? "#productos"
                                : site_url() .
                                    "#productos"; ?>" class="<?php if (
    is_home()
): ?>anchor<?php endif; ?> btn btn-primary">Conoce más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide bg-jumbotron-4">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>
                                <strong>Ponderosa:</strong><br>
                                Creando <strong>recetas</strong><br>
                                para la <strong>familia</strong>
                            </h1>
                            <a href="<?php echo is_home()
                                ? "#productos"
                                : site_url() .
                                    "#productos"; ?>" class="btn btn-primary">Conoce más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
