<?php
$db_host = "localhost";
$db_nombre = "products";
$db_usuario = "root";
$db_passwd = "";

$connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

$consulta = "SELECT * FROM PRODUCT";

$products = mysqli_query($connexio, $consulta);

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>PHP + MySQL</title>
    <style>
        body {
            padding: 50px;
        }
    </style>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">price</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $i => $product) {
        $bEdit = "botonEdit$i";
        $bDele = "botonDelete$i";
        ?>
        <tr>
            <th scope="row"><?php echo $i +1 ?></th>
            <td><?php echo $product['Name'] ?></td>
            <td><?php echo $product['Description'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td><form method="get"><input type="submit" name=<?php echo $bEdit ?> class="btn btn-outline-primary" value="Edit"></input></form></td>
            <td><form method="get"><input type="submit" name=<?php echo $bDele ?> class="btn btn-outline-danger" value="Delete"></input></form></td>
        </tr>
    <?php }?>

    <tr><form method="post">
            <td></td>
            <td><input type="text" class="Edit" name="Name"></input></td>
            <td><input type="text" class="Edit" name="Description"></input></td>
            <td><input type="text" class="Edit" name="price"></input></td>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></input></td>

        </form></tr>

    </tbody>
</table>
<?php
if(isset($_POST["submit"])) {
    $nom = $_POST["Name"];
    $des = $_POST["Description"];
    $price = $_POST["price"];
    $mensaje="UPDATE products SET Name='$nom', Description='$des',price='$price';";

    mysqli_query($connexio, $mensaje);
}
?>
</body>
</html>