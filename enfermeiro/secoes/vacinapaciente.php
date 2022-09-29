<?php
include_once("../classes/manipulaDados.php");
$id_paciente=$_GET['id'];
?>

<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Cartão de vacina</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Vacina</th>
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                <?php
                
                $id_paciente=$_GET['id'];
                $busca = new manipulaDados();
                $busca->setTable("vacina"and"vacinas_aplicadas");
                $resultado = $busca->vacinasAplicadas($id_paciente);
                while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                ?>
                        <form method="post"action="<?="?id=".$id_paciente ?>">
                            <tr>
                                <td><?= $row['id_vacinas_aplicadas']; ?></td>
                                <td><?= $row['nome_vacina']; ?></td>
                                
                                <input type="hidden" name="recId" value="<?= $row['id_vacinas_aplicadas']; ?>">
                                <input type="hidden" name="recNome" value="<?= $row['nome_vacina']; ?>">

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