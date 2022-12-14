<div class="container h-100 mt-4">
  <h2>Técnico de enfermagem</h2>
  <hr>
  <?php
  session_start();
  $login = $_SESSION['usu'];
  echo '<h4>Bem vindo(a), ' . $login . '!</h4>';
  ?>
  <section>
    <h2>ACESSO RÁPIDO</h2>
    <hr>

    <div class="row d-line">

      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card border-success" style="width: 18rem;">
          <div class="card-body border-success">
            <h5 class="card-title">Cadastrar Pacientes</h5>
            <p class="card-text"></p>
            <a href="?secao=cadastrarpaciente" class="btn btn-success">Ir</a>
          </div>
        </div>
      </article>

      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card border-success" style="width: 18rem;">
          <div class="card-body border-success">
            <h5 class="card-title">Cadastrar de vacinas</h5>
              <p class="card-text"></p>
              <a href="?secao=cadastrovacina" class="btn btn-success">Ir</a>
          </div>
        </div>
      </article>

      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card border-success" style="width: 18rem;">
          <div class="card-body border-success">
            <h5 class="card-title">Pacientes cadastrados</h5>
            <p class="card-text"></p>
            <a href="?secao=pacientecadastrados" class="btn btn-success">Ir</a>
          </div>
        </div>
      </article>

      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card border-success" style="width: 18rem;">
          <div class="card-body border-success">
            <h5 class="card-title">Vacinas cadastradas</h5>
            <p class="card-text"></p>
            <a href="?secao=vacina" class="btn btn-success">Ir</a>
          </div>
        </div>
      </article>

      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card border-success" style="width: 18rem;">
          <div class="card-body border-success">
            <h5 class="card-title">Cartão de vacina</h5>
            <p class="card-text"></p>
            <a href="?secao=cartaovacina" class="btn btn-success">Ir</a>
          </div>
        </div>
      </article>

    </div>
  </section>
</div>