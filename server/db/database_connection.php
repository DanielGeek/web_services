<?php

//database_connection.php

// $connect = new PDO('mysql:host=localhost;dbname=webservice_db', 'root', '');
// $connect = mysqli_connect("localhost", "root", "", "webservice_db");

class Conectar{

    public static function conexion(){
        //coneccion local
        //$conexion=new mysqli("localhost", "root", "", "webservice_db");

        //conexion remota
        // $conexion=new mysqli("191.102.35.99:8003", "root", "m9a7r5s3", "webservice_db");
        
        //conexion remota local
         $conexion=new mysqli("localhost", "root", "m9a7r5s3", "webservice_db");

        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

}

?>
