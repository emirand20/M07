<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $habtitacion = array();
    for ($x =0; $x <=5; $x++){

        for ($y =1; $y <=10; $y++){
            $personas = rand(0,4);
            if($personas == 4)
                $habtitacion[$x] = "A l'habitación ".$y." de la planta ".$x." esta plena";
            else 
                if($personas == 0)
                $habtitacion[$x] = "A l'habitación ".$y." de la planta ".$x." esta buida";

                else 
                    $habtitacion[$x] = "A l'habitación ".$y." de la planta ".$x." hi ha ".$personas." persones";
        echo $habtitacion[$x];
        echo "<br>"; 
        }
    }
    ?>
</body>
</html>