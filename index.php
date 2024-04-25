<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include 'head.php'
    ?>
    <title>HELP DESK GEX-CG</title>
</head>

<body>
    <header class="baseContainer">
        <div>
            <a href="./">
                <i class="fa-solid fa-headset icon headset" style="
    font-size: 1.8rem; color: white;"></i>
            </a>
        </div>
        <nav>
            <a href="./" target="_blank" rel="noopener noreferrer">Home</a>
            <a href="#equipe">Equipe</a>
            <a href="http://" target="_blank" rel="noopener noreferrer">Contato</a>
            <a href="http://" target="_blank" rel="noopener noreferrer">Sobre</a>
            <a href="?page=novo" target="_blank" rel="noopener noreferrer">Cadastre-se</a>
            <!--         <a href="?page=listar" target="_blank" rel="noopener noreferrer">Listar Usuários</a> -->

            <button class="nav-btn nav-close-btn" onclick="showNavbar()">
                X
            </button>
        </nav>


        <button class="nav-btn" id="nav-btn" onclick="showNavbar()">
            ☰
        </button>
    </header>

    <main class="baseContainer">

        <?php

        switch (@$_REQUEST["page"]) {
            case "novo":
                include("novo-usuario.php");
                break;
            case "salvar":
                include("index.php");
                break;
            default:
                print "";
        }
        ?>


        <div class="container-login">
            <h1 class="">HELP DESK GEX-CG</h1>
            <div class="wrap-login">
                <form class="login-form">
                    <span class="login-form-title">Bem vindo!</span>
                    <span class="login-form-img">
                        <img src="" alt="" srcset="">
                    </span>

                    <div class="wrap-input">
                        <input class="input" type="text" name="email" id="email" value="" />
                        <span class="focus-input" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input">
                        <input class="input" type="password" name="password" id="password" value="" />
                        <span class="focus-input" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login-form-btn">
                        <button class="login-form-btn">Login</button>
                    </div>

                    <div class="text-center">
                        <span class="txt1">Não possui conta?</span>
                        <a href="novo-usuario.php" class="txt2">Cadastre-se</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- sobre a equipe -->

    <div class="bg-white py-24 sm:py-32" id="equipe">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Conheça nossa liderança</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Gex Campina grande, colocar texto aqui</p>
            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="" alt="">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Breno</h3>
                            <p class="text-sm font-semibold leading-6 text-indigo-600">Chefia</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="./assets/img/Fotoretrato.jpg" alt="Foto de uma pessoa">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Gabriel Souza</h3>
                            <p class="text-sm font-semibold leading-6 text-indigo-600">Estagiário de T.I</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="outra_imagem.jpg" alt="Foto de outra pessoa">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Edmar Silva</h3>
                            <p class="text-sm font-semibold leading-6 text-indigo-600">Estagiário de T.I</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

<section class="custom-section">
    <div id="mapid" class="custom-map"></div>
    <div class="custom-container">
        <div class="custom-info">
            <h4 class="custom-title">Estamos aqui</h4>
            <!-- Conteúdo adicional aqui -->
        </div>
    </div>
</section>


    <footer class="footer baseContainer">
        <div class="footer-container">
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
    <script src="./assets/js/maps.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/inputClass.js"></script>
    <script src="./assets/js//forms.js"></script>
</body>

</html>