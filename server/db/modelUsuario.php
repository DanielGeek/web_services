<?php

include('database_connection.php');

class modelUsuario {
    private $db;
    private $session;
    
    

    public function __construct(){
       $this->db=Conectar::conexion();
       $this->session = session_start();
    }

    public function getDB(){
        return $this->db;
    }

    // metodo para login al sistema
    public function getUser($userName) {
        $sql = "SELECT * FROM usuario WHERE correo_name='".$userName."'";
        $busca = $this->db->query($sql);
        // Obtener todas las filas en un array asociativo
        $respuesta = $busca->fetch_all(MYSQLI_ASSOC);
        if($respuesta) {
            
            return $respuesta;
            //cierro consulta para que no quede en memoria
            $respuesta->close();
            // cierro conexion a la bd
            $this->db->close();
        }
    }
}

?>