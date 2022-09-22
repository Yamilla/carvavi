<?php
include_once("../classes/manipulaDados.php");

?>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Cadastro de funcionário</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form method="post" enctype="multipart/form-data" action="controller/cadastrarfuncionario.php">
                            <div class="mb-3">
                                <label>Nome do funcionário: </label>
                                <input type="text" name="txtNome" class="form-control" placeholder="Nome do funcionário" required />
                            </div>
                            <div class="mb-3">
                                <label>CPF: </label>
                                <input type="text" name="txtCpf" class="form-control" placeholder="CPF" required />
                            </div>
                            <div class="mb-3">
                                <label>RG: </label>
                                <input type="text" name="txtRg" class="form-control" placeholder="RG" required />
                            </div>
                            <div class="mb-3">
                                <label>Data de nascimento: </label>
                                <input type="date" name="txtData" class="form-control" placeholder="Data de nascimento" required />
                            </div>
                            <div class="mb-3">
                                <label>Telefone: </label>
                                <input type="text" name="txtTelefone" class="form-control" placeholder="Telefone" required />
                            </div>
                            <div class="mb-3">
                                <label>Rua: </label>
                                <input type="text" name="txtRua" class="form-control" placeholder="Rua" required />
                            </div>
                            <div class="mb-3">
                                <label>Número: </label>
                                <input type="text" name="txtNumero" class="form-control" placeholder="Número" required />
                            </div>
                            <div class="mb-3">
                                <label>Bairro: </label>
                                <input type="text" name="txtBairro" class="form-control" placeholder="Bairro" required />
                            </div>
                            <div class="mb-3">
                                <label>Cidade: </label>
                                <input type="text" name="txtCidade" class="form-control" placeholder="Cidade" required />
                            </div>
                            <div class="mb-3">
                                <label>Estado: </label>
                                <input type="text" name="txtEstado" class="form-control" placeholder="Estado" required />
                            </div>
                            <div class="mb-3">
                                <label>CEP: </label>
                                <input type="text" name="txtCep" class="form-control" placeholder="CEP" required />
                            </div>
                            <div class="mb-3">
                                <label>Cargo: </label>
                                <input type="text" name="txtCargo" class="form-control" placeholder="Cargo" required />
                            </div>
                            <div class="mb-3">
                                <label>Email: </label>
                                <input name="txtEmail" type="email" class="form-control" placeholder="Email" required />
                            </div>
                            <div class="mb-3">
                                <label>Usuário: </label>
                                <input type="text" name="txtUsuario" class="form-control" placeholder="Usuário" required />
                            </div>
                            <div class="mb-3">
                                <label>Senha: </label>
                                <input type="text" name="txtSenha" class="form-control" placeholder="Senha" required />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Selecione a unidade que o funcionário trabalha: </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_unidade">
                                <option selected>Nome da unidade</option>
                                    <?php
                                    $busca = new manipulaDados();
                                    $busca->setTable("unidade_de_saude");
                                    $resultado = $busca->getAllDataTable();
                                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                                    ?>
                                        <option value="<?= $row['id_unidade']; ?>"><?= $row['nome_unidade']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>