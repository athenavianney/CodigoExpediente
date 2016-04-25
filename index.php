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
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
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
						<a href="#registro" class="icon fa-book"><span>Registros</span></a>
						<a href="#expediente" class="icon fa-folder"><span>Expedientes</span></a>
						<a href="login.html" class="icon fa-sign-out"><span>Salir</span></a>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="me" class="panel">
								<header>
									<h1>Alvarez Camarena Christian</h1>
									<p>Ortopedia Pediátrica</p>
									<p><br>Torre Médica CIMA</p>
								</header>
								<a class="jumplink pic">
									<!--<span class="arrow icon fa-chevron-right"><span>See my work</span></span>-->
									<img src="images/pqq.jpg" alt="" />
								</a>
							</article>

						<!-- exped -->
							<article id="expediente" class="panel">
								<header>
										<form  method="post">
										<div class="row" >

											<div class="6u 12u$(mobile)">
												<input type="text" name="busqueda" placeholder="Búsqueda" />
											</div>

											<div> <h2>Expediente </h2><br>
											<?php
													include "datosConexion.php";

													$sql = "SELECT nombre FROM info_paciente";
													$result = $conexion->query($sql);

													if ($result->num_rows > 0) {
													// output data of each row

														echo " <h6> Nombre</h6>";
													while($row = $result->fetch_assoc()) {
															echo "<br>" . $row["nombre"]. " <a href='http://google.com'> [Ver expediente]</a>";
													}
													} else {
															echo "0 results";
													}
													$conexion->close();
											?>
											</div>
										</div>
								</form>
								</header>
								</p>

							</article>

						<!-- Contact -->
							<article id="registro" class="panel">
								<header>
									<h2>Registro de pacientes</h2>
								</header>
								<form action="registro.php" method="post">
									<div>
										<div class="row">
											<div class="12u$">
												<input type="text" name="nombre" placeholder="Nombre completo" />
											</div>
											<div class="6u 12u$(mobile)">
												<input type="text" name="telefono" placeholder="Teléfono" />
											</div>
											<div class="6u$ 12u$(mobile)">
												Fecha de nacimiento
												<input type="date" name="fecha" placeholder="Fecha" />


											</div>
											<div class="12u$">
												<textarea name="antecedentes" placeholder="Antecedentes" rows="8"></textarea>
											</div>
											<div class="12u$">
												<input type="submit" name="registro" value="Registrar paciente">

											</div>
										</div>
									</div>
								</form>
							</article>

							<!--Usuario-->

							 <!--
							<article id="usuario" class="panel">
								<div class="center">
									<h2>Usuario</h2><br>
									<input type="button" value="Alvarez Camarena Christian" onclick="window.location='index.php'">
									<input type="button" value="Salir" onclick="window.location='login.html'">
								</div>
							</article>
						-->
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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
