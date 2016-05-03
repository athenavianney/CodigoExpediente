<?php

    include "datosConexion.php";

	if(empty($_SESSION['usuario'])){
	  header('Location: login.html');
	}
    $id = $_GET['id'];
    $fecha = $_POST['fecha'];
    $nota = $_POST['nota'];
    $receta = $_POST['receta'];
    $sql = "INSERT INTO actualizar_paciente (idPaciente, fecha, nota, receta)
    VALUES ('$id', '$fecha', '$nota', '$receta')";
    if($conexion->query($sql)===TRUE){
        echo "Paciente creado".$id;
        echo "<meta http-equiv='refresh' content='3;url= index.php#' />";
    }else{
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    $conexion->close();
?>
