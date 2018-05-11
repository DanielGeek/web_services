<?php

include('database_connection.php');

class modelArbol {
    private $db;
    private $session;
    
    

    public function __construct(){
       $this->db=Conectar::conexion();
       $this->session = session_start();
    }
    //obtener ids ordenados de la campana
    public function getIdArbol()
    {
        $imprime = array();
        $idmayor = array();
        $idmenor = array();

        $query = '';
        $datos = '';
        $query = "SELECT * FROM IVRC_arbol ";
        $output = '';  
                    $output .= "  
                    <label class='text-success'>Datos IVRC_arbol</label> 
                            <table class='table table-bordered'>  
                                <tr>  
                                    <th>Id</th>
                                </tr>  
                                "; 
        $consulta = $this->db->query($query);
        if(isset($consulta))
        {
            $respuesta = $consulta->fetch_all(MYSQLI_ASSOC);
            
            foreach($respuesta as $row)
            {
                if($row['id_sub'] != 0)
                {
                    $idmayor[] = $row['id'];
                }
                else
                {
                    $idmenor[] = $row['id'];
                }
            }
            
            
            for($i = 0; $i < count($idmenor); $i++)
            {
                // para solo almacenar los 2 primeros id
                if($idmenor[$i] < 3)
                {
                    $imprime[] = $idmenor[$i];
                }
            }
            // almaceno todos los id con id_sub = 2
            for($a = 0; $a < count($idmayor); $a++)
                    $imprime[] = $idmayor[$a];

            for($b = 0; $b < count($idmenor); $b++)
            {
                // para solo almacenar los 2 ultimos id con id_sub = 0
                if($idmenor[$b] > 2)
                {
                    $imprime[] = $idmenor[$b];
                }
            }
            // mostrar la tabla con los id ordenados
            for($z = 0; $z < count($imprime); $z++)
            {
                $output .= '  
                <tr> 
                    <td>'.$imprime[$z].'</td> 
                </tr>
                ';
            }
        }
        $output .= '</table>';  
        return $output;
    }

}

?>
