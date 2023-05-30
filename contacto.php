<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contacto.css">
    <title>Contacto</title>
</head>

<body>


    <?php include("php/menu.php");
    ?>











    <div id="contenedor">
        <div class="primera">
            <br>

            <h1>CONTACTA CON NOSOTROS...</h1>

            <br>
            <br>

            <p>Nos encantaría saber de ti. Si tienes alguna pregunta, comentario o sugerencia, por favor no dudes en
                ponerte en contacto,
                con nosotros. Puedes enviarnos un correo electrónico, en el formulario de aquí debajo. ¡Estamos
                ansiosos
                por escuchar
                lo que tengas que decir y esperamos poder ayudarte en todo lo que podamos!
            </p>
            <br><br><br><br><br>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


                <img src="../img/user-avatar.jpg" height="30px" /> <input type="text" name="nombre" value="nombre"
                    height="30px">
                <br> <br> <br>

                Email <input type="text" name="email" value="email">
                <br> <br> <br>
                Website <input type="text" name="web" value="web">
                <br>

            </form>
        </div>

        <div class="segunda">
            <br>
            <h2>DATOS DE CONTACTO</h2>
            <br>
            <p>SOLVAM</p>
            <p>Cervantes,3</p>
            <p>Quart de Poblet - 46930</p>
            <p>P: Tel: 5467461546</p>
            <br><br>
            <p>Mireia Valbuena</p>
            <p class="email">mireiavalbuena@gmail.com</p>

        </div>
        <p class="limpiar"></p>
        <div class="tercera">
            <br>
            <h2>DONDE ESTAMOS</h2>
            <br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.403261939826!2d-0.44297532403491685!3d39.482807871605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604ff779223b39%3A0xc60596edf6e35ebd!2sCentro%20de%20FP%20SOLVAM!5e0!3m2!1ses!2ses!4v1683891411862!5m2!1ses!2ses"
                width="430" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>





    <?php include("php/pie.php")
        ?>







</body>

</html>