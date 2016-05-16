<?php
	$bd_nombre = "expediente";
	$bd_serv = "localhost";
	$bd_contra = "";
	$bd_usua = "root";
	session_start();


	 $conexion = mysqli_connect($bd_serv,$bd_usua,$bd_contra) or die("No se pudo autentificar con la Base de Datos. ");
	 mysqli_select_db($conexion,$bd_nombre)  or die ("No se pudo conectar a la Base de Datos. ");

	 if(empty($_SESSION['usuario'])){
	  	header('Location: login.html');
	 }

?>
