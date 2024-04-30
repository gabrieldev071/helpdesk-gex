<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include 'head.php'
    ?>
    <title>HELP DESK GEX-CG</title>
</head>

<body>

    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <!-- <a href="#">Dashboard</a> -->
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <!--  <span>Gestão</span> -->
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="abrirChamado.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <!--      <span>
                            Chamados</span> -->
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <!-- <span>Sair</span> -->
                </a>
            </div>
        </aside>


        <main class="main baseContainer">

            <?php

            switch (@$_REQUEST["page"]) {
                case "novo":
                    include("abrirChamado.php");
                    break;
                case "salvar":
                    include("index.php");
                    break;
                case "chamado":
                    include("abrirChamado.php");
                    break;
                default:
                    print "";
            }
            ?>

            <header class="containerHeader">
                <div>
                    <a href="./">
                        <i class="fa-solid fa-headset icon headset" style="
    font-size: 1.8rem; color: var(--textColor);"></i>
                    </a>
                </div>
                <nav>
                    <a href="http://" target="_blank" rel="noopener noreferrer">Contato</a>
                    <a href="#sobre">Sobre</a>
                    <a href="?page=novo" target="_blank" rel="noopener noreferrer">Suporte</a>

                    <button class="nav-btn nav-close-btn" onclick="showNavbar()">
                        X
                    </button>
                </nav>


                <button class="nav-btn" id="nav-btn" onclick="showNavbar()">
                    ☰
                </button>
            </header>

            <h1 class="login-form-title">GESTÃO DE CHAMADOS GEX-CG</h1>
            <div class="container-login">
                <div class="wrap-login">
                    <form class="login-form">
                        <span class="login-form-title">SEJA BEM VINDO!</span>
                        <span class="login-form-img">
                            <img src="" alt="" srcset="">
                        </span>

                        <div class="wrap-input">
                            <input class="input" type="text" name="email" id="email" value="" />
                            <span class="focus-input" data-placeholder="Email" autofocus></span>
                        </div>

                        <div class="wrap-input">
                            <input class="input" type="password" name="password" id="password" value="" />
                            <span class="focus-input" data-placeholder="Password"></span>
                        </div>

                        <div class="container-login-form-btn">
                            <button class="login-form-btn ">Login</button>
                        </div>

                        <div class="text-center">
                            <span class="txt1">Não possui conta?</span>
                            <a href="cadastro.php" class="txt2">Cadastre-se</a>
                        </div>
                    </form>
                </div>
                <!-- Sobre a equipe -->
                <div id="carouselExampleCaptions" class="carousel slide wrap-carousel">
                    <h1 class="login-form-title">EQUIPE T.I</h1>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/img/Fotoretrato.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Gabriel Souza</h5>
                                <p>Estagiário de T.I</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Breno.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Breno</h5>
                                <p>T.I</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


            <!-- Localização -->
            <section class="maps-section">
                <!-- Sobre o projeto-->
                <div class="custom-container">
                        <h4 class="custom-title-maps">GESTÃO DE CHAMADOS GEX-CG</h4>
                        <p>O sistema web help desk foi desenvolvido com o objetivo de facilitar o gerenciamento eficiente e organizado de chamados de suporte técnico dos servidores públicos do INSS.
                </div>
                <div id="mapid" class="custom-map"></div>
            </section>

            <footer class="footer">

<div class="footer-container baseContainer">
    <div class="footer-left">
        <a href="#" target="_blank" rel="noopener noreferrer">
            <p>&copy; 2024 - GEX-CG - Gabriel Souza</p>
        </a>
    </div>
    <div class="footer-right">
        <a href="#">Termos de Uso</a>
        <a href="#">Política de Privacidade</a>
        <a href="#">Contato</a>
    </div>
</div>
</footer>
        </main>
    </div>
    <script src="./assets/js/maps.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/inputClass.js"></script>
    <script src="./assets/js//forms.js"></script>
</body>

</html>