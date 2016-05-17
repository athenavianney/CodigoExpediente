<?php
  include "datosConexion.php";
  $id = $_GET['id'];
?>
<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html

	<head>
    <title>EO</title>
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
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
									<h2>Consulta</h2>
								</header>
								<form action="registroEntrada.php" method='post'>
									<div>
										<div class="row">
											<div class="6u$ 12u$(mobile)">
												Fecha de entrada
												<input type="date" name="fecha" placeholder="Fecha" required >
											</div>
											<div class="12u$">
                                                Nota
												<textarea name="nota" placeholder="Introduzca una nueva nota" rows="3"></textarea>
											</div>

                                            <div class="12u$">
                                                Receta
												<textarea name="receta" placeholder="Introduzca una nueva receta" rows="5"></textarea>
											</div>
											<div class="12u$">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
												<input type="submit" name="registro" value="Registrar consulta">
											</div>
										</div>
									</div>
								</form>
							 </article>
                     </div>

				<!-- Footer -->
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
