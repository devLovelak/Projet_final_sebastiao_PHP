<?php

//Globais
require_once "GLOBAL.php";
require_once "helpers/helpers_list.php";
$pagina_actual = "imprensa";
$paginacao = 1;
if(isset($_GET["paginacao"])){
    $paginacao = $_GET["paginacao"];
    if($paginacao < 1){
        $paginacao = 1;
    }
    elseif($paginacao > getTotalPaginasImprensa()){
        $paginacao = getTotalPaginasImprensa();
    }
}

//Parte Superior do Site
require_once "components/header.php";

//Parte do Meio do Site
require_once "pages/imprensa.php";

//Parte Inferior do Site
require_once "components/footer.php";

?>