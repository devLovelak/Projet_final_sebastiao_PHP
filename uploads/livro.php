<?php

//Globais
require_once "GLOBAL.php";
require_once "helpers/helpers_list.php";
$pagina_actual = "livro";
$livro_id = 0;
if(isset($_GET["livro"])){
    $livro_id = $_GET["livro"];
}

//Parte Superior do Site
require_once "components/header.php";

//Parte do Meio do Site
require_once "pages/livro.php";

//Parte Inferior do Site
require_once "components/footer.php";

?>