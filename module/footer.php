        <!--footer-->
        <footer class="page-footer">
          <div class="container" align="center">
            <div class="row">
              <div class="col-md-12">
                <?php
                  $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='5' AND estado='1'";
                  $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                  $filaCon = mysqli_fetch_array($resultadoCon);
                    $xImagen      = $filaCon['img_contenido'];
                    $xContenido   = $filaCon['contenido'];
                ?>
                <img src="/cms/assets/img/nosotros/<?php echo $xImagen; ?>" class="img-responsive abt_img2 ">
                <p class="grey-text text-lighten-4 text_foot img_foo foo_bt" style="margin: 0px;"><?php echo $xContenido; ?></p>
                <?php
                  mysqli_free_result($resultadoCon);
                ?>
                <div class="row img_foo2">
                <?php
                  $consultarSol = "SELECT * FROM social WHERE estado='1' ORDER BY orden";
                  $resultadoSol = mysqli_query($enlaces,$consultarSol) or die('Consulta fallida: ' . mysqli_error($enlaces));
                  while($filaSol = mysqli_fetch_array($resultadoSol)){
                    $xLinks     = $filaSol['links'];
                    $xType      = $filaSol['type'];
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
                  <a href="<?php echo $xLinks; ?>" target="_blank"><span class="social"><i class="fab <?php echo $xValor; ?>"></i></span></a>
                <?php
                  }
                  mysqli_free_result($resultadoSol);
                ?>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-copyright bgfoote">
            <div class="container" style="font-size: 10px;">
              <div class="row" align="center">
                <div class="col-md-12">
                  <p class="foo_bt">Aglab Perú 2018 &copy; | Desarrollo web <a href="https://update.pe/">Update Global Marketing</a> </p>   
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!--footer--> 
        <!-- Go Top -->
        <a class="go-top">
          <i class="fa fa-chevron-up" style="transform: rotate(-45deg);"></i>
        </a>
        <!-- Javascript -->
        <script type="text/javascript" src="/javascript/jquery.min.js"></script>
        <script type="text/javascript" src="/javascript/bootstrap.min.js"></script>
        <script type="text/javascript" src="/javascript/jquery.easing.js"></script> 
        <script type="text/javascript" src="/javascript/owl.carousel.js"></script>
        <script type="text/javascript" src="/javascript/jquery-waypoints.js"></script>
        <script type="text/javascript" src="/javascript/jquery-countTo.js"></script> 
        <script type="text/javascript" src="/javascript/jquery.cookie.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="/javascript/gmap3.min.js"></script>
        <script type="text/javascript" src="/javascript/jquery-validate.js"></script>

        <script type="text/javascript" src="/javascript/parallax.js"></script>
        <script type="text/javascript" src="/javascript/main.js"></script>

        <!-- Revolution Slider -->
        <script type="text/javascript" src="/javascript/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="/javascript/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="/javascript/slider.js"></script>
        <script type="text/javascript">
          $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplayTimeout:1000,
            control:false,
            autoplay:true,
            responsive:{
              0:{
                items:1
              },
              600:{
                items:3
              },
              1000:{
                items:6
              }
            }
          })
        </script>