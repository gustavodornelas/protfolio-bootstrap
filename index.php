<?php
require_once("./cabecalho.php")
?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/imagens/backkground-slide-1.jpg); background-position: center;">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown text-light mb-0">Gustavo Dornelas</h2>
                        <h3 class="animate__animated animate__fadeInDown text-light mb-5">Photo & Video</h3>
                        <p class="animate__animated animate__fadeInUp mb-5">"Capturando os momentos de hoje que vão Impressionar seu coração amanhã"</p>
                        <a href="redireciona.php" class="btn-get-started animate__animated animate__fadeInUp scrollto"><i class="bi bi-whatsapp"></i> &nbsp Agendar</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/imagens/backkground-slide-2.jpg); background-position: center;">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown text-light mb-5">Sobre mim</h2>
                        <p class="animate__animated animate__fadeInUp">Oi, meu nome é Gustavo Dornelas, tenho 28 anos e moro em Patrocínio/MG.
                            Aqui nessa pagina você encontra o melhor que tenho a oferecer em meus serviços.
                            <a href="quem-sou.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba mais</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/imagens/backkground-slide-3.jpg); background-position: center;">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown text-light mb-5">Portfolio</h2>
                        <p class="animate__animated animate__fadeInUp">Atuo em várias areas, seja um batizado, casamento, eventos em geral ou até mesmo um ensaio fotografico</p>
                        <a href="portfolio.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba mais</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->


<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">

            <div class="section-title  mt-5">
                <h2>Relatos</h2>
            </div>

            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <img src="./assets/imagens/fotos/foto-1.png" alt="" class="rounded-circle img-fluid mb-5">
                        <h4 class="title  text-center"><a href="">Bruna Cristina</a></h4>
                        <p class="description">A fotografia é uma maneira de sentir, de tocar, de amar. O que você capturou no filme é capturado para sempre ... Lembra-se de pequenas coisas, muito depois que você já esqueceu tudo.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <img src="./assets/imagens/fotos/foto-2.png" alt="" class="rounded-circle img-fluid  mb-5">
                        <h4 class="title  text-center"><a href="">Rani Afonso</a></h4>
                        <p class="description">Para mim, a fotografia é uma arte de observação. Trata-se de encontrar algo interessante em um lugar comum. Descobri que isso tem pouco a ver com as coisas que você vê e tudo a ver com a maneira como as vê. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <img src="./assets/imagens/fotos/foto-3.png" alt="" class="rounded-circle img-fluid  mb-5">
                        <h4 class="title text-center"><a href="">Karen Raniere</a></h4>
                        <p class="description">A vida é como uma câmera. Apenas se concentre no que é importante e capture os bons tempos, desenvolva os negativos e, se as coisas não derem certo, basta tentar outra vez. </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->



    <!-- ======= Onde estamos Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Onde Estamos</h2>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="overflow:hidden;height:360px;width:100%;color: #0095eb" class="mb-5">
                                <div id="gmap_canvas" style="height:350;width:100%;"></div>
                                <style>
                                    #gmap {
                                        overflow: hidden;
                                        height: 360px;
                                        width: 100%;
                                        color: #1705eb;
                                    }

                                    #gmap_canvas {
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .gmap_canvas img {
                                        max-width: none !important;
                                        background: none !important;
                                    }

                                    .gm-ui-hover-effect {
                                        display: none !important;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->



</main><!-- End #main -->

<?php
require_once("./rodape.php");
?>