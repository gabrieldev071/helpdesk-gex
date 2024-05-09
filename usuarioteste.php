<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle - Help Desk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link rel="stylesheet" href="./assets/styles/aside.css">
    <link rel="stylesheet" href="./assets/styles/forms.css">
    <link rel="stylesheet" href="./assets/styles/dashboard.css">
    <link rel="stylesheet" href="./assets/styles/footer.css">
    <link rel="stylesheet" href="./assets/styles/maps.css">
    <link rel="stylesheet" href="./assets/styles/header.css">
    <style>
        /* Estilos personalizados */
        body {
            padding-top: 60px;
            /* Para manter espaço para o navbar fixo no topo */
            background-color: var(--backgroundLight);
            color: var(--textColor);
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
        }

        .card {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
        }

        .card ul {
            list-style-type: none;
            padding: 0;
        }

        .card ul li {
            margin-bottom: 10px;
        }

        .codigo {
            font-weight: bold;
        }

        .customheader {
            background-color: var(--backgroundColor);
        }

        /* Estilos para o aside */
        .aside {
            background-color: var(--backgroundColor);
            padding: 20px;
        }

        .aside h3 {
            text-align: center;
            font-size: 1.6rem;
            margin-bottom: 20px;
            color: var(--textColor);
        }

        .aside ul {
            list-style: none;
            padding: 0;
        }

        .aside ul li {
            margin-bottom: 10px;
        }

        .aside a {
            text-decoration: none;
            padding: 1.2rem 1.0rem;
            color: var(--textColor);
            display: block;
            font-size: 1.6rem;
            white-space: nowrap;
            border-left: 3px solid transparent;
        }

        .aside a:hover {
            background-color: rgba(255, 255, 255, .075);
            border-right: 3px solid #dee0e0;
        }

        .buttomChamado {
            font-size: 1.6rem;
            border: none;
            border-radius: 10px;
            color: white;
            line-height: 1.2rem;
            text-transform: uppercase;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 50px;
            background-color: var(--backgroundLight);
            gap: 1rem;
        }

        .buttomChamado:hover {
            cursor: pointer;
            transition: all 0.5s;
            background-color: var(--textColor);
            color: var(--backgroundColor);
        }

        .col-md-3:nth-child(odd) .card {
            background-color: var(--backgreoundLeve);
            /* Cor 1 */
        }

        .col-md-3:nth-child(even) .card {
            background-color: #414449; /* Cor 2 */
           
        }

        /* Estilos para a tabela de tickets */
        .table {
            background-color: var(--backgroundLight);
            color: var(--textColor);
        }
    </style>
</head>

<body>
    <header class="customheader fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#" style="color: white;">Help Desk</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white;">Meus Chamados</a>
                        </li>
                    </ul>
                    <a href="../logout.php" class="btn btn-outline-danger" onclick="logout()" style="color: white;">Logout</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="row">
            <aside class="col-md-3">
                <div class="aside customAside">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-tachometer-alt"></i> Painel</a></li>
                        <li><a href="#"><i class="far fa-file-alt"></i> Tickets Abertos</a></li>
                        <li><a href="#"><i class="fas fa-hourglass-half"></i> Em Atendimento</a></li>
                        <li><a href="#"><i class="fas fa-check-circle"></i> Tickets Fechados</a></li>
                        <li><a href="#"><i class="far fa-user"></i> Editar Perfil</a></li>
                    </ul>
                    <button class="buttomChamado"><i class="fas fa-plus"></i>Novo Chamado</button>
                </div>
            </aside>
            <main class="col-md-9">

                <section class="mt-4">
                    <h2>Resumo dos Tickets</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card bg-primary text-white text-center d-flex align-items-center">
                                <div class="card-body">
                                    <i class="fas fa-clipboard-list fa-2x"></i>
                                    <h6 class="card-title">Tickets totais:</h6>
                                    <p class="card-text">7</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-success text-white text-center d-flex align-items-center">
                                <div class="card-body">
                                    <i class="fas fa-lock-open fa-2x"></i>
                                    <h6 class="card-title">Tickets abertos:</h6>
                                    <p class="card-text">5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-warning text-white text-center d-flex align-items-center">
                                <div class="card-body">
                                    <i class="fas fa-play-circle fa-2x"></i>
                                    <h6 class="card-title">Em atendimento:</h6>
                                    <p class="card-text">1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-danger text-white text-center d-flex align-items-center">
                                <div class="card-body">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                    <h6 class="card-title">Tickets fechados:</h6>
                                    <p class="card-text">1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Segunda sessão -->
                <section class="mt-4">
                    <h2 class="mb-3">Últimos Tickets</h2>
                    <form id="searchForm">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="searchInput" placeholder="Pesquisar..." aria-label="Pesquisar" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </section>


                <!-- Terceira sessão -->
                <section class="mt-4">
                    <!-- Tabela de tickets -->
                    <table class="table table-dark table-striped border-secondary">
                        <thead>
                            <tr>
                                <th scope="col">Código do Ticket</th>
                                <th scope="col">Nome do Chamado</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Prioridade</th>
                                <th scope="col">Data</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">12345</th>
                                <td>Suporte Técnico</td>
                                <td>João Silva</td>
                                <td>Alta</td>
                                <td>01/01/2023</td>
                                <td>Em Atendimento</td>
                            </tr>
                            <tr>
                                <th scope="row">67890</th>
                                <td>Dúvida sobre PRISMA</td>
                                <td>Maria Oliveira</td>
                                <td>Média</td>
                                <td>05/02/2023</td>
                                <td>Em Atendimento</td>
                            </tr>
                            <!-- Adicione mais linhas conforme necessário -->
                        </tbody>
                    </table>
                </section>
            </main>

        </div>
    </div>

    <!-- FOOTER -->

    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 - GEX-CG - <a href="https://www.linkedin.com/in/gabriel-albuquerque-souza-desenvolvedor/" target="_blank" rel="noopener noreferrer">Gabriel Souza</a></p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="me-3">Termos de Uso</a>
                    <a href="#" class="me-3">Política de Privacidade</a>
                    <a href="#">Contato</a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script src="../assets/js/painelUsuario.js"></script>
</body>

</html>