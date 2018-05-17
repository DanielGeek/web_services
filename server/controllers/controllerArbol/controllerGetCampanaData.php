<?php
    include('../../db/modelTree.php');


    $Tree = new modelTree();
    $campana_data = $Tree->getCampanaData();
    echo $campana_data;
?>