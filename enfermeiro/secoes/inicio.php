<div class="container h-100 mt-4">
  <h2>Tecnico de enfermagem</h2>
  <hr>
  <h4>Bem-vindo(a) <?= session_start();
                    $usuario = $_SESSION['usu']; ?> a área do funcionario</h4>
  <section>
    <h2>ACESSO RÁPIDO</h2>
    <hr>
    <div class="row d-line">
      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="list-group">
          <a href="?secao=cadastrarpaciente" class="list-group-item list-group-item-success list-group-item-action">Cadastrar Pacientes</a>
          <a href="?secao=cadastrarvacinas" class="list-group-item list-group-item-success list-group-item-action">Cadastrar vacinas</a>
          <a href="?secao=pacientecadastrados" class="list-group-item list-group-item-success list-group-item-action">Pacientes cadastrados</a>
          <a href="?secao=vacinascadastradas" class="list-group-item list-group-item-success list-group-item-action">Vacinas cadastradas</a>
          <a href="?secao=unidadecadastrada" class="list-group-item list-group-item-success list-group-item-action">Controle de vacinas</a>
          <a href="?secao=pacientesvacinados" class="list-group-item list-group-item-success list-group-item-action">Pacientes vacinados</a>
          <a href="?secao=unidadecadastrada" class="list-group-item list-group-item-success list-group-item-action">Cartão de vacina</a>
        </div>
      </article>
    </div>
  </section>
</div>