<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$num = ""; 
if (isset($_REQUEST['eliminar'])) {
  $eliminar = $_POST['eliminar'];
} else {
  $eliminar = "";
}
if ($eliminar == "true") {
  $sqlEliminar = "SELECT cod_pregunta FROM preguntas ORDER BY orden";
  $sqlResultado = mysqli_query($enlaces,$sqlEliminar);
  $x = 0;
  while($filaElim = mysqli_fetch_array($sqlResultado)){
    $id_pregunta = $filaElim["cod_pregunta"];
    if ($_REQUEST["chk" . $id_pregunta] == "on") {
      $x++;
      if ($x == 1) {
        $sql = "DELETE FROM preguntas WHERE cod_pregunta=$id_pregunta";
      } else { 
        $sql = $sql . " OR cod_pregunta=$id_pregunta";
      }
    }
  }
  mysqli_free_result($sqlResultado);
  if ($x > 0) { 
    $rs = mysqli_query($enlaces,$sql);
  }
  header ("Location:preguntas.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <style>
      @media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px)  {
        td:nth-of-type(1):before { content: "Preguntas"; }
        td:nth-of-type(2):before { content: "Orden"; }
        td:nth-of-type(3):before { content: "Estado"; }
        td:nth-of-type(4):before { content: ""; }
        td:nth-of-type(5):before { content: ""; }
        td:nth-of-type(6):before { content: ""; }
      }
    </style>
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
            alert("Debes de seleccionar una Imagen.")
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
    <?php $menu="preguntas"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Preguntas</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Preguntas Frecuentes (Texto)</strong></h4>
                      <div class="card-body">
                        <div class="row">
                          <?php
                            $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='12'";
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
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Lista Preguntas</strong></h4>
              <div class="card-body">
                
                <a class="btn btn-info" href="<?php if($xVisitante=="0"){ ?>preguntas-nuevo.php<?php }else{ ?>javascript:visitante();<?php } ?>"><i class="fa fa-plus"></i> A&ntilde;adir nuevo</a>
                <hr>
                <form name="fcms" method="post" action="">
                  <table class="table">
                    <thead>
                      <tr>
                        <th width="65%" scope="col">Pregunta
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
                        $consultarPreguntas = "SELECT * FROM preguntas ORDER BY orden";
                        $resultadoPreguntas = mysqli_query($enlaces,$consultarPreguntas) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaPre = mysqli_fetch_array($resultadoPreguntas)){
                          $xCodigo    = $filaPre['cod_pregunta'];
                          $xPregunta  = $filaPre['pregunta'];
                          $xRespuesta = $filaPre['respuesta'];
                          $xOrden     = $filaPre['orden'];
                          $xEstado    = $filaPre['estado'];
                      ?>
                      <tr>
                        <td><?php echo $xPregunta; ?></td>
                        <td><?php echo $xOrden; ?></td>
                        <td><strong>
                          <?php if($xEstado=="1"){ echo "[Activo]"; }else{ echo "[Inactivo]"; } ?>
                          </strong>
                        </td>
                        <td>
                          <a class="boton-eliminar <?php if($xVisitante=="1"){ ?>boton-eliminar-bloqueado<?php } ?>" href="<?php if($xVisitante=="0"){ ?>preguntas-delete.php?cod_pregunta=<?php echo $xCodigo; ?><?php }else{ ?>javascript:visitante();<?php } ?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>
                        </td>
                        <td>
                          <a class="boton-editar" href="preguntas-edit.php?cod_pregunta=<?php echo $xCodigo; ?>">
                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                          </a>
                        </td>
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
                        mysqli_free_result($resultadoPreguntas);
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