<?php

//funcion para hacer busqueda de productos
function getProducto($producto='')
{
    //array asociativo para los productos con nombre y precio, en nuestro web services suponiendo que esta alojado en un servidor remoto
    $productos = array(
                        "zapatos" => 1000,
                        "pantalones" => 2000,
                        "camisas" => 1500
                    );
    //si existe la key en nuestro array asociativo retornamos el precio y nombre
    if( array_key_exists($producto, $productos))
    {
        // return $producto . " cuesta " . $productos[$producto] . " $";
        $producto . " cuesta " . $productos[$producto] . " $";
        echo json_encode($producto);
    }
    else
    {
        return "¡¡¡El producto seleccionado no ha sido encontrado!!!";
    }
}
//Comprobar si la variable producto está definida
if(isset($_POST["producto"]))
{
    //ejecutamos la funcion para buscar el producto y imprimirlo
    print getProducto($_POST["producto"]);
}
else
{
    echo 'Ocurrio un error';
}

?>