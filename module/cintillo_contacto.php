        <!-- Promobox -->
        <div class="flat-row bg-scheme pad-top0px pad-bottom0px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="promobox style2 clearfix" align="center">
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE estado='1' AND cod_contenido='10'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaCon = mysqli_fetch_array($resultadoCon);
                                    $xTitulo_contenido = $filaCon['titulo_contenido'];
                            ?>
                            <h5 class="promobox-title"><?php echo $xTitulo_contenido; ?></h5>
                            <br>
                            <a class="button black sm" href="/contacto.php">Contacto<i class="fa fa-chevron-right"></i></a>
                            <?php
                                mysqli_free_result($resultadoCon);
                            ?>
                        </div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->