<?php

//database_connection.php

// $connect = new PDO('mysql:host=localhost;dbname=webservice_db', 'root', '');
// $connect = mysqli_connect("localhost", "root", "", "webservice_db");

class Conectar{

    public static function conexion(){
        //coneccion local
        $conexion=new mysqli("localhost", "root", "", "webservice_db");

        //conexion remota
        // $conexion=new mysqli("localhost", "co-servicio", "m9a7r5s3", "co-servicio");
        
        //conexion remota local
        // $conexion=new mysqli("co-servicio.cl", "co-servicio", "m9a7r5s3", "co-servicio");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

}

?>
