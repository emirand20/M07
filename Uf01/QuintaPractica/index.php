<?php
include("db_connection_pdo.php");//Cridem a la nostra connexió PDO amb la BBDD
//Fem la QUERY per obtindre tota la info de la taula
include_once 'QuintaPractica/db.php';
include_once 'QuintaPracica/test.php';
$connect_PDO = new PDO (“mysql:host=localhost; dbname=products”, “root”, “”);
$consulta = "SELECT * FROM PRODUCT";
//Guardarem tota la info de la bbdd a la variable products
$products = mysqli_query($connexio, $consulta);
$connect -> set_charset(“utf8”);
$inst_sql = “SELECT * FROM products”;
$result = $connect->query($inst_sql);
if($products->products_errno){
    echo "Connection faild " . $products->products_errno; 
}
while ($fila = $result->fetch_assoc){

	echo “<table><tr><td>”;
	
	echo $fila[‘Huawei p40’] . “</td><td>”;
	
	echo $fila[‘OPPO’] . “</td><td>”;
	
	echo $fila[‘iPhone 11’] . “</td><td></tr></table>”;
	
	echo “<br>”;
	
}
$buscar = $_GET[‘search’];
$result->execute(array($buscar));
try {

	$connect_PDO = new PDO (“mysql:host=localhost; dbname=products”, “root”, “”);
	
	//Capturem errors de l’objecte Exception per a mostrar en el catch
	
	$connect_PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	echo “Connexió correcte!”;
	
	}catch (Exception $e) {
	
	die(“Error: “ . $e->GetMessage();
	
	}finally{
	
	//buidem la memoria
	
	$connect_PDO=null;
	
	}

$connect->close();
?>
<table class="table">
    <thead>
    	<tr>
          <th scope="col">#</th>
          <th scope="col">NumID</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $i => $product){ ?>
        <tr>
            <th scope="row"><?php echo $i +1 ?></th> <!-- augmentem el index i -->
            <td><?php echo $product['NumID'] ?></td> <!--Accedim a NumID -->
            <td><?php echo $product['Name'] ?></td> <!--Accedim a Name-->
            <td><?php echo $product['Description'] ?></td> <!--Accedim a Description-->
            <td><?php echo $product['Price'] ?></td> <!--Accedim a Price -->
            <td><?php echo $product['Quantity'] ?></td> <!--Accedim a Quantity -->
            <td><a href="edit.php?id=<?php echo $product['NumID']?>"><button type="button" class="btn btn-outline-primary">Edit</button></a></td>
            <td><a href="delete.php?id=<?php echo $product['NumID']?>"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
        </tr>
     <?php } ?>
    </tbody>
</table>

<!-- SECCIÓ PER AFEGIR PRODUCTES --> 
	<div class="container p-4">
		<div class="row">
			<div class="col-md-4">
				<div class="card card-body">
				<!-- A través del mètode POST li enviem les dades del formulari a l'arxiu add_product.php -->
					<form action="add_product.php" method="POST"> 
						<div class=form-group>
							<input type="text" name="name" class="form-control" placeholder="Name" autofocus>
						</div>
						<div class=form-group>
							<textarea name="description" rows="3" class="form-control" placeholder="Description"></textarea>
						</div>
						<div class=form-group>
							<input type="text" name="price" class="form-control" placeholder="price">
						</div>
						<div class=form-group>
							<input type="text" name="quantity" class="form-control" placeholder="Quantity">
						</div>
						<input type="submit" class="btn btn-success btn-block" name="add_product" value="+ Producte">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>