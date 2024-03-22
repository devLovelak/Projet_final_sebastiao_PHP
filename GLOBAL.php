<?php

//Variaveis Globais
$base_url = "http://localhost/codemaster/projecto_final/";
$pagina_actual;
$raiz = __DIR__;

//Funcoes Genericas
function getAssets(){
    global $base_url;
    return $base_url . "assets/";
}

//Funcoes Base Dados
$base_dados = [
    "host" => "localhost",
    "user" => "root",
    "password" => "",
    "database" => "sebastiao_alves_bd"
];
$conexao;

function conectarBaseDados(){
    global $conexao, $base_dados;
    $conexao = mysqli_connect(
        $base_dados["host"],
        $base_dados["user"],
        $base_dados["password"],
        $base_dados["database"]
    );
}

function selectSQL($sql){
    global $conexao;
    conectarBaseDados();

    $consulta = mysqli_query($conexao, $sql);
    $resultados = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    desconectarBaseDados();
    return $resultados;
}

function selectSQLUnico($sql){
    global $conexao;
    conectarBaseDados();

    $consulta = mysqli_query($conexao, $sql);
    $resultados = mysqli_fetch_assoc($consulta);

    desconectarBaseDados();
    return $resultados;
}

function iduSQL($sql){
    global $conexao;
    conectarBaseDados();

    $consulta = mysqli_query($conexao, $sql);

    desconectarBaseDados();
    return $consulta;
}

function desconectarBaseDados(){
    global $conexao;
    mysqli_close($conexao);
}

?>