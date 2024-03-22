<?php

require_once "../../GLOBAL.php";
require_once $raiz . "/backoffice/helpers/helpers_list.php";
verificarLogin();

$editar = isset($_GET["editar"]);
$deletar = isset($_GET["deletar"]);
$criar = false;

if($editar){
    $imprensa = getImprensaEspecifica($_GET["editar"]);
}
elseif($deletar){
    $imprensa = getImprensaEspecifica($_GET["deletar"]);
}
else{
    $criar = true;
}

date_default_timezone_set("Europe/Lisbon");
$data_actual = date("H:i - d/m/Y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= getAssets(); ?>/css/backoffice.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    <title>Backoffice</title>
</head>
<body>

    <!-- EDITAR -->
    <?php if($editar): ?>
        <div class="quadro">
            <h3>Editar (IMPRENSA)</h3>
            <form action="imprensa-edit.php">
                <input type="hidden" name="id" value="<?= $_GET["editar"] ?>">
                <label for="imagem">Link da imagem da Imprensa: </label>
                <br>
                <input type="text" name="imagem" value="<?= $imprensa["imagem"]; ?>">
                <a target="popup" href="../../tinyfilemanager/tinyfilemanager.php" onclick="window.open('../../tinyfilemanager/tinyfilemanager.php','name','width=800,height=600')">
                    <button type="button">Buscar Imagens</button>
                </a>

                <br><br><br>

                <label for="titulo">Título da Imprensa:</label>
                <br>
                <input type="text" name="titulo" value="<?= $imprensa["titulo"]; ?>">
                
                <br><br><br>

                <label for="texto">Texto da Imprensa:</label>
                <br>
                <textarea id="editor" name="texto">
                    <?= $imprensa["texto"]; ?>
                </textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

                <br><br><br>

                <label for="data">Data publicação da Imprensa:</label>
                <br>
                <input type="text" name="data" value="<?= $imprensa["data_publicacao"]; ?>" required>

                <br><br><br>

                <input type="submit" value="Editar">
            </form>
        </div>
    
    <!-- DELETAR -->
    <?php elseif($deletar): ?>
        <div class="quadro">
            <input type="hidden" name="id" value="<?= $_GET["deletar"] ?>">
            <label for="">Apagar Imprensa (<?= $imprensa["data_publicacao"]; ?>)?</label>
            <br><br>
            <?php if($imprensa["imagem"] != ""): ?>
                <img src="<?= $imprensa["imagem"]; ?>" alt="Capa do Livro" height="150">
            <?php else: ?>
                Sem Imagem.
            <?php endif; ?>
            <br><br>
            <?php if($imprensa["texto"] != ""): ?>
                <?= $imprensa["texto"]; ?>
            <?php else: ?>
                Sem Texto.
            <?php endif; ?>
            <br><br>
            <a href="imprensa-delete.php?id=<?= $_GET["deletar"]; ?>"><button>Deletar</button></a>
            <a href="../imprensa.php"><button>Cancelar</button></a>
        </div>

    <!-- CRIAR -->
    <?php elseif($criar): ?>
        <div class="quadro">
            <h3>Criar Nova (IMPRENSA)</h3>
            <form action="imprensa-new.php">
                <label for="imagem">Link da imagem da Imprensa: </label>
                <br>
                <input type="text" name="imagem">
                <a target="popup" href="../../tinyfilemanager/tinyfilemanager.php" onclick="window.open('../../tinyfilemanager/tinyfilemanager.php','name','width=800,height=600')">
                    <button type="button">Buscar Imagens</button>
                </a>
                
                <br><br><br>

                <label for="titulo">Título da Imprensa:</label>
                <br>
                <input type="text" name="titulo">

                <br><br><br>

                <label for="texto">Texto da Imprensa:</label>
                <br>
                <textarea id="editor" name="texto">

                </textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

                <br><br><br>

                <label for="data">Data publicação da Imprensa:</label>
                <br>
                <input type="text" name="data" value="PUBLICADO A ">

                <br><br><br>

                <input type="submit" value="Criar">
            </form>
        </div>

    <?php endif; ?>
    
</body>
</html>