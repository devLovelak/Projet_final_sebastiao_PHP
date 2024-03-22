<?php

require_once "../../GLOBAL.php";
require_once $raiz . "/backoffice/helpers/helpers_list.php";

$check_form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["data"]) && isset($_GET["texto"]);

if($check_form){
    date_default_timezone_set("Europe/Lisbon");
    $data_actual = date("H:i - d/m/Y");
    $id = $_GET["id"];
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $data = $_GET["data"];
    $texto = $_GET["texto"];
    $sql = "UPDATE imprensa SET imagem='$imagem', titulo='$titulo', data_publicacao='$data', texto='$texto', data_atualizacao='$data_actual' WHERE id=$id";
    iduSQL($sql);
    header("location: ../imprensa.php");
}
else{
    header("location: ../imprensa.php");
}



?>