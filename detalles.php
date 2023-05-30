<?php include("php/conexion.php");
$id_detalle = $_GET['id'];
$sql_detalles = $conexion->query("SELECT * FROM detalles WHERE id=$id_detalle");

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalles.css">

    <title>Detalles</title>
</head>

<body>



    <div class="contenedor-menu">
        <?php include("php/menu.php");
        ?>
    </div>

    <div id="contenedor">
        <?php
        while ($fila = $sql_detalles->fetch_array()) {
            $imagen = $fila[3];
            $id = $fila[5];
            $titulo = $fila[4];
            $año = $fila[0];
            $lugar = $fila[1];
            $actores = $fila[2];
            ?>
            <div class="imagen">
                <img src="img/detalles/<?php echo $imagen; ?>" width="400px" height="700px" />
            </div>

            <div class="titulo">
                <h2>
                    <?php echo $titulo; ?>
                </h2>
            </div>
            <div class="noticia">
                <h2>AÑO</h2>
                <br>
                <p>
                    <?php echo $año; ?>
                </p>
                <br><br>
                <h2>LUGAR</h2>
                <br>
                <p>
                    <?php echo $lugar; ?>
                </p>
                <br><br>
                <h2>ACTORES</h2>
                <br>
                <p>
                    <?php echo $actores; ?>
                </p>
            </div>
            <div class="enlace">
                <a href="index.php">VOLVER</a>
            </div>
        </div>
        <?php
        }
        ?>


    <p class="limpiar"></p>



    <?php include("php/pie.php")
        ?>


</body>

</html>