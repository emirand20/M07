<?php
// 1-Conexion con PDO
try {
    //Connexió a la BBDD
    $myCon = new PDO('mysql:host=localhost; dbname=products', 'root', '');
    // 2 - SQL INSERT
    //$sql = 'INSERT INTO products ( Name, Description, price, NumId, q_sold) VALUES ( ?, ?, ?, ?,? )';
 
 } catch (PDOException $e) {
    echo "error de connexió: " . $e->getMessage() . "<br/>";
    die();
 }

$productSaved = FALSE;

// Comprueba si llegan los datos por post
if (isset($_POST['add_product'])){
    $nom = $_POST['name'];
    $descripcio = $_POST['description'];
    $preu = $_POST['price'];
    $qsold = $_POST['qsold'];
    $numID = random_int(0, 1000);

    //Validate posted values.
    if (empty($nom)) {
        $errors[] = 'Please provide a product name.';
    }

    if (empty($descripcio)) {
        $errors[] = 'Please provide a description.';
    }

    if (empty($preu)) {
        $errors[] = 'Please provide a description.';
    }

    if ($qsold == 0) {
        $errors[] = 'Please provide the q_spld.';
    }

    if ($numID == 0) {
        $errors[] = 'Please provide the NumId.';
    }

    if (!isset($errors)) {

        $sql = 'INSERT INTO products ( Name, Description, price, NumId, q_sold) VALUES ( ?, ?, ?, ?,? )';

        $statement = $connexion->prepare($sql);


        $statement->bind_param('sis', $nom, $descripcio,$preu, $qsold, $numID);


        $statement->execute();


        $lastInsertId = $connexion->insert_id;


        $statement->close();

        $productSaved = TRUE;

    }
}
?>