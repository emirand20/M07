/*<?php
// 1-Conexion con PDO
try {
    //Connexió a la BBDD
    $myCon = new PDO('mysql:host=localhost; dbname=products', 'root', '');
 } catch (PDOException $e) {
    echo "error de connexió: " . $e->getMessage() . "<br/>";
    die();
 }


//Comprobamos de que llegan los datos del POST

if (isset($_POST['add_product'])){
    $nom = $_POST['name'];
    $descripcio = $_POST['description'];
    $preu = $_POST['price'];
    $q = $_POST['quantity'];
    $numID = random_int(0, 1000);
    
    
    //Hacemos consulta de SQL
    $consulta = "INSERT INTO product(NumID, Name, Description, Price, Quantity) VALUES ('[$numID]', '[$nom]', '[$descripcio]', '[$preu]', '[$q]')"; 
    
    //Usamos el queri
    $consulta = $myCon()->query($sql);
    
    header("Location: index.php");
}
?>