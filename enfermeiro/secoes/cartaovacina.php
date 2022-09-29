<?php
include_once("../classes/manipulaDados.php");

?>

<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Cartão de vacina</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th></th>
                        <th></th>
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

                                <input type="hidden" name="recId" value="<?= $row['id_paciente']; ?>">
                                <input type="hidden" name="recNome" value="<?= $row['nome_paciente']; ?>">

                                <td><a class="btn btn-outline-success" href="<?= "?secao=vacinapaciente&id=" . $row['id_paciente'] ?>" role="button">Visualizar vacinas</a></td>
                                <td><a class="btn btn-outline-success" href="<?="controller/gerarcartaovacina.php?id=" . $row['id_paciente'] ?>" role="button">Gerar cartão de vacina</a></td>

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