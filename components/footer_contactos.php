<!-- INICIO PARTE INFERIOR -->
<footer class="container-fluid">

<!-- NAV FOOTER DESKTOP -->
<div class="row d-none d-md-block">
  <div class="col-11 mx-auto">
    <hr class="row linha-titulo-pagina linha-footer">
    <nav class="row nav-footer">
      <a href="<?= $base_url; ?>" class="menus-barra-rodape  <?= ($pagina_actual == "home") ? "active" : ""; ?>">Home</a>
      <a href="<?= $base_url . "autor.php"; ?>" class="menus-barra-rodape <?= ($pagina_actual == "autor") ? "active" : ""; ?>">Autor</a>
      <a id="botao-livros-footer" href="#" class="menus-barra-rodape <?= ($pagina_actual == "livro") ? "active" : ""; ?>" onclick="clickLivrosFooter()">Livros</a>
      <a href="<?= $base_url . "imprensa.php"; ?>" class="menus-barra-rodape <?= ($pagina_actual == "imprensa") ? "active" : ""; ?>">Imprensa</a>
      <a href="<?= $base_url . "contactos.php"; ?>" class="menus-barra-rodape <?= ($pagina_actual == "contactos") ? "active" : ""; ?>">Contactos</a>
    </nav>
    <hr class="row linha-titulo-pagina linha-footer">
  </div>
</div>

<!-- NAV FOOTER MOBILE -->
<div class="row d-block d-md-none">
  <hr class="col linha-titulo-pagina linha-footer mobile">
</div>

<!-- RODAPE DESKTOP -->
<div class="row rodape-desktop d-none d-md-block">

  <div class="col-9 mx-auto dados-footer">
    <div class="row dados-footer-1">
      <div class="col-7">
        <div class="row contactos-titulo mb-3">Contactos</div>
        <div class="row">
          <div class="col-6">
            <div class="row contactos-conteudo mb-1">Morada</div>
            <div class="row p col-12"><?= getContactos("morada"); ?></div>
          </div>
          <div class="col-3">
            <div class="row contactos-conteudo mb-1">Telefone</div>
            <div class="row p col-12"><?= getContactos("telefone"); ?></div>
          </div>
          <div class="col-3">
            <div class="row contactos-conteudo mb-1">Email</div>
            <div class="row p col-12"><?= getContactos("email"); ?></div>
          </div>
        </div>
      </div>

      <div class="col-5">
        <div class="row contactos-titulo mb-4"><div class="col-12 text-center">Siga-me nas redes sociais</div></div>
        <div class="row redes-sociais">
          <a href="<?= getRedeSocial("instagram"); ?>"><div class="icone instagram"></div></a>
          <a href="<?= getRedeSocial("facebook"); ?>"><div class="icone facebook"></div></a>
          <a href="<?= getRedeSocial("linkedin"); ?>"><div class="icone linkedin"></div></a>
        </div>
      </div>
    </div>

    <div class="row dados-footer-2">
      <div class="col-7 p-0">
        <a href="https://www.livroreclamacoes.pt/" class="reclamacoes"></a>
        <a href="https://sebastiaoalves.com/ralc" class="ralc"></a>
      </div>
      <div class="col-5 p-0">
        <div class="col-12 text-center p">Políticas de Cookies.</div>
        <div class="col-12 text-center p">Copyright 2021 © Grupo MediaMaster. Todos os direitos reservados.</div>
      </div>
    </div>
  </div>

</div>

<!-- RODAPE MOBILE -->
<div class="row rodape-mobile d-block d-md-none">

  <div class="col-11 mx-auto dados-footer text-center">
    <div class="row dados-footer-1">
      <div class="col-12 mt-5">
        <div class="row contactos-titulo mb-4"><div class="col-12 text-center">Siga-me nas redes sociais</div></div>
        <div class="row redes-sociais">
          <a href="<?= getRedeSocial("instagram"); ?>"><div class="icone instagram"></div></a>
          <a href="<?= getRedeSocial("facebook"); ?>"><div class="icone facebook"></div></a>
          <a href="<?= getRedeSocial("linkedin"); ?>"><div class="icone linkedin"></div></a>
        </div>
      </div>
    </div>

    <div class="row dados-footer-2">
      <div class="col-12 p-0">
        <a href="https://www.livroreclamacoes.pt/" class="reclamacoes"></a>
        <a href="https://sebastiaoalves.com/ralc" class="ralc"></a>
      </div>
      <div class="col-12 p-0 mt-5">
        <div class="col-12 text-center p">Políticas de Cookies.</div>
        <div class="col-12 text-center p">Copyright 2021 © Grupo MediaMaster. Todos os direitos reservados.</div>
      </div>
    </div>
  </div>

</div>

</footer>
<!-- FIM PARTE INFERIOR -->

<script>
  if(pagina_actual != "home"){
    scrollCaixaBranca();
  }
</script>

</body>
</html>