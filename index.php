<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include ('script/head.php'); ?>
</head>
<body class="header-sticky page-loading">
    <div class="loading-overlay"></div>
    <!-- Boxed -->
    <div class="boxed">
        <?php
            include ('module/menus.php');
            include ('module/slides.php');
            include ('module/clientes.php');
            include ('module/seccion_1.php');
            include ('module/seccion_2.php');
            include ('module/productos.php');
            include ('module/cintillo_contacto.php');
            include ('module/sectores.php');
            include ('module/footer.php');
        ?>
    </div>
</body>
</html>
