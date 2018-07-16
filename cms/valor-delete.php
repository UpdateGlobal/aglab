<?php include "module/conexion.php"; ?>
<?php include "module/verificar.php"; ?>
<?php 
$cod_valor = $_REQUEST['cod_valor'];
$eliminar = "DELETE FROM valores WHERE cod_valor='$cod_valor'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:nosotros.php");
?>