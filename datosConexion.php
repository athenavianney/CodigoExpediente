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
	 }else{
		 $_SESSION["ultimoAcceso"]=date("Y-n-j H:i:s");
		 $fechaGuardada = $_SESSION["ultimoAcceso"];
		 $ahora = date("Y-n-j H:i:s");
		 //calculo del tiempo transcurrido
		 $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
		 
		 //comparacion del tiempo transcurrido
		 if($tiempo_transcurrido >=60){ //si paso 1 minuto o mas 
		 	session_destroy();
			header('Location: login.html');
		 }else{
			 $_SESSION["ultimoAcceso"] =$ahora; 
		 }
	 }

?>
