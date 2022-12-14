<?php
include_once("../classes/manipulaDados.php");
?>

<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Técnico de enfermagem cadastrados</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Orgão expedidor</th>
                        <th>Data de nascimento</th>
                        <th>Telefone</th>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>CEP</th>
                        <th>Cargo</th>
                        <th>UBS</th>
                        <th>ALTERAR </th>
                        <th>EXCLUIR </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $busca = new manipulaDados();
                    $busca->setTable("funcionario");
                    $resultado = $busca->getAllDataTable();
                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                    ?>
                        <form method="post">
                            <tr>
                                <td><?= $row['nome']; ?></td>
                                <td><?= $row['cpf']; ?></td>
                                <td><?= $row['rg']; ?></td>
                                <td><?= $row['orgao_expedidor']; ?></td>
                                <td><?= $row['data_nascimento']; ?></td>
                                <td><?= $row['telefone']; ?></td>
                                <td><?= $row['rua']; ?></td>
                                <td><?= $row['numero']; ?></td>
                                <td><?= $row['bairro']; ?></td>
                                <td><?= $row['cidade']; ?></td>
                                <td><?= $row['estado']; ?></td>
                                <td><?= $row['cep']; ?></td>
                                <td><?= $row['cargo']; ?></td>
                                <td> <?= $row['id_unidade']; ?></td>
                                <input type="hidden" name="recNome" value="<?= $row['nome']; ?>">
                                <input type="hidden" name="recCpf" value="<?= $row['cpf']; ?>">
                                <input type="hidden" name="recRg" value="<?= $row['rg']; ?>">
                                <input type="hidden" name="recOrgao" value="<?= $row['orgao_expedidor']; ?>">
                                <input type="hidden" name="recData" value="<?= $row['data_nascimento']; ?>">
                                <input type="hidden" name="recTelefone" value="<?= $row['telefone']; ?>">
                                <input type="hidden" name="recRua" value="<?= $row['rua']; ?>">
                                <input type="hidden" name="recNumero" value="<?= $row['numero']; ?>">
                                <input type="hidden" name="recBairro" value="<?= $row['bairro']; ?>">
                                <input type="hidden" name="recCidade" value="<?= $row['cidade']; ?>">
                                <input type="hidden" name="recEstado" value="<?= $row['estado']; ?>">
                                <input type="hidden" name="recCep" value="<?= $row['cep']; ?>">
                                <input type="hidden" name="recCargo" value="<?= $row['cargo']; ?>">
                                <input type="hidden" name="recIduni" value="  <?= $row['id_unidade']; ?>">
                                <td><a class="btn btn-outline-warning" href= "<?="?secao=alterarfuncionario&id=".$row['id_funcionario']. "&nome=".$row['nome']."&cpf=".$row['cpf']."&rg=".$row['rg']."&orgao=".$row['orgao_expedidor']."&data=".$row['data_nascimento']. "&telefone=".$row['telefone']. "&rua=". $row['rua']. "&numero=".$row['numero']. "&bairro=".$row['bairro']. "&cidade=".$row['cidade']. "&estado=". $row['estado']. "&cep=".$row['cep']. "&cargo=". $row['cargo']. "&iduni=" .$row['id_unidade'] ?>" role="button">Alterar</a></td>
                                <td><a class="btn btn-outline-danger" href="<?="controller/excluirfuncionario.php?id=".$row['id_funcionario'] ?>" role="button">Excluir</a></td>
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

