<?php
/**
* The template for displaying all single services and attachments
*/
get_header();
$intern = true; 
?>

<?php
include('partials/hero.php');
echo do_shortcode('[instagram feed="15"]'); 
?>
    
<section id="SingleService">
    <div id="serviceContent" class="container">
        <div class="row d-flex align-items-start justify-content-between">
            <div class="col-12 col-lg-4 mt-4 mt-lg-0">

                <div class="service">
                    <div class="header">
                        <small>01</small>
                        <h2 class="title">Construimos <br> experiencias que <br> dejan huella</h2>
                    </div>
                    <div class="body">
                        <span id="toggleIcon" class="d-block d-md-none" data-toggle="collapse" data-target="#data1">+</span>
                        
                        <div class="subtitle">Experiencias <br> de marca</div>
                        <p id="data1">
                            Eventos & Activaciones  <br>
                            Activaciones de temporadas <br>
                            Activaciones BTL y PDV <br>
                            Experiencias 360  <br>
                            Streamings <br>
                            Convenciones & Conferencias <br>
                            Intervenciones artísticas <br>
                            Retail experience <br>
                            Reporting personalizado
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="service">
                    <div class="header">
                        <small>02</small>
                        <h2 class="title">Creamos & <br> diseñamos marcas</h2>
                    </div>
                    <div class="body">
                        <span id="toggleIcon" class="d-block d-md-none" data-toggle="collapse" data-target="#data2">+</span>
                        
                        <div class="subtitle">Identidad <br> de marca</div>
                        <p id="data2">Desarrollo de identidad visual y conceptual / Brandbooks y toolkits de marca / Namings / Construcción conceptual y visual. <br> <br> Diagnóstico, medición, percepción / Movimiento e identidad sensorial / Interfaz de usuario</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="service">
                    <div class="header">
                        <small>03</small>
                        <h2 class="title">Contamos <br> historias que te transportan</h2>
                    </div>
                    <div class="body">
                        <span id="toggleIcon" class="d-block d-md-none" data-toggle="collapse" data-target="#data3">+</span>
                        
                        <div class="subtitle">Diseño <br> & producción</div>
                        <p id="data3">
                            Creatividad & conceptualización
                            Diseño gráfico, digital y web
                            3D Design
                            <br><br>
                            Diseños en HTML
                            Presentaciones e Infografías
                            <br><br>
                            Diseño, Producción & envíos de Kits personalizados
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<?php
include('partials/clients.php');
get_footer(); ?>