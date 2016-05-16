<?php
  include "datosConexion.php";
?>

<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <div>
		  <h3>Programa Expediente Ortopédico</h3>
	    </div>
	</head>

	<body>

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
        <nav id="nav">
		    <a href="index.php#expediente" class="icon fa-arrow-left active"><span>Atrás</span></a>
				</nav>

        <div id="main">
						<!-- Pagina Principal -->

							<article id="registro" class="panel">
							<header>
									<h2 align="center">Información de paciente</h2>
								</header>
                		<form method='post'>
                <div>
                  <div class="row">
								<?php
                                        $id = $_GET['id'];

                                        if(! $conexion ) {
                                        die('no se pudo conectar a la base de datos');
                                    }

                                    $path = "SELECT * FROM info_paciente WHERE id='$id'";
                                    if($result=$conexion->query($path) ){

                                        echo "<table> <tr> <th> NOMBRE </th> <th> FECHA DE NACIMIENTO </th> <th> TELÉFONO </th> <th> ANTECEDENTES </th></tr> ";

                                        if($row=$result->fetch_assoc()){
                                            echo "<tr> <td>" . $row['nombre'] . "</td>";
                                            echo "<td>" . $row['fecha'] . "</td>";
                                            echo "<td>" . $row['telefono'] . "</td> ";
                                            echo "<td>" . $row['antecedentes'] . "</td></tr>";
                                        }
                                        mysqli_free_result($result);

                                        }                                    ?>

                          </div>
                          </div>
                        </form>
                        </article>
                     </div>

				<!-- Footer
					<div id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>-->
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
