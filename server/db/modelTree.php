<?php

include('database_connection.php');

class modelTree{
    private $db;
    private $session;
    
    

    public function __construct(){
       $this->db=Conectar::conexion();
       $this->session = session_start();
    }

    public function getNombreData()
    {
        $query = '';
        $output = array();
    }

    public function getCampanaData()
    {
        $query = '';
        
        $query_nombre_data = '';

        $query = " SELECT * FROM IVRC_campana_data ";
        //ejecutamos la consulta
        $consulta = $this->db->query($query);
        $respuesta = $consulta->fetch_all(MYSQLI_ASSOC);
        $selectpicker = '';
        $output = array();
        $data = array();
        //uso el metodo cout() para saber si existe al menos 1 elemento en el array
        $filas = count($respuesta);
        if($filas >= 1)
        {
            $query_nombre_data = "select * from IVRC_nombre_data";
            //ejecutamos la consulta
            $consulta_nombre_data = $this->db->query($query_nombre_data);
            $respuesta_nombre_data = $consulta_nombre_data->fetch_all(MYSQLI_ASSOC);
            $selectpicker .= '<select name="id_user_data" id="id_user_data" class="form-control selectpicker" multiple data-max-options="1" required>';
            foreach($respuesta_nombre_data as $nombre_data)
            {
                $selectpicker .= '<option id="'.$nombre_data["id"].'" value="'.$nombre_data['nombre'].'">'.$nombre_data["nombre"].'</option>';
                // $sub_data[] = $nombre_data['nombre'];
                // $data[] = $sub_data;
            }
            $selectpicker .= '</select>';
            $data[] = $selectpicker;

        }
        $output = array(
            "filas" => $filas,
            "data"  => $data 
        );
        return json_encode($output);
        //cierro consulta para que no quede en memoria
        $respuesta->close();
        // cierro conexion a la bd
        $this->db->close();
    }

    //obtener ids ordenados de la campana
    public function getTree()
    {  
        $output = '';
        $output2 = '';
        $output .= " 
                <table class='table table-bordered'>
                    <th>ID</th>
                    <th>Selecciona</th>
                    <th>Saludo</th>
                    <th>Nombre</th>
                    <th></th>
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
            // $espacios.$id
            $output .=   "<tr>
                              <td>".$espacios.$id;
            if($id_sub == 0 && $tipo == 1)
            {
            $output .=      '
                            </td>
                            <td>
                                
                                <select name="id_user_bot" id="id_user_bot" class="form-control selectpicker" multiple multiple data-max-options="1" required>
                                        <option value="TTS">TTS</option>
                                        <option value="AUDIO">AUDIO</option>
                                </select>
                            </td>
                            <td>
                                <div class="form-group col-md-">
                                    <input type="text" class="form-control" placeholder="Ingrese un texto: " name="campana_saludo" id="campana_saludo" required/>
                                </div>
                            </td>
                            <td>
                                <select name="id_user_nombre" id="id_user_nombre" class="form-control selectpicker" multiple data-max-options="1" required>
                                        <option value='.$id.'>Luis</option>
                                        <option value='.$id.'>Daniel</option>
                                        <option value='.$id.'>Jessica</option>
                                </select>
                            </td>
                            <td>
                            <button class="btn btn-danger btn-block" type="submit" name="button" id="btn_submit">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Saltar
                            </button>
                            </td>
                        </tr>';
            }
            // echo $espacios.$id."<br>";
            // $id_sub = $row['id_sub'];
            // en la primera iteracion y la segunda id_sub = 0 imprimo los id 1, 2 luego id = 2 y existe id_sub =2, comienza a seleccionar filas el metodo $this->N($queryN)
            $queryN = "SELECT * FROM IVRC_arbol WHERE id_sub = $id";
            $output .= $this->N($queryN);
        }

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
                // .$espaciosN.$idN
                $output2 .=   "<tr>
                                    <td>".$espaciosN.$idN;
                
                $output2 .=         "</td>
                                </tr>";
                // echo $espaciosN.$idN.'<br>';
                $queryN2 = "SELECT * FROM IVRC_arbol WHERE id_sub = $idN";
                $output2 .= $this->N($queryN2);
                
            }
            return $output2;
    }
   

}

?>
