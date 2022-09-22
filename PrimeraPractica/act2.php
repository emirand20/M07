<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Gestió Hotelera</title>
</head>

<body>
    <?php
    $personas = array();
    for ($x = 1; $x < 10; $x) {
        array_push ($personas, rand(1, 9));
    }

    $planta = array(
        array(0, 0, $personas => 0, 1, $personas => 0, 2, $personas => 0, 3, $personas => 0, 4, $personas => 0, 5, $personas => 0, 6, $personas => 0, 7, $personas => 0, 8, $personas => 0, 9, $personas),
        array(1, 0, $personas => 1, 1, $personas => 1, 2, $personas => 1, 3, $personas => 1, 4, $personas => 1, 5, $personas => 1, 6, $personas => 1, 7, $personas => 1, 8, $personas => 1, 9, $personas),
        array(2, 0, $personas => 2, 1, $personas => 2, 2, $personas => 2, 3, $personas => 2, 4, $personas => 2, 5, $personas => 2, 6, $personas => 2, 7, $personas => 2, 8, $personas => 2, 9, $personas),
        array(3, 0, $personas => 3, 1, $personas => 3, 2, $personas => 3, 3, $personas => 3, 4, $personas => 3, 5, $personas => 3, 6, $personas => 3, 7, $personas => 3, 8, $personas => 3, 9, $personas),
        array(4, 0, $personas => 4, 1, $personas => 4, 2, $personas => 4, 3, $personas => 4, 4, $personas => 4, 5, $personas => 4, 6, $personas => 4, 7, $personas => 4, 8, $personas => 4, 9, $personas)
    );
    for ($i = 1; $i <= 10; $i++) {
        echo "A l'habitació " . $planta[0][0] . " de la planta " . $planta[0][1] . " hi ha " . $personas. " persones " . ".<br>";



        /*echo $planta[1][0] . ": In stock: " . $planta[1][1] . ", sold: " . $planta[1][2] . $planta[1][3] . $planta[1][4] . ".<br>";
        echo $planta[2][0] . ": In stock: " . $planta[2][1] . ", sold: " . $planta[2][2] . $planta[2][3] . $planta[2][4] . ".<br>";
        echo $planta[3][0] . ": In stock: " . $planta[3][1] . ", sold: " . $planta[3][2] . $planta[3][3] . $planta[3][4] . ".<br>";
        echo $planta[4][0] . ": In stock: " . $planta[4][1] . ", sold: " . $planta[4][2] . $planta[4][3] . $planta[4][4] . ".<br>";*/
    }

    ?>

</body>

</html>