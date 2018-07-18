<style type="text/css">
	@media screen and (max-width: 1147px){}
		.alto_bg{
			height: 437px;
		}
	}
</style>
<?php
    $consultarCon = "SELECT * FROM contenidos WHERE estado='1' AND cod_contenido='8'";
    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
    $filaCon = mysqli_fetch_array($resultadoCon);
    	$xCodigo      = $filaCon['cod_contenido'];
        $xImagen      = $filaCon['img_contenido'];
        $xContenido   = $filaCon['contenido'];
        $xEstado      = $filaCon['estado'];
?>
<div class="container-fluid bg_seccion2">
	<div class="row">
		<div class="col-md-6 col-xs-12 alto_bg" style="padding: 0; background:url(cms/assets/img/nosotros/<?php echo $xImagen; ?>); background-size: cover; "></div>
		<div class="col-md-6 col-xs-12" style="background-color: #2dafe6;padding: 0px;">
			<div class="img_seccion2">
				<h3 class="title_seccion2 aglabtitle">¿Porqué elegirnos?</h3>
				<div class="contenido-lista">
					<?php
						echo $xContenido;
					?>
				</div>
			</div>			
		</div>
	</div>
</div>
<?php
	mysqli_free_result($resultadoCon);
?>