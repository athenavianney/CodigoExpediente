<?php

    include "datosConexion.php";

	if(empty($_SESSION['usuario'])){
	  header('Location: login.html');
	}
    $id = $_REQUEST['id'];
    $fecha = $_POST['fecha'];
    $nota = $_POST['nota'];
    $receta = $_POST['receta'];
    $sql = "INSERT INTO actualizar_paciente (idPaciente, fecha, nota, receta)
    VALUES ('$id', '$fecha', '$nota', '$receta')";
    if($conexion->query($sql)===TRUE){
                ?>
        <!DOCTYPE HTML>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--<link rel="stylesheet" href="assets/css/spinner.css">-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

	<body>
             <div class="sk-folding-cube">
				<div class="sk-cube1 sk-cube"></div>
				<div class="sk-cube2 sk-cube"></div>
				<div class="sk-cube4 sk-cube"></div>
				<div class="sk-cube3 sk-cube"></div>
			</div>

			<p align="center"><font color="white">Guardando consulta...</font></p>
				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
			</div>


	</body>
        </html>

        <?php
        echo "<meta http-equiv='refresh' content='3;url= index.php#' />";
    }else{
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    $conexion->close();
?>
