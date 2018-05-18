<?php

    include('../../db/modelTree.php');

    $Campana = new modelTree();
    $respuesta = $Campana->InsertCampana();
    echo $respuesta;
?>