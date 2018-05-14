<?php
    include('../../db/modelTree.php');


    $Tree = new modelTree();
    echo $valor = $Tree->getTree();
    
?>