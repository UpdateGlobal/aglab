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
	                    <h2>Maquila</h2>
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
                            <li>Maquila</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>


    <div class="container pad-top60px">
            <div class="row">
                <div class="col-md-6 col-xs-12" align="right">

                    <img src="images/products/4.jpg" class="img-responsive">

                </div>
                <div class="col-md-6 col-xs-12">
                    <h2 class="flat-title-section style mag-bottom0px">Servicios Item</h2> 
                    <p style="text-align: justify;">AGLAB PERU es una empresa líder en so­luciones químicas integrales de limpieza y desinfección, cuyo objetivo es satisfacer las necesidades de los clientes con productos y servicios de calidad respetando el medio ambiente. <br><br>Gracias al esfuerzo y profesionalidad de un equipo sólido, AGLAB PERU actual­mente esta posicionada como una empresa competitiva en su sector, que trabaja por dar un servicio de valor añadido. Mediante un alto grado de especialización y una filo­sofía de mejora continua, AGLAB PERU ha conseguido trabajar para las empresas más destacadas de diversas industrias. </p>
                    <a class="button lg" href="contacto.php">Servicio <i class="fa fa-chevron-right"></i></a>
                  
                </div>
            </div>   
    </div>


    <div class="container-fluid bg_nosotros">
        <div class="row">
            <div class="col-md-12 col-xs-12">
          
                <div class="flat-row ">
                    <div class="container">
                         <h2 class="flat-title-section_nosotros style mag-bottom0px">Contactanos</h2>
                                <p>Please fill out the following form and a representative will contact you.</p>
                        <div class="row">
                            <div class="col-md-8">

                                <div class="flat-divider d10px"></div>
                                <form id="contactform" method="post" action="./contact/contact-process.php" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><input id="name" name="name" type="text" value="" placeholder="Name" required="required"></p>

                                            <p><input id="email" name="email" type="email" value="" placeholder="Email" required="required"></p>

                                            <p><select class="wpcf7-form-control wpcf7-select"><option value="Transport">Transport</option><option value="Logistics">Logistics</option></select></p>

                                            <p><input id="phone" name="phone" type="text" value="" placeholder="Phone Number" required="required"></p>                                
                                        </div><!-- /.col-md-6 -->

                                        <div class="col-md-6">
                                            <p><textarea name="message" placeholder="Comment" required="required"></textarea></p>
                                            <span class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Sent Mail">
                                            </span>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </form>
                            </div><!-- /.col-md-4 -->

                            <div class="col-md-4">
                                <div class="flat-contact-us">
                                    <h4 class="flat-title-section3 mag-top0px">Opening <span>hours</span></h4>
                                    <p>Find out opening hours and information for Canava Transport. Thank you !</p>
                                </div>
                                <div class="flat-divider d20px"></div>
                                <ul class="iconlist">
                                    <li><i class="fa fa-clock-o"></i> <strong>Monday:</strong> 08:00 a.m – 06:00 p.m</li>
                                    <li><i class="fa fa-clock-o"></i> <strong>Tuesday:</strong> 08:00 a.m – 06:00 p.m</li>
                                    <li><i class="fa fa-clock-o"></i> <strong>Wednesday:</strong> 08:00 a.m – 06:00 p.m</li>
                                    <li><i class="fa fa-clock-o"></i> <strong>Thursday:</strong> 08:00 a.m – 06:00 p.m</li>
                                    <li><i class="fa fa-clock-o"></i> <strong>Friday:</strong> 08:00 a.m – 06:00 p.m</li>
                                    <li><i class="fa fa-clock-o"></i> <strong>Saturday – Sunday:</strong> Closed</li>
                                </ul>

                                <div class="flat-divider d20px"></div>
                                
                            </div><!-- /.col-md-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div>

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