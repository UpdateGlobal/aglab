<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST['slug']; ?>
<?php
    $consultaNoticias = "SELECT * FROM noticias WHERE slug='$slug'";
    $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
    $filaNot = mysqli_fetch_array($ejecutarNoticias);
        $cod_noticia = $filaNot['cod_noticia'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('script/head.php'); ?>
    <?php
        $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
        $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaNot = mysqli_fetch_array($ejecutarNoticias);
            $titulo       = $filaNot['titulo'];
            $slug         = $filaNot['slug'];
            $noticia      = $filaNot['noticia'];
            $imagen       = $filaNot['imagen'];
            $fecha        = $filaNot['fecha'];
    ?>
    <!-- La tarjeta Twitter comienza desde aquí, si no necesita eliminar esta sección -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="<?php echo $xTitulo; ?>" />
    <!-- <meta name="twitter:creator" content="@yourtwitterusername" /> -->
    <meta name="twitter:url" content="<?php echo $xUrl; ?>/<?php echo $slug; ?>" />
    <meta name="twitter:title" content="<?php echo $titulo; ?>" /> <!-- maximum 140 char -->
    <meta name="twitter:description" content="<?php  
        $noticiaM = strip_tags($noticia);
        $strCut = substr($noticiaM,0,200);
        $noticiaM = substr($strCut,0,strrpos($strCut, ' ')).'...';
        echo $noticiaM; ?>" /> <!-- maximum 140 char -->
    <meta name="twitter:image" content="/cms/assets/img/noticia/<?php echo $imagen; ?>" /> <!--cuando publiques esta url de la página en twitter, se mostrará esta imagen-->
    <!-- twitter card ends from here -->

    <!-- facebook abrir gráfico comienza desde aquí, si no es necesario, entonces eliminar gráfico abierto relacio -->
    <meta property="og:title" content="<?php echo $titulo; ?>" /><!-- maximum 140 char -->
    <meta property="og:url" content="<?php echo $xUrl; ?>/<?php echo $slug; ?>" />
    <meta property="og:description" content="<?php 
        $noticiaM = strip_tags($noticia);
        $strCut = substr($noticiaM,0,200);
        $noticiaM = substr($strCut,0,strrpos($strCut, ' ')).'...';
        echo $noticiaM; ?>"><!-- maximum 140 char -->
    <meta property="og:locale" content="en_PE" />
    <meta property="og:site_name" content="<?php echo $xTitulo; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/cms/assets/img/noticia/<?php echo $imagen; ?>" /> <!-- cuando publiques esta url de la página en Facebook, se mostrará esta imagen -->
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <!-- facebook open graph ends from here -->
    <?php
        mysqli_free_result($ejecutarNoticias);
    ?>
</head>
<body class="header-sticky page-loading">
    <div class="loading-overlay"></div>
    <!-- Boxed -->
    <div class="boxed">
        <?php $xActivo="blog"; include('module/menus.php'); ?>
        <?php
            $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
            $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
            $filaNot = mysqli_fetch_array($ejecutarNoticias);
                $titulo       = $filaNot['titulo'];
                $slug         = $filaNot['slug'];
                $noticia      = $filaNot['noticia'];
                $imagen       = $filaNot['imagen'];
        ?>
    	<div class="page-title parallax parallax2">
    	    <div class="container">
    	        <div class="row">
    	            <div class="col-md-12">
    	                <div class="page-title-heading">
    	                    <h2><?php echo $titulo; ?></h2>
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
                                <li class="trail-item"><a href="/index.php">Inicio</a></li>
                                <li class="trail-item"><a href="/blog.php">Blog</a></li>
                                <li><?php echo $titulo; ?></li>
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
                                            <div class="entry-cover"><img src="/cms/assets/img/noticias/<?php echo $imagen ?>" alt="<?php echo $titulo; ?>"></div><!-- /.entry-cover -->
                                            <?php
                                                $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
                                                $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                                $filaNot = mysqli_fetch_array($ejecutarNoticias);
                                                    $titulo       = $filaNot['titulo'];
                                                    $slug         = $filaNot['slug'];
                                                    $noticia      = $filaNot['noticia'];
                                                    $imagen       = $filaNot['imagen'];
                                                    $fecha        = $filaNot['fecha'];
                                            ?>
                                            <h4 class="entry-time">
                                                <?php
                                                    $mydate = strtotime($fecha);
                                                    $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
                                                ?>
                                                <span class="entry-month"><?php echo date('d', $mydate); ?></span>
                                                <span class="entry-day"><?php echo $meses[date('n', $mydate)-1]; ?></span>
                                            </h4>
                                            <div class="entry-header">                            
                                                <div class="entry-header-content">
                                                    <div class="entry-meta">
                                                        <i class="fa fa-newspaper-o"></i>
                                                        <span class="entry-author"><a><?php echo $titulo; ?></a></span>
                                                    </div>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->
                                            <div class="entry-content">
                                                <?php echo $noticia; ?>
                                            </div>
                                            <?php
                                                mysqli_free_result($ejecutarNoticias);
                                            ?>
                                            <hr />
                                            <a class="btn-volver" href="/blog.php"><i class="fa fa-chevron-left" style="margin-left:0px;"></i> Volver al Blog</a>
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
                                                $xSlug      = $filaCat['slug'];
                                                $xCategoria = $filaCat['categoria'];
                                                $xOrden     = $filaCat['orden'];
                                                $xEstado    = $filaCat['estado'];
                                        
                                                $consultaCategoria = "SELECT * FROM noticias WHERE cod_categoria=$xCodigo AND estado='1'";
                                                $resultadosCategoria = mysqli_query($enlaces,$consultaCategoria);
                                                $nume = mysqli_num_rows($resultadosCategoria);
                                        ?>
                                        <?php if($nume==0){}else{ ?>
                                            <li><a href="/blogs/<?php echo $xSlug; ?>"><?php echo $xCategoria; ?></a></li>
                                        <?php } ?>
                                        <?php 
                                            }
                                            mysqli_free_result($resultadoCategoria);
                                        ?>
                                        </ul>
                                    </div>
                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <div class="content-text">
                                                <h4 class="title">Datos de Contacto</h4>
                                                <ul>
                                                    <?php
                                                        $consultarCot = 'SELECT * FROM contacto';
                                                        $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                                        $filaCot  = mysqli_fetch_array($resultadoCot);
                                                            $xDirection   = $filaCot['direction'];
                                                            $xPhone       = $filaCot['phone'];
                                                            $xEmail       = $filaCot['email'];
                                                    ?>
                                                    <?php if($xDirection!=""){ ?><li class="box_more"><?php echo $xDirection; ?></li><?php } ?>
                                                    <?php if($xPhone!=""){ ?><li class="box_more">Telefono: <?php echo $xPhone; ?></li><?php } ?>
                                                    <?php if($xEmail!=""){ ?><li class="box_more">Email: <?php echo $xEmail; ?></li><?php } ?>
                                                    <?php
                                                        mysqli_free_result($resultadoCot);
                                                    ?>
                                                </ul>
                                                <a class="button white" href="/contacto.php">Contáctanos<i class="fa fa-chevron-right"></i></a>
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