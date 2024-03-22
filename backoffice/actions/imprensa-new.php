<?php

require_once "../../GLOBAL.php";
require_once $raiz . "/backoffice/helpers/helpers_list.php";

$check_form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["data"]) && isset($_GET["texto"]);

if($check_form){
    date_default_timezone_set("Europe/Lisbon");
    $data_actual = date("H:i - d/m/Y");
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $data = $_GET["data"];
    $texto = $_GET["texto"];
    $sql = "INSERT INTO imprensa (imagem, titulo, data_publicacao, texto, data_criacao, data_atualizacao) VALUES ('$imagem', '$titulo', '$data', '$texto', '$data_actual', '$data_actual')";
    iduSQL($sql);
    header("location: ../imprensa.php");
}
else{
    header("location: ../imprensa.php");
}



?>