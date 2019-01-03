<?php
if(isset($_GET['enviado'])){
    echo "<script>alert('Email enviado com Sucesso!');</script>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Infomix</title>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link rel = "stylesheet" type = "text/css" href = "Styles/style.css">
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>

    <body>
        <!-- Script -->
        <script type = "text/javascript" src = "Scripts/script.js"></script>

        <!-- NavBar -->
        <div class="navbar-fixed" id="barra_principal_fixa">
            <nav id="barra_principal">
                <div class="container">
                    <div class="nav-wrapper">
                        <a class="waves-effect waves-light btn-small btn hoverable hide-on-med-and-down buttonCliente" href="http://138.117.147.29/central/login.php">Área do <b>Cliente</b></a>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a class="scrollLink" href="#inicio_outside">Início</a></li>
                            <li><a class="scrollLink" href="#empresa">Nossa Empresa</a></li>
                            <li><a class="scrollLink" href="#servicos">Serviços</a></li>
                            <li><a class="scrollLink" href="#cidades">Cidades</a></li>
                            <li><a class="scrollLink" href="#contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <ul class="sidenav" id="mobile-demo">
            <li><a class="scrollLink" href="#inicio">Início</a></li>
            <li><a class="scrollLink" href="#empresa">Nossa Empresa</a></li>
            <li><a class="scrollLink" href="#servicos">Serviços</a></li>
            <li><a class="scrollLink" href="#planos">Planos</a></li>
            <li><a class="scrollLink" href="#cidades">Cidades</a></li>
            <li><a class="scrollLink" href="#contato">Contato</a></li>
        </ul>

        <!-- Corpo -->
        <div id="inicio_outside">
<!--            Desktop-->
            <div style="height: 100vh;" class="hide-on-med-and-down">
                <div class="slider fullscreen">
                    <ul class="slides">
                        <li>
                            <img src="Images/imagem-carrossel-1.jpg">
                        </li>
                        <li>
                            <img src="Images/imagem-carrossel-2.jpg">
                        </li>
                        <li>
                            <img src="Images/imagem-carrossel-3.jpg">
                        </li>
                    </ul>
                </div>
                <div class="logo-wrapper">
                    <div class="row center">
                        <img src="Images/logo infomix.png" class="logo">
                    </div>
                </div>
            </div>
<!--            Mobile-->
            <div id="inicio" class="center hide-on-large-only">
                <img src="Images/logo infomix.png" class="logo">
                <a class="waves-effect waves-light btn-small btn red darken-3" id="button_inicio"  href="http://138.117.147.29/central/login.php">Área do <b>Cliente</b></a>
            </div>
        </div>

        <div id="empresa">
            <div class="row container">
                <div class="col s12 l4 offset-l4">
                    <h2 class="topDistance hide-on-med-and-down">NOSSA EMPRESA</h2>
                    <h5 class="topDistance hide-on-large-only">NOSSA <b>EMPRESA</b></h5>
                </div>
            </div>
            <div class="row container">
                <div class="col s12 l4 offset-l4">
                    <img src="Images/separador-empresa.png" class="col s12 hide-on-med-and-down">
                </div>
            </div>
            <div class="row container">
                <div class="col l4 hide-on-med-and-down">
                    <img src="Images/mesa.png" class="right" style="height: 500px; position: relative; right: 100px">
                </div>
                <div class="col s12 l4" id="corpo_texto">
                    <p>A Infomix é uma empresa do ramo de tecnologia voltada ao fornecimento de internet de alta velocidade tanto via rádio quanto fibra óptica, em várias cidades de Santa Catarina.</p>
                    <p>Desde 2007 buscamos o que há de melhor em atendimento eficiente e rápido, com garantia de qualidade nos serviços prestados, seriedade com o trabalho realizado e entrega exemplar com os clientes e parceiros.</p>
                    <p>Soluções em tecnologia e excelência no que se faz é só na <b>Infomix!</b></p>
                </div>
            </div>
            <div class="row container center hide-on-large-only" style="padding-top: 100px; padding-bottom: 100px;">
                <div class="col s12">
                    <img src="Images/mesa.png" style="width: 70%">
                </div>
            </div>
        </div>

        <div id="servicos">
            <div class="row container">
                <div class="col s12">
                    <h2 class="center topDistance hide-on-med-and-down blue-text text-darken-4">SERVIÇOS DE INTERNET</h2>
                    <h5 class="center topDistance hide-on-large-only" style="color: #243037">SERVIÇOS DE <b>INTERNET</b></h5>
                </div>
                <div class="col s12 l4 offset-l4 hide-on-med-and-down">
                    <img src="Images/separador-servicos.png" class="col s12">
                </div>
                <div class="col l12" id="corpo_texto_servicos">
                    <div class="col s12 l6">
                        <i class="material-icons hide-on-large-only">wifi</i>
                        <h5 class="textoEspacado"><b>Fibra Óptica</b></h5>
                        <p class="textoEspacado">A <b>fibra óptica</b> é uma tecnologia de alta performance para conexões, sendo atualmente o método mais avançado em termos de estabilidade e velocidade de Internet.</p>
                    <hr class="hide-on-large-only espacador">
                    </div>
                    <div class="col s12 l6">
                        <i class="material-icons hide-on-large-only">wifi</i>
                        <h5 class="textoEspacado"><b>Via Rádio</b></h5>
                        <p class="textoEspacado">A conexão <b>via rádio</b> opera sem fios, tendo seu sinal propagado por bases de transmissão, prezando assim por praticidade e conectividade.</p>
                    </div>
                </div>

                <div class="hide-on-med-and-down">
                    <div class="col l12">
                        <h2 class="center topDistance blue-text text-darken-4">PLANOS DE INTERNET</h2>
                    </div>
                    <div class="col l4 offset-l4">
                        <img src="Images/separador-servicos.png" class="col s12">
                    </div>
                    <div class="col l12" id="corpo_texto_servicos">
                        <div class="col l6 center" style="margin-top: 50px;">
                            <h5 class="textoEspacado borda"><b>FIBRA ÓPTICA</b></h5>
                            <br>
                            <div class="opcoesPlanos">
                                <div class="bg"></div>
                                <div class="velocidadesPlanos">
                                    <p class="center textoPlanos"><b>5 Mb</b></p>
                                    <p class="center textoPlanos"><b>10 Mb</b></p>
                                    <p class="center textoPlanos"><b>15 Mb</b></p>
                                    <p class="center textoPlanos"><b>30 Mb</b></p>
                                    <p class="center textoPlanos"><b>50 Mb</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col l6 center" style="margin-top: 50px;">
                            <h5 class="textoEspacado borda"><b>VIA RÁDIO</b></h5>
                            <br>
                            <div class="opcoesPlanos">
                                <div class="bg"></div>
                                <div class="velocidadesPlanos">
                                    <p class="center textoPlanos"><b>1 Mb</b></p>
                                    <p class="center textoPlanos"><b>2 Mb</b></p>
                                    <p class="center textoPlanos"><b>4 Mb</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="planos" class="hide-on-large-only">
            <div class="row container">
                <div>
                    <div class="col s12">
                        <h5 class="center topDistance bottomDistance">PLANOS DE <b>INTERNET</b></h5>
                    </div>
                    <div class="col s12" id="corpo_texto_servicos">
                        <div class="col s12">
                            <h5 class="textoEspacado borda"><b>Fibra Óptica</b></h5>
                            <br>
                            <div class="opcoesPlanos">
                                <div class="bg"></div>
                                <div class="velocidadesPlanos">
                                    <p class="center textoPlanos"><b>5 Mb</b></p>
                                    <p class="center textoPlanos"><b>10 Mb</b></p>
                                    <p class="center textoPlanos"><b>15 Mb</b></p>
                                    <p class="center textoPlanos"><b>30 Mb</b></p>
                                    <p class="center textoPlanos"><b>50 Mb</b></p>
                                </div>
                            </div>
                            <br><br>
                        </div>
                        <div class="col s12">
                            <h5 class="textoEspacado borda"><b>Via Rádio</b></h5>
                            <br>
                            <div class="opcoesPlanos">
                                <div class="bg"></div>
                                <div class="velocidadesPlanos">
                                    <p class="center textoPlanos"><b>1 Mb</b></p>
                                    <p class="center textoPlanos"><b>2 Mb</b></p>
                                    <p class="center textoPlanos"><b>4 Mb</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="cidades">
            <div class="row">
                <div class="col s12 red darken-4 white-text">
                    <h2 class="center topDistance bottomDistance hide-on-med-and-down">—— CIDADES DE ATUAÇÃO ——</h2>
                    <h5 class="center topDistance bottomDistance headerCidadesMobile hide-on-large-only">—— CIDADES DE ATUAÇÃO ——</h5>
                </div>
            </div>
            <div clas="col s12" id="imagem_cidades">
                <img src="Images/imagem-cidades-desktop.jpg" class="imagemCidades hide-on-med-and-down">
                <img src="Images/imagem-cidades-mobile.jpg" class="imagemCidades hide-on-large-only">
            </div>
        </div>

        <div id="contato" class="red darken-4">
            <div class="row container">
                <div class="col s12 l12 white-text">
                    <div class="hide-on-large-only center">
                        <div class="col s12">
                            <br><b>CONTATO</b><p class="nullTopMargin">(49) 3277-1333</p>
                            <b>ENDEREÇO</b><p class="nullTopMargin">Rua Frontino Vieira de Souza, 181, Centro, Bom Retiro</p>
                            <a href="https://www.facebook.com/infomixonline/"><img src="Images/fb.png" class="socialImg"></a> /infomix
                            <br>
                            <a href="https://www.instagram.com/infomixinternet/"><img src="Images/insta.png" class="socialImg"></a> @infomix
                        </div>
                        <div class="col s12 l6">
                            <form action="email.php" method="post">
                                <div class="input-field">
                                    <input id="nome" name="nome" type="text" class="validate white-text">
                                    <label for="nome">NOME</label>
                                </div>

                                <div class="input-field">
                                    <input id="email" name="email" type="email" class="validate white-text">
                                    <label for="email">E-MAIL</label>
                                </div>

                                <div class="input-field">
                                    <textarea id="mensagem" name="mensagem" class="materialize-textarea white-text"></textarea>
                                    <label for="mensagem">MENSAGEM</label>
                                </div>
                                <button type="submit" id="send" class="btn waves-effect waves-light red">ENVIAR</button>
                            </form>
                            <br><br>
                        </div>
                    </div>
                    <div class="hide-on-med-and-down">
                        <div class="col s12 l6">
                            <form action="email.php" method="post">
                                <div class="input-field">
                                    <input id="nome" name="nome" type="text" class="validate white-text">
                                    <label for="nome">NOME</label>
                                </div>

                                <div class="input-field">
                                    <input id="email" name="email" type="email" class="validate white-text">
                                    <label for="email">E-MAIL</label>
                                </div>

                                <div class="input-field">
                                    <textarea id="mensagem" name="mensagem" class="materialize-textarea white-text"></textarea>
                                    <label for="mensagem">MENSAGEM</label>
                                </div>
                                <button type="submit" id="send" class="btn waves-effect waves-light red">ENVIAR</button>
                            </form>
                            <br><br>
                        </div>
                        <div class="col l6 left-align">
                            <br><b>CONTATO</b><p class="nullTopMargin">(49) 3277-1333</p>
                            <b>ENDEREÇO</b><p class="nullTopMargin">Rua Frontino Vieira de Souza, 181, Centro, Bom Retiro</p>
                            <a href="https://www.facebook.com/infomixonline/" class="tooltipped socialLink" data-position="bottom" data-tooltip="Facebook"><img src="Images/fb.png" class="socialImg"></a>
                            <a href="https://www.instagram.com/infomixinternet/" class="tooltipped socialLink" data-position="right" data-tooltip="Instagram"><img src="Images/insta.png" class="socialImg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="mapa">
            <iframe
              height="442"
              width="100%"
              frameborder="0" style="border:0"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC4LH-lRmYPt16f1ANcvirvXp8tPDcwajw
                &q=Rua+Frontino+Vieira+de+Souza,+181,+Centro,+Bom+Retiro" allowfullscreen>
            </iframe>
        </div>

        <!-- Footer -->
        <footer class="page-footer">
            <div class="footer-copyright red darken-4">
                <div class="container footer">
                    <img src="Images/logo%20infomix.png" class="logoFooter"> <a>© Todos os direitos reservados - 2018</a>
                    <a href="https://figdigital.com.br/"><img href="https://figdigital.com.br/" class="right logoFig" src="Images/prod.png" ></a>
                </div>
            </div>
        </footer>
    </body>
</html>
