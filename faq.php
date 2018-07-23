<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include ('script/head.php'); ?>
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
        <?php $xActivo="faq"; include('module/menus.php'); ?>
        <div class="page-title parallax parallax2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h2>Preguntas Frecuentes</h2>
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
                                <li>Preguntas Frecuentes</li>
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="container pad-top20px pad-bottom60px pad-left20px pad-right20px">
            <div class="row">
                <h3 class="flat-title-section style">Preguntas <span class="scheme2">Frecuentes</span></h3>
                <div>
                    <?php
                        $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='12' AND estado='1'";
                        $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        $filaCon = mysqli_fetch_array($resultadoCon);
                            $xContenido = $filaCon['contenido'];
                    ?>
                    <?php echo $xContenido; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <div class="general">
                        <div class="flat-accordion style12">
                            <?php
                                $consultarPreguntas = "SELECT * FROM preguntas WHERE estado='1' ORDER BY orden";
                                $resultadoPreguntas = mysqli_query($enlaces,$consultarPreguntas) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                while($filaPre = mysqli_fetch_array($resultadoPreguntas)){
                                    $xPregunta  = $filaPre['pregunta'];
                                    $xRespuesta = $filaPre['respuesta'];
                            ?>
                            <div class="flat-toggle">
                                <h6 class="toggle-title"><i class="fas fa-angle-right"></i> <?php echo $xPregunta; ?></h6>
                                <div class="toggle-content" style="display: none;">
                                    <?php echo $xRespuesta; ?>
                                </div>
                            </div>
                            <?php
                                }
                                mysqli_free_result($resultadoPreguntas);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="widgetx widget_textx">
                        <div class="textwidgetx">
                            <div class="content-textx">
                                <ul>
                                    <li class="box_cont"><b>Datos de Contacto</b></li>
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
                                <a class="button white box_buttun" href="contacto.php">Contactanos<i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div><!-- /.textwidget -->
                    </div>
                </div>
            </div>
        </div>
        <?php
            $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='7' AND estado='1'";
            $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
            $filaCon = mysqli_fetch_array($resultadoCon);
                $xTitulo      = $filaCon['titulo_contenido'];
                $xImagen      = $filaCon['img_contenido'];
                $xContenido   = $filaCon['contenido'];
        ?>
        <div class="flat-row parallax parallax4 pad-top120px pad-bottom120px" style="background:url(cms/assets/img/nosotros/<?php echo $xImagen; ?>);">
            <div class="overlay bg-scheme1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="make-quote">
                            <h1 class="title"><?php echo $xTitulo; ?></h1>
                            <h5 class="desc"><?php echo $xContenido; ?></h5>
                            <div class="group-btn">
                                <a class="button lg" href="contacto.php">Contactarme <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div><!-- /.make-quote -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <?php
            mysqli_free_result($resultadoCon);
        ?>
        <?php include ('module/footer.php');  ?>
    </div>
</body>
</html>