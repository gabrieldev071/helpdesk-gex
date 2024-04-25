<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include 'head.php'
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Inclusão das bibliotecas do Bootstrap -->
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Dashboard</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Perfil</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Tickets</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Autenticação</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Entrar</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Registrar</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Multinível</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="true" aria-controls="multi-two">
                                Editar
                            </a>
                            <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="true" aria-controls="multi-two">
                                Dois Links
                            </a>
                        
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Notificação</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Configurações</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Sair</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-light baseContainer" id="nav-bar-main">
                <form class="form-navbar form-dash-navbar">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
                <!-- <a href="index.php" class="btn btn-primary btn-block" rel="noopener noreferrer">Voltar ao início</a> -->
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                <img class="h-14 w-14 rounded-full" src="./assets/img/Fotoretrato.jpg" alt="Foto de uma pessoa">
                </a>
            </nav>

            <section class="container-table baseContainer">
                <table class="table table-hover">
                    <thead class="">
                        <tr class="">
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Matrícula</th>
                            <th scope="col">APS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Gabriel Souza</th>
                            <td>gabriela.souza@inss.gov.br</td>
                            <td>130215</td>
                            <td>Tiradentes</td>
                        </tr>
                        <tr>
                            <th scope="row">Lorem</th>
                            <td>Lorem</td>
                            <td>123232</td>
                            <td>@Lorem</td>
                        </tr>
                        <tr>
                            <th scope="row">Edmar Silva</th>
                            <td>gabriela.souza@inss.gov.br</td>
                            <td>130215</td>
                            <td>Tiradentes</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
</body>

</html>