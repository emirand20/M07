<?php
class Compte {

    private $name;
    private $money;
    private $account;
    private $cartera;

    public function __construct($name, $money)
    {
        $this->name = $name;
        $this->money = $money;
    }
    public function __construct1()
    {
    }
  
    public function getname()
    {
        return $this->name;
    }

   
    public function setname($name)
    {
        $this->name = $name;
    }

  
    public function getmoney()
    {
        return $this->money;
    }

    public function setmoney($money)
    {
        $this->money = $money;
    }
    
    function addmoney($x)
    {
        $suma = $this->getmoney() + $x;
        $this->setmoney($suma);
        return $suma;
    }

    function takemoney($y) {
        $resta = $this->getmoney() - $y;
        $this->setmoney($resta);
        return $resta;
    }
}

$account = new Compte("Rufo", 6367);
echo "Mi cuenta bancaria ahora es ". $account->addmoney(94). "<br>";

echo "Mi cuenta bancaria a disminuido a ". $account->takemoney(900);
