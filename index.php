<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('script/head.php'); ?>
    <!-- twitter -->
    <meta name="twitter:url" content="<?php echo $xUrl; ?>" />
    <meta name="twitter:title" content="<?php echo $xTitulo; ?>" />
    <meta name="twitter:description" content="<?php echo $xDes; ?>" />
    <meta name="twitter:image" content="/cms/assets/img/meta/<?php echo $xFace1; ?>" />
    <meta name="twitter:image" content="/cms/assets/img/meta/<?php echo $xFace2; ?>" />
    <!-- facebook -->
    <meta property="og:url" content="<?php echo $xUrl; ?>" />
    <meta property="og:title" content="<?php echo $xTitulo; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $xDes; ?>" />
    <meta property="og:image" content="cms/assets/img/meta/<?php echo $xFace1; ?>" />
    <meta property="og:image" content="cms/assets/img/meta/<?php echo $xFace2; ?>" />
</head>
<body class="header-sticky page-loading">
    <div class="loading-overlay"></div>
    <!-- Boxed -->
    <div class="boxed">
        <?php
            include('module/menus.php');
            include('module/slides.php');
            include('module/clientes.php');
            include('module/seccion_1.php');
            include('module/seccion_2.php');
            include('module/productos.php');
            include('module/cintillo_contacto.php');
            include('module/sectores.php');
            include('module/footer.php');
        ?>
    </div>
</body>
</html>
