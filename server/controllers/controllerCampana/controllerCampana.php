<?php  

 include('../../db/modelCampana.php');

 $campana = new modelCampana();
 $resultado = $campana->crearCampana($_FILES["file_crear_campana"], $_POST['campana_name']);
 echo $resultado;
 
 ?>  