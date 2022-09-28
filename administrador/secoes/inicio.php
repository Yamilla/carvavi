<div class="container h-100 mt-4">
  <h2>Administrador</h2>
  <hr>
  <?php 
  session_start();
  $login = $_SESSION['usu'];
  echo '<h4>Bem vindo(a) ' . $login . ' a área do administrador</h4>';
  ?>
  <section>
    <h2>ACESSO RÁPIDO</h2>
    <hr>
    <div class="row d-line">
      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card border-success" style="width: 18rem;">
          <div class="card-body border-success">
            <h5 class="card-title">Cadastrar funcionário</h5>
            <p class="card-text"></p>
            <a href="?secao=cadastrarfuncionario" class="btn btn-success">Ir</a>
          </div>
        </div>
      </article>

      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card border-success" style="width: 18rem;">
          <div class="card-body border-success">
            <h5 class="card-title">Cadastrar unidade básica de saúde</h5>
            <p class="card-text"></p>
            <a href="?secao=cadastrarunidade" class="btn btn-success">Ir</a>
          </div>
        </div>
      </article>

      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card border-success" style="width: 18rem;">
          <div class="card-body border-success">
            <h5 class="card-title">Funcionários cadastrados</h5>
            <p class="card-text"></p>
            <a href="?secao=funcionariocadastrado" class="btn btn-success">Ir</a>
          </div>
        </div>
      </article>

      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card border-success" style="width: 18rem;">
          <div class="card-body border-success">
            <h5 class="card-title">Unidades básicas de saúde cadastradas</h5>
            <p class="card-text"></p>
            <a href="?secao=unidadecadastrada" class="btn btn-success">Ir</a>
          </div>
        </div>
      </article>

    </div>
  </section>
</div>