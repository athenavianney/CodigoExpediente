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
		  <h3>Programa expediente ortopedico</h3>
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
									<h2 align="center">Consultas paciente</h2>
								</header>
								<?php
                                    $id = $_REQUEST['id'];
                                    $sql = "SELECT idPaciente, id, fecha, nota, receta FROM actualizar_paciente WHERE idPaciente='$id'";
                                    
                                    $result = $conexion->query($sql);

                                    if ($result->num_rows > 0) {    
                                        echo " <table> <tr> <th> FECHA </th> <th> NOTA </th> <th> RECETA </th> </tr>";
                                        while($row = $result->fetch_assoc()) {
                                            $idp = $row["id"];
                                            $idp2 = $row["idPaciente"];
                                            echo "<tr> <td>" . $row["fecha"] ." </td> <td>" . $row["nota"] ." </td> <td>" . $row["receta"] ." </td> <td>" . "<a href='pdf.php?id=" . $idp . "&idp=" . $idp2 . "' class='icon fa-print active'></a> "  . "</td> </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conexion->close(); 
            
                                    ?>
							</article>
                     </div>


				<!-- Footer -->
					<!-- <div id="footer">
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
