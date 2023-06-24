<?php require_once("./cabecalho.php") ?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contato</h2>
            <p>Entre em contato conosco, em breve lhe retornaremos.</p>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo"></i>
                        <h4>Endereco</h4>
                        <p>Rua Afonso Pena, 1112</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email</h4>
                        <p>gustavodornelasph@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Telefone</h4>
                        <p>(34) 9 9253-2629</p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.520113522703!2d-46.997955884587434!3d-18.95262388715875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94afba68b27c963b%3A0xd03dcdc2c4bd5c2a!2sR.%20Afonso%20Pena%2C%201112%20-%20Santo%20Ant%C3%B3nio%2C%20Patroc%C3%ADnio%20-%20MG%2C%2038740-000!5e0!3m2!1spt-BR!2sbr!4v1680215641780!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="envar_contato.php" method="post" role="form" class="form-control">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Seu nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Seu e-mail</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Assunto</label>
                        <input type="text" class="form-control" name="assunto" id="assunto" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Mensagem</label>
                        <textarea class="form-control" name="mensagem" id="mensagem" rows="10" required></textarea>
                    </div>
                    <!--
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        -->
                    <div class="text-center "><button type="submit" class="mt-3">Enviar mensagem</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

<?php require_once("./rodape.php") ?>