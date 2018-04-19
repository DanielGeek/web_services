<?php

// require_once ('http://localhost/LUIS/amarok/httpdocs/proyectos/webservice/server/db/config.php');
require_once ('/Applications/XAMPP/xamppfiles/htdocs/LUIS/amarok/httpdocs/proyectos/webservice/server/db/config.php');

// require_once "../db/config.php";

class dbModel 
{
    // creamos la clase modelo en la cual le damos de atributo “$_db” que actuara como nuestro conector.
    protected $_db;
    
    // function __construct() es el método en el cual se inicializa y la palabra reservada $this se utiliza como un puntero al objeto en que está contenido.
    public function __construct()
    {
        $this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        // $this->_db = new PDO('mysql:host=localhost;dbname=webservice_db', 'root', '');
        session_start();
        if( $this->_db->connect_errno)
        {
            echo "Fallo al conectar a la base de datos: ". $this->_db->connect_error;
            return;
        }

        $this->_db->set_charset(DB_CHARSET);
    }
}
?>