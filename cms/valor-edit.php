<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_valor   = $_REQUEST['cod_valor'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == ""){
  $consultaValor = "SELECT * FROM valores WHERE cod_valor='$cod_valor'";
  $ejecutarValor = mysqli_query($enlaces,$consultaValor) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaVal = mysqli_fetch_array($ejecutarValor);
  $cod_valor = $filaVal['cod_valor'];
  $titulo = $filaVal['titulo'];
  $descripcion = $filaVal['descripcion'];
  $orden  = $filaVal['orden'];
  $estado = $filaVal['estado'];
}
if($proceso=="Actualizar"){
  $cod_valor   = $_POST['cod_valor'];
  $titulo      = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $descripcion = $_POST['descripcion'];
  if(isset($_POST['orden'])){$orden = $_POST['orden'];}else{$orden = 0;}
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
  $actualizarValor = "UPDATE valores SET cod_valor='$cod_valor', titulo='$titulo', descripcion='$descripcion', orden='$orden', estado='$estado' WHERE cod_valor='$cod_valor'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarValor) or die('Consulta fallida: ' . mysqli_error($enlaces));
  header("Location:nosotros.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        if(document.fcms.titulo.value==""){
          alert("Debe escribir un titulo");
          return; 
        }
        document.fcms.action = "valor-edit.php";
        document.fcms.proceso.value="Actualizar";
        document.fcms.submit();
      } 
      function Imagen(codigo){
        url = "agregar-foto.php?id=" + codigo;
        AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
      }
      function soloNumeros(e){ 
        var key = window.Event ? e.which : e.keyCode 
        return ((key >= 48 && key <= 57) || (key==8)) 
      }
    </script>
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
            <strong>Valores</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar valores</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" value="<?php echo $titulo; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="descripcion" id="descripcion"><?php echo $descripcion; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" value="<?php echo $orden; ?>" onKeyPress="return soloNumeros(event)" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?> />
                </div>
              </div>
              
            </div>
            <footer class="card-footer">
              <a href="nosotros.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_valor" value="<?php echo $cod_valor; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>