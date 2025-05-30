<?php 
 if (!isset($_SESSION)) {
    session_start();
 }
 $auth = $_SESSION['login'] ?? false;

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Web</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio  ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="../build/img/logo.svg" class="logo" alt="Logotipo de Bienes Raices">
                </a>
                <div class="mobile-menu">
                    <img src="../build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if($auth): ?>
                            <a href="cerrar-sesion.php">cerrar Sesion</a>
                        <?php endif; ?>
                    </nav>
                </div>
                
            </div> <!--.barra-->

          
              <?php echo $inicio ?  "<h2><span>De</span>sarrollador de <span>So</span>ftware, <span>Le</span>onardo R. </h2>" : ''; ?>
              
            
        </div>
    </header>