<div class="container h-100 mt-4">
  <h2>Paciente</h2>
  <hr>
  <h4>Bem-vindo(a) <?= session_start();
                    $usuario = $_SESSION['usu']; ?> a área do Paciente</h4>
  <section>
    <h2>ACESSO RÁPIDO</h2>
    <hr>
    <div class="row d-line">
      <article class="mt-3 col-lg-4 col-md-6 col-sm-12">
        <div class="list-group">
          <a href="?secao=dadospessoais" class="list-group-item list-group-item-success list-group-item-action">Dados Pessoais</a>
          <a href="?secao=cadastrarvacinas" class="list-group-item list-group-item-success list-group-item-action">Cartão de vacina</a>
        </div>
      </article>
    </div>
  </section>
</div>