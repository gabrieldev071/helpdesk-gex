<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include './assets/php/rotas.php';
    require 'conexaoPDO.php'; 

    ini_set('display_errors', 1);

    ?>

        <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Tailiwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- icons -->
    <script src="https://kit.fontawesome.com/78f50e1103.js" crossorigin="anonymous"></script>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

     <!-- AJAX -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link rel="stylesheet" href="./assets/styles/aside.css">
    <link rel="stylesheet" href="./assets/styles/forms.css">
    <link rel="stylesheet" href="./assets/styles/dashboard.css">
    <link rel="stylesheet" href="./assets/styles/footer.css">
    <link rel="stylesheet" href="./assets/styles/maps.css">
    <link rel="stylesheet" href="./assets/styles/header.css">
    <title>Help Desk GEX-CG</title>
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" id="toggle-btn-event" type="button" onclick="toggleSidebar()">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="./pages/dashboard.php" target="_blank" rel="noopener noreferrer">Dashboard</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Gestão</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="https://github.com/gabrieldev071/helpdesk-gex"  target="_blank" rel="noopener noreferrer" class="sidebar-link">
                        <i class="lni lni-github-original"></i>
                        <span>Github</span>
                    </a>
                    <a href="http://" target="_blank" rel="noopener noreferrer"></a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link"  target="_blank" rel="noopener noreferrer">
                        <i class="lni lni-agenda"></i>
                        <span>
                            Chamados</span>
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
        <main class="main">
            <header class="containerHeader baseContainer">
                <div>
                    <a href="index.php">
                        <i class="fa-solid fa-headset icon headset" style="
    font-size: 3.0rem; color: var(--textColor);"></i>
                    </a>
                </div>
                <nav class="border-link">
                    <a href="http://" target="_blank" rel="noopener noreferrer">Contato</a>
                    <a href="#sobre">INSS PLAY TV</a>
                    <a href="#sobre">Sobre</a>
                    <a href="" target="_blank" rel="noopener noreferrer" data-bs-toggle="modal" data-bs-target="#modalFormulario">Suporte</a>

                    <button class="nav-btn nav-close-btn" onclick="toggleNavbar()">
                        X
                    </button>
                </nav>
                <button class="nav-btn" id="nav-btn" onclick="toggleNavbar()">
                    ☰
                </button>
            </header>

            <div id="conteudo">
            <!-- O conteúdo será atualizado aqui -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalFormulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar">
                            </button>
                        </div>
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
            <!-- LOGIN -->
            <div class="container-login border-link baseContainer">
                <div class="wrap-login">
                    <form class="login-form" method="POST" action="logar.php">
                        <span class="login-form-title">SEJA BEM-VINDO!</span>
                        <span class="login-form-img">
                            <img src="" alt="" srcset="">
                        </span>

                        <div class="wrap-input">
                            <input class="input" type="text" name="email_login" id="email_login" value="" />
                            <span class="focus-input" data-placeholder="Email" autofocus></span>
                        </div>

                        <div class="wrap-input">
                            <input class="input" type="password" name="password_login" id="password_login" value="" />
                            <span class="focus-input" data-placeholder="Password"></span>
                        </div>

                        <div class="container-login-form-btn">
                            <button type="submit" class="login-form-btn">Login</button>
                        </div>

                        <div class="text-center">
                            <span class="txt1">Não possui conta?</span>
                            <a href="./pages/cadastro.php" class="txt2">Cadastre-se</a>
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
                            <img src="./assets/img/Gabriel.jpg" class="d-block w-100" alt="...">
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
            <section class="maps-section baseContainer" id="sobre">
                <!-- Sobre o projeto-->
                <div class="custom-container">
                    <h4 class="custom-title-maps">GESTÃO DE CHAMADOS GEX-CG</h4>
                    <p>O sistema web help desk foi desenvolvido com o objetivo de facilitar o gerenciamento eficiente e organizado de chamados de suporte técnico dos servidores públicos do INSS.
                </div>
                <!-- <div id="mapid" class="custom-map"></div> -->
            </section>
            <footer class="footer ">
                <div class="footer-container baseContainer border-link">
                    <div class="footer-left">
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <p>&copy; 2024 - GEX-CG -<a href="https://www.linkedin.com/in/gabriel-albuquerque-souza-desenvolvedor/" target="_blank" rel="noopener noreferrer"> Gabriel Souza</a> </p>
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
    <!-- scripts -->
    <script src="./assets/js/aside.js"></script>
    <script src="./assets/js/forms.js"></script>
    <script src="./assets/js/inputClass.js"></script>
    <script src="./assets/js/maps.js"></script>
    <script src=""></script>
</body>

</html>
