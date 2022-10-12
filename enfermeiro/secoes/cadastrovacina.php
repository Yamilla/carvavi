<?php
include_once("../classes/manipulaDados.php");

?>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Cadastrar Vacina</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form method="post" enctype="multipart/form-data" action="controller/cadastrovacina.php">
                            <div class="mb-3">
                                <label>Nome: </label>
                                <input type="text" name="txtNomevac" class="form-control" placeholder="Nome da vacina" required />
                            </div>
                            <div class="row justify-content-around">
                                <div class="col-4">
                                    <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Cadastrar</button>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-warning" href="home.php" role="button">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>