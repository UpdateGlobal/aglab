<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('script/head.php'); ?>
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
    	                    <h2>Nuestro blog</h2>
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
                                <li>Blog</li>
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="blog-shortcode">
            <div class="container">
                <div class="row">
                    <div class="content-wrap">
                        <div class="main-content">
                            <div class="main-content-wrap">
                                <div class="content-inner clearfix">
                                    <?php
                                        $consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha";
                                        $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                        while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                                            $xCodigo        = $filaNot['cod_noticia'];
                                            $xTitulo        = $filaNot['titulo'];
                                            $xImagen        = $filaNot['imagen'];
                                            $xDescripcion   = $filaNot['noticia'];
                                            $xFecha         = $filaNot['fecha'];
                                    ?>
                                    <article class="flat-item col-xs-12 col-sm-12 col-md-6 col-lg-4 blog-post">
                                        <div class="entry-wrapper" style="border: 1px solid #2eafe7;padding: 10px;">
                                            <div class="entry-cover">
                                                <a href="noticia.php?cod_noticia=<?php echo $xCodigo; ?>">
                                                    <img src="cms/assets/img/noticias/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                                                </a>
                                            </div><!-- /.entry-cover -->
                                            <div class="entry-header">
                                                <div class="entry-header-content">
                                                    <h4 class="entry-time">
                                                        <span class="entry-day">25</span>
                                                        <span class="entry-month">Mar</span>
                                                    </h4>
                                                    <h4 class="entry-title">
                                                        <a href="noticia.php?cod_noticia=<?php echo $xCodigo; ?>"><?php echo $xTitulo; ?></a>
                                                    </h4>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->
                                            <div class="entry-content post-min">
                                                <p class="text-justify"><?php 
                                                    $xDescripcion_sub = strip_tags($xDescripcion);
                                                    $strCut = substr($xDescripcion_sub,0,200);
                                                    $xDescripcion_sub = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                                    echo $xDescripcion_sub;
                                                ?> <a href="noticia.php?cod_noticia=<?php echo $xCodigo; ?>" class="more-link">Leer m&aacute;s</a></p>
                                            </div><!-- /.entry-content -->
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->
                                    <?php
                                        }
                                        mysqli_free_result($resultadoNoticias);
                                    ?>
                                </div><!-- /.content-inner -->                                
                            </div><!-- /.main-content-wrap -->
                        </div><!-- /.main-content -->
                    </div><!-- /.content-wrap  -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <?php
            include ('module/cintillo_contacto.php');
            include ('module/footer.php');
        ?>
    </div>
</body>
</html>