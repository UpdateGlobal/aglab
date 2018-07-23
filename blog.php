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
    <meta property="og:image" content="/cms/assets/img/meta/<?php echo $xFace1; ?>" />
    <meta property="og:image" content="/cms/assets/img/meta/<?php echo $xFace2; ?>" />
</head>
<body class="header-sticky page-loading">
    <div class="loading-overlay"></div>
    <!-- Boxed -->
    <div class="boxed">
        <?php $xActivo="blog"; include('module/menus.php'); ?>
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
                                <li class="trail-item"><a href="/index.php">Inicio</a></li>
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
                                        $consultarNoticias = "SELECT * FROM noticias WHERE estado='1'";
                                        $resultadoNoticias = mysqli_query($enlaces, $consultarNoticias);
                                        $total_registros = mysqli_num_rows($resultadoNoticias);
                                        if($total_registros==0){
                                    ?>
                                    <h2>No hay entradas en nuestro blog, pronto tendremos novedades.</h2>
                                    <div style="height: 40px;"></div>
                                    <?php 
                                        }else{
                                            $registros_por_paginas = 6;
                                            $total_paginas = ceil($total_registros/$registros_por_paginas);
                                            $pagina = intval($_GET['p']);
                                            if($pagina<1 or $pagina>$total_paginas){
                                                $pagina=1;
                                            }
                                        $posicion = ($pagina-1)*$registros_por_paginas;
                                        $limite = "LIMIT $posicion, $registros_por_paginas";
                
                                        $consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha,cod_noticia ASC $limite";
                                        $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                        while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                                            $xCodigo        = $filaNot['cod_noticia'];
                                            $xTitulo        = $filaNot['titulo'];
                                            $xSlug          = $filaNot['slug'];
                                            $xImagen        = $filaNot['imagen'];
                                            $xDescripcion   = $filaNot['noticia'];
                                            $xFecha         = $filaNot['fecha'];
                                    ?>
                                    <article class="flat-item col-xs-12 col-sm-12 col-md-6 col-lg-4 blog-post">
                                        <div class="entry-wrapper" style="border: 1px solid #2eafe7;padding: 10px;">
                                            <div class="entry-cover">
                                                <a href="/blog/<?php echo $xSlug; ?>">
                                                    <img src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                                                </a>
                                            </div><!-- /.entry-cover -->
                                            <div class="entry-header">
                                                <div class="entry-header-content">
                                                    <h4 class="entry-time fecha-char">
                                                        <?php
                                                            $mydate = strtotime($xFecha);
                                                            $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
                                                        ?>
                                                        <span class="entry-day"><?php echo date('d', $mydate); ?></span>
                                                        <span class="entry-month"><?php echo $meses[date('n', $mydate)-1]; ?></span>
                                                    </h4>
                                                    <h4 class="entry-title">
                                                        <a href="/blog/<?php echo $xSlug; ?>"><?php echo $xTitulo; ?></a>
                                                    </h4>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->
                                            <div class="entry-content post-min">
                                                <p class="text-justify"><?php 
                                                    $xDescripcion_sub = strip_tags($xDescripcion);
                                                    $strCut = substr($xDescripcion_sub,0,200);
                                                    $xDescripcion_sub = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                                    echo $xDescripcion_sub;
                                                ?> <a href="/blog/<?php echo $xSlug; ?>" class="more-link">Leer m&aacute;s</a></p>
                                            </div><!-- /.entry-content -->
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->
                                    <?php
                                        }
                                        mysqli_free_result($resultadoNoticias);
                                    ?>
                                    <?php
                                        $paginas_mostrar = 10;
                                        if ($total_paginas>1){
                                            echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
                                                    <nav class='pagin'>
                                                        <ul class='pagination'>";
                                                if($pagina>1){
                                                    echo "<li><a href='?p=".($pagina-1)."' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
                                                }
                                                for($i=$pagina; $i<=$total_paginas && $i<=($pagina+$paginas_mostrar); $i++){
                                                    if($i==$pagina){
                                                        echo "<li class='active'><a><strong><span>$i</span></strong></a></li>";
                                                    }else{
                                                        echo "<li><a href='?p=$i'><span>$i</span></a></li>";
                                                    }
                                                }
                                                if(($pagina+$paginas_mostrar)<$total_paginas){
                                                    echo "<li><span>...</span></li>";
                                                }
                                                if($pagina<$total_paginas){
                                                    echo "  <li><a href='?p=".($pagina+1)."' aria-label='Next'><span aria-hidden='true'>»</span></a></li>";
                                                }
                                                echo "  </ul>
                                                    </nav>
                                                </div>";
                                            }
                                        }
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