<?php
include "../../db/modelTree.php";

$Frase = new modelTree();

$respuesta = $Frase->InsertFrasePos();

echo $respuesta;

?>