<?php 
$title = "Guias";
$additional_styles = '<link rel="stylesheet" href="css/guias.css">';

include('includes/header.php'); 
?>

<main>
    <section id="guias">
        <div class="guides-section-title">
            <h2>Nuestras Guías y Tutoriales</h2>
        </div>
        <div class="guides-container">
            <div class="guide-item">
                <h3>Guía de Monitoreo Autónomo</h3>
                <a href="imagenes/2407DJEN0098557N.pdf" download>Descargar</a>
            </div>
            <div class="guide-item">
                <h3>Instructivo de Instalación de WiFi HaLow</h3>
                <a href="path/to/instalacion_wifi_halow.pdf" download>Descargar</a>
            </div>
            <div class="guide-item">
                <h3>Manual de Uso de Cámaras con Zoom Óptico</h3>
                <a href="path/to/manual_uso_camaras.pdf" download>Descargar</a>
            </div>
            <div class="guide-item">
                <h3>Kit Starlink para Internet</h3>
                <a href="path/to/kit_starlink.pdf" download>Descargar</a>
            </div>
        </div>
    </section>
</main>

<script src="scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php include('includes/footer.php'); ?>