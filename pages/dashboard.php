<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include '../head.php';
    include '../assets/php/validar.php';
    ?>
    
    <title>Dashboard</title>
</head>

<body>
    <?php
    $pesquisa = $_POST['busca'] ?? '';
    include '../conexao.php';
    $sql = "SELECT * FROM chamados WHERE nome LIKE '%$pesquisa%'";
    $dados = mysqli_query($conn, $sql);
    ?>

    <div class="wrapper ">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" id="toggle-btn-event" type="button" onclick="toggleSidebar()">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="dashboard.php">Dashboard</a>
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
                    <a href="chamado.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>
                            Chamados</span>
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
                    <a href="https://github.com/gabrieldev071/helpdesk-gex"  target="_blank" rel="noopener noreferrer" class="sidebar-link">
                        <i class="lni lni-github-original"></i>
                        <span>Github</span>
                    </a>
                    <a href="http://" target="_blank" rel="noopener noreferrer"></a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-database"></i>
                        <span>Data Base</span>
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
                <a href="../../index.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Sair</span>
                </a>
            </div>
        </aside>
        <main class="main">
            <nav class="navbar navbar-light baseContainer" id="nav-bar-main">
                <form class="form-navbar form-dash-navbar" action="dashboard.php" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="busca" autofocus>
                    <button tton class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                    <img class="h-15 w-20 rounded-full" src="../assets/img/Gabriel.jpg" alt="Foto de uma pessoa">
                    <div class="dropdown-menu dropdown-menu-end rounded border-link">

                    </div>
                </a>
            </nav>
            <!-- GRÁFICOS -->
            <section class="container-table flex-grow-1 baseContainer">
                <h3 class="text-start text-light fw-bold fs-1 my-5">CHAMADOS
                </h3>
                <div class="table-responsive">
                    <table class="table table-dark table-striped border-secondary " id="custom-table">
                        <thead class="">
                            <tr class="highlight align-middle border-bottom">
                                <th scope="col" class="">ID</th>
                                <th scope="col" class="text-uppercase">Nome</th>
                                <th scope="col" class="text-uppercase">E-mail</th>
                                <th scope="col" class="text-uppercase">Matrícula</th>
                                <th scope="col" class="text-uppercaser alinhar-texto">APS</th>
                                <th scope="col" class="text-uppercase">Categoria</th>
                                <th scope="col" class="w-25 p-3 text-uppercase">Descrição</th>
                                <th scope="col" class="text-uppercase">Foto</th>
                                <th scope="col" class="text-uppercase">Funções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($linha = mysqli_fetch_assoc($dados)) {
                                $cod_pessoa = $linha['id'];
                                $nome = $linha['nome'];
                                $email = $linha['email'];
                                $telefone = $linha['telefone'];
                                $matricula = $linha['matricula'];
                                $aps = $linha['aps'];
                                $categoria = $linha['categoria'];
                                $descricao = $linha['descricao'];
                                $foto = $linha['foto'];

                                if (!$foto == null) {
                                    $mostra_foto = "<img src='../assets/img/chamados/$foto' alt='' srcset='' class='lista-foto'>";
                                } else {
                                    $mostra_foto = '';
                                }
                                

                             echo "<tr class='align-middle'>
                                <th scope='row'>$cod_pessoa</th>
                                <th scope='row'>$nome</th>
                                <td>$email</td>
                                <td>$matricula</td>
                                <td>$aps</td>
                                <td>$categoria</td>
                                <td class='text-wrap'>$descricao</td>
                                <td>$mostra_foto</td>
                                <td width=80px>
                                    <a 
                                    class='btn btn-success btnEditar'data-id='<?php echo $linha[id]; ?>' onclick=" . '"' . "openModalUpdate('$cod_pessoa', '$nome', '$email', '$matricula', '$aps', '$categoria', '$descricao')" . '; "' . ">
                                    <i class='fa-regular fa-pen-to-square'></i>
                                    </a>
                                    <a class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#confirma' onclick=" . '"' . "pegarDados($cod_pessoa, '$nome')" . '"' . ">
                                    <i class='lni lni-trash-can'></i>
                                    </a>
                                </td>
                            </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
<img src="../assets//img/chamados/" alt="" srcset="">
                <a href="../index.php" class="btn btn-secondary"  target="_blank" rel="noopener noreferrer" >Voltar ao
                    início</a>
            </section>
            <!-- MODAL UPDATE -->
            <div class="modal fade" id="modalAtualizacao" tabindex="-1" aria-labelledby="modalAtualizacaoLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalAtualizacaoLabel">Confirmar atualização?</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                        </div>
                        <div class="modal-body" id="formularioAtualizacao">
                            <!-- Conteúdo do formulário aqui -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- MODAL DELETE -->
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar exclusão?</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../assets/php/excluirCadastro.php" method="post">
                        <p>Deseja realmente excluir</p>
                        <br>
                        <p><b id='nome_pessoa'>Nome da pessoa</b>?</p>
                        <br>
                        <p>Após exclusão será necessário realizar um novo cadastro!</p>
                        <input type="hidden" name="nome" id="nome_pessoa_exclusao">
                        <input type="hidden" name="id" id="cod_pessoa">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <input type="submit" class="btn btn-danger" value="Sim"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
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
    <script src="../assets/js/aside.js"></script>
    <script src="../assets/js/forms.js"></script>
    <script src="../assets/js/inputClass.js"></script>
    <script src="../assets/js/maps.js"></script>
</body>

</html>