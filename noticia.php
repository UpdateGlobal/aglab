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
        <?php include('module/menus.php'); ?>
    	<div class="page-title parallax parallax2">
    	    <div class="container">
    	        <div class="row">
    	            <div class="col-md-12">                    
    	                <div class="page-title-heading">
    	                    <h2>Post Articulo</h2>
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
                            <h2 class="trail-browse">Usted esta Aqu&iacute;:</h2>
                            <ul class="trail-items">
                                <li class="trail-item"><a href="index.php">Inicio</a></li>
                                <li class="trail-item"><a href="blog.php">Blog</a></li>
                                <li>Post Articulo</li>                        
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="blog-single">
            <div class="container">
                <div class="row">
                    <div class="content-wrap">
                        <div class="main-content">
                            <div class="main-content-wrap">
                                <div class="content-inner">
                                    <article class="blog-post">
                                        <div class="entry-wrapper">
                                            <div class="entry-cover"><img src="images/blog/3.jpg" alt="images"></div><!-- /.entry-cover -->
                                            <h4 class="entry-time">
                                                <span class="entry-month">Mar</span>
                                                <span class="entry-day">25</span>
                                            </h4>
                                            <div class="entry-header">                                                
                                                <div class="entry-header-content">
                                                    <div class="entry-meta">
                                                        <i class="fa fa-user"></i>
                                                        <span class="entry-author"><a href="blog-single.html#">Juan Carlos Gil de Montes | Fernando del Olmo</a></span>
                                                    </div>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->
                                            <div class="entry-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula sapien nec arcu maximus, eget vulputate neque pellentesque. </p>
                                                <p><strong>LOREM IPSUM</strong></p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula sapien nec arcu maximus, eget vulputate neque pellentesque. Vestibulum aliquet, tellus quis commodo dapibus, metus ex auctor nibh, ac fermentum eros lectus eget orci. Nunc non mi auctor enim tristique maximus. Cras posuere ullamcorper placerat. Ut vitae ligula id magna sollicitudin luctus pellentesque id mi. Curabitur aliquet felis ut dignissim efficitur.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula sapien nec arcu maximus, eget vulputate neque pellentesque. Vestibulum aliquet, tellus quis commodo dapibus, metus ex auctor nibh, ac fermentum eros lectus eget orci. Nunc non mi auctor enim tristique maximus. Cras posuere ullamcorper placerat. Ut vitae ligula id magna sollicitudin luctus pellentesque id mi. Curabitur aliquet felis ut dignissim efficitur.</p>
                                                <p><strong>LOREM IPSUM DOLOT&nbsp;</strong></p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula sapien nec arcu maximus, eget vulputate neque pellentesque. Vestibulum aliquet, tellus quis commodo dapibus, metus ex auctor nibh, ac fermentum eros lectus eget orci. Nunc non mi auctor enim tristique maximus. Cras posuere ullamcorper placerat. Ut vitae ligula id magna sollicitudin luctus pellentesque id mi. Curabitur aliquet felis ut dignissim efficitur.</p>
                                                <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b0c6c7a037ab05f"></script>
                                            </div>
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->
                                </div><!-- /.content-inner -->  
                            </div><!-- /.main-content-wrap -->
                        </div><!-- /.main-content -->

                        <div class="sidebars">
                            <div class="sidebars-wrap">
                                <div class="sidebar">
                                    <div class="widget widget_product_categories">
                                        <h4 class="widget-title">Categor&iacute;as</h4>
                                        <ul class="product-categories">
                                        <?php
                                            $consultarCategoria = "SELECT * FROM noticias_categorias ORDER BY orden";
                                            $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                            while($filaCat = mysqli_fetch_array($resultadoCategoria)){
                                                $xCodigo    = $filaCat['cod_categoria'];
                                                $xCategoria = $filaCat['categoria'];
                                                $xOrden     = $filaCat['orden'];
                                                $xEstado    = $filaCat['estado'];
                                        ?>
                                            <li><a href="categorias.php"><?php echo $xCategoria; ?></a></li>
                                        <?php 
                                            }
                                            mysqli_free_result($resultadoCategoria);
                                        ?>
                                        </ul>
                                    </div>
                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <div class="content-text">
                                                <h4 class="title">Lorem Ipsum Dolot?</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula sapien nec arcu maximus, eget vulputate neque pellentesque. Vestibulum aliquet, tellus quis commodo dapibus.</p>
                                                <a class="button white" href="contacto.php">Contáctanos<i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div><!-- /.textwidget -->
                                    </div><!-- /.widget_text -->
                                </div><!-- /.sidebar -->
                            </div><!-- /.sidebars-wrap -->
                        </div><!-- /.sidebars -->
                    </div><!-- /.content-wrap  -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </div>
    <?php include('module/footer.php'); ?>
</body>
</html>