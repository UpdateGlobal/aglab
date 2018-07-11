        <!-- Slider -->
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <?php 
                        $consultarBanner = "SELECT * FROM banners ORDER BY orden";
                        $resultadoBanner = mysqli_query($enlaces,$consultarBanner) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaBan = mysqli_fetch_array($resultadoBanner)){
                            $cod_banner = $filaBan['cod_banner'];
                            $titulo = $filaBan['titulo'];
                            $imagen = $filaBan['imagen'];
                            $link = $filaBan['link'];
                    ?>
                    <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                        <img src="cms/assets/img/banner/<?php echo $imagen; ?>" alt="slider-image" />
                        <div class="tp-caption sfl title-slide center" data-x="40" data-y="100" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">                            
                            <?php echo $titulo; ?>
                        </div>    
                        <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="40" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">
                            <a href="<?php echo $link; ?>">Ver M&aacute;s</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i>
                        </div>

                        <!-- <div class="tp-caption sfr flat-button-slider" data-x="225" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="index.html#">Contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div> -->
                    </li>
                    <?php
                        }
                        mysqli_free_result($resultadoBanner);
                    ?>
                </ul>
            </div>
        </div>