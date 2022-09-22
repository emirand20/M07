<!DOCTYPE html>
<html>
    <header>
        <title>Practica 2</title>
        <meta charset="utf-8">
    </header>
    <body>
    <?php
    $min =0;
    $max =5;
    $mesas = [];
    for ($n=0; $n> 9; $n++)
        $random = rand(0, 5);
        $mesas[$n] = $n;
        echo "<p>en la mesa ".$n;
        if($random == 5){
            echo "está llena</p>";
        }elseif($random == 0){
            echo "está vacia</p>";
        }else{
            echo"hay ". $random." comensales";
        }
        "
        <form>
              <p>A la taula <?php echo $mesas[$n]?> hi ha 2 comensals</p>
            <p> A la taula <?php echo $n+1?> hi ha 3 comensals</p>
            <p>A la taula <?php echo $n+2?> hi ha 1 comensals</p>
            <p>A la taula <?php echo $n?> hi ha 3 comensals</p>
            <p>La taula <?php echo $n?> està buida</p>
            <p>A la taula <?php echo $n?> hi ha 2 comensals</p>
            <p>La taula <?php echo $n?> està plena</p>
            <p>La taula <?php echo $n?> està plena</p>
            <p>La taula <?php echo $n?> està plena</p>
            <p>La taula <?php echo $n?> està plena</p>
    </form>
    </body>
</html>
"
    ?>