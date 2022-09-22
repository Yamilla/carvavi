<?php
include_once("../classes/manipulaDados.php");

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
                        <form method="post" enctype="multipart/form-data" action="controller/alterarvacina.php">
                            <div class="mb-3">
                                <label>Id: </label>
                                <input type="text" name="txtIdvac" class="form-control" placeholder="Id" required />
                            </div>
                            <div class="mb-3">
                                <label>Nome da vacina: </label>
                                <input type="text" name="txtNomevac" class="form-control" placeholder="Nome da vacina" required />
                            </div>
                            <div class="mb-3">
                                <label>lote: </label>
                                <input type="text" name="txtLote" class="form-control" placeholder="Lote" required />
                            </div>
                            <div class="mb-3">
                                <label>Quantidade: </label>
                                <input type="number" name="txtQuantidade" class="form-control" placeholder="Quantidade" required />
                            </div>
                            <div class="mb-3">
                                <label>Data de fabricação: </label>
                                <input type="date" name="txtDatafabric" class="form-control" placeholder="" required />
                            </div>
                            <div class="mb-3">
                                <label>Data de validade: </label>
                                <input type="date" name="txtDatavalid" class="form-control" placeholder="" required />
                            </div>
                            <div class="mb-3">
                                <label>Laboratório: </label>
                                <input type="text" name="txtLaboratorio" class="form-control" placeholder="Laboratório" required />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Selecione o funcionario: </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_funcionario">
                                    <option selected>Nome do funcionario</option>
                                    <?php
                                    $busca = new manipulaDados();
                                    $busca->setTable("funcionario");
                                    $resultado = $busca->getAllDataTable();
                                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                                    ?>
                                        <option value="<?= $row['id_funcionario']; ?>"><?= $row['nome']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Alterar dados</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>