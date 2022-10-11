  <?php
  include_once("../classes/manipulaDados.php");
    $id = $_GET['id'];
    $nomeuni = $_GET['nome'];
    $rua = $_GET['rua'];
    $numero = $_GET['numero'];
    $bairro = $_GET['bairro'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];
    $cep = $_GET['cep'];
    $numUnidade = $_GET['numuni'];
    ?>
  <div class="container">
      <div class=" text-center mt-5 ">
          <h1>Alterar dados da Unidade básica de saúde</h1>
      </div>
      <div class="row ">
          <div class="col-lg-7 mx-auto">
              <div class="card mt-2 mx-auto p-4 bg-light">
                  <div class="card-body bg-light">
                      <div class="container">
                          <form method="post" enctype="multipart/form-data" action="<?="controller/alterarunidade.php?id=".$id ?>">
                              <div class="mb-3">
                                  <label>Nome: </label>
                                  <input type="text" name="txtNomeuni" class="form-control" value="<?php echo $nomeuni; ?>" required />
                              </div>
                              <div class="mb-3">
                                  <label>Rua: </label>
                                  <input type="text" name="txtRua" class="form-control" value="<?php echo $rua; ?>" required />
                              </div>
                              <div class="mb-3">
                                  <label>Número: </label>
                                  <input type="text" name="txtNumero" class="form-control" value="<?php echo $numero; ?>" required />
                              </div>
                              <div class="mb-3">
                                  <label>Bairro: </label>
                                  <input type="text" name="txtBairro" class="form-control" value="<?php echo $bairro; ?>" required />
                              </div>
                              <div class="mb-3">
                                  <label>Cidade: </label>
                                  <input type="text" name="txtCidade" class="form-control" value="<?php echo $cidade; ?>" required />
                              </div>
                              <div class="mb-3">
                                  <label>Estado: </label>
                                  <input type="text" name="txtEstado" class="form-control" value="<?php echo $estado; ?>" required />
                              </div>
                              <div class="mb-3">
                                  <label>CEP: </label>
                                  <input type="text" name="txtCep" class="form-control" value="<?php echo $cep; ?>" required />
                              </div>
                              <div class="mb-3">
                                  <label>Número da unidade: </label>
                                  <input type="text" name="txtNumUnidade" class="form-control" value="<?php echo $numUnidade; ?>" required />
                              </div>
                              <div class="mb-3">
                                  <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Salvar</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>