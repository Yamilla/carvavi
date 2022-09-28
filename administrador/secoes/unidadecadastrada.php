<?php
include_once("../classes/manipulaDados.php");
?>

<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Unidades básicas de saúde cadastradas</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome da unidade</th>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>CEP</th>
                        <th>Número da unidade</th>
                        <th>ALTERAR </th>
                        <th>EXCLUIR </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $busca = new manipulaDados();
                    $busca->setTable("unidade_de_saude");
                    $resultado = $busca->getAllDataTable();
                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                    ?>
                        <form method="post">
                            <tr>
                                <td><?= $row['id_unidade']; ?></td>
                                <td><?= $row['nome_unidade']; ?></td>
                                <td><?= $row['rua']; ?></td>
                                <td><?= $row['numero']; ?></td>
                                <td><?= $row['bairro']; ?></td>
                                <td><?= $row['cidade']; ?></td>
                                <td><?= $row['estado']; ?></td>
                                <td><?= $row['cep']; ?></td>
                                <td><?= $row['numero_unidade']; ?></td>
                                <input type="hidden" name="recId" value="<?= $row['id_unidade']; ?>">
                                <input type="hidden" name="recNome" value="<?= $row['nome_unidade']; ?>">
                                <input type="hidden" name="recRua" value="<?= $row['rua']; ?>">
                                <input type="hidden" name="recNumero" value="<?= $row['numero']; ?>">
                                <input type="hidden" name="recBairro" value="<?= $row['bairro']; ?>">
                                <input type="hidden" name="recCidade" value="<?= $row['cidade']; ?>">
                                <input type="hidden" name="recEstado" value="<?= $row['estado']; ?>">
                                <input type="hidden" name="recCep" value="<?= $row['cep']; ?>">
                                <input type="hidden" name="recNumuni" value="<?= $row['numero_unidade']; ?>">
                                <td><a class="btn btn-outline-warning" href="<?= "?secao=alterarunidade&id=" . $row['id_unidade'] . "&nome=" . $row['nome_unidade'] . "&rua=" . $row['rua'] . "&numero=" . $row['numero'] . "&bairro=" . $row['bairro'] . "&cidade=" . $row['cidade'] . "&estado=" . $row['estado'] . "&cep=" . $row['cep'] . "&numuni=" . $row['numero_unidade'] ?>" role="button">Alterar</a></td>
                                <td><a class="btn btn-outline-danger" href="<?= "controller/excluirunidade.php?id=" . $row['id_unidade'] ?>" role="button">Excluir</a></td>
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