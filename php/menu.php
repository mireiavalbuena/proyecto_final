<?php include("conexion.php");



$sql_categorias = $conexion->query("SELECT * FROM categorias");



?>






<div class="contenedor-menu">
    <div class="logo">
        <img src="img/logo-trabajo.png" height="55px" />
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php">INICIO</a></li>
            <li><a href="blog.php">ENTRETENIMIENTO</a>
                <ul>
                    <?php
                    while ($fila = $sql_categorias->fetch_array()) {

                        $id = $fila[0];
                        $categorias = $fila[1];

                        ?>
                        <li><a href="blog.php?id_categoria=<?php echo $id; ?>"><?php echo $categorias; ?></a></li>
                        <?php
                    }
                    ?>

                </ul>
            </li>
            <li><a href="contacto.php">CONTACTO</a></li>

        </ul>
    </div>
    <p class="limpiar"></p>