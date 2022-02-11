<?php

/*
Specific personality accessment page
*/
$id = $_GET['id'];

    if(!intval($id)){
        echo "Valami nem működik";
    }else{
        echo $_GET['id'];
    }
    
?>