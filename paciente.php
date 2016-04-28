<?php
  include "datosConexion.php";

if(empty($_SESSION['usuario'])){
	  header('Location: login.html');
	}
?>