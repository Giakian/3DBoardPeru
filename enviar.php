 <?php

$nombre = $_POST['nombre'];

$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = ''; //here your email. 
$titulo = '3dBoard';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
	if(isset($nombre) && !empty($nombre) && isset($email) && !empty($email) && isset($mensaje) && !empty($mensaje) && isset($titulo) && !empty($titulo)){
		if (mail($para, $titulo, $msjCorreo, $header)) {
			echo "<script language='javascript'>
			alert('Mensaje enviado, muchas gracias.');
			window.location.href = 'index.php';
			</script>";
		} else {
			header('Location: paginaError.php');
		}
	}
	else{
		echo "
		<script language='javascript'>
			alert('Ingrese todos los campos');
			window.location.href = 'contacto.php';
		</script>
		";
	}
	
}

?>

