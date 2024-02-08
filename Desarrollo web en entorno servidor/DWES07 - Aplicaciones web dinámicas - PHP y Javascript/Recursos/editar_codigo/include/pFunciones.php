<?php

require "include/producto.php"; 
$Producto=new Producto();

function buscarProducto($id) {
    $respuesta1 = new xajaxResponse();
    $producto=new Producto();
    $datos = $producto->getProducto($id);
	// en el método de la clase, devuelvo el objeto completo si existe y "" si no existe
    if ($datos != "") {
        $nombre = $datos->nombre;
		$pvp = $datos->pvp;
        $respuesta1->assign("respuesta1", "innerHTML", "OK");
		$respuesta1->assign("nombre", "value", $nombre);
		$respuesta1->assign("pvp", "value", $pvp);
    } else {
		$respuesta1->assign("respuesta1", "innerHTML", 'NO EXISTE');
		$respuesta1->assign("nombre", "value", "");
		$respuesta1->assign("pvp", "value", "");
    }
    return $respuesta1;
}


?>

