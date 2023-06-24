<?php require_once("./config.php") ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> <?php echo $nome_empresa ?> </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/imagens/favicon.png" rel="icon">
    <link href="assets/imagens/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v16.0&appId=423235744441291&autoLogAppEvents=1" nonce="FcaHnLMm"></script>

    <!-- Barra superior -->
    <section id="topbar" class="d-flex align-items-center">

        <!-- Contatos -->
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href=<?php echo "$email_link" ?>> <?php echo $email ?> </a>
                <i class="bi bi-phone-fill phone-icon"></i> <a href=<?php echo "$celular_link" ?>> <?php echo $celular ?> </a>
            </div>

            <!-- Redes Sociais -->
            <div class="social-links d-none d-md-block">
                <a href="./redireciona.php" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                <a href="<?php echo $facebook_link ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="<?php echo $instagram_link ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="<?php echo $linkedin_link ?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </section>

    <!-- Cabeçalho -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <h1 class="logo me-auto"><a href="./">Gustavo Dornelas</a></h1>

            <!-- Menu de navegação -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="./">Início</a></li>
                    <li><a class="nav-link scrollto" href="./quem-sou.php">Quem sou</a></li>
                    <li><a class="nav-link scrollto" href="./portfolio.php">Portfólio</a></li>
                    <li><a class="nav-link scrollto" href="./contato.php">Contato</a></li>
                    <li><a class="getstarted scrollto" href="./redireciona.php" target="_blank" title="Vamos marcar uma conversa para que você conheça ainda com mais detalhes os meus serviços, será um prazer!">
                            <i class="bi bi-whatsapp"></i> &nbsp Agendar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>