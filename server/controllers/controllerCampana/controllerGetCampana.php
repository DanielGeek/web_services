<?php  

 include('../../db/modelCampana.php');

 $campana = new modelCampana();
 $respuesta = $campana->getAllCampanas();

 echo $respuesta;

 
 ?>  