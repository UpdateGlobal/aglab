<div class="container">
    <div class="row" style="padding: 30px 0px;">
        <div class="col-md-6 col-xs-12">
            <div class="widget widget_products">
                <h2 class="flat-title-section style mag-bottom0px">Productos <span class="scheme">m&aacute;s vendidos.</span></h2>
                <ul class="product_list_widget">
                    <?php
                        $consultarPro = "SELECT * FROM productos ORDER BY fecha_ing ASC LIMIT 3";
                        $resultadoPro = mysqli_query($enlaces, $consultarPro);
                        while($filaPro = mysqli_fetch_array($resultadoPro)){
                            $xCodigo    = $filaPro['cod_producto'];
                            $xCod_categoriax = $filaPro['cod_categoria'];
                            $xProducto  = $filaPro['nom_producto'];
                            $xImagen    = $filaPro['imagen'];
                            $xSlug      = $filaPro['slug'];
                    ?>
                    <li>
                        <a href="/producto/<?php echo $xSlug; ?>">
                            <img src="/cms/assets/img/productos/<?php echo $xImagen; ?>" alt="<?php echo $xProducto; ?>" />
                            <h5 class="box-title"><?php echo $xProducto; ?></h5>
                        </a>
                        <span class="amount"><?php 
                                        $consultaCat = "SELECT * FROM productos_categorias WHERE cod_categoria='$xCod_categoriax'";
                                        $resultaCat = mysqli_query($enlaces, $consultaCat);
                                        $filaCat = mysqli_fetch_array($resultaCat);
                                        $xnomCat = $filaCat['categoria'];
                                        echo $xnomCat; ?></span>
                    </li>
                    <?php
                        }
                        mysqli_free_result($resultadoPro); 
                    ?>
                </ul>
                <br>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="flat-wrapper">
                <div class="flat-iconbox-style clearfix">
                    <!-- /.item-three-column -->
                    <?php
                        $consultarservicio = "SELECT * FROM servicios WHERE estado='1' AND cod_categoria='1' ORDER BY orden DESC LIMIT 1";
                        $resultadoservicio = mysqli_query($enlaces,$consultarservicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        $filaSer = mysqli_fetch_array($resultadoservicio);
                            $xTituloS      = $filaSer['titulo'];
                            $xDescripcionS = $filaSer['descripcion'];
                    ?>
                    <div class="flat-item">
                        <div class="iconbox style1">
                            <div class="box-header">
                                <div class="box-icon"><i class="fas fa-american-sign-language-interpreting"></i></div>
                                <h5 class="box-title"><?php echo $xTituloS; ?></h5>
                            </div>
                            <div class="box-content">
                                <?php 
                                    $xDescripcionSM = strip_tags($xDescripcionS);
                                    $strCut = substr($xDescripcionSM,0,120);
                                    $xDescripcionSM = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                    echo $xDescripcionSM; 
                                ?>
                                <br><br>
                                <a class="button lg" href="/maquila.php">Ver m&aacute;s info <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php 
                        mysqli_free_result($resultadoservicio);
                    ?>
                    <!-- /.item-three-column -->
                    <br><br>
                    <!-- /.item-three-column -->
                    <?php
                        $consultarservicio = "SELECT * FROM servicios WHERE estado='1' AND cod_categoria='0' ORDER BY orden DESC LIMIT 1";
                        $resultadoservicio = mysqli_query($enlaces,$consultarservicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        $filaSer = mysqli_fetch_array($resultadoservicio);
                            $xTituloS      = $filaSer['titulo'];
                            $xDescripcionS = $filaSer['descripcion'];
                    ?>
                    <div class="flat-item">
                        <div class="iconbox style1">
                            <div class="box-header">
                                <div class="box-icon"><i class="fab fa-pagelines"></i></div>
                                <h5 class="box-title"><?php echo $xTituloS; ?></h5>
                            </div>
                            <div class="box-content">
                                <?php 
                                    $xDescripcionSM = strip_tags($xDescripcionS);
                                    $strCut = substr($xDescripcionSM,0,120);
                                    $xDescripcionSM = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                    echo $xDescripcionSM; 
                                ?>
                                <br><br>
                                <a class="button lg" href="/servicio.php">Ver m&aacute;s info <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                        mysqli_free_result($resultadoservicio); 
                    ?>
                    <!-- /.item-three-column -->
                </div>
            </div>
        </div>
    </div>
</div>