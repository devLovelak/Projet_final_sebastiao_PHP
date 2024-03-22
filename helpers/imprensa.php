<?php

function getImprensaPagina($paginacao){
    $sql= "SELECT * FROM imprensa ORDER BY id DESC";
    $lista_imprensa = selectSQL($sql);
    $num_por_pagina = 2;
    $paginacao_correcta = $paginacao - 1;
    $resultado = array_slice($lista_imprensa, $num_por_pagina * $paginacao_correcta, $num_por_pagina);
    return $resultado;
}

function getTotalPaginasImprensa(){
    $sql= "SELECT * FROM imprensa";
    $lista_imprensa = selectSQL($sql);
    return ceil(count($lista_imprensa)/2);
}

function getTodasImprensa($order = "ASC"){
    $sql= "SELECT * FROM imprensa ORDER BY id $order";
    $lista_imprensa = selectSQL($sql);
    return $lista_imprensa;
}

function getImprensaEspecifica($id){
    $sql= "SELECT * FROM imprensa WHERE id=$id";
    $imprensa = selectSQLUnico($sql);
    return $imprensa;
}

?>