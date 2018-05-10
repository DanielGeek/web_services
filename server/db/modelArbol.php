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
                                    <th>Id_sub</th>  
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
                if(count($idmenor) < 2)
                {
                    $imprime[] = $idmenor[$i];
                }
                else
                {
                    for($x = 0; $x < count($idmayor); $x++)
                    {
                        $imprime[] = $idmayor[$x];
                    }
                }
            }
            for($y = 0; $y < count($idmenor); $y++)
            {
                if($y > 2)
                {
                    $imprime[] = $idmenor[$y];
                }
            }
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
