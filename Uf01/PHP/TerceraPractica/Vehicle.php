<?php
/*Esto es una modif
*/
/*Esto es la segunda modif
*/
class Vehicle{
    private $marca;
    private $modelo;
    private $price;
    private $caballos;
    private $km;

    public function __construct($marca, $modelo, $price, $caballos, $km)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->price = $price;
        $this->caballos = $caballos;
        $this->km = $km;
    }

    public function __construct1()
    {
    }

    public function __construct2($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getCaballos()
    {
        return $this->caballos;
    }

    public function setCaballos($caballos)
    {
        $this->caballos = $caballos;
    }

    public function getKm()
    {
        return $this->km;
    }

    public function setKm($km)
    {
        $this->km = $km;
    }

    public function __toString()
    {
        return self::class . ": " . $this->marca . " " . $this->modelo . " " . $this->price . " " . $this->caballos . " " . $this->km;
    }
    function kmRecorregut(){
        $km = random(0, 100);
        return $km;
    }
    function vehicleCreat(){
        return $this->getModelo() . $this->getCaballos();
    }
}
?>