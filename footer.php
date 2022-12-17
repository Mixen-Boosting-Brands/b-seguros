	<section id="empresas" class="py-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Slider main container -->
                    <div class="swiper swiper-logos">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <figure>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/empresas/logos-empresas-1.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <figure>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/empresas/logos-empresas-2.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.3454910532655!2d-106.09426838444483!3d28.649372182411092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea43bc1ca395f1%3A0x1f0950522a3efb34!2sB-SEGUROS%20AGENTE%20DE%20SEGUROS%20Y%20DE%20FIANZAS!5e0!3m2!1ses-419!2smx!4v1667586594714!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer class="pt-60" id="contacto">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 my-auto">
                    <div class="content py-4 py-lg-0 text-center text-lg-start">
                        <!-- 	Agregue style! por que se encimaban	 -->
                        <h2 style="margin-bottom: 16px !important;">Protege</h2>
                        <h1 class="ms-4">tu futuro</h1>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="content">
                        <div class="row">
                            <div class="col-6 my-auto">
                                <address>
                                    Av. Glandorf 2903<br>
                                    Col. San Felipe III Etapa<br>
                                    Chihuahua, Chih.<br>
                                    C.P. 31203
                                </address>
                            </div>
                            <div class="col-6 my-auto">
                                <ul class="list-unstyled">
                                    <li>
                                        Teléfono: <a href="tel:+526144438004">(614) 443 8004</a>
                                    </li>
                                    <li>
                                        Correo: <a href="mailto:golivas@b-seguros.com.mx">golivas@b-seguros.com.mx</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-auto">
                    <div class="content">
                        <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                        <div id="form-messages"></div>
                        <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                        <form action="mailer.php" method="POST" class="row g-3 needs-validation contact-form mb-4 mb-lg-0" id="ajax-contact" novalidate>
                            <div class="col-md-6 form-floating">
                                <input type="text" class="form-control shadow-none" id="nombre" name="nombre" placeholder="Nombre*"
                                    pattern=".{5,50}" required>
                                <label for="nombre" class="form-label">Nombre*</label>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce tu nombre completo.
                                </div>
                            </div>
                            <div class="col-md-6 form-floating">
                                <input type="text" class="form-control shadow-none" id="apellido" name="apellido" placeholder="Apellido*"
                                    pattern=".{5,50}" required>
                                <label for="nombre" class="form-label">Apellido*</label>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce tu apellido.
                                </div>
                            </div>
                            <div class="col-md-6 form-floating">
                                <input type="email" class="form-control shadow-none" id="correo" name="correo" placeholder="Correo electrónico*"
                                    required>
                                <label for="correo" class="form-label">Correo electrónico*</label>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce un correo electrónico válido.
                                </div>
                            </div>
                            <div class="col-md-6 form-floating">
                                <input type="tel" class="form-control shadow-none" id="telefono" name="telefono" placeholder="Teléfono*"
                                    pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                <label for="correo" class="form-label">Teléfono*</label>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor escribe un número de teléfono válido (Ej: 6141234567).
                                </div>
                            </div>
                            <div class="col-md-6 form-floating">
                                <select class="form-select" id="tipo-de-seguro" name="tipo-de-seguro" aria-label="Tipo de seguro*" required>
                                    <option selected disabled value="">Personas:</option>
                                    <option value="Gastos médicos mayores">Gastos médicos mayores</option>
                                    <option value="Vida">Vida</option>
                                    <option value="Auto">Auto</option>
                                    <option value="Accidentes personales">Accidentes personales</option>
                                    <option value="Seguro de casa">Seguro de casa</option>
                                    <option value="Educación">Educación</option>
                                    <option value="Viaje">Viaje</option>
                                    <option disabled value="">Empresas:</option>
                                    <option value="Daños">Daños</option>
                                    <option value="Gastos médicos colectivo">Gastos médicos colectivo</option>
                                    <option value="Vida grupo">Vida grupo</option>
                                    <option value="Finanzas">Finanzas</option>
                                    <option value="Flotillas">Flotillas</option>
                                    <option value="Transporte">Transporte</option>
                                </select>
                                <label for="tipo-de-seguro">Tipo de seguro*</label>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor selecciona un tipo de seguro.
                                </div>
                            </div>
                            <div class="col-md-6 my-auto text-end">
                                <button type="submit" class="btn btn-secondary btn-block rounded-pill mt-4 px-4 py-2">
                                    <i class="fa-solid fa-paper-plane"></i> Enviar
                                </button>
                                <div id="hold-on-a-sec">
                                    <i id="contact-spinner" class="fas fa-spinner fa-spin"></i> Espera un momento por favor...
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyright">
            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. Todos los derechos reservados. Made with <i class="fa-solid fa-heart"></i> by <a href="https://mixen.mx/" target="_blank">Mixen</a>.</p>
        </div>
    </footer>

    <a href="https://wa.me/526143576264?text=Hola%20B-Seguros,%20necesito%20información." class="whatsapp" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>
    <a href="https://wa.me/526141189170?text=Hola%20B-Seguros,%20necesito%20información." class="whatsapp" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>

	<?php wp_footer(); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/app.bundle.js"></script>
</body>
</html>