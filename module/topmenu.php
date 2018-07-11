            <div class="flat-top hidden-xs hidden-ms">
                <div class="container">
                    <div class="row">
                        <div class="flat-wrapper">
                             <div class="social-links">
                                <?php
                                    $consultarSol = "SELECT * FROM social WHERE estado='1' ORDER BY orden";
                                    $resultadoSol = mysqli_query($enlaces,$consultarSol) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                    while($filaSol = mysqli_fetch_array($resultadoSol)){
                                        $xLinks  = $filaSol['links'];
                                        $xType   = $filaSol['type'];
                                        if($xType=="fa-facebook-square"){ $xValor = "fa-facebook-f"; }
                                        if($xType=="fa-twitter-square"){ $xValor = "fa-twitter"; }
                                        if($xType=="fa-google-plus-official"){ $xValor = "fa-google-plus-g"; }
                                        if($xType=="fa-linkedin"){ $xValor = "fa-linkedin-in"; }
                                        if($xType=="fa-behance"){ $xValor = "fa-behance"; }
                                        if($xType=="fa-youtube-play"){ $xValor = "fa-youtube"; }
                                        if($xType=="fa-vimeo"){ $xValor = "fa-vimeo-v"; }
                                        if($xType=="fa-wordpress"){ $xValor = "fa-wordpress"; }
                                        if($xType=="fa-tumblr-square"){ $xValor = "fa-tumblr"; }
                                        if($xType=="fa-pinterest"){ $xValor = "fa-pinterest-p"; }
                                        if($xType=="fa-instagram"){ $xValor = "fa-instagram"; }
                                        if($xType=="fa-flickr"){ $xValor = "fa-flickr"; }
                                ?>
                                <a href="<?php echo $xLinks; ?>">
                                    <i class="fab <?php echo $xValor; ?>"></i>
                                </a>
                                <?php
                                    }
                                    mysqli_free_result($resultadoSol);
                                ?>
                            </div>
                            <div class="custom-info">
                                <?php
                                    $consultarCot = 'SELECT * FROM contacto';
                                    $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                    while($filaCot  = mysqli_fetch_array($resultadoCot)){
                                        $xDirection   = $filaCot['direction'];
                                        $xPhone       = $filaCot['phone'];
                                        $xEmail       = $filaCot['email'];
                                ?>
                                <?php if($xEmail!=""){?><span class="item_top"><i class="far fa-envelope"></i><?php echo $xEmail; ?></span><?php } ?>
                                <?php if($xDirection!=""){?><span class="item_top"><i class="fas fa-map-marker-alt"></i><?php echo $xDirection; ?></span><?php } ?>
                                <?php if($xPhone!=""){?><span class="item_top"><i class="fas fa-phone"></i><?php echo $xPhone; ?></span><?php } ?>
                                <?php
                                    }
                                    mysqli_free_result($resultadoCot);
                                ?>
                            </div>
                        </div><!-- /.flat-wrapper -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.flat-top -->