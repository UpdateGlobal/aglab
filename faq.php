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
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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

        <div class="flat-row parallax parallax4 pad-top120px pad-bottom120px">
            <div class="overlay bg-scheme1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="make-quote">
                            <h1 class="title">From around the corner to<br>around the globe.</h1>
                            <h5 class="desc">We will take care of your cargo or your passenger and deliver them safe and on time.</h5>
                            <div class="group-btn">
                                <a class="button lg" href="index.html#">make a quote <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div><!-- /.make-quote -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <?php include ('module/footer.php');  ?>
    </div>
</body>
</html>