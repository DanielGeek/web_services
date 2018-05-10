<?php
    include('../../db/modelArbol.php');


    $campana_arbol = new modelArbol();
    $tabla = $campana_arbol->getIdArbol();
    echo $tabla;
?>