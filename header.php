<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/styles.css">
</head>
<body>
  <div id="backdrop"></div>
    <div class="menu">
        <a id="cerrar-menu" href="javascript:void(0)">
            <i class="fas fa-times"></i>
        </a>
        <div class="menu-contenido">
            <a class="anchor" id="btn-logo" href="<?php echo esc_url( home_url() ); ?>">
                <img class="logo img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="">
            </a>
            <nav>
                <ul class="list-unstyled">
                    <li>
                        <a <?php if (is_home() ): ?>class="anchor"<?php endif; ?>  id="btn-nav-1" href="<?php if (!is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#cotiza-tu-seguro">Cotiza tu seguro</a>
                    </li>
                    <hr>
                    <li>
                        <a <?php if (is_home() ): ?>class="anchor"<?php endif; ?>  id="btn-nav-2" href="<?php if (!is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#servicios">Servicios</a>
                    </li>
                    <hr>
                    <li>
                        <a <?php if (is_home() ): ?>class="anchor"<?php endif; ?>  id="btn-nav-3" href="<?php if (!is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#cta-3">¿Qué hacer en caso de siniestro?</a>
                    </li>
                    <hr>
                    <li>
                        <a <?php if (is_home() ): ?>class="anchor"<?php endif; ?>  id="btn-nav-4" href="<?php if (!is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#seguros">Conoce nuestros seguros</a>
                    </li>
                    <hr>
                    <li>
                        <a class="anchor" id="btn-nav-4" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </nav>
            <a href="#contacto" class="anchor btn btn-secondary" id="btn-contacto">Contáctanos</a>
            <!-- div id="social">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" target="_blank">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" target="_blank">
                            <i class="fab fa-instagram-square"></i>
                        </a>
                    </li>
                </ul>
            </div -->
            <div id="contacto-menu">
                <ul class="list-unstyled">
                    <li>
                        <i class="far fa-envelope"></i> <a href="mailto:golivas@b-seguros.com.mx">golivas@b-seguros.com.mx</a>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i> <a href="tel:+526144438004">(614) 443 8004</a>
                    </li>
					<li>
                        <i class="fa-brands fa-whatsapp"></i> <a href="https://wa.me/526143576264?text=Hola%20B-Seguros,%20necesito%20información." target="_blank">(614) 357 6264</a>
                    </li>
					<li>
                        <i class="fa-brands fa-whatsapp"></i> <a href="https://wa.me/526141189170?text=Hola%20B-Seguros,%20necesito%20información." target="_blank">(614) 118 9170</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-3 my-auto">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="" class="logo img-fluid" id="logo-navbar">
                    </a>
                </div>
                <div class="col-9 my-auto text-end">
<!--                     <nav class="d-block d-lg-block">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a <?php if (is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if (!is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#cotiza-tu-seguro">Cotiza tu segurooo</a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if (is_home() ): ?>class="anchor"<?php endif; ?>  href="<?php if (!is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#servicios">Servicios</a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if (is_home() ): ?>class="anchor"<?php endif; ?>  href="<?php if (!is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#cta-3">¿Qué hacer en caso de siniestro?</a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if (is_home() ): ?>class="anchor"<?php endif; ?>  href="<?php if (!is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#seguros">Conoce nuestros seguros</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="anchor" href="#contacto">Contacto</a>
                            </li>
                        </ul>
                    </nav> -->
                    <a id="mburger" class="d-lg-block" href="javascript:void(0)">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>