<?php

require_once ('dbModel.php');
// include ('http://localhost/LUIS/amarok/httpdocs/proyectos/webservice/server/models/dbModel.php');
// include ('/Applications/XAMPP/xamppfiles/htdocs/LUIS/amarok/httpdocs/proyectos/webservice/server/models/dbModel.php');


class usuarioModel extends dbModel{
    protected $id;
    protected $correo_name;
    protected $userName;
    protected $Password1;

    public function __construct(){
        parent::__construct();
    }

    public function registro($correo_name){
        $sql = "INSERT INTO usuario(correo_name) VALUES('".$correo_name."')";
        $resultado = $this->_db->query($sql);
        if(!$resultado) {
            return 0;
        } else {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    public function getUser($userName) {
        $sql = "SELECT * FROM usuario WHERE correo_name='".$userName."'";
        $busca = $this->_db->query($sql);
        // Obtener todas las filas en un array asociativo
        $respuesta = $busca->fetch_all(MYSQLI_ASSOC);
        if($respuesta) {
            
            return $respuesta;
            //cierro consulta para que no quede en memoria
            $respuesta->close();
            // cierro conexion a la bd
            $this->_db->close();
        }
    }

    public function buscar($id) {
        $sql = "SELECT * FROM usuario WHERE id='".$id."'";
        $busca = $this->_db->query($sql);
        // Obtener todas las filas en un array asociativo
        $respuesta = $busca->fetch_all(MYSQLI_ASSOC);
        if($respuesta) {
            return $respuesta;
            //cierro consulta para que no quede en memoria
            $respuesta->close();
            // cierro conexion a la bd
            $this->_db->close();
        }
    }

    public function modificar($id, $correo_name){
        $sql = "UPDATE usuario SET correo_name='".$correo_name."' WHERE id='".$id."'";
        $modifica = $this->_db->query($sql);

        if(!$modifica){
            echo "Fallo la modificación de datos";
        } else {
            return $modifica;
            $modifica->close();
            $this->_db->close();
        }
    }

    public function eliminar($id){
        $sql = "DELETE FROM usuario WHERE id='".$id."'";
        $elimina = $this->_db->query($sql);
        if(!$elimina) {
            echo "Fallo la eliminación de datos";
        } else {
            return $elimina;
            $elimina->close();
            $this->_db->close();
        }
    }
}
?>