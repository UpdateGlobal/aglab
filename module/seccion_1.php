        <div class="flat-row blog-shortcode blog-home pad-top60px pad-bottom0px">
            <div class="container">
                <div class="row" align="center">
                    <?php
                        $consultarMet = 'SELECT * FROM metatags';
                        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        $filaMet = mysqli_fetch_array($resultadoMet);
                            $xLogo    = $filaMet['logo'];
                    ?>
                    <img src="/cms/assets/img/meta/<?php echo $xLogo; ?>" class="img-responsive img_seccion1">
                    <?php
                        mysqli_free_result($resultadoMet);
                    ?>
                </div>
                <div class="row" style="margin-bottom: 80px;">
                    <?php
                        $consultarCon = "SELECT * FROM contenidos WHERE estado='1' AND cod_contenido='1'";
                        $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        $filaCon = mysqli_fetch_array($resultadoCon);
                            $xContenido   = $filaCon['contenido'];
                    ?>
                    <div class="col-md-6 col-xs-12">
                        <div class="col-md-12">
                            <h2 class="flat-title-section style mag-bottom0px">Quienes <span class="scheme">Somos.</span></h2>
                            <p style="text-align: justify;"><?php $xDescripcion_sub = strip_tags($xContenido);
                                $strCut = substr($xDescripcion_sub,0,800);
                                $xDescripcion_sub = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                echo $xDescripcion_sub;
                            ?></p>
                            <a class="button lg" href="/nosotros.php">Ver M&aacute;s<i class="fa fa-chevron-right"></i></a>
                        </div><!-- /.col-md-12 -->
                    </div>
                    <?php
                        mysqli_free_result($resultadoCon); 
                    ?>
                    <div class="col-md-6 col-xs-12">
                        <div class="col-md-12">
                            <h2 class="flat-title-section style mag-bottom0px">Últimas <span class="scheme">Noticias.</span></h2>
                            <?php
                                $consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha LIMIT 2";
                                $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                                    $xCodigo    = $filaNot['cod_noticia'];
                                    $xTitulo    = $filaNot['titulo'];
                                    $xSlug      = $filaNot['slug'];
                                    $xNoticia   = $filaNot['noticia'];
                                    $xImagen    = $filaNot['imagen'];
                                    $xFecha     = $filaNot['fecha'];
                                    $xEstado    = $filaNot['estado'];
                            ?>
                            <!--item-->
                            <div class="flat-iconbox ">
                                <div class="box-header">
                                    <div class="box-icon">
                                        <img src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" width="220" alt="images">
                                    </div>
                                    <h5 class="box-title"><?php echo $xTitulo; ?></h5>
                                </div>
                                <div class="box-content">
                                    <?php 
                                        $xDescripcion_sub = strip_tags($xNoticia);
                                        $strCut = substr($xDescripcion_sub,0,100);
                                        $xDescripcion_sub = substr($strCut,0,strrpos($strCut, ' ')).'...';
                                        echo $xDescripcion_sub;
                                    ?>
                                    <p class="box-readmore">
                                        <a href="/blog/<?php echo $xSlug; ?>">Continuar Leyendo</a>
                                    </p>
                                </div>
                            </div>
                            <!--item-->
                            <?php
                                }
                                mysqli_free_result($resultadoNoticias);
                            ?>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </div>