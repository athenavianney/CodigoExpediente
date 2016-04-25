<?php
    include "datosConexion.php";

    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $antecedentes = $_POST['antecedentes'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO info_paciente (nombre, fecha, telefono, antecedentes)
    VALUES ('$nombre', '$fecha', '$telefono', '$antecedentes')";
    if($conexion->query($sql)===TRUE){
        echo "Paciente creado";
        echo "<meta http-equiv='refresh' content='3;url= index.php#' />";
    }else{
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    $conexion->close();
?>
