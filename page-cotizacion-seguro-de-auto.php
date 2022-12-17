<?php get_header(); ?>

	<section id="formulario">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="contenedor-formulario rounded text-center">
                        <!-- h2>Datos generales</h2 -->
						<?php the_field('formulario'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="contenedor-disclaimer rounded text-center">
                        <h5>Gracias por su preferencia</h5>
                        <?php the_field('disclaimer'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
