<?php include("cms/module/conexion.php");
$num=0;
?>
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
                            <h2 class="trail-browse">Usted esta Aqu&iacute;:</h2>
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
            <?php
                $consultarservicio = "SELECT * FROM servicios WHERE estado='1' AND cod_categoria='1' ORDER BY orden";
                $resultadoservicio = mysqli_query($enlaces,$consultarservicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaSer = mysqli_fetch_array($resultadoservicio)){
                    $xImagen      = $filaSer['imagen'];
                    $xTitulo      = $filaSer['titulo'];
                    $xDescripcion = $filaSer['descripcion'];
                    
            ?>
            <div class="row">
                <?php if($num==0){ ?>
                <div class="col-md-6 col-xs-12" align="right">
                    <h2 class="flat-title-section mag-bottom0px"><?php echo $xTitulo; ?></h2>
                    <?php echo $xDescripcion; ?>
                    <a class="button lg" href="contacto.php">Servicio <i class="fa fa-chevron-right"></i></a>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img src="cms/assets/img/servicios/<?php echo $xImagen; ?>" class="img-responsive">
                </div>
                <?php $num++; }else{ ?>
                <div class="col-md-6 col-xs-12">
                    <img src="cms/assets/img/servicios/<?php echo $xImagen; ?>" class="img-responsive">
                </div>
                <div class="col-md-6 col-xs-12" align="left">
                    <h2 class="flat-title-section mag-bottom0px"><?php echo $xTitulo; ?></h2>
                    <?php echo $xDescripcion; ?>
                    <a class="button lg" href="contacto.php">Servicio <i class="fa fa-chevron-right"></i></a>
                </div>
                <?php $num=0; ?>
                <?php } ?>
            </div>
            <hr>
            <?php
                }
                mysqli_free_result($resultadoservicio);
            ?>
        </div>
        <div class="container-fluid bg_nosotros">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="flat-row ">
                        <div class="container">
                            <h2 class="flat-title-section_nosotros style mag-bottom0px">Contactanos</h2>
                            <p>Bríndanos tus datos y te contactaremos a la brevedad.</p>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="flat-divider d10px"></div>
                                    <form id="contactform" method="post" action="./contact/contact-process.php" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><input id="name" name="name" type="text" value="" placeholder="Nombres y Apellidos" required="required"></p>
                                                <p><input id="email" name="email" type="email" value="" placeholder="Email" required="required"></p>
                                                <p><input id="name" name="name" type="text" value="" placeholder="Nombre de tu Empresa" required="required"></p>
                                                <p><input id="phone" name="phone" type="text" value="" placeholder="Celular" required="required"></p>                                
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6">
                                                <p><textarea name="message" placeholder="Indícanos tu consulta" required="required"></textarea></p>
                                                <span class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Contactarme">
                                                </span>
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.row -->
                                    </form>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4">
                                    <div class="flat-contact-us">
                                        <h4 class="flat-title-section3 mag-top0px">Horario <span>de Atención</span></h4>
                                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet!</p>
                                    </div>
                                    <div class="flat-divider d20px"></div>
                                    <ul class="iconlist">
                                        <li><i class="fa fa-clock-o"></i> <strong>Lunes:</strong> 08:00 a.m – 06:00 p.m</li>
                                        <li><i class="fa fa-clock-o"></i> <strong>Martes:</strong> 08:00 a.m – 06:00 p.m</li>
                                        <li><i class="fa fa-clock-o"></i> <strong>Miércoles:</strong> 08:00 a.m – 06:00 p.m</li>
                                        <li><i class="fa fa-clock-o"></i> <strong>Jueves:</strong> 08:00 a.m – 06:00 p.m</li>
                                        <li><i class="fa fa-clock-o"></i> <strong>Viernes:</strong> 08:00 a.m – 06:00 p.m</li>
                                    </ul>
                                    <div class="flat-divider d20px"></div>
                                </div><!-- /.col-md-8 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                </div>
            </div>
        </div> 
        <?php include ('module/footer.php');  ?>
    </div>
</body>
</html>