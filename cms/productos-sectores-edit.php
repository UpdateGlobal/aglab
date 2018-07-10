<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_sectores = $_REQUEST['cod_sectores'];
if (isset($_REQUEST['proceso'])){
  $proceso = $_POST['proceso'];
} else {
  $proceso = "";
}
if($proceso == ""){
  $consultaSector = "SELECT * FROM productos_sectores WHERE cod_sectores='$cod_sectores'";
  $resultadoSector = mysqli_query($enlaces, $consultaSector);
  $filaSc = mysqli_fetch_array($resultadoSector);
  $cod_sectores    = $filaSc['cod_sectores'];
  $sector          = $filaSc['sector'];
  $orden           = $filaSc['orden'];
  $estado          = $filaSc['estado'];
}
if($proceso == "Actualizar"){
  $cod_sectores  = $_POST['cod_sectores'];
  $sector        = $_POST['sector'];
  $slug          = $sector;
  $slug          = preg_replace('~[^\pL\d]+~u', '-', $slug);
  $slug          = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
  $slug          = preg_replace('~[^-\w]+~', '', $slug);
  $slug          = trim($slug, '-');
  $slug          = preg_replace('~-+~', '-', $slug);
  $slug          = strtolower($slug);
  if (empty($slug)){
      return 'n-a';
  }
  $orden           = $_POST['orden'];
  $estado          = $_POST['estado'];
  
  $actualizarSector = "UPDATE productos_sectores SET cod_sectores='$cod_sectores', slug='$slug', sector='$sector', orden='$orden', estado='$estado' WHERE cod_sectores='$cod_sectores'";
  $resultadoActualizar = mysqli_query($enlaces, $actualizarSector);

  header("Location: productos-sectores.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        if(document.fcms.sector.value==""){
          alert("Debe escribir un nombre para el sector.");
          document.fcms.sector.focus();
          return;
        }
        document.fcms.action = "productos-sectores-edit.php";
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
    <?php $menu="productos"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Productos</strong>
            <small></small>
          </h1>
        </div>
        <?php $page="productossectores"; include("module/menu-productos.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar Sectores</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="sector">Sector:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="sector" type="text" id="sector" value="<?php echo $sector; ?>" />
                  <div class="invalid-feedback"></div>
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
              <a href="productos-sectores.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_sectores" value="<?php echo $cod_sectores; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>