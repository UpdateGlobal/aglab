<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_categoria = "";
$cod_sub_categoria = "";
$cod_producto = $_REQUEST['cod_producto'];
if (isset($_REQUEST['proceso'])){
  $proceso = $_POST['proceso'];
} else {
  $proceso = "";
}
$cod_producto = $_REQUEST['cod_producto'];

if($proceso == ""){
  $consultaPro        = "SELECT * FROM productos WHERE cod_producto='$cod_producto'";
  $resultadoPro       = mysqli_query($enlaces, $consultaPro);
  $filaPro            = mysqli_fetch_array($resultadoPro);
  $cod_producto       = $filaPro['cod_producto'];
  $cod_categoria      = $filaPro['cod_categoria'];
  $cod_sectores       = $filaPro['cod_sectores'];
  $nom_producto       = htmlspecialchars($filaPro['nom_producto']);
  $descripcion        = htmlspecialchars($filaPro['descripcion']);
  $resumen            = htmlspecialchars($filaPro['resumen']);
  $fecha_ing          = $filaPro['fecha_ing'];
  $imagen             = $filaPro['imagen'];
  $ficha              = $filaPro['ficha'];
  $sector_1           = $filaPro['sector_1'];
  $sector_2           = $filaPro['sector_2'];
  $sector_3           = $filaPro['sector_3'];
  $sector_4           = $filaPro['sector_4'];
  $sector_5           = $filaPro['sector_5'];
  $sector_6           = $filaPro['sector_6'];
  $sector_7           = $filaPro['sector_7'];
  $sector_8           = $filaPro['sector_8'];
  $sector_9           = $filaPro['sector_9'];
  $sector_10          = $filaPro['sector_10'];
  $sector_11          = $filaPro['sector_11'];
  $sector_12          = $filaPro['sector_12'];
  $orden              = $filaPro['orden'];
  $estado             = $filaPro['estado'];
}

if($proceso == "Actualizar"){
  $cod_categoria      = $_POST['cod_categoria'];
  $cod_sectores       = $_POST['cod_sectores'];
  $nom_producto       = $_POST['nom_producto'];
  $slug               = $nom_producto;
  $slug               = preg_replace('~[^\pL\d]+~u', '-', $slug);
  $slug               = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
  $slug               = preg_replace('~[^-\w]+~', '', $slug);
  $slug               = trim($slug, '-');
  $slug               = preg_replace('~-+~', '-', $slug);
  $slug               = strtolower($slug);
  if (empty($slug)){
      return 'n-a';
  }
  $descripcion        = $_POST['descripcion'];
  $resumen            = $_POST['resumen'];
  if(isset($_POST['fecha_ing'])){$fecha_ing = $_POST['fecha_ing'];}else{$fecha_ing = date("Y-m-d");}
  $imagen             = $_POST['imagen'];
  $ficha              = $_POST['ficha'];
  $sector_1           = $_POST['sector_1'];
  $sector_2           = $_POST['sector_2'];
  $sector_3           = $_POST['sector_3'];
  $sector_4           = $_POST['sector_4'];
  $sector_5           = $_POST['sector_5'];
  $sector_6           = $_POST['sector_6'];
  $sector_7           = $_POST['sector_7'];
  $sector_8           = $_POST['sector_8'];
  $sector_9           = $_POST['sector_9'];
  $sector_10          = $_POST['sector_10'];
  $sector_11          = $_POST['sector_11'];
  $sector_12          = $_POST['sector_12'];
  if(isset($_POST['orden'])){$orden = $_POST['orden'];}else{$orden = 0;}
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
  
  //Validar si el registro existe
  $actualizarProductos = "UPDATE productos SET
    cod_producto='$cod_producto', 
    cod_categoria='$cod_categoria', 
    cod_sectores='$cod_sectores', 
    slug='$slug', 
    nom_producto='$nom_producto', 
    descripcion='$descripcion', 
    resumen='$resumen', 
    fecha_ing='$fecha_ing', 
    imagen='$imagen', 
    ficha='$ficha', 
    sector_1='$sector_1', 
    sector_2='$sector_2', 
    sector_3='$sector_3', 
    sector_4='$sector_4', 
    sector_5='$sector_5', 
    sector_6='$sector_6', 
    sector_7='$sector_7', 
    sector_8='$sector_8', 
    sector_9='$sector_9', 
    sector_10='$sector_10',
    sector_11='$sector_11', 
    sector_12='$sector_12', 
    orden='$orden', 
    estado='$estado' 
    WHERE cod_producto='$cod_producto'";
  
  $resultadoActualizar = mysqli_query($enlaces, $actualizarProductos);
  header("Location:productos.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        if(document.fcms.nom_producto.value==""){
          alert("Debe escribir un título");
          document.fcms.nom_producto.focus();
          return; 
        }
        if(document.fcms.imagen.value==""){
          alert("Debe subir una imagen");
          document.fcms.imagen.focus();
          return; 
        }
        document.fcms.action = "productos-edit.php";
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
        <?php $page="productos"; include("module/menu-productos.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Productos Nuevo</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="cod_categoria">Categor&iacute;as:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <select class="form-control" name="cod_categoria" id="cod_categoria">
                    <?php 
                      if($cod_categoria == ""){
                        $consultaCat = "SELECT * FROM productos_categorias WHERE estado='1'";
                        $resultaCat = mysqli_query($enlaces, $consultaCat);
                        while($filaCat = mysqli_fetch_array($resultaCat)){
                          $xcodCat = $filaCat['cod_categoria'];
                          $xnomCat = $filaCat['categoria'];
                          echo '<option value='.$xcodCat.'>'.$xnomCat.'</option>';
                        }
                      }else{
                        $consultaCat = "SELECT * FROM productos_categorias WHERE cod_categoria='$cod_categoria'";
                        $resultaCat = mysqli_query($enlaces, $consultaCat);
                        while($filaCat = mysqli_fetch_array($resultaCat)){
                          $xcodCat = $filaCat['cod_categoria'];
                          $xnomCat = $filaCat['categoria'];
                          echo '<option value='.$xcodCat.' selected="selected">'.$xnomCat.'</option>';
                        }
                        $consultaCat = "SELECT * FROM productos_categorias WHERE cod_categoria!='$cod_categoria'";
                        $resultaCat = mysqli_query($enlaces, $consultaCat);
                        while($filaCat = mysqli_fetch_array($resultaCat)){
                          $xcodCat = $filaCat['cod_categoria'];
                          $xnomCat = $filaCat['categoria'];
                          echo '<option value='.$xcodCat.'>'.$xnomCat.'</option>';
                        }
                      }
                    ?>
                    <option value="0">Sin categor&iacute;a</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="cod_sectores">Sectores:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <div class="col-8 col-lg-10">
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_1" name="sector_1" value="1" <?php if($sector_1=="1"){echo "checked";} ?>> Agroindustria
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_2" name="sector_2" value="1" <?php if($sector_2=="1"){echo "checked";} ?>> Alimentos y Bebidas
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_3" name="sector_3" value="1" <?php if($sector_3=="1"){echo "checked";} ?>> Automotriz
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_4" name="sector_4" value="1" <?php if($sector_4=="1"){echo "checked";} ?>> Hoteles y Restaurantes
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_5" name="sector_5" value="1" <?php if($sector_5=="1"){echo "checked";} ?>> Lavandería
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_6" name="sector_6" value="1" <?php if($sector_6=="1"){echo "checked";} ?>> Metalmecánica
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_7" name="sector_7" value="1" <?php if($sector_7=="1"){echo "checked";} ?>> Pesquero
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_8" name="sector_8" value="1" <?php if($sector_8=="1"){echo "checked";} ?>> Salud
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_9" name="sector_9" value="1" <?php if($sector_9=="1"){echo "checked";} ?>> Minería
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_10" name="sector_10" value="1" <?php if($sector_10=="1"){echo "checked";} ?>> Textiles
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_11" name="sector_11" value="1" <?php if($sector_11=="1"){echo "checked";} ?>> Retail
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="sector_12" name="sector_12" value="1" <?php if($sector_12=="1"){echo "checked";} ?>> Productos Especiales
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="nom_producto">Nombre de producto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" id="nom_producto" name="nom_producto" type="text" value="<?php echo $nom_producto; ?>" required />
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="descripcion" id="descripcion" data-provide="summernote" data-min-height="150"><?php echo $descripcion; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="resumen">Resumen:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="resumen" id="resumen" value="<?php echo $resumen; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label">Fecha de Ingreso:</label>
                </div>
                <div class="col-4 col-lg-2">
                  <input class="form-control" id="fecha_ing" name="fecha_ing" type="date" value="<?php echo $fecha_ing; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="imagen">Imagen:</label><br>
                  <small>(600px x 600px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <input class="form-control" id="imagen" name="imagen" type="text" value="<?php echo $imagen; ?>" required />
                  <div class="invalid-feedback"></div>
                </div>
                <div class="col-4 col-lg-2">
                  <button class="btn btn-bold btn-info" type="button" name="boton2" onClick="javascript:Imagen('IP');" /><i class="fa fa-save"></i> Examinar</button>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="ficha_tecnica">Ficha T&eacute;cnica:</label>
                </div>
                <div class="col-4 col-lg-8">
                  <input class="form-control" id="ficha_tecnica" name="ficha" type="text" value="<?php echo $ficha; ?>" />
                  <div class="invalid-feedback"></div>
                </div>
                <div class="col-4 col-lg-2">
                  <button class="btn btn-bold btn-info" type="button" name="boton3" onClick="javascript:Imagen('FT');" /><i class="fa fa-save"></i> Examinar</button>
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
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                </div>
              </div>
            </div>

            <footer class="card-footer">
              <a href="productos.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i>
 Editar Productos</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_producto" value="<?php echo $cod_producto; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>