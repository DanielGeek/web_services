<?php

include('database_connection.php');

class modelCampana {
    private $db;
    private $session;
    
    

    public function __construct(){
       $this->db=Conectar::conexion();
       $this->session = session_start();
    }
    // metodo para obtener todos los id del creador de la campaña
    public function getIdCreador()
    {
        $query = '';
        $datos = '';
        $query = "SELECT id, user_name FROM usuario ";
        $consulta = $this->db->query($query);
        if(isset($consulta))
        {
            $respuesta = $consulta->fetch_all(MYSQLI_ASSOC);
            
            foreach($respuesta as $row)
            {
                $datos .='<option value='.$row['id'].'>'.$row['user_name'].'</option>';
            }
        }
        return $datos;
    }

    //inicio Modal  /insertar/editar/borrar Campaña como master
    public function CRUDCampana() {
        $query = '';
        $query_editar = '';
        $output = array();
        //si viene vacio es porque agrega un nuevo usuario
        if($_POST['btn_action2'] == '')
        {
            $query_agregar = "
            INSERT INTO campana (id_user, rut, user_name, user_telefono, user_deuda, campana_name) 
            VALUES ('".$_POST["id_user"]."', '".$_POST["rut"]."',
                    '".$_POST["user_name2"]."', '".$_POST["user_tel"]."', '".$_POST["user_deuda"]."', '".$_POST['campana_name2']."' );
            "; 
            $consultaAgregar = $this->db->query($query_agregar);
            
            if(isset($consultaAgregar) && $consultaAgregar > 0)
            {
                echo 'Nueva Campaña Agregada';
            }
            else
            {
                echo 'Campaña No Agregada';
            }
        }

        if($_POST['btn_action2'] == 'fetch_single')
        {
            
            $query = "SELECT * FROM campana WHERE id ='".$_POST['user_id2']."'";
            
            //ejecutamos la consulta
            $consulta = $this->db->query($query);
            $respuesta = $consulta->fetch_all(MYSQLI_ASSOC);
            
            foreach($respuesta as $row)
            {
                $output['campana_name2'] = $row['campana_name'];
                $output['rut'] = $row['rut'];
                $output['user_name2'] = $row['user_name'];
                $output['user_tel'] = $row['user_telefono'];
                $output['user_deuda'] = $row['user_deuda'];
            }
            
            echo json_encode($output);   
            
        }
        
        if($_POST['btn_action2'] == 'Edit')
        {
            
                $query_editar = "UPDATE campana SET id_user = '".$_POST['id_user']."',
                    rut = '".$_POST['rut']."',
                    user_name = '".$_POST['user_name2']."',
                    user_telefono = '".$_POST['user_tel']."',
                    user_deuda = '".$_POST['user_deuda']."',
                    campana_name = '".$_POST['campana_name2']."'
                    WHERE id = '".$_POST['user_id2']."' ";
                    
            
            
            $consultaEditar = $this->db->query($query_editar);

            // $respuestaEditar = $consultaEditar->fetch_all(MYSQLI_ASSOC);
            if(isset($consultaEditar) && $consultaEditar > 0)
            {
                echo 'Usuario Editado';
            }
            else
            {
                echo 'Usuario No Editado';
            }
        }

        // condicion para eliminar la fila seleccionada
        if($_POST['btn_action2'] == 'borrar'){
        
            $query_delete = "
                delete  from campana
                where id = '".$_POST["user_id2"]."'
            ";
                
            $result = $this->db->query($query_delete);
            if(isset($result)){
                
                echo 'Datos Eliminados ';
            }
            else
            {
                echo 'Datos No Eliminados';
            }
        }

    }
    //fin Modal  /insertar/editar/borrar campaña como master

    // metodo para obtener todas las campañas
    public function getAllCampanas() {

        $query = '';
        $query_user = '';
        $output = array();

        $query .= " SELECT * FROM campana ";
        if(isset($_POST["search"]["value"]))
        {
            $query .= 'where id_user LIKE "%'.$_POST["search"]["value"].'%" ';
            $query .= 'OR campana_name LIKE "%'.$_POST["search"]["value"].'%" ';
            $query .= 'OR rut LIKE "%'.$_POST["search"]["value"].'%" ';
            $query .= 'OR user_name LIKE "%'.$_POST["search"]["value"].'%" ';
            $query .= 'OR user_telefono LIKE "%'.$_POST["search"]["value"].'%" ';
            $query .= 'OR user_deuda LIKE "%'.$_POST["search"]["value"].'%" ';
        }
        if(isset($_POST["order"]))
        {
            $query .= 'ORDER by '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
        }
        else{
            $query .= 'ORDER BY id DESC ';
        }
        if($_POST["length"] != -1)
        {
            $query .= 'LIMIT ' .$_POST['start'] . ', ' . $_POST['length'];
        }


        //ejecutamos la consulta
        $consulta = $this->db->query($query);
        $respuesta = $consulta->fetch_all(MYSQLI_ASSOC);
        
        $data = array();
        //uso el metodo cout() para saber si existe al menos 1 elemento en el array
        $filtered_rows = count($respuesta);
        foreach($respuesta as $row)
        {
            $sub_array = array();
            $query_user = "SELECT user_name FROM usuario where id = '".$row['id_user']."' ";
            //ejecutamos la consulta
            $consulta_user = $this->db->query($query_user);
            $respuesta_user = $consulta_user->fetch_all(MYSQLI_ASSOC);
            

            
            
            $sub_array[] = $row['id'];
            foreach($respuesta_user as $row_user)
            {
                $sub_array[] = $row_user['user_name'];
            }
            $sub_array[] = $row['campana_name'];
            $sub_array[] = $row['rut'];
            $sub_array[] = $row['user_name'];
            $sub_array[] = $row['user_telefono'];
            $sub_array[] = $row['user_deuda'];
            // $sub_array[] = $status;
            $sub_array[] = '<button type="button" name="update2" id="'.$row["id"].'" class="btn btn-warning btn-xs update2">Actualizar</button>';
            // $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete" data-status="'.$row["estatus"].'">Cambiar Estatus</button>';
            $sub_array[] = '<button type="button" name="borrar" id="'.$row["id"].'" class="btn btn-danger btn-xs borrar">Eliminar Usuario</button>';
            $data[]      = $sub_array;
        }
        
        $tabla = 'campana';
        $output = array(
            "draw"              => intval($_POST["draw"]),
            "recordsTotal"      => $filtered_rows,
            "recordsFiltered"   => self::get_total_registros($tabla),
            "data"              => $data
        );

        return json_encode($output);
        //cierro consulta para que no quede en memoria
        $respuesta->close();
        // cierro conexion a la bd
        $this->db->close();
    }
    // fin metodo para las campañas
    
    // metodo para obtener el total de registros
    public function get_total_registros($tabla)
    {
        $cant_registros = '';
        $cant_registros = " SELECT * FROM $tabla";
        //ejecutamos la consulta
        $consulta = $this->db->query($cant_registros);
        $respuesta = $consulta->fetch_all(MYSQLI_ASSOC);
        
        //uso el metodo cout() para saber si existe al menos 1 elemento en el array
        $totalRows = count($respuesta);
        return $totalRows;

        //cierro consulta para que no quede en memoria
        $respuesta->close();
        // cierro conexion a la bd
        $this->db->close();
    }

    // metodo para crear campaña como user o master
    public function crearCampana($fileCrearCampana, $campana_name)
    {
        if(isset($_POST['campana_name']))
        {
            if(!empty($_FILES["file_crear_campana"]))  
            {  
                $id_user = $_SESSION['id'];
                $file_array = explode(".", $_FILES["file_crear_campana"]["name"]);  
                if($file_array[1] == "xls" || $file_array[1] == "xlsx")  
                {  
                    include("../../lib/PHPExcel/IOFactory.php");
                    $output = '';  
                    $output .= "  
                    <label class='text-success'>Datos insertados</label>  
                            <table class='table table-bordered'>  
                                <tr>  
                                    <th>Nombre Campaña</th>
                                    <th>Rut</th>  
                                    <th>Nombre</th>  
                                    <th>Telefono</th>  
                                    <th>Deuda</th>
                                </tr>  
                                ";  
                    $object = PHPExcel_IOFactory::load($_FILES["file_crear_campana"]["tmp_name"]);  
                    foreach($object->getWorksheetIterator() as $worksheet)  
                    {  
                            $highestRow = $worksheet->getHighestRow();  
                            for($row=2; $row<=$highestRow; $row++)  
                            {  
                                $rut = mysqli_real_escape_string($this->db, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
                                $user_name = mysqli_real_escape_string($this->db, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                                $user_telefono = mysqli_real_escape_string($this->db, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
                                $user_deuda = mysqli_real_escape_string($this->db, $worksheet->getCellByColumnAndRow(3, $row)->getValue());  
                                $campana_name = $_POST['campana_name'];
                                $query = "  
                                INSERT INTO campana  
                                (id_user, rut, user_name, user_telefono, user_deuda, campana_name)   
                                VALUES ('".$id_user."','".$rut."', '".$user_name."', '".$user_telefono."', '".$user_deuda."', '".$campana_name."')
                                ";  
                                mysqli_query($this->db, $query);  
                                $output .= '  
                                <tr> 
                                    <td>'.$campana_name.'</td> 
                                    <td>'.$rut.'</td>
                                    <td>'.$user_name.'</td>
                                    <td>'.$user_telefono.'</td>
                                    <td>'.$user_deuda.'</td>
                                </tr>  
                                ';  
                            }  
                    }  
                    $output .= '</table>';  
                    echo $output;  
                }  
                else  
                {  
                    echo '<div class="alert alert-danger">Archivo invalido</div>';  
                }  
            }  
            else
            {
                echo '<div class="alert alert-danger">No se encontro un archivo excel</div>';
            }
        }
        else
        {
            echo '<div class="alert alert-danger">Introduzca nombre de la campaña</div>';
        }

    }

    public function getSaludo()
    {
        echo 'llamada al modelCampana funciona!';
    }
    // public function getSessionStart() {
    //     return $this->session = session_start();
    // }

    public function getDB(){
        return $this->db;
    }
}

?>