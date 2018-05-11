<?php

include('database_connection.php');

class modelTree{
    private $db;
    private $session;
    
    

    public function __construct(){
       $this->db=Conectar::conexion();
       $this->session = session_start();
    }
    //obtener ids ordenados de la campana
    public function getTree()
    {

        
        $query = "SELECT * FROM IVRC_arbol WHERE id_sub = 0";
        $rows = $this->db->query($query);
        foreach($rows as $row){
            $id =  $row['id'];
            $espacios = $row['espacios'];
            $espacios = $this->espacios($espacios);
            echo $espacios.$id."<br>";
            $id_sub = $row['id_sub'];
            $queryN = "SELECT * FROM IVRC_arbol WHERE id_sub = $id";
            $this->N($queryN);
        }
        
        
        
    }
    public function espacios($espacios){
        $EspaciosHtmlTotal='';
        $EspaciosHtml='&nbsp;';
        $i=1;
        while($i<$espacios){
            $EspaciosHtmlTotal=$EspaciosHtmlTotal.$EspaciosHtml;
            $i++;
        }
        return $EspaciosHtmlTotal;

    }

    public function N($queryN){
        $rowsN = $this->db->query($queryN);
        foreach($rowsN as $rowN){
            $idN = $rowN['id'];
            $espaciosN = $rowN['espacios'];
            $espaciosN = $this->espacios($espaciosN);
            echo $espaciosN.$idN."<br>";
            $queryN2 = "SELECT * FROM IVRC_arbol WHERE id_sub = $idN";
            $this->N($queryN2);

        }
        
    }
   

}

?>
