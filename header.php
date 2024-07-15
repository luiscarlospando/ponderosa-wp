<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <title><?php
        wp_title("");
        if (wp_title("", false)) {
            echo " : ";
        }
        bloginfo("name");
        ?></title>

        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon-16x16.png">
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/site.webmanifest">
        <link rel="mask-icon" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#e41a2f">
        <meta name="theme-color" content="#e41a2f">

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/css/styles.css" />

        <?php wp_head(); ?>
    </head>
    <body class="reddit-sans-regular">
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url()
                ); ?>">
                    <img
                        class="logo img-fluid"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo-rojo@2x.png"
                        alt=""
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled">
                        <li>
                            <a class="anchor" id="btn-nav-1" href="<?php if (
                                !is_home()
                            ):
                                echo esc_url(home_url());
                            endif; ?>#productos"
                                >Productos</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="<?php echo esc_url(
                                get_permalink(2)
                            ); ?>"
                                >Nuestra Historia</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="#"
                                >Recetas</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-4" href="#"
                                >Consejos Prácticos</a
                            >
                        </li>
                    </ul>
                </nav>
                <a href="#" class="anchor btn btn-primary" id="btn-contacto"
                    >Contáctanos</a
                >
                <div id="social">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://" target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- div id="contacto-menu">
                    <ul class="list-unstyled">
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:cmail@domain.com"
                                >mail@domain.com</a
                            >
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+526141234567">(614) 123 4567</a>
                        </li>
                    </ul>
                </div -->
            </div>
        </div>

        <header id="navbar">
            <div class="container">
                <div class="row">
                    <div class="d-none d-lg-block col-lg-5 my-auto text-center">
                        <nav>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="">Productos</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="">Nuestra Historia</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="">Recetas</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 col-lg-2 text-lg-center">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo@2x.png"
                                alt=""
                                class="logo img-fluid"
                                id="logo-navbar"
                            />
                        </a>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block my-auto text-center">
                        <nav>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="">Consejos Prácticos</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="">Contacto</a>
                                </li>
                                <li class="list-inline-item">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            Síguenos
                                        </li>
                                        <li class="list-inline-item">
                                            <ul class="list-inline list-inline-nested">
                                                <li class="list-inline-item">
                                                    <a
                                                        href="https://"
                                                        alt="Instagram"
                                                        target="_blank"
                                                    >
                                                        <i
                                                            class="fa-brands fa-instagram"
                                                        ></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a
                                                        href="https://"
                                                        alt="Facebook"
                                                        target="_blank"
                                                    >
                                                        <i class="fa-brands fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a
                                                        href="https://"
                                                        alt="TikTok"
                                                        target="_blank"
                                                    >
                                                        <i
                                                            class="fa-brands fa-tiktok"
                                                        ></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 d-lg-none my-auto text-end">
                        <a
                            id="mburger"
                            class="d-lg-none"
                            href="javascript:void(0)"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
