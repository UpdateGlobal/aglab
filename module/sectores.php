<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-8 col-xs 12">
            <div class="general">
                <h3 class="flat-title-section style style1">Sectores <span>de aplicación</span></h3>
                <div class="flat-divider d20px"></div>
                <?php
                    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='6' AND estado='1'";
                    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    $filaCon = mysqli_fetch_array($resultadoCon);
                        $xContenido   = $filaCon['contenido'];
                ?>
                <?php echo $xContenido; ?>
                <?php
                    mysqli_free_result($resultadoCon);
                ?>
                <div class="clients-image clearfix">
                    <?php
                        $consultarSector = "SELECT * FROM productos_sectores WHERE estado='1' ORDER BY orden ASC";
                        $resultadoSector = mysqli_query($enlaces, $consultarSector);
                        while($filaSc = mysqli_fetch_array($resultadoSector)){
                            $xSectores = $filaSc['sector'];
                            $xImagen   = $filaSc['imagen'];
                    ?>
                    <div class="item-three-column">
                        <div class="item-img">
                            <img src="cms/assets/img/productos/sectores/<?php echo $xImagen; ?>" />
                        </div>
                        <p class="tooltip"><?php echo $xSectores; ?></p>
                    </div>
                    <?php
                        }
                        mysqli_free_result($resultadoSector);
                    ?>
                </div><!-- /.flat-clients-image -->
            </div>
        </div>

        <div class="col-md-4 col-xs-12">
            <h3 class="flat-title-section style style1">Datos de <span>Interés</span></h3>
            <div class="widget widget_text">
                <div class="textwidget">
                    <div class="content-text">
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
            <div class="widget widget_text">
                <div class="textwidget">
                    <div class="content-text" style="text-align: left;">
                        <?php
                            $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='9' AND estado='1'";
                            $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                            $filaCon = mysqli_fetch_array($resultadoCon);
                                $xTitulo = $filaCon['titulo_contenido'];
                                $xLink   = $filaCon['contenido'];
                        ?>
                        <ul>
                            <li class="box_cont" style="text-align: left;"><b><?php echo $xTitulo; ?></b></li>
                        </ul>
                        <a class="button white box_buttun" href="<?php echo $xLink; ?>">Saber m&aacute;s<i class="fa fa-chevron-right"></i></a>
                        <?php
                            mysqli_free_result($resultadoCon);
                        ?>
                    </div>
                </div><!-- /.textwidget -->
            </div>
        </div>
    </div>
</div>