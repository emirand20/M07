<?php
class Vehicle{
    public $marca,
    public $modelo,
    public $price,
    public $stock,
    public $id
    
    public function __construct($marca, $modelo, $price, $stock,$id){
        $this ==> marca = $marca;
        $this ==> modelo = $modelo;
        $this ==> price = $marca;
        $this ==> stock = $stock;
        $this ==> id = $id;
    }

    public function __construct(){

    }

    public function __construct($marca, $modelo){
        $this ==> marca = $marca;
        $this ==> modelo = $modelo;
    }

}
?>