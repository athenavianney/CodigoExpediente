<?php
  include "datosConexion.php";


    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $path = sprintf("SELECT * FROM login WHERE usuario = '$usuario' AND contrasena = '$contrasena'");
    $query = mysqli_query($conexion, $path);
    $result =  mysqli_num_rows( $query );

    if( $result == 1 ){
        $_SESSION['user'] = $usuario;
        header("Location: index.php#");
        exit();
    }else{
        session_destroy();
        header("Location: login.html");
        exit();
    }
?>
