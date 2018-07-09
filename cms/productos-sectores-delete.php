<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php 
$cod_sectores = $_REQUEST['cod_sectores'];
$eliminar = "DELETE FROM productos_sectores WHERE cod_sectores='$cod_sectores'";
$resultado = mysqli_query($enlaces, $eliminar);
header("Location:productos-sectores.php");
?>