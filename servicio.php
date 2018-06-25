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


	<?php   include ('module/menus.php');   ?>

	<div class="page-title parallax parallax2">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">                    
	                <div class="page-title-heading">
	                    <h2>Tienda</h2>
	                </div><!-- /.page-title-heading -->                        
	            </div><!-- /.col-md-12 -->  
	        </div><!-- /.row -->  
	    </div><!-- /.container -->                      
	</div>


	<div class="page-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="flat-wrapper">
                    <div class="breadcrumbs">
                        <h2 class="trail-browse">Usted esta Aqui:</h2>
                        <ul class="trail-items">
                            <li class="trail-item"><a href="index.php">Inicio</a></li>
                            <li class="trail-item"><a href="tienda.php">Productos</a></li>
                            <li>Nombre del Producto</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>


    <div class="container pad-top60px pad-bottom60px">

    	<div class="row">
    		<div class="col-md-6 col-xs-12" align="right">
                <h2 class="flat-title-section  mag-bottom0px">Servicios Item</h2> 
                <p style="text-align: justify;">AGLAB PERU es una empresa líder en so­luciones químicas integrales de limpieza y desinfección, cuyo objetivo es satisfacer las necesidades de los clientes con productos y servicios de calidad respetando el medio ambiente. <br><br>Gracias al esfuerzo y profesionalidad de un equipo sólido, AGLAB PERU actual­mente esta posicionada como una empresa competitiva en su sector, que trabaja por dar un servicio de valor añadido. Mediante un alto grado de especialización y una filo­sofía de mejora continua, AGLAB PERU ha conseguido trabajar para las empresas más destacadas de diversas industrias. </p>
                <a class="button lg" href="contacto.php">Servicio <i class="fa fa-chevron-right"></i></a>

            </div>
            <div class="col-md-6 col-xs-12">
                <img src="images/products/4.jpg" class="img-responsive">
            </div>
        </div>    
    	<hr>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <img src="images/products/4.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 col-xs-12">
                <h2 class="flat-title-section  mag-bottom0px">Servicios Item</h2> 
                <p style="text-align: justify;">AGLAB PERU es una empresa líder en so­luciones químicas integrales de limpieza y desinfección, cuyo objetivo es satisfacer las necesidades de los clientes con productos y servicios de calidad respetando el medio ambiente. <br><br>Gracias al esfuerzo y profesionalidad de un equipo sólido, AGLAB PERU actual­mente esta posicionada como una empresa competitiva en su sector, que trabaja por dar un servicio de valor añadido. Mediante un alto grado de especialización y una filo­sofía de mejora continua, AGLAB PERU ha conseguido trabajar para las empresas más destacadas de diversas industrias. </p>
                <a class="button lg" href="..contacto.php">Servicio <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
<hr>
        <div class="row">
            <div class="col-md-6 col-xs-12" align="right">
                <h2 class="flat-title-section mag-bottom0px">Servicios Item</h2> 
                <p style="text-align: justify;">AGLAB PERU es una empresa líder en so­luciones químicas integrales de limpieza y desinfección, cuyo objetivo es satisfacer las necesidades de los clientes con productos y servicios de calidad respetando el medio ambiente. <br><br>Gracias al esfuerzo y profesionalidad de un equipo sólido, AGLAB PERU actual­mente esta posicionada como una empresa competitiva en su sector, que trabaja por dar un servicio de valor añadido. Mediante un alto grado de especialización y una filo­sofía de mejora continua, AGLAB PERU ha conseguido trabajar para las empresas más destacadas de diversas industrias. </p>
                <a class="button lg" href="..contacto.php">Servicio <i class="fa fa-chevron-right"></i></a>

            </div>
            <div class="col-md-6 col-xs-12">
                <img src="images/products/4.jpg" class="img-responsive">
            </div>
        </div>

    </div>





	<?php   include ('module/footer.php');  ?>

	<!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-chevron-up" style="transform: rotate(-45deg);"></i>
    </a>   

</div>


    <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script> 
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="javascript/gmap3.min.js"></script>
    <script type="text/javascript" src="javascript/jquery-validate.js"></script>

    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="javascript/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="javascript/slider.js"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                autoplayTimeout:1000,
                control:false,
                autoplay:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
    </script>


</body>