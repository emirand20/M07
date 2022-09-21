<!DOCTYPE html>
<html lang="en">

<head>
    <title>Practica 1</title>
</head>

<body>
    <h1>Describim a Jhon Doe</h1>
    <h2>Les dades de Jhon són:</h2>
    <?php
    $nom = 'John Doe';
    $años = 30;
    $date = '1986-03-11';
    $tel = 935555555;
    $ciudad = 'Blackpool';
    $pais = 'England';
    $email = 'oswin@dr.who';
    $trabajo;
    function job($trabajo)
    {
        if ($trabajo != false) {
            echo 'i actualment està treballant';
        } else {
            echo 'i acualment no treballa';
        }
    }
    ?>
    <div id="dades">
        <ul>
            <li>Es diu <?php echo $nom ?></li>
            <li>Té <?php echo $años ?> anys</li>
            <li>Va néixer l'any <?php echo $date ?></li>
            <li>El seu telèfon és: <?php echo $tel ?></li>
            <li>Viu a <?php echo $ciudad ?>, <?php echo $pais ?></li>
            <li>El seu email es <?php echo $email ?></li>
            <li><?php echo job(false) ?></li>
        </ul>
    </div>
</body>

</html>