<!DOCTYPE html>
<html lang="es">
<head>

<?php include ('script/head.php'); ?>
</head>                                 
<body class="header-sticky page-loading">   
    <div class="loading-overlay">
    </div>
    
<!-- Boxed -->
<div class="boxed">

<?php   include ('module/menus.php'); 
        include ('module/slides.php'); 
        include ('module/flat.php'); 
        include ('module/seccion_1.php'); 
        include ('module/seccion_2.php'); 
        include ('module/productos.php'); 
        include ('cintillo_contacto.php'); 
        include ('module/clientes.php'); 
        include ('module/footer.php');
?>

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-chevron-up"></i>
    </a>   

</div>
<!-- Boxed -->

<?php include ('script/script.php'); ?>


</body>
</html>