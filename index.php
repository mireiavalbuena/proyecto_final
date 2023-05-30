<?php include("php/conexion.php");
$sql_detalles = $conexion->query("SELECT * FROM detalles");

?>







<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Proyecto 1DAW - SOLVAM</title>

	<!-- CSS ================================================== -->
	<link rel="stylesheet" href="css/reset.css">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- JS ================================================== -->

</head>

<body>

	<div class="contenedor">
		<?php include("php/menu.php");
		?>

		<div id="contenedor-galeria">
			<div id="galeria">
				<div><img src="https://picsum.photos/765/350/?random=1" /></div>
				<div><img src="https://picsum.photos/765/350/?random=2" /></div>
				<div><img src="https://picsum.photos/765/350/?random=3" /></div>
				<div><img src="https://picsum.photos/765/350/?random=4" /></div>
			</div>
		</div>

		<div class="noticiades">

		</div>
		<p class="limpiar"></p>
		<div id="contenido">
			<?php
			while ($fila = $sql_detalles->fetch_array()) {
				$imagen = $fila[3];
				$id = $fila[5];
				$titulo = $fila[4];
				?>

				<div class="noticias">
					<div class="imagen">
						<img src="img/detalles/<?php echo $imagen; ?>" width="250px" height="200px" />

					</div>

					<div class="titulo">
						<a href="detalles.php?id=<?php echo $id; ?>">
							<p>
								<?php echo $titulo; ?>
							</p>
						</a>
					</div>

				</div>
				<?php
			}
			?>



		</div>
		<?php include("php/pie.php")
			?>
	</div>

</body>

</html>