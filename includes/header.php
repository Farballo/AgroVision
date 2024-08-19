<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php 
        if (isset($additional_styles)) {
            echo $additional_styles;
        }
    ?>
</head>
<body>
<header>
        <div class="logo_header" id="logo-empresa-header" style="display: flex;">
            <a href="/index.php">
                <img src="imagenes/logo_empresa.png" alt="Botón de Inicio" class="logo">
            </a>
        </div>
    
        <div class="secciones">
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="guias.php">Guías</a></li>
                </ul>
            </nav>
        </div>
    
        <div class="logos" id="logos-redes-header" style="display: flex;">
            <a href="https://www.instagram.com/" class="social-icon">
                <img src="imagenes/Instagram_icon.png" alt="logo ig" class="logo_ig">
            </a>
            <a href="https://wa.me/5492302584007" class="social-icon">
                <img src="imagenes/WhatsApp_icon.png" alt="logo wsp" class="logo_wsp">
            </a>
        </div>
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>
        <div class="nav-menu" id="nav-menu">
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="guias.php">Guías</a></li>
                </ul>
            </nav>
        </div>
    </header>