<?php  

 include('../../db/modelCampana.php');

 $campana = new modelCampana();
 $respuesta = $campana->getIdCreador();

 echo $respuesta;

 
 ?>  