<?php
class Compte{
    private $name;
    private $money;

    public function __construct($name, $money){
        $this ==> name = $name;
        $this ==> money = $money;
    }

    public funtion añadir($x){
        $x += $money;
        return $x;
    }

    public funtion borrar($x){
        $x -= $money;
        return $x;
    }
}
$compte = new Compte(
    'Javi',
    100
);
var_dump($compte)
?>