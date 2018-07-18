<?php include("cms/module/conexion.php"); ?>
<?php $cod_categoria = $_REQUEST['cod_categoria']; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include ('script/head.php'); ?>
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
	                            <li class="trail-item"><a href="index.php">Inicio</a></li>
	                            <li class="trail-item"><a href="productos.php">Productos</a></li>
	                            <?php
			                    	$consultarCategoria = "SELECT * FROM productos_categorias WHERE cod_categoria='$cod_categoria'";
			                    	$resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
			                    	$filaCat = mysqli_fetch_array($resultadoCategoria);
		                        		$xCategoria = $filaCat['categoria'];
		                    	?>
	                            <li><?php echo $xCategoria; ?></li>
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
                                    $consultarProductos = "SELECT * FROM productos WHERE estado='1' AND cod_categoria='$cod_categoria'";
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
                
                                        $consultarProductos = "SELECT * FROM productos WHERE estado='1' AND cod_categoria='$cod_categoria' ORDER BY orden ASC $limite";
			                			$resultadoProductos = mysqli_query($enlaces, $consultarProductos);
			                        	while($filaPro = mysqli_fetch_array($resultadoProductos)){
				                        	$xCodigo    = $filaPro['cod_producto'];
				                        	$xProducto  = $filaPro['nom_producto'];
				                        	$xImagen    = $filaPro['imagen'];
			                    ?>
		                        <li>
		                            <div class="product-inner">
		                                <div class="product-thumbnail">
		                                    <a href="articulo.php?cod_producto=<?php echo $xCodigo; ?>">
		                                        <img src="cms/assets/img/productos/<?php echo $xImagen; ?>" alt="images">
		                                    </a>
		                                </div>
		                                <div class="product-info">
		                                    <div class="product-info-wrap">
		                                        <h3><?php echo $xProducto; ?></h3>
		                                        <a class="button" href="articulo.php?cod_producto=<?php echo $xCodigo; ?>">Ver Detalle</a>
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
                                                    echo "<a class='page-numbers' href='?cod_categoria=".$cod_categoria."&p=".($pagina-1)."'>«</a>";
                                                }
                                                for($i=$pagina; $i<=$total_paginas && $i<=($pagina+$paginas_mostrar); $i++){
                                                    if($i==$pagina){
                                                        echo "<span class='page-numbers current'>$i</span>";
                                                    }else{
                                                        echo "<a class='page-numbers' href='?cod_categoria=".$cod_categoria."&p=$i'>$i</a>";
                                                    }
                                                }
                                                if(($pagina+$paginas_mostrar)<$total_paginas){
                                                    echo "<span class='page-numbers'>...</span>";
                                                }
                                                if($pagina<$total_paginas){
                                                    echo "<a class='page-numbers' href='?cod_categoria=".$cod_categoria."&p=".($pagina+1)."'>»</a>";
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
					<div class="widget widget_product_categories">
		                <h4 class="widget-title">Categor&iacute;as</h4>
		                <ul class="product-categories">
		                	<?php
		                        $consultarCategoria = "SELECT * FROM productos_categorias ORDER BY orden";
		                        $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
		                        while($filaCat = mysqli_fetch_array($resultadoCategoria)){
		                         	$xCodigo    = $filaCat['cod_categoria'];
		                         	$xCategoria = $filaCat['categoria'];
		                    ?>
		                    <li><a href="categorias-tienda.php?cod_categoria=<?php echo $xCodigo; ?>"><?php echo $xCategoria; ?></a></li>
		                    <?php
		                    	}
		                    	mysqli_free_result($resultadoCategoria);
		                    ?>
		                </ul>
		            </div>
					<!--wigget productoos-->
					<div class="widget widget_products">
		                <h2 class="flat-title-section style mag-bottom0px">Productos <span class="scheme">M&aacute;s recientes</span></h2>
		                <ul class="product_list_widget">
		                	<?php
			                    $consultarPro = "SELECT * FROM productos ORDER BY fecha_ing ASC LIMIT 2";
			                    $resultadoPro = mysqli_query($enlaces, $consultarPro);
			                    while($filaPro = mysqli_fetch_array($resultadoPro)){
			                        $xCodigo    = $filaPro['cod_producto'];
			                        $xCod_categoriax = $filaPro['cod_categoria'];
			                        $xProducto  = $filaPro['nom_producto'];
			                        $xImagen    = $filaPro['imagen'];
			                ?>
		                    <li>
		                        <a href="articulo.php?cod_producto=<?php echo $xCodigo; ?>">
		                            <img src="cms/assets/img/productos/<?php echo $xImagen; ?>" alt="<?php echo $xProducto; ?>" />
		                            <h5 class="box-title"><?php echo $xProducto; ?></h5>
		                            <span class="amount"><?php 
	                                    $consultaCat    = "SELECT * FROM productos_categorias WHERE cod_categoria='$xCod_categoriax'";
	                                    $resultaCat     = mysqli_query($enlaces, $consultaCat);
	                                    $filaCat        = mysqli_fetch_array($resultaCat);
	                                    $xnomCat = $filaCat['categoria'];
                                        echo $xnomCat; ?>
                                    </span>
		                        </a>
		                    </li>
		                    <?php
		                    	}
		                    	mysqli_free_result($resultadoPro); 
		                    ?>
		                </ul>
		            </div>
					<!--wigget productoos-->
				</div>
			</div>
		</div>
		<?php include('module/footer.php'); ?>
	</div>
</body>
</html>