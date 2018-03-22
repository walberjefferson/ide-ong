<?php include('header.php'); ?>


    <section id="doacao-mensal">

        <div class="container">

            <div class="row">
                <form action="mail-mensal.php" method="post">
                    <div class="col-md-7">
                        <img src="assets/images/bg_doacao_mensal.jpg" class="img-bg img-responsive" alt="">
                        <br>
                        <fieldset>
                            <label for="">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="" required/>
                        </fieldset>
                    </div>
                    <div class="col-md-5">
                        <h2 class="titulo"">Doação Física Mensal</h2>
                        <div class="valores">
                            <fieldset class="radio-area">
                                <input type="radio" name="valor" value="30.00" id="30" required/>
                                <label for="30"> R$ 30,00 por mês (R$ 1,00/dia)</label>
                            </fieldset>
                            <fieldset class="radio-area">
                                <input type="radio" name="valor" value="60.00" id="60" required/>
                                <label for="60">R$ 60,00 por mês (R$ 2,00/dia)</label>
                            </fieldset>
                            <fieldset class="radio-area">
                                <input type="radio" name="valor" value="80.00" id="80" checked required/>
                                <label for="80">R$ 80,00 por mês (R$ 2,66/dia)</label>
                            </fieldset>
                            <fieldset class="radio-area">
                                <input type="radio" name="valor" value="120.00" id="120" required/>
                                <label for="120">R$ 120,00 por mês (R$ 4,00/dia)</label>
                            </fieldset>
                        </div>


                        <h2 class="titulo" style="margin-top: 53px">Dados Pessoais</h2>

                        <fieldset>
                            <label for="">Nome</label>
                            <input type="text" class="form-control" name="nome" id="" required/>
                        </fieldset>
                        <fieldset>
                            <label for="">CPF</label>
                            <input type="text" class="form-control cpf" name="cpf" id="" required/>
                        </fieldset>
                        <fieldset>
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="" required/>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="">Telefone Fixo</label>
                                    <input type="text" class="form-control phone" name="telefone" id="" />
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="">Telefone Celular</label>
                                    <input type="text" class="form-control phone" name="celular" id="" required/>
                                </fieldset>
                            </div>
                        </div>
                        <fieldset>
                            <label for="">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="" required/>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="">Número</label>
                                    <input type="text" class="form-control" name="numero" id="" required/>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="">Bairro</label>
                                    <input type="text" class="form-control" name="bairro" id="" required/>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="">CEP</label>
                                    <input type="text" class="form-control" name="cep" id="" required/>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="">UF</label>
                                    <input type="text" class="form-control" name="uf" id="" required/>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <label for="">Mensagem</label>
                            <textarea type="text" class="form-control" name="mensagem" id="" rows="3"
                                      required> </textarea>
                        </fieldset>

                        <div class="row">
                            <div class="col-md-10">
                                <fieldset class="checkbox">
                                    <input type="checkbox" name="ciente" value="sim" checked class="check_cliente"/>
                                    <p>
                                        ESTOU CIENTE QUE POSSO A QUALQUER MOMENTO COMUNICAR O
                                        CANCELAMENTO DA MINHA DOAÇÃO MENSAL, ATRAVÉS DO
                                        FONE/FAX, E-MAIL OU ENDEREÇO
                                    </p>
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