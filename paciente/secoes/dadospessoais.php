<?php
include_once("../classes/manipulaDados.php");

?>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Dados Pessoais</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
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
                        <th>Email</th>
                        <th>Cartão de vacina</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $login = $_GET['login'];
                    $busca = new manipulaDados();
                    $busca->setTable("paciente");
                    $resultado = $busca->mostrarDadosPessoais($login);
                    while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                    ?>
                        <form method="post">
                            <tr>
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
                                <td><?= $row['email']; ?></td>
                                <input type="hidden" name="recNome" value="<?= $row['nome_paciente']; ?>">
                                <input type="hidden" name="recCpf" value="<?= $row['cpf']; ?>">
                                <input type="hidden" name="recRg" value="<?= $row['rg']; ?>">
                                <input type="hidden" name="recSus" value="<?= $row['rg']; ?>">
                                <input type="hidden" name="recData" value="<?= $row['nascimento']; ?>">
                                <input type="hidden" name="recTelefone" value="<?= $row['telefone']; ?>">
                                <input type="hidden" name="recRua" value="<?= $row['rua']; ?>">
                                <input type="hidden" name="recNumero" value="<?= $row['numero']; ?>">
                                <input type="hidden" name="recBairro" value="<?= $row['bairro']; ?>">
                                <input type="hidden" name="recCidade" value="<?= $row['cidade']; ?>">
                                <input type="hidden" name="recEstado" value="<?= $row['estado']; ?>">
                                <input type="hidden" name="recCep" value="<?= $row['cep']; ?>">
                                <input type="hidden" name="recEmail" value="<?= $row['email']; ?>">
                                <td><a class="btn btn-outline-success" href="<?="controller/gerarcartaovacina.php?id=" . $row['id_paciente'] ?>" role="button">Gerar</a></td>
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