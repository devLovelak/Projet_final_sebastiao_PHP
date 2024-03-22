<!-- INICIO CAIXA BRANCA -->
<div id="caixa-branca" class="container-fluid">

  <div class="row">
    <!-- CAIXA BRANCA DESKTOP -->
    <div class="col caixa-branca-simples">
      <div class="col-11 subtitulo-topo">IMPRENSA</div>
      <div class="col-11 t1">ÚLTIMAS NOTÍCIAS</div>
    </div>
  </div>

</div>
<!-- FIM CAIXA BRANCA -->
<!-- FIM PARTE SUPERIOR -->

<!-- INICIO PARTE MEIO -->
<main class="container-fluid meio mx-auto">

  <?php $lista_imprensa = getImprensaPagina($paginacao); ?>

  <!-- Imprensa 1 -->
  <div class="row imprensa-box-shadow">
    <div class="col-9 mx-auto t1-imprensa"><?= $lista_imprensa[0]["titulo"]; ?></div>
    <div class="col-9 mx-auto"><hr class="divisor-imprensa col-12"></div>
    <div class="col-9 publicacao mx-auto p-bold"><?= $lista_imprensa[0]["data_publicacao"]; ?></div>
    <div class="col-9 mx-auto text-center mt-4 pt-3">
      <img class="imprensa-imagem" src="<?= $lista_imprensa[0]["imagem"]; ?>" alt="<?= $lista_imprensa[0]["titulo"]; ?>">
    </div>
    <div class="col-9 mx-auto mt-5 p">
      <?= $lista_imprensa[0]["texto"]; ?>
    </div>
  </div>

  <?php if(isset($lista_imprensa[1])): ?>

    <!-- Imprensa 2 -->
    <div class="row mt-5 pt-5">
      <div class="col-9 mx-auto t1-imprensa"><?= $lista_imprensa[1]["titulo"]; ?></div>
      <div class="col-9 mx-auto"><hr class="divisor-imprensa col-12"></div>
      <div class="col-9 publicacao mx-auto p-bold"><?= $lista_imprensa[1]["data_publicacao"]; ?></div>
      <div class="col-9 mx-auto text-center mt-4 pt-3">
        <img class="imprensa-imagem" src="<?= $lista_imprensa[1]["imagem"]; ?>" alt="<?= $lista_imprensa[1]["titulo"]; ?>">
      </div>
      <div class="col-9 mx-auto mt-5 p">
        <?= $lista_imprensa[1]["texto"]; ?>
      </div>
    </div>

  <?php endif; ?>

  <!-- Paginacao -->
  <div class="row">
    <form action="" class="col-9 mx-auto mt-5 pt-3 d-flex justify-content-center align-items-center flex-wrap gap-3">
      <button class="botao-setas seta-esquerda" name="paginacao" value="<?= $paginacao-1; ?>"></button>
      <?php for($i=1; $i<=getTotalPaginasImprensa(); $i++): ?>
        <button class="botao-numeros <?= ($paginacao == $i) ? "active" : "" ?>" name="paginacao" value="<?= $i; ?>"><?= $i; ?></button>      
      <?php endfor; ?>
      <button class="botao-setas seta-direita" name="paginacao" value="<?= $paginacao+1; ?>"></button>
    </form>
  </div>

</main>
<!-- FIM PARTE MEIO -->