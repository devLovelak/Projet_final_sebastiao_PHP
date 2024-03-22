<?php

require_once "../../GLOBAL.php";
require_once $raiz . "/backoffice/helpers/helpers_list.php";

$check_form = isset($_GET["id"]);

if($check_form){
    $id = $_GET["id"];
    $sql = "DELETE FROM imprensa WHERE id=$id";
    iduSQL($sql);
    header("location: ../imprensa.php");
}
else{
    header("location: ../imprensa.php");
}



?>