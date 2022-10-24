<?php
include_once("../classes/manipulaDados.php");
?>

<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Vacinas</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Incluir Vacinas</th>
                        <th>Ver</th>
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
                                <td><?= $row['nome_vacina']; ?></td>
                                <input type="hidden" name="recId" value="<?= $row['id_vacina']; ?>">
                                <input type="hidden" name="recNome" value="<?= $row['nome_vacina']; ?>">
                                <td><a class="btn btn-outline-success" href="<?= "?secao=descricaovacina&id=" . $row['id_vacina'] ?>">Incluir dados da vacina</a></td>
                                <td><a class="btn btn-outline-warning" href="<?= "?secao=visualizarvacinas&id=" . $row['id_vacina'] ?>">Visualizar</a></td>
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