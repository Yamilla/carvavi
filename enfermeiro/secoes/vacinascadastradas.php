<?php
include_once("../classes/manipulaDados.php");
?>

<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Vacinas cadastradas</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Lote</th>
                        <th>Quantidade</th>
                        <th>Data de fabricação</th>
                        <th>Data de validade</th>
                        <th>laboratório</th>
                        <th>funcionário</th>
                        <th>ALTERAR </th>
                        <th>EXCLUIR </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $busca = new manipulaDados();
                    $busca->setTable("vacina");
                    $resultado = $busca->getAllDataTable();
                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                    ?>
                        <form method="post">
                            <tr>
                                <td><?= $row['id_vacina']; ?></td>
                                <td><?= $row['nome_vacina']; ?></td>
                                <td><?= $row['lote_vacina']; ?></td>
                                <td><?= $row['quantidade']; ?></td>
                                <td><?= $row['data_fabricacao']; ?></td>
                                <td><?= $row['data_validade']; ?></td>
                                <td><?= $row['laboratorio_vacina']; ?></td>
                                <td><?= $row['id_funcionario']; ?></td>
                                <input type="hidden" name="recId" value="<?= $row['id_vacina']; ?>">
                                <input type="hidden" name="recNome" value="<?= $row['nome_vacina']; ?>">
                                <input type="hidden" name="recLote" value="<?= $row['lote_vacina']; ?>">
                                <input type="hidden" name="recQuantidade" value="<?= $row['quantidade']; ?>">
                                <input type="hidden" name="recFabricacao" value="<?= $row['data_fabricacao']; ?>">
                                <input type="hidden" name="recValidade" value="<?= $row['data_validade']; ?>">
                                <input type="hidden" name="recLaboratorio" value="<?= $row['laboratorio_vacina']; ?>">
                                <input type="hidden" name="recIdfunc" value="<?= $row['id_funcionario']; ?>">
                                <td><a class="btn btn-outline-warning" href="?secao=alterarvacina" role="button">Alterar</a></td>
                                <td><a class="btn btn-outline-danger" href="?secao=vacinaaplicada" role="button">Excluir</a></td>
                            </tr>
                        </form>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>