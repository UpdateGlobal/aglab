<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
  $num = "";
  if (isset($_REQUEST['eliminar'])){
    $eliminar = $_POST['eliminar'];
  } else {
    $eliminar = "";
  }
  if ($eliminar == "true") {
    $sqlEliminar = "SELECT cod_valor FROM valores ORDER BY orden";
    $sqlResultado = mysqli_query($enlaces,$sqlEliminar);
    $x = 0;
    while($filaElim = mysqli_fetch_array($sqlResultado)){
      $id_valor = $filaElim["cod_valor"];
      if ($_REQUEST["chk" . $id_valor] == "on") {
        $x++;
        if ($x == 1) {
          $sql = "DELETE FROM valores WHERE cod_valor=$id_valor";
        } else { 
          $sql = $sql . " OR cod_valor=$id_valor";
        }
      }
    }
    mysqli_free_result($sqlResultado);
    if ($x > 0) { 
      $rs = mysqli_query($enlaces,$sql);
    }
    header ("Location:nosotros.php");
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("module/head.php"); ?>
  <script>
    function Procedimiento(proceso,seccion){
      document.fcms.proceso.value = "";
      estado = 0;
      for (i = 0; i < document.fcms.length; i++)
      if(document.fcms.elements[i].name.substring(0,3) == "chk"){
        if(document.fcms.elements[i].checked == true){
          estado = 1
        }
      }
      if (estado == 0) {
        if (seccion == "N"){
          alert("Debes de seleccionar un valor.")
        }
        return
      }
      procedimiento = "document.fcms." + proceso + ".value = true"
      eval(procedimiento)
      document.fcms.submit()
    }
  </script>
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
  <?php $menu="nosotros"; include("module/menu.php"); ?>
  <?php include("module/header.php"); ?>
  <!-- Main container -->
  <main>
    <header class="header bg-ui-general">
      <div class="header-info">
        <h1 class="header-title">
          <strong>Nosotros</strong>
          <small></small>
        </h1>
      </div>
    </header><!--/.header -->
      <div class="main-content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Qui&eacute;nes Somos</strong></h4>
              <div class="card-body">
                <div class="row">
                  <?php
                    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='1'";
                    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaCon = mysqli_fetch_array($resultadoCon)){
                      $xCodigo      = $filaCon['cod_contenido'];
                      $xContenido   = $filaCon['contenido'];
                      $xEstado      = $filaCon['estado'];
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
                  }
                  mysqli_free_result($resultadoCon);
                ?>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="nosotros-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Nosotros</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-lg-6">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Misi&oacute;n</strong></h4>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <?php
                      $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='2'";
                      $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                      while($filaCon = mysqli_fetch_array($resultadoCon)){
                        $xCodigo      = $filaCon['cod_contenido'];
                        $xContenido   = $filaCon['contenido'];
                        $xEstado      = $filaCon['estado'];
                    ?>
                    <p><?php
                      $xContenido_r = strip_tags($xContenido);
                      $strCut = substr($xContenido_r,0,200);
                      $xContenido_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
                      echo $xContenido_r;
                    ?></p>
                    <hr>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                    <?php
                      }
                      mysqli_free_result($resultadoCon);
                    ?>
                  </div>
                </div>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="nosotros-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Misi&oacute;n</a>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-6">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Visi&oacute;n</strong></h4>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <?php
                      $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='3'";
                      $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                      $filaCon = mysqli_fetch_array($resultadoCon);
                        $xCodigo      = $filaCon['cod_contenido'];
                        $xContenido   = $filaCon['contenido'];
                        $xEstado      = $filaCon['estado'];
                    ?>
                    <p><?php
                      $xContenido_r = strip_tags($xContenido);
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
                <a href="nosotros-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Visi&oacute;n</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Nuestra Historia</strong></h4>
              <div class="card-body">
                <div class="row">
                  <?php
                    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='4'";
                    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaCon = mysqli_fetch_array($resultadoCon)){
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
                  }
                  mysqli_free_result($resultadoCon);
                ?>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="nosotros-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Historia</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Cont&aacute;cto</strong></h4>
              <?php
                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='7'";
                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                $filaCon = mysqli_fetch_array($resultadoCon);
                  $xCodigo      = $filaCon['cod_contenido'];
                  $xTitulo      = $filaCon['titulo_contenido'];
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
                    <strong><?php echo $xTitulo; ?></strong>
                    <p><?php
                      $xContenido_r = strip_tags($xContenido);
                      $strCut = substr($xContenido_r,0,280);
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
                <a href="nosotros-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Contacto</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Valores Im&aacute;gen</strong></h4>
              <?php
                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='13'";
                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                $filaCon = mysqli_fetch_array($resultadoCon);
                  $xCodigo      = $filaCon['cod_contenido'];
                  $xImagen      = $filaCon['img_contenido'];
                  $xEstado      = $filaCon['estado'];
              ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <img class="d-block b-1 border-light hover-shadow-2 p-1" src="assets/img/nosotros/<?php echo $xImagen; ?>" />
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                  </div>
                </div>
              </div>
              <?php
                mysqli_free_result($resultadoCon);
              ?>
              <div class="publisher bt-1 border-light">
                <a href="nosotros-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Imagen</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Lista Valores</strong></h4>
              <div class="card-body">
                <a class="btn btn-info" href="<?php if($xVisitante=="0"){ ?>valor-nuevo.php<?php }else{ ?>javascript:visitante();<?php } ?>"><i class="fa fa-plus"></i> A&ntilde;adir nuevo</a>
                <hr>
                <form name="fcms" method="post" action="">
                  <table class="table">
                    <thead>
                      <tr>
                        <th width="65%" scope="col">T&iacute;tulo
                          <input type="hidden" name="proceso">
                          <input type="hidden" name="eliminar" value="false">
                        </th>
                        <th width="10%" scope="col">Orden</th>
                        <th width="10%" scope="col">Estado</th>
                        <th width="5%" scope="col"></th>
                        <th width="5%" scope="col"></th>
                        <th width="5%" scope="col"><a href="javascript:Procedimiento('eliminar','N');"><img src="assets/img/borrar.png" width="18" height="25" alt="Borrar"></a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $consultarValor = "SELECT * FROM valores ORDER BY orden";
                        $resultadoValor = mysqli_query($enlaces,$consultarValor) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaVal = mysqli_fetch_array($resultadoValor)){
                          $xCodigo  = $filaVal['cod_valor'];
                          $xTitulo  = $filaVal['titulo'];
                          $xOrden   = $filaVal['orden'];
                          $xEstado  = $filaVal['estado'];
                      ?>
                      <tr>
                        <td><?php echo $xTitulo; ?></td>
                        <td><?php echo $xOrden; ?></td>
                        <td><strong>
                          <?php if($xEstado=="1"){ echo "[Activo]"; }else{ echo "[Inactivo]"; } ?>
                          </strong>
                        </td>
                        <td>
                          <a class="boton-eliminar <?php if($xVisitante=="1"){ ?>boton-eliminar-bloqueado<?php } ?>" href="<?php if($xVisitante=="0"){ ?>valor-delete.php?cod_valor=<?php echo $xCodigo; ?><?php }else{ ?>javascript:visitante();<?php } ?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>
                        </td>
                        <td><a class="boton-editar" href="valor-edit.php?cod_valor=<?php echo $xCodigo; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
                        <td>
                          <?php if($xVisitante=="0"){ ?>
                          <div class="hidden">
                            <label class="custom-control custom-control-lg custom-checkbox" for="chkbx-<?php echo $xCodigo; ?>">
                              <input type="checkbox" class="custom-control-input" id="chkbx-<?php echo $xCodigo; ?>" name="chk<?php echo $xCodigo; ?>" />
                              <span class="custom-control-indicator"></span>
                            </label>
                          </div>
                          <?php } ?>
                        </td>
                      </tr>
                      <?php
                        }
                        mysqli_free_result($resultadoValor);
                      ?>
                    </tbody>
                  </table>
                </form>
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