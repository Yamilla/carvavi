<?php
  include_once("../classes/manipulaDados.php");
  $login = $_GET['login'];
    ?>
  <div class="container">
      <div class=" text-center mt-5 ">
          <h1>Alterar senha</h1>
      </div>
      
      <div class="row ">
          <div class="col-lg-7 mx-auto">
              <div class="card mt-2 mx-auto p-4 bg-light">
                  <div class="card-body bg-light">
                      <div class="container">
                          <form method="post" enctype="multipart/form-data" action="<?= "controller/alterarsenha.php?login=" .$login ?>" >
                              <div class="mb-3">
                                  <label>Nova senha: </label>
                                  <input type="password" name="altsenha" class="form-control"  required />
                              </div>
                                  <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Salvar</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>