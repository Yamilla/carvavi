<section class="cabecalho">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
  <a class="navbar-brand" href="home.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pacientes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?secao=cadastrarpaciente">Cadastrar pacientes</a></li>
            <li><a class="dropdown-item" href="?secao=funcionariocadastrado">Paciente cadastrados</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Vacinas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?secao=cadastrarvacinas">Cadastrar vacinas</a></li>
            <li><a class="dropdown-item" href="?secao=unidadecadastrada">Vacinas cadastradas</a></li>
          </ul>
        </li>
      </ul>
     
    </div>
    <a class="navbar-brand"  href="logout.php"><img src="../img/box-arrow-right.svg">Sair</a>
  </div>
</nav>
</section>
