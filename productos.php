<?php 
$title = "Productos";
$additional_styles = '<link rel="stylesheet" href="css/productos.css">';

include('includes/header.php');
?>

<main>
    <section id="productos">
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
                <span class="visually-hidden">Next<|span>
            </button>
        </div>
        
        <div class="products-section-1">
            <div class="products-section-1-title">
                <h1>Consultá por nuestro catálogo de soluciones</h1>
            </div>
        </div>
        <div class="products-section-2">
            <div class="product">
                <div class="image-container">
                    <div class="image-background" style="background-image: url('imagenes/producto_kit_solar.png');"></div>
                    <div class="product-description">
                        <h2>Kits de monitoreo autónomo</h2>
                        <p>Equipados con paneles solares y baterías incluidas, estos dispositivos utilizan tecnología IP para conectarse a tu celular, brindando vigilancia constante las 24 horas del día, sin importar la ubicación.</p>
                        <p>Cuenta con manejo de la cámara compatible con cualquier Smartphone, podés contar con la tranquilidad de un monitoreo continuo sin importar cortes de luz, Internet u otras complicaciones.</p>
                        <div class="boton_container">
                            <a href="guias/AgroVision_Kit_Solar_4G.pdf" class="boton_products">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="image-container">
                    <div class="image-background" style="background-image: url('imagenes/producto_camara_optica.png');"></div>
                    <div class="product-description">
                        <h2>Cámaras con zoom óptico</h2>
                        <p>Alcanzá a cubrir distancias de hasta kilómetros con una sola cámara con los dispositivos Hikvision de x25 aumentos ópticos sin la necesidad de un armado complejo ni costoso.</p>
                        <p>Cuentan con conexión remota a tu celular desde donde podés controlar el ángulo de visión y zoom de la cámara, junto con otros parámetros tales como alertas, alarmas y mucho más.</p>
                        <div class="boton_container">
                            <a href="guias/AgroVision_Kit_Zoom_Optico.pdf" class="boton_products">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="image-container">
                    <div class="image-background" style="background-image: url('imagenes/producto_starlink.png');"></div>
                    <div class="product-description">
                        <h2>Internet en donde sea</h2>
                        <p>Kit Starlink para Internet de alta velocidad y baja latencia en cualquier lugar del planeta. Conectá cualquier equipo que necesites a Internet sin preocuparte nunca más por la capacidad de transmisión.</p>
                        <p>Disponible sin importar ubicación geográfica gracias a la constelación de satélites de Starlink, podés alcanzar velocidades de descarga mayores a 100Mbps a un precio mensual accesible y no tener más la molestia de un servicio lento o intermitente de Internet.</p>
                        <div class="boton_container">
                            <a href="productos.php" class="boton_products">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php include('includes/footer.php'); ?>