<?php
include_once("../classes/manipulaDados.php");
$id_vacina = $_GET['id'];
?>

<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Dados da vacina cadastrada</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Lote</th>
                        <th>Quantidade</th>
                        <th>Data de fabricação</th>
                        <th>Data de validade</th>
                        <th>laboratório</th>
                        <th>ALTERAR </th>
                        <th>EXCLUIR </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $id_vacina = $_GET['id'];
                    $busca = new manipulaDados();
                    $busca->setTable("vacina" and "descricao_vacina");
                    $resultado = $busca->visualizarVacina($id_vacina);
                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                    ?>
                        <form method="post" action="<?= "?id=" . $id_vacina ?>">
                            <tr>
                                <td><?= $row['id_descricao_vacina']; ?></td>
                                <td><?= $row['lote']; ?></td>
                                <td><?= $row['quantidade']; ?></td>
                                <td><?= $row['data_fabricacao']; ?></td>
                                <td><?= $row['data_validade']; ?></td>
                                <td><?= $row['laboratorio']; ?></td>
                                <input type="hidden" name="recId" value="<?= $row['id_descricao_vacina']; ?>">
                                <input type="hidden" name="recLote" value="<?= $row['lote']; ?>">
                                <input type="hidden" name="recQuantidade" value="<?= $row['quantidade']; ?>">
                                <input type="hidden" name="recFabricacao" value="<?= $row['data_fabricacao']; ?>">
                                <input type="hidden" name="recValidade" value="<?= $row['data_validade']; ?>">
                                <input type="hidden" name="recLaboratorio" value="<?= $row['laboratorio']; ?>">
                                <td><a class="btn btn-outline-warning" href="<?="?secao=alterarvacina&id=".$row['id_descricao_vacina']."&lote=".$row['lote']. "&quantidade=".$row['quantidade']."&fabricacao=".$row['data_fabricacao']. "&validade=".$row['data_validade']. "&laboratorio=".$row['laboratorio'] ?>" role="button">Alterar</a></td>
                                <td><a class="btn btn-outline-danger" href="<?="controller/excluirvacina.php?id=".$row['id_descricao_vacina']?>" role="button">Excluir</a></td>
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