<?php 
$title = "Inicio";
$additional_styles = '<link rel="stylesheet" href="css/inicio.css">';

include('includes/header.php'); 
?>

<main>
    <section id="inicio">
        <div id="AgroVision-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#AgroVision-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#AgroVision-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#AgroVision-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="6000">
                  <img src="imagenes/imagen1.png" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item" data-bs-interval="6000">
                  <img src="imagenes/imagen2.png" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item" data-bs-interval="6000">
                  <img src="imagenes/imagen3.png" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#AgroVision-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#AgroVision-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="products">
            <div class="titulo-products">
                <h1>Conectividad con la última tecnología</h1>
            </div>
            <div class="four-columns">
                <div class="column left">
                    <a href="productos.php">
                        <div class="image-container">
                            <div class="image-background" style="background-image: url('imagenes/Solar-Powered-Products-Hikvision.jpg');"></div>
                        </div>
                    </a>
                    <h2>Kits de monitoreo autónomo</h2>
                    <p>Equipados con paneles solares y baterías incluidas, estos dispositivos utilizan tecnología IP para conectarse a tu celular, brindando vigilancia constante las 24 horas del día, sin importar la ubicación.</p>
                </div>
                <div class="column center left">
                    <a href="productos.php">
                        <div class="image-container">
                            <div class="image-background" style="background-image: url('imagenes/cows.jpg');"></div>
                        </div>
                    </a>
                    <h2>Conectividad rural</h2>
                    <p>Ya sea por datos móviles o por WiFi, siempre existe una solución para que puedas acceder a Internet sin importar tu ubicación o necesidades.</p>
                </div>
                <div class="column center right">
                    <a href="productos.php">
                        <div class="image-container">
                            <div class="image-background" style="background-image: url('imagenes/producto_camara_optica_2.png');"></div>
                        </div>
                    </a>
                    <h2>Cámaras con zoom óptico</h2>
                    <p>Alcanzá a cubrir distancias de hasta kilómetros con una sola cámara con los dispositivos Hikvision de x25 aumentos ópticos sin la necesidad de un armado complejo ni costoso.</p>
                </div>
                <div class="column right">
                    <a href="productos.php">
                        <div class="image-container">
                            <div class="image-background" style="background-image: url('imagenes/Starlink2.png');"></div>
                        </div>
                    </a>
                    <h2>Internet en donde sea</h2>
                    <p>Kit Starlink para Internet de alta velocidad y baja latencia en cualquier lugar del planeta. Conectá cualquier equipo que necesites a internet sin preocuparte nunca más por la capacidad de transmisión</p>
                </div>
            </div>
            <div class="boton_container">
                <a href="productos.php" class="boton_products">Ver más</a>
            </div>
        </div>
        
        <div class="section-specialized">
            <div class="row row-services">
                <div class="column column-service">
                    <div class="service service-advice">
                        <div class="service-content">
                            <div class="service-image">
                                <img src="imagenes/logo_asesoramiento.png" alt="Asesoramiento Especializado" class="service-img">
                            </div>
                            <div class="service-info">
                                <h4 class="service-title">ASESORAMIENTO ESPECIALIZADO</h4>
                                <p class="service-description">Te brindamos nuestra ayuda y recomendación en base a tus necesidades y las particularidades del lugar de instalación del producto. Realizando un análisis de los servicios disponibles en el lugar y las necesidades a cubrir podemos ofrecer una solución personalizada que mejor se adapte a cada escenario.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column column-service">
                    <div class="service service-shipping">
                        <div class="service-content">
                            <div class="service-image">
                                <img src="imagenes/logo_envio.png" alt="Envíos a todo Argentina" class="service-img">
                            </div>
                            <div class="service-info">
                                <h4 class="service-title">ENVÍOS A TODO ARGENTINA</h4>
                                <p class="service-description">Envío gratis a todo el país para que no importa tu localidad puedas acceder a la mejor tecnología siempre.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column column-service">
                    <div class="service service-support">
                        <div class="service-content">
                            <div class="service-image">
                                <img src="imagenes/logo_soporte.png" alt="Soporte Técnico" class="service-img">
                            </div>
                            <div class="service-info">
                                <h4 class="service-title">SOPORTE TÉCNICO</h4>
                                <p class="service-description">Contamos con equipos de fácil instalación y armado para que puedas ponerlos en funcionamiento apenas los recibas, junto con nuestros instructivos personalizados, pero también contamos con soporte técnico especializado para cualquier eventualidad que surja.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
        <div class="mission-section">
            <div class="content-box">
                <div class="mission-header">
                    <h1 class="mission-title">Nuestra misión</h1>
                    <img src="imagenes/agrosafe_icono.png" alt="Logo de la Empresa" class="mission-logo">
                </div>
                <p class="mission-text">Nacemos con el objetivo de traerte la mejor tecnología para que puedas contar con una seguridad y conectividad constante sin importar las condiciones del lugar. Sabemos los innumerables problemas y preocupaciones que conlleva la vida rural y queríamos ofrecer herramientas modernas para las complicaciones cotidianas.</p>
                <p class="mission-text">De aquí surge AgroVision, una empresa especializada en el rubro y ámbito agropecuario, con soluciones de monitoreo, internet y conectividad para que sin importar la localidad, lejanía o falta de servicios, siempre podamos ofrecerte una solución diseñada especialmente para tus necesidades.</p>
            </div>
        </div>
    </section>
</main>

<script src="scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php include('includes/footer.php'); ?>