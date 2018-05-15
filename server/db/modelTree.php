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
        $output = '';
        $output2 = '';
        $output .= "  
        <label class='text-success'>Datos</label> 
                <table class='table table-bordered'>
                    ";  
        $query = "SELECT * FROM IVRC_arbol WHERE id_sub = 0";
        $rows = $this->db->query($query); 
        foreach($rows as $row){
            $id =  $row['id'];
            $espacios = $row['espacios'];
            $id_sub = $row['id_sub'];
            $tipo = $row['tipo'];
            $valor = $row['valor'];
            $nombre = $row['seleccion'];
            $espacios = $this->espacios($espacios);
            $output .=   "<tr>
                              <td>".$espacios.$id;
            if($id_sub == 0 && $tipo == 1)
            {
            $output .= ' '.$valor.' '.$nombre.'<br>
            <label>Seleccione respuesta</label>
            <select name="id_user_saludo" id="id_user_saludo" class="form-control" required>
                <option value='.$id.'>Si</option>
                <option value='.$id.'>No</option>
                <option value='.$id.'>Default</option>
            </select>';
            }
            // echo $espacios.$id."<br>";
            // $id_sub = $row['id_sub'];
            // en la primera iteracion y la segunda id_sub = 0 imprimo los id 1, 2 luego id = 2 y existe id_sub =2, comienza a seleccionar filas el metodo $this->N($queryN)
            $queryN = "SELECT * FROM IVRC_arbol WHERE id_sub = $id";
            $output .= $this->N($queryN);
        }
        $output .=      "</td>
                    </tr>";
        $output .= "</table>";
        echo $output; 
    }

    public function espacios($espacios){
        $EspaciosHtmlTotal='';
        $EspaciosHtml='&nbsp;';
        $i=1;
        while($i<$espacios){
            $EspaciosHtmlTotal .= $EspaciosHtml;
            // $EspaciosHtmlTotal=$EspaciosHtmlTotal.$EspaciosHtml;
            $i++;
        }
        return $EspaciosHtmlTotal;
    }

    public function N($queryN){
            $rowsN = $this->db->query($queryN);
            $output2 = '';

            foreach($rowsN as $rowN){
                $idN = $rowN['id'];
                $espaciosN = $rowN['espacios'];
                $id_subN = $rowN['id_sub'];
                $tipoN = $rowN['tipo'];
                $valorN = $rowN['valor'];
                $nombreN = $rowN['seleccion'];
                $espaciosN = $this->espacios($espaciosN);
                $output2 .=   "<tr>
                                <td>".$espaciosN.$idN;
                if($id_subN == 2 && $tipoN == 1)
                {
                    $output2 .= ' '.$valorN.' '.$nombreN.'<br>
                    <label>Seleccione respuesta</label>
                    <select name="id_user_deuda" id="id_user_deuda" class="form-control" required>
                        <option value='.$idN.'>Si</option>
                        <option value='.$idN.'>No</option>
                        <option value='.$idN.'>Default</option>
                    </select>';
                }
                $output2 .=      "</td>
                            </tr>";
                // echo $espaciosN.$idN.'<br>';
                $queryN2 = "SELECT * FROM IVRC_arbol WHERE id_sub = $idN";
                $output2 .= $this->N($queryN2);
                
            }
            return $output2;
    }
   

}

?>
