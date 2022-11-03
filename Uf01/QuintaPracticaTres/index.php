<?php
try {
    //Connexió a la BBDD
    $myCon = new PDO('mysql:host=localhost; dbname=products', 'root', '');
    //Creem la consulta sql
    $sql ="SELECT * FROM product";
 
 } catch (PDOException $e) {
    echo "error de connexió: " . $e->getMessage() . "<br/>";
    die();
 }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
   
    <title>PHP + MySQL(PDO)</title>
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
      <th scope="col">NumID</th>
      <th scope="col">q_sold</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach ($myCon->query($sql) as $i => $product){ 
        $bEdit="botonEdit$i";
        $bDele="botonDelete$i";
        ?>
        <tr>
            <th scope="row"><?php echo $i +1 ?></th> <!-- augmentem el index i -->
            <td><?php echo $product['Name'] ?></td> <!--Accedim a Name-->
            <td><?php echo $product['Description'] ?></td> <!--Accedim a Description-->
            <td><?php echo $product['price'] ?></td> <!--Accedim a Price -->
            <td><?php echo $product["NumID"] ?></td>
            <td><?php echo $product["q_sold"] ?></td>
            <td><form method="get"><input type="submit" name=<?php echo $bEdit ?> class="btn btn-outline-primary" value="Edit"></input></form></td>
            <td><form method="get"><input type="submit" name=<?php echo $bDele ?> class="btn btn-outline-danger" value="Delete"></input></form></td>
        </tr>
        
      <?php if(isset($_GET[$bDele])){
                $id=$product['NumID'];
                $mensaje="DELETE FROM products WHERE NumID='$id'";
                mysqli_query($connexio,$mensaje);
                header("Location: eliminar.php");
            }
            if(isset($_GET[$bEdit])){
                $idEd=$product['NumID'];
                echo $idEd;
            }
      }
      ?>
        <tr><form method="post">
            <td></td>
            <td><input type="text" class="Edit" name="Name"></input></td>
            <td><input type="text" class="Edit" name="Description"></input></td>
            <td><input type="text" class="Edit" name="price"></input></td>
            <td><input type="text" class="Edit" name="q_sold"></input></td>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></input></td>
            
    </form></tr>
        <?php+++
        if(isset($_POST["submit"])){
            $nom=$_POST["Name"];
            $des=$_POST["Description"];
            $price=$_POST["price"];
            $quan=$_POST["q_sold"];
            $mensaje="UPDATE products SET Name='$nom', Description='$des',price='$price', q_sold='$quan' WHERE NumID='$idEd';";
            mysqli_query($connexio,$mensaje);
            header("Location: editar.php");
       }
        ?>
    </tbody>
   </table> 
  </body>
</html>
