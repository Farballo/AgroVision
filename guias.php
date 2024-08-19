<?php 
$title = "Guias";
$additional_styles = '<link rel="stylesheet" href="css/guias.css">';

include('includes/header.php'); 
?>

<main>
    <section id="guias">
        <div class="guides-section-title">
            <h2>Guías y Tutoriales</h2>
        </div>
        <div class="guides-container">
            <div class="guide-item">
                <h3>Guía Compartir acceso Hik-Connect</h3>
                <a href="guias/Instructivo_compartir_acceso_Hik_connect.pdf" download>Descargar</a>
            </div>
            <div class="guide-item">
                <h3>Manual Kit Hikvision Solar 4G</h3>
                <a href="https://www.hikvision.com/content/dam/hikvision/products/S000000001/S000000002/S000000003/S000005599/OFR014428/M000069080/User_Manual/UD28967B-C_Network-Camera_User-Manual_5.7.20_20240131.PDF" download>Descargar</a>
            </div>
            <div class="guide-item">
                <h3>Datasheet Cámara Hikvision 2Mpx</h3>
                <a href="guias/Cámara_2Mp_DS-2DE4225IW-DET5_V5.7.1_20220704.pdf" download>Descargar</a>
            </div>
            <div class="guide-item">
                <h3>Datasheet Kit Hikvision Solar 4G</h3>
                <a href="guias/DS-2XS3Q47G1-LDH_4G_Datasheet_20230708.pdf" download>Descargar</a>
            </div>
        </div>
    </section>
</main>

<script src="scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php include('includes/footer.php'); ?>