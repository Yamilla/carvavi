<div class="container h-100 mt-4">
  <h2>Administrador</h2>
  <hr>
  <h4>Bem-vindo(a) <?= session_start();
                    $usuario = $_SESSION['usu']; ?> a área do administrador</h4>
  <section>
    <h2>ACESSO RÁPIDO</h2>
    <hr>
    <div class="row d-line">
      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="list-group">
          <a href="?secao=cadastrarfuncionario" class="list-group-item list-group-item-success list-group-item-action">Cadastrar funcionário</a>
          <a href="?secao=cadastrarunidade" class="list-group-item list-group-item-success list-group-item-action">Cadastrar unidade básica de saúde</a>
          <a href="?secao=funcionariocadastrado" class="list-group-item list-group-item-success list-group-item-action">Funcionários cadastrados</a>
          <a href="?secao=unidadecadastrada" class="list-group-item list-group-item-success list-group-item-action">Unidades básicas de saúde cadastradas</a>
        </div>
      </article>
    </div>
  </section>
</div>