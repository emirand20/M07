<?php

class Test extends Db {
public function getProducts(){
$sql = "SELECT * FROM product";
$consulta = $this->connect()->query($sql);
while($row = $consulta->fetch()){
echo $row['Name'] . '<br>';
}

}

public function getProductsPrepareStmt($nameProduct, $descProduct){
$sql = "SELECT * FROM product WHERE Name = ? AND Description = ?";
$consulta = $this->connect()->prepare($sql);
$consulta->execute([$nameProduct, $descProduct]);
$products = $consulta->fetchAll();
foreach ($products as $product){
echo $product['Name'] . '<br>'
}
}

public function setProductsPrepareStmt($nameProduct, $descProduct, $priceProduct){
sql = "INSERT INTO product(Name, Description, price)
VALUES (?, ?, ?)";
$consulta = $this->connect()->prepare($sql);
$consulta->execute([$nameProduct, $descProduct, $priceProduct]);
}
}

?>