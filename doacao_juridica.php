<?php include('header.php'); ?>


    <section id="doacao-juridica">
        <div class="container">

            <div class="row">
                <form action="mail-juridica.php" method="post">
                    <div class="col-md-6">
                        <img src="assets/images/bg_doacao_juridica.jpg" class="img-bg img-responsive" alt="">
                        <br>
                        <fieldset>
                            <label for="">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="" required/>
                        </fieldset>

                        <fieldset>
                            <label for="">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="" required/>
                        </fieldset>

                    </div>
                    <div class="col-md-6">
                        <h2 class="titulo">Doação Coorporativa Mensal</h2>

                        <div class="valores">
                            <fieldset class="radio-area">
                                <input type="radio" name="valor" value="200.00" id="30" required/>
                                <label for="30"> R$ 200,00 por mês (R$ 6,66/dia)</label>
                            </fieldset>
                            <fieldset class="radio-area">
                                <input type="radio" name="valor" value="400.00" id="60" required/>
                                <label for="60">R$ 400,00 por mês (R$ 13,33/dia)</label>
                            </fieldset>
                            <fieldset class="radio-area">
                                <input type="radio" name="valor" value="600.00" id="80" checked required/>
                                <label for="80">R$ 600,00 por mês (R$ 20,00/dia)</label>
                            </fieldset>
                            <fieldset class="radio-area t-text">
                                <input type="text" name="outro" class="outro-valor" placeholder="Ex: 300,00">
                                <input type="radio" name="valor" value="outro" id="outro" class="hidden" required/>
                                <label for="outro" class="outro-valor">Outro valor</label>
                            </fieldset>
                        </div>

                        <h2 class="titulo">Dados Empresariais</h2>

                        <fieldset>
                            <label for="nome_fantasia">Nome Fantasia</label>
                            <input type="text" class="form-control" name="nome" id="nome_fantasia" required/>
                        </fieldset>
                        <fieldset>
                            <label for="razao_social">Razão social</label>
                            <input type="text" class="form-control" name="razao" id="razao_social" required/>
                        </fieldset>
                        <fieldset>
                            <label for="cnpj">CNPJ</label>
                            <input type="text" class="form-control cnpj" name="cnpj" id="cnpj" required/>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="telefone">Telefone Fixo</label>
                                    <input type="text" class="form-control phone" name="telefone" id="telefone" />
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="celular">Telefone Celular</label>
                                    <input type="text" class="form-control phone" name="celular" id="celular" required/>
                                </fieldset>
                            </div>
                        </div>
                        <fieldset>
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required/>
                        </fieldset>


                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control" name="numero" id="numero" required/>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" name="bairro" id="bairro" required/>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" name="cep" id="cep" required/>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="uf">UF</label>
                                    <input type="text" class="form-control" name="uf" id="uf" required/>
                                </fieldset>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <label for="mensagem">Mensagem</label>
                            <textarea type="text" class="form-control" name="mensagem" id="mensagem" rows="7"
                                      required> </textarea>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-10">
                                <fieldset>
                                    <div class="checkbox">
                                        <input type="checkbox" name="ciente" value="sim" checked class="check_cliente"/>
                                        <p>
                                            ESTOU CIENTE QUE POSSO A QUALQUER MOMENTO COMUNICAR O
                                            CANCELAMENTO DA MINHA DOAÇÃO MENSAL, ATRAVÉS DO
                                            FONE/FAX, E-MAIL OU ENDEREÇO
                                        </p>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-2">
                                <fieldset class="text-right">
                                    <button type="submit" class="btn btn-blue">Enviar</button>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>