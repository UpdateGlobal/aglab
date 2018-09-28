					<div class="widget widget_product_categories">
		                <h4 class="widget-title">Categor&iacute;as</h4>
		                <ul class="product-categories">
		                	<?php
		                        $consultarCategoria = "SELECT * FROM productos_categorias WHERE estado='1' ORDER BY orden";
		                        $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
		                        while($filaCat = mysqli_fetch_array($resultadoCategoria)){
		                         	$xCodigo    = $filaCat['cod_categoria'];
		                         	$xSlug		= $filaCat['slug'];
		                         	$xCategoria = $filaCat['categoria'];

		                         	$consultaCategoria = "SELECT * FROM productos WHERE cod_categoria=$xCodigo AND estado='1'";
                                    $resultadosCategoria = mysqli_query($enlaces,$consultaCategoria);
                                    $numc = mysqli_num_rows($resultadosCategoria);
		                    ?>
		                    <?php if($numc==0){}else{ ?>
		                    <li><a href="/categorias/<?php echo $xSlug; ?>"><?php echo $xCategoria; ?></a></li>
		                    <?php } ?>
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
			                    $consultarPro = "SELECT * FROM productos WHERE estado='1' ORDER BY fecha_ing ASC LIMIT 2";
			                    $resultadoPro = mysqli_query($enlaces, $consultarPro);
			                    while($filaPro = mysqli_fetch_array($resultadoPro)){
			                        $xCodigo    = $filaPro['cod_producto'];
			                        $xCod_categoriax = $filaPro['cod_categoria'];
			                        $xSlug		= $filaPro['slug'];
			                        $xProducto  = $filaPro['nom_producto'];
			                        $xImagen    = $filaPro['imagen'];
			                ?>
		                    <li>
		                        <a href="/blog/<?php echo $xSlug; ?>">
		                            <img src="/cms/assets/img/productos/<?php echo $xImagen; ?>" alt="<?php echo $xProducto; ?>" />
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
					