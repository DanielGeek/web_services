<?php
include "../../db/modelTree.php";

$Frase = new modelTree();

$respuesta = $Frase->InsertFraseNeg();

echo $respuesta;

?>