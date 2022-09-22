<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Cadastro de unidade básica de saúde</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form method="post" enctype="multipart/form-data" action="controller/cadastrarunidade.php">
                            <div class="mb-3">
                                <label>Nome da Unidade: </label>
                                <input type="text" name="txtNomeuni" class="form-control" placeholder="Nome da unidade" required/>
                            </div>
                            <div class="mb-3">
                                <label>Nome da Unidade: </label>
                                <input type="text" name="txtNomeuni" class="form-control" placeholder="Nome da unidade" required/>
                            </div>
                            <div class="mb-3">
                                <label>Rua: </label>
                                <input type="text" name="txtRua" class="form-control" placeholder="Rua" required />
                            </div>
                            <div class="mb-3">
                                <label>Número: </label>
                                <input type="text" name="txtNumero" class="form-control" placeholder="Número" required />
                            </div>
                            <div class="mb-3">
                                <label>Bairro: </label>
                                <input type="text" name="txtBairro" class="form-control" placeholder="Bairro" required />
                            </div>
                            <div class="mb-3">
                                <label>Cidade: </label>
                                <input type="text" name="txtCidade" class="form-control" placeholder="Cidade" required />
                            </div>
                            <div class="mb-3">
                                <label>Estado: </label>
                                <input type="text" name="txtEstado" class="form-control" placeholder="Estado" required />
                            </div>
                            <div class="mb-3">
                                <label>CEP: </label>
                                <input type="text" name="txtCep" class="form-control" placeholder="CEP" required />
                            </div>
                            <div class="mb-3">
                                <label>Número da unidade: </label>
                                <input type="text" name="txtNumUnidade" class="form-control" placeholder="Número da unidade" required />
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>