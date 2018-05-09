<?php  

 include('../../db/modelCampana.php');

 $campana = new modelCampana();
 $campana->crearCampana($_FILES["file_crear_campana"], $_POST['campana_name']);

 
 ?>  