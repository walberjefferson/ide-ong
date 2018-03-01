<?php include('header.php'); ?>

    <section id="fale-conosco">
        <div class="container">
            <h2 class="titulo">Fale conosco</h2>

            <form action="enviacontato.php" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <fieldset>
                            <label for="">Empresa</label>
                            <input type="text" class="form-control" name="empresa" id=""/>
                        </fieldset>
                        <fieldset>
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id=""/>
                        </fieldset>
                        <fieldset>
                            <label for="">Fone</label>
                            <input type="text" class="form-control phone" name="telefone" id=""/>
                        </fieldset>
                    </div>
                    <div class="col-md-7">
                        <fieldset>
                            <label for="">Mensagem</label>
                            <textarea type="text" class="form-control" name="mensagem" id="" rows="7"
                                      required> </textarea>
                        </fieldset>
                        <fieldset class="text-right">
                            <button type="submit" class="btn btn-blue">Enviar</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="titulo">Onde estamos</h2>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4000.9417671743354!2d-36.35747272394227!3d-7.061024783618902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7aeeeac0a0c4c5f%3A0xe48723970e85d076!2zN8KwMDMnMzkuNyJTIDM2wrAyMScxOC45Ilc!5e0!3m2!1spt-BR!2sbr!4v1510078872420" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>


<?php include('footer.php'); ?>