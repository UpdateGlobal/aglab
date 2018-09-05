<?php include("cms/module/conexion.php"); ?>
<?php
/*--- Enviar datos al email ----*/
$consultarCot = 'SELECT * FROM contacto';
$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
$filaCot = mysqli_fetch_array($resultadoCot);
	$xDesemail = $filaCot['form_mail'];

$toEmail = $xDesemail;
$subject = "Enviado desde Aglab - Contacto";
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

$nombres = isset( $_POST['nombre'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]/", "", $_POST['nombre'] ) : "";
$email = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]/", "", $_POST['email'] ) : "";
$empresa = isset( $_POST['empresa'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]/", "", $_POST['empresa'] ) : "";
$telefono = isset( $_POST['telefono'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]/", "", $_POST['telefono'] ) : "";
$comentarios = isset( $_POST['mensaje'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['mensaje'] ) : "";
$fecha = $_POST['fecha_ingreso'];

$mensaje = "Información del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres : ".filter_var($nombres, FILTER_SANITIZE_STRING)."\n";
$mensaje .= "Email : ".filter_var($email, FILTER_VALIDATE_EMAIL)."\n";
$mensaje .= "Empresa : ".filter_var($empresa, FILTER_SANITIZE_STRING)."\n";
$mensaje .= "Telefono : ".filter_var($telefono, FILTER_SANITIZE_STRING)."\n";
$mensaje .= "Mensaje : ".filter_var($comentarios, FILTER_SANITIZE_STRING)."\n";

/* ---- o ---- */

$contacto = "INSERT INTO formulario(nombre, email, empresa, telefono, mensaje, fecha_ingreso)VALUES('$nombres', '$email', '$empresa', '$telefono', '$comentarios', '$fecha')";
$result=mysqli_query($enlaces, $contacto) or die('Consulta fallida: ' . mysqli_error($enlaces));

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Email Enviado Exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>