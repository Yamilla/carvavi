<?php
include_once("../classes/manipulaDados.php");
$id = $_GET['id'];
$nome = $_GET['nome'];
$lote = $_GET['lote'];
$quantidade = $_GET['quantidade'];
$fabricacao = $_GET['fabricacao'];
$validade = $_GET['validade'];
$laboratorio = $_GET['laboratorio'];
?>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Alterar vacina cadastradas</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form method="post" enctype="multipart/form-data" action="<?="controller/alterarvacina.php?id=".$id?>">
                            <div class="mb-3">
                                <label>Nome:</label>
                                <input type="text" name="txtNomevac" class="form-control" value="<?php echo $nome; ?>" required />
                            </div>
                            <div class="mb-3">
                                <label>lote:</label>
                                <input type="text" name="txtLote" class="form-control" value="<?php echo $lote; ?>" required />
                            </div>
                            <div class="mb-3">
                                <label>Quantidade: </label>
                                <input type="number" name="txtQuantidade" class="form-control" value="<?php echo $quantidade; ?>"required />
                            </div>
                            <div class="mb-3">
                                <label>Data de fabricação: </label>
                                <input type="date" name="txtDatafabric" class="form-control" value="<?php echo $fabricacao; ?>" required />
                            </div>
                            <div class="mb-3">
                                <label>Data de validade: </label>
                                <input type="date" name="txtDatavalid" class="form-control"value="<?php echo $validade; ?>"required />
                            </div>
                            <div class="mb-3">
                                <label>Laboratório: </label>
                                <input type="text" name="txtLaboratorio" class="form-control" value="<?php echo $laboratorio; ?>" required />
                            </div>
                            <div class="row justify-content-around">
                                <div class="col-4">
                                    <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Salvar</button>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-warning" href="?secao=vacinascadastradas" role="button">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>