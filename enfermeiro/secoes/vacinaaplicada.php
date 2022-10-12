<?php
include_once("../classes/manipulaDados.php");
$id = $_GET['id'];
?>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Vacinar</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form method="post" enctype="multipart/form-data" action="<?= "controller/vacinaaplicadas.php?id=" . $id ?>">
                        <div class="mb-3">
                                <label for="exampleFormControlSelect1">Selecione o Nome da vacina: </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="nomeVacina">
                                <option selected>Nome da vacina</option>
                                    <?php
                                    $busca = new manipulaDados();
                                    $busca->setTable("vacina");
                                    $resultado = $busca->getAllDataTable();
                                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                                    ?>
                                        <option value="<?= $row['id_vacina']; ?>"><?= $row['nome_vacina']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                        </div>
                        <div class="mb-3">
                                <label for="exampleFormControlSelect1">Selecione o lote: </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="lote">
                                <option selected>lote</option>
                                    <?php
                                    $busca = new manipulaDados();
                                    $busca->setTable("descricao_vacina");
                                    $resultado = $busca->getAllDataTable();
                                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                                    ?>
                                        <option value="<?= $row['id_descricao_vacina']; ?>"><?= $row['lote']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                        </div>
                            <div class="mb-3">
                                <label>Data da aplicação: </label>
                                <input type="date" name="txtDataaplic" class="form-control" placeholder="" required />
                            </div>
                            <div class="mb-3">
                                <label>Dose: </label>
                                <input type="number" name="txtDose" class="form-control" placeholder="" required />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Selecione o laboratorio: </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="laboratorio">
                                <option selected>Nome do laboratorio</option>
                                    <?php
                                    $busca = new manipulaDados();
                                    $busca->setTable("descricao_vacina");
                                    $resultado = $busca->getAllDataTable();
                                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                                    ?>
                                        <option value="<?= $row['id_descricao_vacina']; ?>"><?= $row['laboratorio']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                        </div>
                        <div class="mb-3">
                                <label for="exampleFormControlSelect1">Selecione o funcionario que vacinou: </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="func">
                                <option selected>Nome do laboratorio</option>
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
                                <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>