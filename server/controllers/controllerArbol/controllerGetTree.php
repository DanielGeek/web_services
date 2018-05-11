<?php
    include('../../db/modelTree.php');


    $Tree = new modelTree();
    $valor = $Tree->getTree();
    echo $valor;
    
?>