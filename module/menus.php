<!--menus-->
<div class="site-header">
    <?php include ('module/topmenu.php'); ?>
    <header id="header" class="header clearfix"> 
        <div class="header-wrap clearfix">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div id="logo" class="logo">
                            <?php
                                $consultarMet = 'SELECT * FROM metatags';
                                $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaMet = mysqli_fetch_array($resultadoMet);
                                    $xLogo    = $filaMet['logo'];
                            ?>
                            <a href="index.php">
                                <img src="cms/assets/img/meta/<?php echo $xLogo; ?>" alt="images" />
                            </a>
                            <?php
                                mysqli_free_result($resultadoMet);
                            ?>
                        </div>
                        <div class="btn-menu"><span></span></div><!-- //mobile menu button -->
                        <div class="nav-wrap">
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li class="<?php if($xActivo=="empresa"){ echo "home"; } ?>"><a href="/nosotros.php">Empresa</a></li>
                                    <li class="<?php if($xActivo=="productos"){ echo "home"; } ?> has-mega-menu">
                                        <a class="has-mega active" href="#">Productos</a>
                                        <div class="submenu mega-menu">
                                            <div class="row">
                                                <div class="container">
                                                    <div class="col-md-6">
                                                        <div class="mega-title" align="center">
                                                            <h5 class="btn-mega">Sectores</h5>
                                                        </div>
                                                        <ul class="mega-menu-sub" style="column-count: 2;text-align: center;"> 
                                                            <?php
                                                                $consultarSector = "SELECT * FROM productos_sectores WHERE estado='1' ORDER BY orden ASC";
                                                                $resultadoSector = mysqli_query($enlaces, $consultarSector);
                                                                while($filaSc = mysqli_fetch_array($resultadoSector)){
                                                                    $xCodigo   = $filaSc['cod_sectores'];
                                                                    $xSlug     = $filaSc['slug'];
                                                                    $xSectores = $filaSc['sector'];
                                                            ?>
                                                            <li><a class="viewt" href="/sectores/<?php echo $xSlug; ?>"><?php echo $xSectores; ?></a></li>
                                                            <?php
                                                                }
                                                                mysqli_free_result($resultadoSector);
                                                            ?>
                                                        </ul>
                                                    </div><!-- /.col-md-6 -->
                                                    <div class="col-md-6" style="border-left: 1px solid #fff;">
                                                        <div class="mega-title" align="center">
                                                            <h5 class="btn-mega">Categorias</h5>
                                                        </div>
                                                        <ul class="mega-menu-sub" style="column-count: 2;text-align: center;">
                                                            <?php
                                                                $consultarCategoria = "SELECT * FROM productos_categorias WHERE estado='1' ORDER BY orden ASC";
                                                                $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                                                while($filaCat = mysqli_fetch_array($resultadoCategoria)){
                                                                    $xCodigo    = $filaCat['cod_categoria'];
                                                                    $xCategoria = $filaCat['categoria'];
                                                                    $xSlug      = $filaCat['slug'];
                                                            ?>
                                                            <li><a class="viewt" href="/categorias/<?php echo $xSlug; ?>"><?php echo $xCategoria; ?></a></li>
                                                            <?php
                                                                }
                                                                mysqli_free_result($resultadoCategoria);
                                                            ?>
                                                        </ul>
                                                    </div><!-- /.col-md-6 -->
                                                </div><!-- /.container -->
                                            </div><!-- /.row -->
                                        </div><!-- /.submenu -->
                                    </li>
                                    <li class="<?php if($xActivo=="maquila"){ echo "home"; } ?>"><a href="maquila.php">Maquila</a></li>
                                    <li class="<?php if($xActivo=="servicios"){ echo "home"; } ?>"><a href="servicio.php">Servicios</a></li>
                                    <li class="<?php if($xActivo=="blog"){ echo "home"; } ?>"><a href="blog.php">Blog</a></li>
                                    <li class="<?php if($xActivo=="faq"){ echo "home"; } ?>"><a href="faq.php">FAQ</a></li>
                                    <li class="<?php if($xActivo=="contacto"){ echo "home"; } ?>"><a href="contacto.php">Contacto</a></li>
                                </ul><!-- /.menu -->                                        
                            </nav><!-- /.mainnav -->  
                        </div><!-- /.nav-wrap -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->             
        </div><!-- /.header-inner --> 
    </header><!-- /.header -->
</div>
<!--menus-->