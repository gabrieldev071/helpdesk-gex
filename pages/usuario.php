<?php
require '../assets/php/verifica.php';
if (isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])) :
?>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel de Controle - Help Desk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="../assets/styles/global.css">
        <link rel="stylesheet" href="../assets/styles/main.css">
        <link rel="stylesheet" href="../assets/styles/aside.css">
        <link rel="stylesheet" href="../assets/styles/forms.css">
        <link rel="stylesheet" href="../assets/styles/dashboard.css">
        <link rel="stylesheet" href="../assets/styles/footer.css">
        <link rel="stylesheet" href="../assets/styles/maps.css">
        <link rel="stylesheet" href="../assets/styles/header.css">
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
            /* margin: 10px auto; */
            font-size: 16px;
        }

        .navbar-brand {
            font-size: 16px;
        }

        .nav-item {
            color: var(--textColor);
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
            border-radius: 8px;
        }

        .aside h3 {
            text-align: center;
            font-size: 16px;
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

        main {
            background-color: var(--backgroundColor);

            border-radius: 8px;
            /* Borda arredondada */
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .customTitle {
            margin: 5px 5px;
        }

        .col-md-3:nth-child(odd) .card {
            background-color: var(--backgreoundLeve);
            /* Cor 1 */
        }

        .col-md-3:nth-child(even) .card {
            background-color: #414449;
            /* Cor 2 */

        }

        input[type="text"],
        textarea {
            padding: 2px 0;
            /* Adiciona padding de 10 pixels */
        }

        /* Estilos para a tabela de tickets */
        .table {
            background-color: var(--backgroundLight);
            color: var(--textColor);
        }
        .listarChamados {

            border-radius: 8px;
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
                                <label class="nav-link" style="color: white;" value=""><?php echo $nomeUser; ?></label>
                            </li>
                        </ul>
                        <a href="../logout.php" class="btn btn-outline-danger" onclick="logout()">Logout</a>
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
                        <h1 class="customTitle">Resumo dos Tickets</h1>
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
                                        <i class="fas fa-headset fa-2x"></i>
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
                        <h1 class="customTitle mb-3">Últimos Tickets</h1>
                        <form id="searchForm">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="searchInput" placeholder="Pesquisar..." aria-label="Pesquisar" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </section>


                    <!-- Terceira sessão -->
                    <section class="listarChamados mt-4">
                        <!-- Tabela de tickets -->
                        <table class="table table-dark table-striped border-secondary">
                            <thead style="background-color: #646e76; color: #fff;">
                                <tr>
                                    <th scope="col">Código</th>
                                    <th scope="col">Nome do Chamado</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Prioridade</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #e9ecef;">
                                    <th scope="row">12345</th>
                                    <td>Suporte Técnico</td>
                                    <td>João Silva</td>
                                    <td style="vertical-align: middle;"><span class="badge bg-danger">Alta</span></td>
                                    <td>01/01/2023</td>
                                    <td>Em Atendimento</td>
                                </tr>
                                <tr style="background-color: #e9ecef;">
                                    <th scope="row">67890</th>
                                    <td>Dúvida sobre PRISMA</td>
                                    <td>Maria Oliveira</td>
                                    <td style="vertical-align: middle;"><span class="badge bg-warning text-dark">Média</span></td>
                                    <td>05/02/2023</td>
                                    <td>Em Atendimento</td>
                                </tr>
                                <tr style="background-color: #e9ecef;">
                                    <th scope="row">27520</th>
                                    <td>Dúvida sobre PRISMA</td>
                                    <td>Maria Oliveira</td>
                                    <td style="vertical-align: middle;"><span class="badge bg-primary text-light">Baixa</span></td>
                                    <td>05/02/2023</td>
                                    <td>Em Atendimento</td>
                                </tr>
                                <tr style="background-color: #e9ecef;">
                                    <th scope="row">27520</th>
                                    <td>Dúvida sobre PRISMA</td>
                                    <td>Maria Oliveira</td>
                                    <td style="vertical-align: middle;"><span class="badge bg-primary text-light">Baixa</span></td>
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

<!--         <footer class="footer mt-auto py-3">
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
        </footer> -->


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

        <!-- scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <script src="../assets/js/aside.js"></script>
        <script src="../assets/js/forms.js"></script>
        <script src="../assets/js/inputClass.js"></script>
        <script src="../assets/js/maps.js"></script>
        <script src="../assets/js/painelUsuario.js"></script>
    </body>

    </html>

<?php else : header("Location: ../index.php");
endif; ?>