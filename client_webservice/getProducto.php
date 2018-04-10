<?php
if(isset($_POST["producto"]))
{
    $producto = $_POST["producto"];
    //url para consumir la data del web servis
    $url = "http://localhost/github/web_services/server/webService.php";

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

?>