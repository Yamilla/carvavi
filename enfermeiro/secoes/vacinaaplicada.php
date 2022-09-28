<?php
include_once("../classes/manipulaDados.php");

?>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Vacinas aplicadas</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form method="post" enctype="multipart/form-data" action="controller/vacinaaplicadas.php">
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
                                <option selected>Nome da vacina</option>
                                    <?php
                                    $busca = new manipulaDados();
                                    $busca->setTable("vacina");
                                    $resultado = $busca->getAllDataTable();
                                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                                    ?>
                                        <option value="<?= $row['id_vacina']; ?>"><?= $row['lote_vacina']; ?></option>
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
                                    $busca->setTable("vacina");
                                    $resultado = $busca->getAllDataTable();
                                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                                    ?>
                                        <option value="<?= $row['id_vacina']; ?>"><?= $row['laboratorio_vacina']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                        </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1">Selecione o paciente: </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="paciente">
                                <option selected>Nome do paciente</option>
                                    <?php
                                    $busca = new manipulaDados();
                                    $busca->setTable("paciente");
                                    $resultado = $busca->getAllDataTable();
                                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                                    ?>
                                        <option value="<?= $row['id_paciente']; ?>"><?= $row['nome_paciente']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">vacinar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>