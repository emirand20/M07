<?php
$db_host = "localhost";
$db_nombre = "prducts";
$db_usuario = "root";
$db_passwd = "";

$connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
$consulta = "SELECT * FROM PRODUCTS";
$products = mysqli_query($connexio, $consulta); 
