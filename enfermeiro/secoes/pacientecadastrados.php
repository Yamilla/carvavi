<?php
include_once("../classes/manipulaDados.php");
?>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Pacientes cadastrados</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>SUS</th>
                        <th>Data de nascimento</th>
                        <th>Telefone</th>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>CEP</th>
                        <th>ALTERAR </th>
                        <th>EXCLUIR </th>
                        <th>VACINAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $busca = new manipulaDados();
                    $busca->setTable("paciente");
                    $resultado = $busca->getAllDataTable();
                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                    ?>
                        <form method="post">
                            <tr>
                                <td><?= $row['id_paciente']; ?></td>
                                <td><?= $row['nome_paciente']; ?></td>
                                <td><?= $row['cpf']; ?></td>
                                <td><?= $row['rg']; ?></td>
                                <td><?= $row['sus']; ?></td>
                                <td><?= $row['nascimento']; ?></td>
                                <td><?= $row['telefone']; ?></td>
                                <td><?= $row['rua']; ?></td>
                                <td><?= $row['numero']; ?></td>
                                <td><?= $row['bairro']; ?></td>
                                <td><?= $row['cidade']; ?></td>
                                <td><?= $row['estado']; ?></td>
                                <td><?= $row['cep']; ?></td>
                                <input type="hidden" name="recId" value="<?= $row['id_paciente']; ?>">
                                <input type="hidden" name="recNome" value="<?= $row['nome_paciente']; ?>">
                                <input type="hidden" name="recCpf" value="<?= $row['cpf']; ?>">
                                <input type="hidden" name="recRg" value="<?= $row['rg']; ?>">
                                <input type="hidden" name="recSus" value="<?= $row['sus']; ?>">
                                <input type="hidden" name="recData" value="<?= $row['nascimento']; ?>">
                                <input type="hidden" name="recTelefone" value="<?= $row['telefone']; ?>">
                                <input type="hidden" name="recRua" value="<?= $row['rua']; ?>">
                                <input type="hidden" name="recNumero" value="<?= $row['numero']; ?>">
                                <input type="hidden" name="recBairro" value="<?= $row['bairro']; ?>">
                                <input type="hidden" name="recCidade" value="<?= $row['cidade']; ?>">
                                <input type="hidden" name="recEstado" value="<?= $row['estado']; ?>">
                                <input type="hidden" name="recCep" value="<?= $row['cep']; ?>">
                                <td><a class="btn btn-outline-warning" href="<?= "?secao=alterarpaciente&id=" . $row['id_paciente'] . "&nome=" . $row['nome_paciente'] . "&cpf=" . $row['cpf'] . "&rg=" . $row['rg'] . "&sus=" . $row['sus'] . "&data=" . $row['nascimento'] . "&telefone=" . $row['telefone'] . "&rua=" . $row['rua'] . "&numero=" . $row['numero'] . "&bairro=" . $row['bairro'] . "&cidade=" . $row['cidade'] . "&estado=" . $row['estado'] . "&cep=" . $row['cep']  ?>" role="button">Alterar</a></td>
                                <td><a class="btn btn-outline-danger" href="<?= "controller/excluirpaciente.php?id=" . $row['id_paciente'] ?>" role="button">Excluir</a></td>
                                <td><a class="btn btn-outline-success" href="<?= "?secao=vacinaaplicada&id=" . $row['id_paciente'] ?>" role="button">Vacinar</a></td>
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