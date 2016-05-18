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
		<title>EO</title>
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

	<div>
		<h3>Programa Expediente Ortopédico</h3>
	</div>
	<body>
		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#me" class="icon fa-home active"><span>Inicio</span></a>
						<a href="#registro" class="icon fa-pencil-square-o"><span>Registrar</span></a>
						<a href="#expediente" class="icon fa-folder"><span>Expedientes</span></a>
						<a href="logout.php" class="icon fa-sign-out"><span>Salir</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						<!-- Pagina Principal -->
							<article id="me" class="panel">
								<header>
									<h1>DR. Christian Alvarez</h1>
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
								<form action="registroPaciente.php" method="post">
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
												<textarea name="antecedentes" placeholder="Antecedentes" rows="5" required></textarea>
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
									<h2>Expedientes</h2>
									<form  method="post">
                                    <!--<div class="row" > -->
                                        <div class="table" >
                                        <div class="6u 12u$(mobile)">
						<input type="text" name="busqueda" placeholder="Búsqueda" />
					</div>
                                        <?php
                                            $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
                                            if($busqueda==NULL){
                                                $sql = "SELECT nombre, id FROM info_paciente";
                                            }else{
                                                $sql = "SELECT nombre, id FROM info_paciente WHERE (nombre LIKE '%".$busqueda."%')";
                                            }
                                            $result = $conexion->query($sql);
                                            if ($result->num_rows > 0) {
                                                echo " <table> <tr> <th> Paciente </th> </tr>";
                                                while($row = $result->fetch_assoc()) {
                                                    $idp = $row["id"];
                                                    echo "<tr> <td>" . $row["nombre"] ." </td> <td>". "<a href='verPaciente.php?id="
                                                    .$idp." ' class='icon fa-eye active' title='Perfil' ></a> " ." </td> <td>". "<a 
                                                    href='nuevaEntrada.php?id=".$idp." ' class='icon fa-pencil-square active' title=
                                                    'Nueva Consulta'></a> " . "</td> <td>"."<a href='verCitas.php? id=".$idp." ' class=
                                                    'icon fa-folder-open-o active' title='Consultas'> </a> " . "</td> </tr>";
                                                }
                                            } else {
                                                echo "No existe paciente con los datos dados.";
                                            }
                                            $conexion->close();
                                        ?>
                                        </div>
                                    </form>
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
