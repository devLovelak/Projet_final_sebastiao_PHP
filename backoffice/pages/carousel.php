<?php

verificarLogin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= getAssets(); ?>/css/backoffice.css">
    <title>Backoffice</title>
</head>
<body>

    <h1>Backoffice (LIVROS)</h1>

    <nav>
    <a class="<?= ($pagina_actual == "inicio") ? "active" : ""; ?>" href="../backoffice/inicio.php">Início</a>
        <a class="<?= ($pagina_actual == "carousel") ? "active" : ""; ?>" href="../backoffice/carousel.php">Carousel</a>
        <a class="<?= ($pagina_actual == "home") ? "active" : ""; ?>" href="../backoffice/home.php">Home</a>
        <a class="<?= ($pagina_actual == "autor") ? "active" : ""; ?>" href="../backoffice/autor.php">Autor</a>
        <a class="<?= ($pagina_actual == "livros") ? "active" : ""; ?>" href="../backoffice/livros.php">Livros</a>
        <a class="<?= ($pagina_actual == "destaques") ? "active" : ""; ?>" href="../backoffice/destaques.php">Destaques</a>
        <a class="<?= ($pagina_actual == "imprensa") ? "active" : ""; ?>" href="../backoffice/imprensa.php">Imprensa</a>
        <a class="<?= ($pagina_actual == "contactos") ? "active" : ""; ?>" href="../backoffice/contactos.php">Contactos</a>
        <a class="<?= ($pagina_actual == "redes") ? "active" : ""; ?>" href="../backoffice/redes.php">Redes</a>
        <a class="<?= ($pagina_actual == "configuracoes") ? "active" : ""; ?>" href="../backoffice/configuracoes.php">Configurações</a>
        <a class="<?= ($pagina_actual == "sair") ? "active" : ""; ?>" href="../backoffice/sair.php">Sair</a>
    </nav>

    <div class="quadro">
        <br>

        <a href="./carousel_desktop.php">
            <button>Desktop</button>
        </a>
        <br><br>
        <a href="./carousel_mobile.php">
            <button>Mobile</button>
        </a>
        
        <br>
    </div>
    
</body>
</html>