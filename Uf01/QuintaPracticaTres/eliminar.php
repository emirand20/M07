<?php?>
<html>
    <head>
        <title>Pagina de eliminación</title>
    </head>
    <body>
        <h1>La fila ha sido eliminada con éxito</h1>
        <form method="get"><input type="submit" name="botonretorno" class="btn btn-outline-primary">Volver</input></form>
        <?php if(isset($_GET["botonretorno"])){
                header("Location: index.php");
            }
      ?>
    </body>
</html>