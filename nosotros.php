<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("script/head.php"); ?>
</head>                                 
<body class="header-sticky page-loading">
    <div class="loading-overlay"></div>
	<!-- Boxed -->
	<div class="boxed">
		<?php include("module/menus.php"); ?>
		<div class="page-title parallax parallax2">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="page-title-heading">
		                    <h2>Nosotros</h2>
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
	                            <li>Nosotros</li>
	                        </ul>
	                    </div><!-- /.breadcrumbs -->
	                </div><!-- /.flat-wrapper -->
	            </div><!-- /.row -->
	        </div><!-- /.container -->
	    </div>
	    <div class="container pad-top60px pad-bottom60px">
			<div class="row" align="center">
				<?php
			        $consultarMet = 'SELECT * FROM metatags';
			        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
			        $filaMet = mysqli_fetch_array($resultadoMet);
			            $xLogo  = $filaMet['logo'];
			    ?>
		        <img src="cms/assets/img/nosotros/<?php echo $xLogo; ?>" class="img-responsive img_seccion1">
		    	<?php

		    	?>
		    </div>
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<?php
				    	$consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='1' AND estado='1'";
				    	$resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
				    	$filaCon = mysqli_fetch_array($resultadoCon);
				    		$xCodigo      = $filaCon['cod_contenido'];
				    		$xImagen      = $filaCon['img_contenido'];
				    		$xContenido   = $filaCon['contenido'];
				    ?>
					<h2 class="flat-title-section_nosotros style mag-bottom0px">Quienes <span class="scheme">Somos.</span></h2>
					<?php echo $xContenido; ?>
					<?php 
						mysqli_free_result($resultadoCon);
					?>
				</div>
				<div class="col-md-6 col-xs-12">
		            <div class="flat-tabs">
		                <ul class="menu-tabs">
		                    <li class="active"><a href="#">Nuestra Visi&oacute;n</a></li>
		                    <li><a href="#">Nuestra Misi&oacute;n</a></li>
		                </ul>
		                <div class="content-tab">
		                	<?php
		                    	$consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='2' AND estado='1'";
		                    	$resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
		                    	$filaCon = mysqli_fetch_array($resultadoCon);
		                        	$xCodigo      = $filaCon['cod_contenido'];
		                        	$xContenido   = $filaCon['contenido'];
		                        	$xEstado      = $filaCon['estado'];
		                    ?>
		                    <div class="content-inner" style="display: block;">
		                        <?php echo $xContenido; ?>
		                    </div><!-- /.content-inner -->
		                    <?php
		                    	mysqli_free_result($resultadoCon);
		                    ?>
		                    <?php
		                    	$consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='3' AND estado='1'";
		                    	$resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
		                    	$filaCon = mysqli_fetch_array($resultadoCon);
		                        	$xCodigo      = $filaCon['cod_contenido'];
		                        	$xContenido   = $filaCon['contenido'];
		                        	$xEstado      = $filaCon['estado'];
		                    ?>
		                    <div class="content-inner" style="display: none;">
		                    	<?php echo $xContenido; ?>
		                    </div><!-- /.content-inner -->
		                    <?php
		                    	mysqli_free_result($resultadoCon); 
		                    ?>                                    
		                </div><!-- /.content-tab -->
		            </div><!-- /.flat-tabs -->
				</div>
			</div>
		</div>
		<hr>
		<div class="container-fluid bg_nosotros">
			<div class="container pad-top60px pad-bottom60px">
				<div class="row">
					<?php
	                    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='4' AND estado='1'";
	                    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
	                    $filaCon = mysqli_fetch_array($resultadoCon);
	                     	$xCodigo      = $filaCon['cod_contenido'];
	                     	$xImagen      = $filaCon['img_contenido'];
	                     	$xContenido   = $filaCon['contenido'];
	                     	$xEstado      = $filaCon['estado'];
	                ?>
					<div class="col-md-6 col-xs-12">
						<img src="cms/assets/img/nosotros/<?php echo $xImagen; ?>" />
					</div>
					<div class="col-md-6 col-xs-12">
						<h2 class="flat-title-section_nosotros style mag-bottom0px"><span class="scheme">Nuestra  </span> Historia </h2>
						<?php echo $xContenido; ?>
					</div>
					<?php
	                 	mysqli_free_result($resultadoCon);
	                ?>
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
		<div class="container pad-top60px pad-bottom60px">
			<div class="row" align="center">
				<h2 class="flat-title-section_nosotros mag-bottom0px">Nuestros <span class="scheme2">Valores</span> Corporativos</h2>
			</div>
			<div class="row">
				<?php
	                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='13'";
	                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
	                $filaCon = mysqli_fetch_array($resultadoCon);
	                	$xCodigo      = $filaCon['cod_contenido'];
	                	$xImagen      = $filaCon['img_contenido'];
	                	$xEstado      = $filaCon['estado'];
	            ?>
				<div class="<?php if($xEstado==1){?>col-md-6<?php }else{ ?>col-md-12<?php } ?> col-xs-12">
					<div class="flat-history">
		                <ul class="history">
		                	<?php
				                $consultarValor = "SELECT * FROM valores WHERE estado='1' ORDER BY orden";
				                $resultadoValor = mysqli_query($enlaces,$consultarValor) or die('Consulta fallida: ' . mysqli_error($enlaces));
				                while($filaVal = mysqli_fetch_array($resultadoValor)){
				                 	$xTitulo      = $filaVal['titulo'];
				                 	$xContenido   = $filaVal['descripcion'];
				            ?>
		                    <li>
		                        <h3 class="title"><span class="year"><?php echo $xTitulo; ?></span></h3>
		                        <?php echo $xContenido; ?>
		                    </li>
		                    <?php
		                    	}
		                   		mysqli_free_result($resultadoValor);
		                    ?>
		                </ul>
		            </div>
				</div>
				<?php if($xEstado==1){?>
				<div class="col-md-6 col-xs-12">
					<img src="cms/assets/img/nosotros/<?php echo $xImagen; ?>" class="img-responsive pad-top0px pad-bottom60px">	
				</div>
				<?php }else{ ?><?php } ?>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row bg_nosotros" align="center" >
				<br>
				<h2 class="flat-title-section_nosotros  mag-bottom0px">Nuestros <span class="scheme2">Clientes</span></h2>
			</div>
			<div class="row">
				<?php include('module/clientes.php'); ?>
			</div>
		</div>
	<?php include('module/footer.php');  ?>
	</div>
</body>
</html>