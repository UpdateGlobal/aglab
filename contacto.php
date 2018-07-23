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
    	<?php $xActivo="contacto"; include('module/menus.php'); ?>
    	<div class="page-title parallax parallax2">
    	    <div class="container">
    	        <div class="row">
    	            <div class="col-md-12">
    	                <div class="page-title-heading">
    	                    <h2>Contacto</h2>
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
                                <li>Contacto</li>
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-md-12 col-xs-12">
                    <div class="flat-row ">
                        <div class="container">
                            <h2 class="flat-title-section_nosotros style mag-bottom0px">Contactanos</h2>
                            <p>Bríndanos tus datos y te contactaremos a la brevedad.</p>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="flat-divider d10px"></div>
                                    <div id="contactform">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><input id="nombre" name="nombre" type="text" value="" placeholder="Nombres y Apellidos" required /></p>
                                                <p><input id="email" name="email" type="email" value="" placeholder="Email" required /></p>
                                                <p><input id="empresa" name="empresa" type="text" value="" placeholder="Nombre de tu Empresa" required/></p>
                                                <p><input id="telefono" name="telefono" type="text" value="" placeholder="Celular" required/></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><textarea id="mensaje" name="mensaje" placeholder="Indícanos tu consulta"></textarea></p>
                                                <span class="form-submit">
                                                    <div style="clear:both;"></div>
                                                    <div id="mail-status"></div>
                                                    <?php 
                                                        $fecha = date("Y-m-d");
                                                    ?>
                                                    <input type="hidden" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $fecha ?>">
                                                    <button type="button" class="btn btn-primary" onClick="sendContact();">Contactarme</button>
                                                </span>
                                            </div>
                                        </div><!-- /.row -->
                                    </div>
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
        <?php
            $consultarCot = 'SELECT * FROM contacto';
            $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
            $filaCot  = mysqli_fetch_array($resultadoCot);
                $xMap = $filaCot['map'];
        ?>
        <?php echo $xMap; ?>
    	<?php include ('module/footer.php');  ?>
        <script>
            function sendContact(){
                var valid;
                valid = validateContact();
                if(valid) {
                    jQuery.ajax({
                        url: "/contact_form.php",
                        data:'nombre='+$("#nombre").val()+'&email='+$("#email").val()+'&empresa='+$("#empresa").val()+'&telefono='+$("#telefono").val()+'&mensaje='+$("#mensaje").val()+'&fecha_ingreso='+$("#fecha_ingreso").val(),
                        type: "POST",
                        success:function(data){
                            $("#mail-status").html(data);
                        },
                        error:function (){}
                    });
                }
            }
            function validateContact() {
                var valid = true;
                if(!$("#nombre").val()) {
                    $("#nombre").css('background-color','#f28282');
                    valid = false;
                }
                if(!$("#email").val()) {
                    $("#email").css('background-color','#f28282');
                    valid = false;
                }
                if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                    $("#email").css('background-color','#f28282');
                    valid = false;
                }
                if(!$("#empresa").val()) {
                    $("#empresa").css('background-color','#f28282');
                    valid = false;
                }
                if(!$("#telefono").val()) {
                    $("#telefono").css('background-color','#f28282');
                    valid = false;
                }
                if(!$("#mensaje").val()) {
                    $("#mensaje").css('background-color','#f28282');
                    valid = false;
                }
                return valid;
            }
        </script>
    </div>
</body>