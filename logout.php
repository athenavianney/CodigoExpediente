<?php   

	include "datosConexion.php";
	
	if(empty($_SESSION['usuario'])){
	  header('Location: login.html');
	}
	
	session_destroy();
    header("Location: login.html");
    exit();
?>