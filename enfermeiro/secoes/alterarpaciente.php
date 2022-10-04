<?php
include_once("../classes/manipulaDados.php");
$id = $_GET['id'];
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$rg = $_GET['rg'];
$sus = $_GET['sus'];
$telefone = $_GET['telefone'];
$data_nascimento = $_GET['data'];
$rua = $_GET['rua'];
$numero = $_GET['numero'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];
$cep = $_GET['cep'];
?>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Alterar dados pessoais do paciente</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form method="post" enctype="multipart/form-data" action="<?= "controller/alterarpaciente.php?id=" . $id ?>">
                            <div class="mb-3">
                                <label>Nome do paciente: </label>
                                <input type="text" name="txtNome" class="form-control" value="<?php echo $nome; ?>" required />
                            </div>
                            <div class="mb-3">
                                <label>CPF: </label>
                                <input type="text" name="txtCpf" class="form-control" value="<?php echo $cpf; ?>" required />
                            </div>
                            <div class="mb-3">
                                <label>RG: </label>
                                <input type="text" name="txtRg" class="form-control" value="<?php echo $rg; ?>" required />
                            </div>
                            <div class="mb-3">
                                <label>SUS: </label>
                                <input type="text" name="txtSus" class="form-control" value="<?php echo $sus; ?>" required />
                            </div>
                            <div class="mb-3">
                                <label>Data de nascimento: </label>
                                <input type="date" name="txtData" class="form-control" value="<?php echo $data_nascimento; ?>" required />
                            </div>
                            <div class="mb-3">
                                <label>Telefone: </label>
                                <input type="text" name="txtTelefone" class="form-control" value="<?php echo $telefone; ?>" required />
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
                            <div class="row justify-content-around">
                                <div class="col-4">
                                    <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Salvar</button>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-warning" href="?secao=pacientecadastrados" role="button">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>