<?php
  include "datosConexion.php";
?>

<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Astral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

	<div>
		<h3>Programa expediente ortopedico</h3>
	</div>
	<body>
		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#me" class="icon fa-home active"><span>Home</span></a>
						<a href="#registro" class="icon fa-pencil-square-o"><span>Registros</span></a>
						<a href="#expediente" class="icon fa-folder"><span>Expedientes</span></a>
						<a href="logout.php" class="icon fa-sign-out"><span>Salir</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						<!-- Pagina Principal -->
							<article id="me" class="panel">
								<header>
									<h1>Alvarez Camarena Christian</h1>
									<p>Ortopedia Pediátrica</p>
									<p><br>Torre Médica CIMA</p>
								</header>
								<a class="jumplink pic">
									<img src="images/pqq.jpg" alt="" />
								</a>
							</article>
                            
                            <!-- Registro -->
							<article id="registro" class="panel">
								<header>
									<h2>Registro de pacientes</h2>
								</header>
								<form action="registro.php" method="post">
									<div>
										<div class="row">
											<div class="12u$">
												<input type="text" name="nombre" placeholder="Nombre completo" required>
											</div>
											<div class="6u 12u$(mobile)">
												<input type="text"  name="telefono" placeholder="Teléfono"  required>
											</div>
											<div class="6u$ 12u$(mobile)">
												Fecha de nacimiento
												<input type="date" name="fecha" placeholder="Fecha" required>
											</div>
											<div class="12u$">
												<textarea name="antecedentes" placeholder="Antecedentes" rows="8" required></textarea>
											</div>
											<div class="12u$">
												<input type="submit" name="registro" value="Registrar paciente">
											</div>
										</div>
									</div>
								</form>
							</article>

						<!-- Expediente -->
							<article id="expediente" class="panel">
								<header>
									<form  method="post">
                                    <!--<div class="row" > -->
                                        <div class="6u 12u$(mobile)">
                                            <input type="text" name="busqueda" placeholder="Búsqueda" />
                                        </div> 
                                        <div class="table" >
                                            <?php
                                                $sql = "SELECT nombre, id FROM info_paciente";
                                                $result = $conexion->query($sql);

                                                if ($result->num_rows > 0) {    
                                                    echo " <table> <tr> <th> Nombre </th> </tr>";
                                                    while($row = $result->fetch_assoc()) {
                                                        $idp = $row["id"];
                                                        echo "<tr> <td>" . $row["nombre"] ." </td> <td>". "<a href='paciente.php?id=".$idp." ' class='icon fa-eye active'></a> " ." </td> <td>". "<a href='paciente.php?id=".$idp." ' class='icon fa-pencil-square active'></a> " . "</td> </tr>";
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                $conexion->close();
                                        ?>
                                        </div>
                                    </form>
                                </header>
                            </p>
                        </article>						
					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
			    </div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
