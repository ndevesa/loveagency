<?php
/*
Template Name: Contacto
Template Post Type: page
*/
get_header();
?>
<div class="contacto">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <h1>Contactanos</h1>
                <p><?php the_field('introduccion'); ?></p>
            </div>
        </div>

        <div class="row pb-5">
            <div class="col-12 col-md-6">
                <?php 
                $redes = get_field('redes', 'option');
                if($redes):
                    $email = $redes['email'];
                    $tel = $redes['telefono'];
                    $ubicacion = $redes['ubicacion'];
                ?>
                    <ul>
                        <?php if($email): ?>
                            <li class="d-flex align-items-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/envelope.svg" class="mr-4" width="25">
                                <div class="d-block">
                                <a href="<?php echo 'mailto:'.$email; ?>"><?php echo $email; ?></a> <br>
                                <a href="mailto:mariana.szamrey@catavientos.com.ar">mariana.szamrey@catavientos.com.ar</a> <br>
                                <a href="mailto:belen.cornejo@catavientos.com.ar">belen.cornejo@catavientos.com.ar</a>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if($tel): ?>
                            <li class="d-flex align-items-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone.svg" class="mr-4" width="25">
                                <a href="<?php echo 'tel:'.$tel; ?>"><?php echo $tel; ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if($ubicacion): ?>
                            <li class="d-flex align-items-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/map.svg" class="mr-4" width="25">
                                <?php echo $ubicacion; ?>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-6">
                <!-- cf7 -->
                <!-- <form id="form">
                    <div class="row">
                        <div class="col">
                            [text* nombre class:form-control placeholder "Nombre Completo"]
                        </div>
                        <div class="col">
                            [select* motivo class:form-control "Opción A" "Opción B" "Opción C"]
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            [email* email class:form-control placeholder "E-mail"]
                        </div>
                        <div class="col">
                            [tel* telefono class:form-control placeholder "Teléfono"]
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            [textarea mensaje class:form-control placeholder "Mensaje"]
                            [submit class:btn class:-outline class:mt-3 class:float-right "Enviar"]
                        </div>
                    </div>
                </form> -->

                <?php echo do_shortcode('[contact-form-7 id="135" title="Formulario de Contacto"]'); ?>
            </div>
        </div>
    </div><!-- /container -->
    <div id="map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.2479653389414!2d-65.42154378499862!3d-24.786961284088555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc3b0de372359%3A0x56987d7aa78ebc0d!2sMarcelo%20T.%20de%20Alvear%20183%2C%20Salta!5e0!3m2!1ses!2sar!4v1643176563709!5m2!1ses!2sar" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
        <iframe src="https://snazzymaps.com/embed/367378" width="100%" height="500px" style="border:none;"></iframe>
    </div>

</div>    
<?php get_footer(); ?>