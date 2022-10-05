<?php
/*He de comprar el key 'accion' de $arr con el key url de $request_uri pero solo compararlo con "aaa/", si no es igual a hola
me ha de dar error 
*/ 
//esto es lo que queremos
$arr = array(
    "accion" => "hola",
    "nombre" => "luis"
);
//esto es aquello que el usuario quiera poner
$request_uri = array(
    "url" => "aaa/luis"
)
$accion = " "; //no se como marcar todo aquello antes de la barra
if($accion != $arr[accion]){
    echo "ERROR";
}else{
    $nombre = str_replace("/", " ", $request_uri),
    echo $nombre;
}