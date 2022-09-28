<?php
include_once("../classes/manipulaDados.php");
?>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Pacientes vacinados</h1>
        <section class="container">
            <div class="row justify-content-between">
                <?php
                $busca = new manipulaDados();
                $busca->setTable("paciente" and"vacina" and "vacinas_aplicadas");
                $resultado = $busca->pacienteVacinado();
                while ($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                ?>
                    <article class="col-lg-3 col-md-6 col-sm-12">

                        <div class="card border-success mb-3">
                            <div class="card-header border-success mb-3">
                                Paciente
                            </div>
                            <div class="card-body border-success mb-3">
                                <h5 class="card-title"><?= $row['nome_paciente']; ?></h5>
                                <p class="card-text">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item border-success mb-3">
                                        <h2 class="accordion-header border-success mb-3" id="flush-headingOne">
                                            <button class="accordion-button collapsed border-success mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                Dados pessoais
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body "></div>
                                            <div class="card" style="width: 17rem;">
                                                <ul class="list-group list-group-flush ">
                                                    <li class="list-group-item"><label>CPF:</label> <?= $row['cpf']; ?></li>
                                                    <li class="list-group-item"><label>RG:</label> <?= $row['rg']; ?></li>
                                                    <li class="list-group-item"><label>Data de nascimento:</label> <?= $row['nascimento']; ?></li>
                                                    <li class="list-group-item"><label>Rua:</label> <?= $row['rua']; ?></li>
                                                    <li class="list-group-item"><label>Número:</label> <?= $row['numero']; ?></li>
                                                    <li class="list-group-item"><label>Bairro:</label> <?= $row['bairro']; ?></li>
                                                    <li class="list-group-item"><label>Cidade:</label> <?= $row['cidade']; ?></li>
                                                    <li class="list-group-item"><label>Estado:</label> <?= $row['estado']; ?></li>
                                                    <li class="list-group-item"><label>CEP:</label> <?= $row['cep']; ?></li>
                                                    <li class="list-group-item"><label>Telefone:</label> <?= $row['telefone']; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-success mb-3">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed border-success mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Vacinas aplicadas
                                            </button>
                                        </h2>

                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            
                                                <div class="accordion-body"></div>
                                                <div class="card" style="width: 17rem;">
                                
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item"><label>Nome:</label> <?= $row['nome_vacina']; ?></li>
                                                        <li class="list-group-item"><label>Lote:</label> <?= $row['lote_vacina']; ?></li>
                                                        <li class="list-group-item"><label>Laborátorio:</label> <?= $row['laboratorio_vacina']; ?></li>
                                                        <li class="list-group-item"><label>Dose:</label> <?= $row['dose']; ?></li>
                                                        <li class="list-group-item"><label>Data da aplicação:</label> <?= $row['data_aplicacao']; ?></li>
                                                    </ul>
                    
                                                </div>
                                        </div>

                                    </div>
                                </div>
                                </p>
                                <a href="#" class="btn btn-outline-success">Cartão de vacina</a>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
        </section>
    </div>
</div>