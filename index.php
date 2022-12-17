<?php get_header(); ?>

	<section id="carrusel">
        <!-- Slider main container -->
        <div class="swiper swiper-carrusel">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide">
                        <div class="slide-content">
                            <h2>Brindando servicios</h2>
                            <h1>de vanguardia</h1>
                            <h3>Protegiendo el patrimonio de tu familia</h3>
                            <a href="<?php echo get_permalink('8'); ?>" class="btn btn-primary rounded-pill my-2 p-3 p-3">Obtener una cotización</a>
                        </div>
                        <video id="bg-video" autoplay muted loop>
                            <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div id="overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carrusel/slide-2.png');">
                        <div class="slide-content">
                            <h2>Aseguramos y protegemos contra</h2>
                            <h1>cualquier daño</h1>
                            <h3>al que puedan estar expuestos</h3>
                            <a href="<?php echo get_permalink('16'); ?>" class="btn btn-primary rounded-pill my-2 p-3">Obtener una cotización</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carrusel/slide-3.png');">
                        <div class="slide-content">
                            <h2>Protegemos la salud,</h2>
                            <h1>ayudamos a tu empresa</h1>
                            <h3>a contar con el mejor plan de Gastos Médicos</h3>
                            <a href="<?php echo get_permalink('12'); ?>" class="btn btn-primary rounded-pill my-2 p-3">Obtener una cotización</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carrusel/slide-4.png');">
                        <div class="slide-content">
                            <h2>Autos y flotillas, tenemos</h2>
                            <h1>la mejor protección</h1>
                            <h3>para tu flotilla de autos y equipo pesado</h3>
                            <ul class="list-inline">
                                <li class="list-inline item">
                                    <a href="<?php echo get_permalink('14'); ?>" class="btn btn-primary rounded-pill my-2 p-3">Obtener una cotización (unidades de transporte pasajeros)</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_permalink('20'); ?>" class="btn btn-primary rounded-pill my-2 p-3">Obtener una cotización (equipo pesado y/o tractocamión)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carrusel/slide-5.png');">
                        <div class="slide-content">
                            <h2>Gobierno Corporativo</h2>
                            <h1>apoyamos a tu empresa</h1>
                            <h3>mediante las mejores prácticas de Gobierno Corporativo</h3>
                            <a href="#" class="btn btn-primary rounded-pill my-2 p-3">Obtener una cotización</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carrusel/slide-6.png');">
                        <div class="slide-content">
                            <h2>En B-Seguros sabemos que</h2>
                            <h1>tu protección</h1>
                            <h3>y la de tu familia es lo más importante, te ofrecemos productos acordes a tus necesidades y con precio muy accesible</h3>
                            <a href="#cotiza-tu-seguro" class="btn btn-primary rounded-pill my-2 p-3 anchor">Obtener una cotización</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
<!--             <div class="swiper-pagination"></div> -->
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section id="cta-1" class="cta parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta-1/bg-cta-1.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <div class="content py-4 py-lg-0 text-center text-lg-start">
                        <h2>Somos tu</h2>
                        <h1>mejor opción</h1>
                        <h3 class="text-uppercase">Elegidos por miles de asegurados en México</h3>
                        <a href="#" class="btn btn-secondary rounded-pill my-2 px-4 py-2">Leer más</a>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <figure>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta-1/thumb-cta-1.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="cotiza-tu-seguro" class="py-30">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1>Cotiza tu seguro</h1>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="content rounded">
                        <a href="<?php echo get_permalink('12'); ?>">
                            <p>Gastos Médicos<br>Mayores</p>
                            <span class="ico ico-1"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="content rounded">
                        <a href="<?php echo get_permalink('10'); ?>">
                            <p>Seguro de<br>Vida</p>
                            <span class="ico ico-2"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="content rounded">
                        <a href="<?php echo get_permalink('16'); ?>">
                            <p>Seguro de<br>Auto</p>
                            <span class="ico ico-3"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="content rounded">
                        <a href="<?php echo get_permalink('8'); ?>">
                            <p>Casa<br>Habitación</p>
                            <span class="ico ico-4"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a class="btn btn-primary rounded-pill anchor" href="#seguros" class="btn btn-primary rounded-pill my-2 px-4 py-2">Conoce más</a>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="py-60 parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/servicios/bg-servicios.png">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 servicio-1">
                    <div class="content">
                        <span class="ico ico-1"></span>
                        <p>Atención personalizada 
                            con un equipo altamente
                            capacitado.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 servicio-2">
                    <div class="content">
                        <span class="ico ico-2"></span>
                        <p>Brindamos las mejores 
                            propuestas del mercado 
                            en base a tus necesidades.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 servicio-3">
                    <div class="content">
                        <span class="ico ico-3"></span>
                        <p>A través de nuestra área 
                            especializada de siniestros,
                            ofrecemos puntual seguimiento
                            a tu reclamación.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 servicio-4">
                    <div class="content">
                        <span class="ico ico-4"></span>
                        <p>Contamos con Tecnología de 
                            vanguardia que hace mas eficiente 
                            la comunicación con nuestros 
                            asegurados.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 servicio-5">
                    <div class="content">
                        <span class="ico ico-5"></span>
                        <p>Nos especializamos en la 
                            elaboración de concursos 
                            y licitaciones de seguros.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 servicio-6">
                    <div class="content">
                        <span class="ico ico-6"></span>
                        <p>Apoyo especializado con 
                            diversos programas en 
                            contención de siniestros para 
                            las empresas.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 servicio-7">
                    <div class="content">
                        <span class="ico ico-7"></span>
                        <p>Contamos con departamento 
                            jurídico interno para la asesoría 
                            de tus pólizas y/o reclamaciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta-3" class="cta">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 my-auto">
                    <div class="content">
                        <h2>¿Qué hacer</h2>
                        <h1>en caso de siniestro?</h1>
                        <p>Infórmate en caso de un sistema de urgencia médica, auto y daños empresariales.</p>
                        <div class="text-lg-end">
                            <a href="<?php echo get_permalink('5'); ?>" class="btn btn-primary rounded-pill mt-2 mb-4 mb-lg-0 px-4 py-2">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 my-auto">
                    <figure>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta-3/thumb-cta-3.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="descanso" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/descanso/bg-descanso.png">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="content">
                        <h2>Cotiza tu seguro</h2>
                        <h1>ahora</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="infografia" class="py-60">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <div class="content">
                        <h2>¿Qué hacer</h2>
                        <h1>en caso de siniestro de Gastos Médicos Mayores?</h1>
                        <p>Para reportar una eventualidad médica te recomendamos:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto text-center">
                                <h1 class="card-title">1</h1>
                            </div>
                            <div class="col-md-8 my-auto text-center text-md-start">
                                <div class="card-body">
                                    <p class="card-text">Tener a la mano tu número
                                        de póliza.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto text-center">
                                <h1 class="card-title">2</h1>
                            </div>
                            <div class="col-md-8 my-auto text-center text-md-start">
                                <div class="card-body">
                                    <p class="card-text">Contactar a tu Agente de
                                        B-Seguros: es importante
                                        que él esté enterado de tu
                                        posible tratamiento
                                        o cirugía.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto text-center">
                                <h1 class="card-title">3</h1>
                            </div>
                            <div class="col-md-8 my-auto text-center text-md-start">
                                <div class="card-body">
                                    <p class="card-text">En caso de ser necesario,
                                        tomar acciones inmediatas
                                        como: solicitar ayuda, llamar
                                        a los bomberos, Cruz Roja, 
                                        Policía, etc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto text-center">
                                <h1 class="card-title">4</h1>
                            </div>
                            <div class="col-md-8 my-auto text-center text-md-start">
                                <div class="card-body">
                                    <p class="card-text">Reportar el siniestro de
                                        inmediato o a más tardar
                                        dentro de las 24 horas
                                        siguientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta-2" class="cta parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta-2/bg-cta-2.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 my-auto">
                    <div class="content py-4 py-lg-0 text-center text-lg-start">
                        <h2>Teléfono de</h2>
                        <h1 class="ms-4">contacto</h1>
                        <h3 class="text-uppercase">
                            <a href="tel:+526141514461">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta-2/ico-telefono.svg" alt="" id="ico-telefono" class="img-fluid d-inline">
                                614 151 4461
                            </a>
                        </h3>
                        <a href="mailto:cynarteaga@b-seguros.com.mx" class="btn btn-secondary rounded-pill my-2 px-4 py-2">cynarteaga@b-seguros.com.mx</a>
                    </div>
                </div>
                <div class="col-lg-5 my-auto">
                    <figure>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta-2/thumb-cta-2.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="seguros" class="py-60">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <div class="content">
                        <h2>Conoce nuestros</h2>
                        <h1>seguros</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="nav flex-column nav-pills mb-3 mb-lg-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="rounded-pill mb-3 nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Personas</button>
                            <button class="rounded-pill nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Empresas</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Gastos Médicos Mayores</h4>
                                                <p class="card-text">Es un plan de protección financiera 
                                                    para hacer frente a los gastos generados 
                                                    por la atención médica originados de un 
                                                    accidente o enfermedad.</p>
                                                <a href="<?php echo get_permalink('12'); ?>" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Vida</h4>
                                                <p class="card-text">El mundo está lleno de riesgos, deja
                                                    a los tuyos protegidos y asegúrales
                                                    un futuro tranquilo.</p>
                                                <a href="<?php echo get_permalink('10'); ?>" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Auto</h4>
                                                <p class="card-text">Contamos con diferentes paquetes pensados
                                                    en cada una de tus necesidades, que
                                                    dependiendo de tu elección te cubrirán
                                                    daños a terceros o los daños ocasionados
                                                    a tu vehículo y tus pasajeros.</p>
                                                <a href="<?php echo get_permalink('16'); ?>" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Accidentes personales</h4>
                                                <p class="card-text">Otorga seguridad a bajo costo ante la perdida,
                                                    de quien provee el sustento de la familia,
                                                    en el cual se indemniza a los beneficiarios,
                                                    si el asegurado fallece a causa de un accidente,
                                                    protege perdidad orgánicas y gastos médicos
                                                    derivados de un accidente.</p>
                                                <a href="<?php echo get_permalink('12'); ?>" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Seguro de casa</h4>
                                                <p class="card-text">Tu patrimonio debe contar con las coberturas
                                                    para hacer frente a los fenómenos
                                                    hidrometeorológicos. incendios, explosión,
                                                    robo entre otros.</p>
                                                <a href="<?php echo get_permalink('8'); ?>" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- cards comentadas -->
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Educación</h4>
                                                <p class="card-text">Plan que permite asegurar el pago de la
                                                    formación académica universitaria de 
                                                    los hijos o beneficiarios.</p>
<!--                                                 <a href="#" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Viaje</h4>
                                                <p class="card-text">Ten tranquilidad de sentirte protegido
                                                    en caso de alguna eventualidad
                                                    en tu viaje.</p>
<!--                                                 <a href="#" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a> -->
                                            </div>
                                        </div>
                                    </div>
									<!-- end cards comentadas -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Daños</h4>
                                                <p class="card-text">Protegemos tu inversión en caso de sismo,
                                                    incendio o inundación, te asesoramod en
                                                    la contratación del plan como propietario
                                                    o arrendatario.</p>
                                                <a href="<?php echo get_permalink('61'); ?>" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a>
                                            </div>
                                        </div>
                                    </div>
									<!-- cards comentadas -->
                                     <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Flotillas</h4>
                                                <p class="card-text">Buscamos las mejores compañías
                                                    aseguradoras para tus colectividades
                                                    de autos y equipo pesado.</p>
                                                <a href="<?php echo get_permalink('20'); ?>" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Transporte</h4>
                                                <p class="card-text">Brindamos protección contra riesgos,
                                                    por accidentes, averías y actos delictivos,
                                                    a los que están expuestas las mercancías
                                                    que son transportadas vía terrestre,
                                                    aérea y marítima.</p>
                                                <a href="<?php echo get_permalink('14'); ?>" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Fianzas</h4>
                                                <p class="card-text">Te apoyamos a la contratación de
                                                   fianzas y hacer frente a la obligación
                                                    de un contrato ante un beneficiario.</p>
<!--                                                 <a href="#" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a> -->
                                            </div>
                                        </div>
                                    </div>
									<!-- end cards comentadas -->
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Gastos Médicos Colectivo</h4>
                                                <p class="card-text">Te apoyamos a contar con seguro
                                                    colectivo a la medida de tu empresa o
                                                    Grupo, protegiendo la salud de tus
                                                    colaboradores</p>
<!--                                                 <a href="#" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Vida Grupo</h4>
                                                <p class="card-text">El recurso más importante de tu negocio,
                                                    la vida de tus colaboradores, a través del
                                                    seguro social de vida Grupo se brinda
                                                    tranquilidad a él y a sus seres queridos en
                                                    caso de fallecimiento.</p>
<!--                                                 <a href="#" class="btn btn-primary rounded-pill px-4 py-2">Cotizar</a> -->
                                            </div>
                                        </div>									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
