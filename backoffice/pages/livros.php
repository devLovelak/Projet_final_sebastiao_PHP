<?php

verificarLogin();

$livros = getTodosLivros();

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
        
        <table>
            <tr>
                <th>IMAGEM</th>
                <th>TÍTULO</th>
                <th>TEXTO</th>
                <th>DATA ATUALIZAÇÃO</th>
                <th>ACÇÕES</th>
            </tr>

            <?php foreach($livros as $l): ?>

                <tr>
                    <td><img src="<?= $l["imagem"]; ?>" alt="Capa Livro"></td>
                    <td><?= $l["titulo"]; ?></td>
                    <td><?= substr($l["texto"], 0, 100) . "..."; ?></td>
                    <td><?= $l["data_atualizacao"]; ?></td>
                    <td>
                        <a href="../backoffice/actions/livros-center.php?editar=<?= $l["id"]; ?>">Editar</a>
                        <br>
                        <a href="../backoffice/actions/livros-center.php?deletar=<?= $l["id"]; ?>">Deletar</a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
        
        <br>
        <hr>
        <br>

        <a href="../backoffice/actions/livros-center.php">
            <button class="botoes">Criar Novo LIVRO</button>
        </a>
    </div>
    
</body>
</html>