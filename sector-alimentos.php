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
		<?php $xActivo="productos"; include('module/menus.php'); ?>
		<div class="page-title parallax parallax2">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="page-title-heading">
		                    <h2>Encuentra los que necesitas</h2>
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
	                            <li class="trail-item"><a href="/tienda.php">Productos</a></li>
	                            <li>Sector Alimentos y Bebidas</li>
	                        </ul>
	                    </div><!-- /.breadcrumbs -->
	                </div><!-- /.flat-wrapper -->
	            </div><!-- /.row -->
	        </div><!-- /.container -->
	    </div>
		<div class="container pad-top60px pad-bottom60px">
			<div class="row">
				<div class="col-md-8 col-xs-12">
					<!-- /.woocommerce -->
					<div class="general">
		            	<div class="woocommerce">
		                	<ul class="products">
		                		<?php
                                    $consultarProductos = "SELECT * FROM productos WHERE estado='1' AND sector_2='1'";
                                    $resultadoProductos = mysqli_query($enlaces, $consultarProductos);
                                    $total_registros = mysqli_num_rows($resultadoProductos);
                                    if($total_registros==0){
                                ?>
                                    <h2>No hay productos en nuestro cat&aacute;logo, pronto tendremos novedades.</h2>
                                    <div style="height: 40px;"></div>
                                <?php
                                    }else{
                                        $registros_por_paginas = 9;
                                        $total_paginas = ceil($total_registros/$registros_por_paginas);
                                        $pagina = intval($_GET['p']);
                                        if($pagina<1 or $pagina>$total_paginas){
                                            $pagina=1;
                                        }
                                       	$posicion = ($pagina-1)*$registros_por_paginas;
                                        $limite = "LIMIT $posicion, $registros_por_paginas";
                
                                        $consultarProductos = "SELECT * FROM productos WHERE estado='1' AND sector_2='1' ORDER BY orden ASC $limite";
			                			$resultadoProductos = mysqli_query($enlaces, $consultarProductos);
			                        	while($filaPro = mysqli_fetch_array($resultadoProductos)){
				                        	$xCodigo    = $filaPro['cod_producto'];
				                        	$xProducto  = $filaPro['nom_producto'];
				                        	$xSlug 		= $filaPro['slug'];
				                        	$xImagen    = $filaPro['imagen'];
			                    ?>
		                        <li>
		                            <div class="product-inner">
		                                <div class="product-thumbnail">
		                                    <a href="/producto/<?php echo $xSlug; ?>">
		                                        <img src="/cms/assets/img/productos/<?php echo $xImagen; ?>" alt="<?php echo $xProducto; ?>">
		                                    </a>
		                                </div>
		                                <div class="product-info">
		                                    <div class="product-info-wrap">
		                                        <h3><?php echo $xProducto; ?></h3>
		                                        <a class="button" href="/producto/<?php echo $xSlug; ?>">Ver Detalle</a>
		                                    </div>
		                                </div>
		                            </div><!-- /.product-inner -->
		                        </li>
		                        <?php
			                        }
			                        mysqli_free_result($resultadoProductos);
			                    ?>
		                    </ul><!-- /.products -->
		                    <?php
                                $paginas_mostrar = 10;
                                if ($total_paginas>1){
                                		echo "<hr style='clear:both;'>
		                    				<div class='navigation paging-navigation numeric'>
		                    					<div class='flat-pagination loop-pagination'>";
                                                if($pagina>1){
                                                    echo "<a class='page-numbers' href='?p=".($pagina-1)."'>«</a>";
                                                }
                                                for($i=$pagina; $i<=$total_paginas && $i<=($pagina+$paginas_mostrar); $i++){
                                                    if($i==$pagina){
                                                        echo "<span class='page-numbers current'>$i</span>";
                                                    }else{
                                                        echo "<a class='page-numbers' href='?p=$i'>$i</a>";
                                                    }
                                                }
                                                if(($pagina+$paginas_mostrar)<$total_paginas){
                                                    echo "<span class='page-numbers'>...</span>";
                                                }
                                                if($pagina<$total_paginas){
                                                    echo "<a class='page-numbers' href='?p=".($pagina+1)."'>»</a>";
                                                }
	                                    echo "</div>
		                    			</div>";
                                	}
                                }
                            ?>
		                </div>
		            </div>
					<!-- /.woocommerce -->
				</div>
				<div class="col-md-4 col-xs-12">
					<?php include("module/menu-categorias.php"); ?>
				</div>
			</div>
		</div>
		<?php include('module/footer.php'); ?>
	</div>
</body>
</html>