<?php include ('cms/module/conexion.php'); ?>
<?php $slug = $_REQUEST['slug'];
$consultarProductos = "SELECT * FROM productos WHERE slug='$slug'";
$resultadoProductos = mysqli_query($enlaces, $consultarProductos);
$filaPro = mysqli_fetch_array($resultadoProductos);
    $cod_producto = $filaPro['cod_producto'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('script/head.php'); ?>
    <?php
        $consultarProductos = "SELECT * FROM productos WHERE cod_producto='$cod_producto'";
        $resultadoProductos = mysqli_query($enlaces, $consultarProductos);
        $filaPro = mysqli_fetch_array($resultadoProductos);
            $xProductoM  = $filaPro['nom_producto'];
            $xImagenM    = $filaPro['imagen'];
            $xDes       = $filaPro['resumen'];
    ?>
    <!-- La tarjeta Twitter comienza desde aquí, si no necesita eliminar esta sección -->
    <meta name="twitter:url" content="<?php echo $xUrl; ?>" />
    <meta name="twitter:title" content="<?php echo $xProductoM; ?>" />
    <meta name="twitter:description" content="<?php $xDesM = strip_tags($xDes);
                                                    $strCut = substr($xDesM,0,200);
                                                    $xDesM = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                                    echo $xDesM; ?>" /> <!-- maximum 140 char -->
    <meta name="twitter:image" content="/cms/assets/img/productos/<?php echo $xImagenM; ?>" /> <!--cuando publiques esta url de la página en twitter, se mostrará esta imagen-->
    <!-- twitter card ends from here -->

    <!-- facebook abrir gráfico comienza desde aquí, si no es necesario, entonces eliminar gráfico abierto relacio -->
    <meta property="og:url" content="<?php echo $xUrl; ?>" />
    <meta property="og:title" content="<?php echo $xProductoM; ?>" /><!-- maximum 140 char -->
    <meta property="og:description" content="<?php $xDesM = strip_tags($xDes);
                                                    $strCut = substr($xDesM,0,200);
                                                    $xDesM = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                                    echo $xDesM; ?>" /><!-- maximum 140 char -->
    <meta property="og:locale" content="en_PE" />
    <meta property="og:site_name" content="<?php echo $xProductoM; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/cms/assets/img/productos/<?php echo $xImagenM; ?>" /><!-- cuando publiques esta url de la página en Facebook, se mostrará esta imagen -->
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <!-- facebook open graph ends from here -->
</head>
<body class="header-sticky page-loading">
    <div class="loading-overlay"></div>
    <!-- Boxed -->
    <div class="boxed">
    	<?php $xActivo="productos"; include('module/menus.php'); ?>
        <?php
            $consultaPro = "SELECT * FROM productos WHERE cod_producto='$cod_producto'";
            $resultadoPro = mysqli_query($enlaces, $consultaPro);
            $filaPro = mysqli_fetch_array($resultadoPro);
                $xCodigo    = $filaPro['cod_producto'];
                $xCod_categoria = $filaPro['cod_categoria'];
                $xSectores  = $filaPro['cod_sectores'];
                $xProducto  = $filaPro['nom_producto'];
                $xDescripcion = $filaPro['descripcion'];
                $xResumen   = $filaPro['resumen'];
                $xFicha     = $filaPro['ficha'];
                $xImagen    = $filaPro['imagen'];
                $xEstado    = $filaPro['estado'];
        ?>
        <div class="page-title parallax parallax2">
            <div class="container">
    	        <div class="row">
    	            <div class="col-md-12">
    	                <div class="page-title-heading">
    	                    <h2>Tienda</h2>
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
                                <li><?php echo $xProducto; ?></li>
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="container pad-top60px pad-bottom60px">
        	<div class="row">
        		<div class="col-md-8 col-xs-12">
        			<div class="products-detail">
                        <div class="products-images">
                            <img src="/cms/assets/img/productos/<?php echo $xImagen; ?>" alt="<?php echo $xProducto; ?>">
                        </div>
                        <div class="summary">
                            <div style="line-height: 30px;">
                                <p class="price"><span class="amount"><?php echo $xProducto; ?></span></p>
                                <span class="posted_in">Categorias: <a><?php 
                                    $consultaCat    = "SELECT * FROM productos_categorias WHERE cod_categoria='$xCod_categoria'";
                                    $resultaCat     = mysqli_query($enlaces, $consultaCat);
                                    $filaCat        = mysqli_fetch_array($resultaCat);
                                    $xnomCat = $filaCat['categoria'];
                                    echo $xnomCat; ?></a></span>
                            </div>
                            <div class="description">
                                <p><?php echo $xResumen; ?></p>
                            </div>
                            <div class="row pad-top20px pad-bottom20px" align="center">
                                <?php if($xFicha!=""){ ?>
                                <a class="button btn-ficha" target="_blank" href="/cms/assets/archivos/<?php echo $xFicha; ?>">Ficha tecnica</a>
                                <?php } ?>
                                <a class="button" href="/contacto.php">Solicitar</a>
                            </div>
                        </div><!-- /.summary -->
                        <div class="flat-tabs" style="clear:left;">
                            <ul class="menu-tabs">
                                <li class="active"><a href="#">Descripci&oacute;n</a></li>
                            </ul>
                            <div class="content-tab">
                                <div class="content-inner active" style="display: block;">
                                    <?php echo $xDescripcion; ?>
                                </div><!-- /.content-inner -->
                            </div><!-- /.content-tab -->
                        </div><!-- /.flat-tabs -->
                        <br>
                        <?php 
                            mysqli_free_result($resultadoPro);
                        ?>
                        <hr>
                        <div class="related_products woocommerce">
                            <h4 class="flat-title-section style">Productos relacionados</h4>
                            <ul class="products">
                                <?php
                                    $consultarPro = "SELECT * FROM productos ORDER BY orden ASC LIMIT 3";
                                    $resultadoPro = mysqli_query($enlaces, $consultarPro);
                                    while($filaPro = mysqli_fetch_array($resultadoPro)){
                                        $xCodigo    = $filaPro['cod_producto'];
                                        $xCod_categoriax = $filaPro['cod_categoria'];
                                        $xProducto  = $filaPro['nom_producto'];
                                        $xSlug      = $filaPro['slug'];
                                        $xImagen    = $filaPro['imagen'];
                                ?>
                                <li>
                                    <div class="product-inner">
                                        <div class="product-thumbnail">
                                            <a href="/blog/<?php echo $xSlug; ?>">
                                                <img src="/cms/assets/img/productos/<?php echo $xImagen; ?>" alt="images" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-info-wrap">
                                                <h3><?php echo $xProducto; ?></h3>
                                                <span class="price" style="font-size: 14px; top: -10px; position: relative;"><span class="amount"><?php 
                                                    $consultaCat    = "SELECT * FROM productos_categorias WHERE cod_categoria='$xCod_categoriax'";
                                                    $resultaCat     = mysqli_query($enlaces, $consultaCat);
                                                    $filaCat        = mysqli_fetch_array($resultaCat);
                                                    $xnomCat = $filaCat['categoria'];
                                                    echo $xnomCat; ?></span></span>
                                            </div>
                                        </div>
                                    </div><!-- /.product-inner -->
                                </li>
                                <?php
                                    }
                                    mysqli_free_result($resultadoPro); 
                                ?>
                            </ul><!-- /.products -->
                        </div><!-- /.related_products -->
                    </div>
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
                                    $xSlug = $filaCat['slug'];
                                    $xCategoria = $filaCat['categoria'];
                                    
                                    $consultaCategoria = "SELECT * FROM productos WHERE cod_categoria=$xCodigo AND estado='1'";
                                    $resultadosCategoria = mysqli_query($enlaces,$consultaCategoria);
                                    $numd = mysqli_num_rows($resultadosCategoria);
                            ?>
                            <?php if($numd==0){}else{ ?>
                            <li><a href="/categorias/<?php echo $xSlug; ?>"><?php echo $xCategoria; ?></a></li>
                            <?php } ?>
                            <?php
                                }
                                mysqli_free_result($resultadoCategoria);
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include ('module/footer.php');  ?>
    </div>
</body>
</html>