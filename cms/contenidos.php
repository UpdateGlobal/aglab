<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("module/head.php"); ?>
  <script src="assets/js/visitante-alert.js"></script>
</head>
<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="spinner-dots">
      <span class="dot1"></span>
      <span class="dot2"></span>
      <span class="dot3"></span>
    </div>
  </div>
  <?php $menu="inicio"; include("module/menu.php"); ?>
  <?php include("module/header.php"); ?>
  <!-- Main container -->
  <main>
    <header class="header bg-ui-general">
      <div class="header-info">
        <h1 class="header-title">
          <strong>Contenidos en P&aacute;gina de Inicio</strong>
          <small></small>
        </h1>
      </div>
      <?php $page="contenidos"; include("module/menu-inicio.php"); ?>
    </header><!--/.header -->
    <div class="main-content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-bordered">
            <h4 class="card-title"><strong>Sectores de Aplicaci&oacute;n</strong></h4>
            <div class="card-body">
              <div class="row">
                <?php
                  $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='6'";
                  $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                  $filaCon = mysqli_fetch_array($resultadoCon);
                    $xCodigo    = $filaCon['cod_contenido'];
                    $xContenido = $filaCon['contenido'];
                    $xEstado    = $filaCon['estado'];
                ?>
                <div class="col-12 col-lg-12">
                  <p><?php
                      $xContenido_r = strip_tags($xContenido);
                      $strCut = substr($xContenido_r,0,800);
                      $xContenido_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
                      echo $xContenido_r;
                  ?></p>
                  <hr>
                  <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                </div>
              </div>
              <?php
                mysqli_free_result($resultadoCon);
              ?>
            </div>
            <div class="publisher bt-1 border-light">
              <a href="contenidos-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Contenido</a>
            </div>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Contacto 1</strong></h4>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <?php
                      $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='9'";
                      $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                      $filaCon = mysqli_fetch_array($resultadoCon);
                        $xCodigo      = $filaCon['cod_contenido'];
                        $xTitulo_contenido = $filaCon['titulo_contenido'];
                        $xEstado      = $filaCon['estado'];
                    ?>
                    <p><?php
                      $xContenido_r = strip_tags($xTitulo_contenido);
                      $strCut = substr($xContenido_r,0,200);
                      $xContenido_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
                      echo $xContenido_r;
                    ?></p>
                    <hr>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                    <?php
                      mysqli_free_result($resultadoCon);
                    ?>
                  </div>
                </div>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="contenidos-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Contenido</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Contacto 2</strong></h4>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <?php
                      $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='10'";
                      $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                      $filaCon = mysqli_fetch_array($resultadoCon);
                        $xCodigo      = $filaCon['cod_contenido'];
                        $xTitulo_contenido = $filaCon['titulo_contenido'];
                        $xEstado      = $filaCon['estado'];
                    ?>
                    <p><?php
                      $xContenido_r = strip_tags($xTitulo_contenido);
                      $strCut = substr($xContenido_r,0,200);
                      $xContenido_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
                      echo $xContenido_r;
                    ?></p>
                    <hr>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                    <?php
                      mysqli_free_result($resultadoCon);
                    ?>
                  </div>
                </div>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="contenidos-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Contenido</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>&iquest;Por qu&eacute; elegirnos?</strong></h4>
              <div class="card-body">
                <div class="row">
                  <?php
                    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='8'";
                    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    $filaCon = mysqli_fetch_array($resultadoCon);
                      $xCodigo      = $filaCon['cod_contenido'];
                      $xImagen      = $filaCon['img_contenido'];
                      $xContenido   = $filaCon['contenido'];
                      $xEstado      = $filaCon['estado'];
                  ?>
                  <div <?php if($xImagen!=""){?> class="col-8 col-lg-8" <?php }else{ ?> class="col-12 col-lg-12" <?php } ?>>
                    <p><?php
                      $xContenido_r = strip_tags($xContenido);
                      $strCut = substr($xContenido_r,0,800);
                      $xContenido_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
                      echo $xContenido_r;
                    ?></p>
                    <hr>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                  </div>
                  <?php if($xImagen!=""){?>
                  <div class="col-4 col-lg-4">
                    <img class="d-block b-1 border-light hover-shadow-2 p-1" src="assets/img/nosotros/<?php echo $xImagen; ?>" />
                  </div>
                  <?php } ?>
                </div>
                <?php
                  mysqli_free_result($resultadoCon);
                ?>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="contenidos-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Contenido</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Pie de P&aacute;gina</strong></h4>
              <?php
                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='5'";
                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                $filaCon = mysqli_fetch_array($resultadoCon);
                  $xCodigo      = $filaCon['cod_contenido'];
                  $xImagen      = $filaCon['img_contenido'];
                  $xContenido   = $filaCon['contenido'];
                  $xEstado      = $filaCon['estado'];
              ?>
              <div class="card-body">
                <?php if($xImagen!=""){?>
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <img class="d-block b-1 border-light hover-shadow-2 p-1" src="assets/img/nosotros/<?php echo $xImagen; ?>" />
                  </div>
                </div>
                <?php } ?>
                <div class="row">
                  <div <?php if($xImagen!=""){?> class="col-12 col-lg-12" <?php } ?>>
                    <p><?php
                      $xContenido_r = strip_tags($xContenido);
                      $strCut = substr($xContenido_r,0,800);
                      $xContenido_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
                      echo $xContenido_r;
                    ?></p>
                    <hr>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                  </div>
                </div>
              </div>
              <?php
                mysqli_free_result($resultadoCon);
              ?>
              <div class="publisher bt-1 border-light">
                <a href="contenidos-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Contenido</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>