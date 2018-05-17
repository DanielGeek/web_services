<?php  

 include('../../db/modelCampana.php');

 $campana = new modelCampana();
 $resultado = $campana->subirData($_FILES["file_crear_campana"], $_POST['nombre_data']);
 echo $resultado;
 
 ?>  