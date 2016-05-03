<?php

    include "datosConexion.php";

	if(empty($_SESSION['usuario'])){
	  header('Location: login.html');
	}

    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $antecedentes = $_POST['antecedentes'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO info_paciente (nombre, fecha, telefono, antecedentes)
    VALUES ('$nombre', '$fecha', '$telefono', '$antecedentes')";
    if($conexion->query($sql)===TRUE){
        header('Location: spinner.html');
    }else{
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    $conexion->close();
?>
