<!DOCTYPE html>
<html lang="pt-br">
<?php
$titulo_site = "Ide Projetos sociais";
?>
<head>
    <meta charset="UTF-8">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
    <title><?php echo $titulo_site; ?></title>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/OwlCarousel2-2.2.1/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/OwlCarousel2-2.2.1/owl.theme.default.min.css">
    <!--    <link rel="stylesheet" href="assets/css/style.css">-->
    <link rel="stylesheet" href="assets/_css/vendor.css">
    <link rel="stylesheet" href="assets/_css/app.min.css">
</head>

<body>

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div id="logo">
                    <a href="." title="Ide Projetos sociais - Pagina inicial">
                        <img class="" src="assets/images/logo_ide.png" width="163" alt="Ide Projetos sociais">
                    </a>
                </div>
            </div>
            <div class="col-md-10 col-sm-10">
                <div class="row col-2">
                    <div class="col-md-3 col-md-offset-6 col-sm-3 col-sm-offset-6">
                        <a href="doacao_mensal.php" title="" class="link-doe">
                            <img src="./assets/images/img-doe.png" alt="Doe aqui e ajude quem precisa"
                                 class="img-responsive"/>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="redes-title">Siga nossas Redes Sociais</div>

                        <ul class="list-inline redes">
                            <li>
                                <a href="https://www.instagram.com/ideprojetos/ " target="_blank" title="Instagram">
                                    <i class="fa fa-instagram fa-3x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/ideprojetossociais/" target="_blank" title="Facebook">
                                    <i class="fa fa-facebook fa-3x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC2FJWpR_WmsDzOaDd2p3d-Q" target="_blank"
                                   title="YouTube">
                                    <i class="fa fa-youtube-play fa-3x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#" data-toggle="modal" data-target="#modal-quem-somos">ONG Ide</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" type="button" id="areas_atuacao" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="true">Áreas de Atuação <i class="fa fa-angle-down"></i> </a>
                    <ul class="dropdown-menu" aria-labelledby="areas_atuacao">
                        <li class="dropdown-submenu">
                            <a class="test" href="#" tabindex="-1">Educação e profissionalizante <i
                                        class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="http://lumen.jampa.br/pequeninos/"> Projeto Pequeninos </a></li>
                                <li><a tabindex="-1" href="http://lumen.jampa.br/pequeninos/pequeninos-teens.php"> Projeto Pequeninos TEENS </a></li>
                                <li><a tabindex="-1" href="http://lumen.jampa.br/pequeninos/"> Projeto Pequeninos Educação </a></li>
                                <li><a tabindex="-1" href="http://lumen.jampa.br/pequeninos/profissionalizante.php"> Projeto Pequeninos Profissionalizante </a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test" href="#" tabindex="-1">Saúde <i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="http://lumen.jampa.br/pequeninos/saude.php"> Projeto Pequeninos Saúde </a></li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="test" href="#" tabindex="-1">Assistência Social <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="http://lumen.jampa.br/pequeninos/casa.php"> Proj. Casa de Acolhimento à Criança </a></li>
                                <li><a tabindex="-1" href="http://lumen.jampa.br/pequeninos/restaurante.php"> Restaurante Social Pequeninos </a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1" class="test">Esporte <i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="http://lumen.jampa.br/pequeninos/sports.php">Projeto Pequeninos Sports </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li <?php if (strpos($_SERVER['PHP_SELF'], 'doacoes.php')) echo 'class="active"'; ?>>
                    <a href="doacoes.php" class="dropdown-toggle" id="doacoes" data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="true">Doações <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="doacoes">
                        <li><a href="doacao_mensal.php"> Doações mensais </a></li>
                        <li><a href="doacao_fisica.php"> Física </a></li>
                        <li><a href="doacao_juridica.php"> Jurídica </a></li>
                    </ul>
                </li>
                <li <?php if (strpos($_SERVER['PHP_SELF'], 'imprensa_midias.php')) echo 'class="active"'; ?>><a
                            href="imprensa_midias.php">Imprensa / Mídias</a></li>
                <li <?php if (strpos($_SERVER['PHP_SELF'], 'fale-conosco.php')) echo 'class="active"'; ?>><a
                            href="fale-conosco.php">Fale conosco</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


	