<?php
if(isset($_POST["producto"]))
{
    $producto = $_POST["producto"];
    // $url = "http://localhost/LUIS/amarok/httpdocs/proyectos/webservice/server/models/webService.php?producto=".$producto;
    //enviamos la data por url tipo get
    $url = "http://amarokdatacenter.cl/proyectos/webservice/server/models/webService.php?producto=".$producto;

    //Se inicia Curl en el servidor especificado
    $ch = curl_init($url);

    //Parametros
    $parametros = "producto=$producto";

    //Metodo POST
    curl_setopt($ch, CURLOPT_POST, 1);

    //Agregar parametros
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);

    //maximo tiempo de espera de respuesta del servidor
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);

    //Respuesta del servidor web
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Ejecutamos la peticion
    $resultado = curl_exec($ch);
    echo $resultado;
    //Cerrar
    curl_close($ch);
}
else
{
    echo 'Inserte un producto valido';
}

?>