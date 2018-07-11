<?php include ('cms/module/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('script/head.php'); ?>
    <!-- La tarjeta Twitter comienza desde aquí, si no necesita eliminar esta sección -->
    <!-- <meta name="twitter:card" content="summary" /> -->
    <meta name="twitter:site" content="@yourtwitterusername" />
    <meta name="twitter:creator" content="@yourtwitterusername" />
    <meta name="twitter:url" content="https://<?php echo $xUrl; ?>" />
    <meta name="twitter:title" content="<?php echo $xTitulo; ?>" /> <!-- maximum 140 char -->
    <meta name="twitter:description" content="<?php echo $xDes; ?>" /> <!-- maximum 140 char -->
    <meta name="twitter:image" content="cms/assets/img/meta/<?php echo $xFace1; ?>" />
    <meta name="twitter:image" content="cms/assets/img/meta/<?php echo $xFace2; ?>" /> <!--cuando publiques esta url de la página en twitter, se mostrará esta imagen-->
    <!-- twitter card ends from here -->

    <!-- facebook abrir gráfico comienza desde aquí, si no es necesario, entonces eliminar gráfico abierto relacio -->
    <meta property="og:title" content="<?php echo $xTitulo; ?>" /><!-- maximum 140 char -->
    <meta property="og:url" content="https://<?php echo $xUrl; ?>" />
    <meta property="og:description" content="<?php echo $xDes; ?>"><!-- maximum 140 char -->
    <meta property="og:locale" content="en_PE" />
    <meta property="og:site_name" content="<?php echo $xTitulo; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="cms/assets/img/meta/<?php echo $xFace1; ?>" />
    <meta property="og:image" content="cms/assets/img/meta/<?php echo $xFace2; ?>" /> <!-- cuando publiques esta url de la página en Facebook, se mostrará esta imagen -->
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <!-- facebook open graph ends from here -->
</head>
<body class="header-sticky page-loading">   
<div class="loading-overlay"></div>
    <!-- Boxed -->
    <div class="boxed">
    	<?php include('module/menus.php'); ?>
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
        		<div class="col-md-8 col-xs-12">
        			

        						<div class="products-detail">
                                    <div class="products-images">
                        
                                            <img src="images/products/1.jpg" alt="images">
                                      
                                    </div>
                                    <div class="summary">
                                        <div style="line-height: 30px;">
                                            <p class="price"><span class="amount">NOMBRE DEL PRODUCTO</span></p>
                                             <span class="posted_in">Categorias: <a href="shop-detail.html#">Industrial</a></span>
                                            
                                        </div>
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula sapien nec arcu maximus, eget vulputate neque pellentesque. Vestibulum aliquet, tellus quis commodo dapibus.Lorem ipsum dolor sit amet.</p>
                                        </div>
                                        <div class="row pad-top20px pad-bottom20px" align="center">
                                        	<a class="button" href="#">Solicitar</a>
                                        </div>
                                       <!--  <div class="product_meta">
                                            <span class="posted_in">Categorias: <a href="shop-detail.html#">Industrial</a></span>
                                        </div>
         -->                            </div><!-- /.summary -->

                                    <div class="flat-tabs" style="clear: left;">
                                        <ul class="menu-tabs">
                                            <li class="active"><a href="#">Descripcion</a></li>
                                        </ul>
                                        <div class="content-tab">
                                            <div class="content-inner active" style="display: block;">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula sapien nec arcu maximus, eget vulputate neque pellentesque. Vestibulum aliquet, tellus quis commodo dapibus, metus ex auctor nibh, ac fermentum eros lectus eget orci. Nunc non mi auctor enim tristique maximus. Cras posuere ullamcorper placerat. Ut vitae ligula id magna sollicitudin luctus pellentesque id mi. Curabitur aliquet felis ut dignissim efficitur. </p>
                                               
                                            </div><!-- /.content-inner -->                                    
                                        </div><!-- /.content-tab -->
                                    </div><!-- /.flat-tabs -->
                                    <br>
                                    <hr>
                                    <div class="related_products woocommerce">
                                        <h4 class="flat-title-section style">Productos relacionados</h4>
                                        <ul class="products">
                                            <li>
                                                <div class="product-inner">
                                                    <div class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="images/products/5.jpg" alt="images">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="product-info-wrap">
                                                            <h3>Metro vac n’ blo 500</h3>
                                                            <span class="price"><span class="amount">s/ 94.99</span></span>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </li>

                                            <li>
                                                <div class="product-inner">
                                                    <div class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="images/products/4.jpg" alt="images">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="product-info-wrap">
                                                            <h3>Hella trumpet horn</h3>
                                                            <span class="price"><span class="amount">s/ 25.99</span></span>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </li>

                                            <li>
                                                <div class="product-inner">
                                                    <div class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="images/products/9.jpg" alt="images">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="product-info-wrap">
                                                            <h3>Smittybilt recovery tow</h3>
                                                            <span class="price"><span class="amount">s/ 39.99</span></span>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </li>

                                        </ul><!-- /.products -->
                                    </div><!-- /.related_products -->
                                </div>










		</div>
		<div class="col-md-4 col-xs-12">
			<div class="widget widget_product_categories">
                <h4 class="widget-title">Categorías</h4>
                    <ul class="product-categories">
                            <li><a href="articulo.php">Industrial</a></li>
                            <li><a href="articulo.php">Disolventes</a></li>
                            <li><a href="articulo.php">Desinfectantes</a></li>
                            <li><a href="articulo.php">Detergente ácido</a></li>
                            <li><a href="articulo.php">Limpia Pisos</a></li>
                            <li><a href="articulo.php">Solventes Dieléctricos</a></li>
                    </ul>
            </div>

<!--             <div class="widget widget_product_categories">
                <h4 class="widget-title">Categorias</h4>
                    <ul class="product-categories">
                            <li><a href="articulo.php">Solventes</a></li>
                            <li><a href="articulo.php">Disolventes</a></li>
                            <li><a href="articulo.php">Desinfectantes</a></li>
                            <li><a href="articulo.php">Detergente ácido</a></li>
                            <li><a href="articulo.php">Limpia Pisos</a></li>
                            <li><a href="articulo.php">Solventes Dieléctricos</a></li>
                    </ul>
            </div>
 -->
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