<?php 
session_start();

$conexion = mysqli_connect("localhost", "u107623996_almar", "Almar123", "u107623996_almar") or
die("Problemas con la conexión");

$email = $_POST["email"];
$contraseña = $_POST["contraseña"];


$buscarusuario = "SELECT * FROM registro_usuario WHERE Email='$email'";
$result = $conexion->query($buscarusuario); 
$row = $result->fetch_array(MYSQLI_ASSOC);


$hash=$row['Password'];
if (password_verify($contraseña, $hash)) {

	$_SESSION['loggedin'] = true;
	$_SESSION['Email'] = $email;
	$_SESSION['Role'] = $row['role'];
	$_SESSION['start'] = time();
	$_SESSION['expire'] = $_SESSION['start']; 
	header('Location: http://almar.site//views/inicio.php');
}else{
	echo "Contraseña o usuario incorrecto";
	echo "<br><a href='Login.php'>Volver a Intentarlo</a>";
}

mysqli_close($conexion); ?>