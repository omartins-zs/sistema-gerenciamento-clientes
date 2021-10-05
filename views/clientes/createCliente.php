<section class="container">
    <div class="box">
        <div class="box-header">
            <div class="box-title">
                <h2 class="text-center"> Cadastrar Clientes</h2>
            </div>
            <hr />
            <div class="box-body">
                <form action="" method="post" enctype="multipart/form/data">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name">Nome completo:</label>
                            <input type="text" class="form-control" id="name" name="name" required
                                placeholder="Digite seu nome completo" autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="rg">R.G:</label>
                            <input type="text" class="form-control" id="rg" name="rg" required
                                placeholder="Digite seu R.G" autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="cpf">C.P.F:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" required
                                placeholder="Digite seu C.P.F" autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="phone">TELEFONE:</label>
                            <input type="text" class="form-control" id="phone" name="phone" required
                                placeholder="Telefone com DDD" autofocus>
                        </div>
                        <div class="col-md-2">
                            <label for="cep">CEP:</label>
                            <input type="text" class="form-control" id="cep" name="cep" required
                                placeholder="Digite seu CEP" autofocus>
                        </div>
                        <div class="col-md-5">
                            <label for="address">ENDEREÇO:</label>
                            <input type="text" class="form-control" id="address" name="address" required
                                placeholder="Digite seu endereço" autofocus>
                        </div>
                        <div class="col-md-2">
                            <label for="num">NUMERO:</label>
                            <input type="text" class="form-control" id="num" name="num" required placeholder="Numero"
                                autofocus>
                        </div>
                        <div class="col-md-3">
                            <label for="bairro">BAIRRO:</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" required
                                placeholder="Bairro" autofocus>
                        </div>
                        <div class="col-md-2">
                            <label for="city">CIDADE:</label>
                            <input type="text" class="form-control" id="city" name="city" required placeholder="Cidade"
                                autofocus>
                        </div>
                        <div class="col-md-2">
                            <label for="uf">ESTADO:</label>
                            <input type="text" class="form-control" id="uf" name="uf" required placeholder="Estado"
                                autofocus>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right">
                            <a href="index.php" type="reset" class="btn btn-danger">Cancelar</a>
                            <button type="submit" name="confirm" class="btn btn-success">Confirmar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>