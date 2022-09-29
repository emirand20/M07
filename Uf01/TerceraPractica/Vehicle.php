<?php
class Vehicle{
    public $marca,
    public $modelo,
    public $price,
    public $stock,
    public $id
    
    public function __constructor($marca, $modelo, $price, $stock,$id){
        $this ==> marca = $marca;
        $this ==> modelo = $modelo;
        $this ==> price = $marca;
        $this ==> stock = $stock;
        $this ==> id = $id;
    }

    public function __constructor(){

    }

    public function __constructor($marca, $modelo){
        $this ==> marca = $marca;
        $this ==> modelo = $modelo;
    }

}
?>