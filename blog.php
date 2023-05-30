<?php include("php/conexion.php");





if (isset($_GET["id_categoria"])) {
    $id_categoria = $_GET["id_categoria"];
    //si la url lleva la variable id_categoria, mostramos los libros de dicha categoría
    $sql_detalles = $conexion->query("SELECT * FROM articulos WHERE id_categorias=$id_categoria");
} else {
    //si no lleva la variable, mostramos todos los libros
    $sql_detalles = $conexion->query("SELECT * FROM articulos");

}





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blog.css">
    <title>Peliculas</title>
</head>

<body>



    <?php include("php/menu.php");
    ?>

    <div id="contenedor">
        <div class="izquierda">
            <?php
            while ($fila = $sql_detalles->fetch_array()) {
                $id_articulos = $fila[0];
                $titulo = $fila[1];
                $imagen = $fila[6];
                $descripcion = $fila[2];
                $fecha = $fila[3];
                $visitas = $fila[4];
                $cometarios = $fila[5];
                $etiquetas = $fila[5];

                ?>

                <div class="noticias">
                    <div class="imagen">
                        <img src="img/detalles/<?php echo $imagen; ?>" width="200px" height="200px" />

                    </div>

                    <div class="titulo">
                        <h2>
                            <?php echo $titulo; ?>
                        </h2>

                    </div>
                    <div class="descripcion">
                        <p>
                            <?php echo $descripcion; ?>
                        </p>

                    </div>
                    <div class="fecha">
                        <p>
                            <?php echo $fecha; ?>
                        </p>
                    </div>
                    <div class="visitas">
                        <p>
                            <?php echo $visitas; ?>
                        </p>
                    </div>
                    <div class="comentario">
                        <p>
                            <?php echo $comentarios; ?>
                        </p>
                    </div>
                    <div class="etiquetas">
                        <p>
                            <?php echo $etiquetas; ?>
                        </p>

                    </div>


                </div>

                <?php
            }
            ?>
        </div>
        <div class="derecha">
            <div id="categoria">
                <h3>CATEGORIAS</h3>
            </div>

            <div id="popular">
                <h3>POPULAR POST</h3>
                <div class="uno"></div>
                <div class="dos"></div>
                <div class="tres"></div>
                <div class="cuatro"></div>
            </div>
            <div id="more">
                <h3>MORE INFO</h3>
            </div>
            <div id="video">
                <h3>VIDEO</h3>
                <iframe width="400" height="200" src="https://www.youtube.com/embed/c3LjbJ4Pzbc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <p class="limpiar"></p>
        <?php include("php/pie.php");
        ?>


</body>

</html>