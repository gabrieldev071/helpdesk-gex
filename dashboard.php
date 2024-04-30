<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <?php
    $pesquisa = $_POST['busca'] ?? '';
    include 'conexao.php';
    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
    $dados = mysqli_query($conn, $sql);

    ?>

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
                        <span>Gestão</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="abrirChamado.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>    
                        Chamados</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth"
                        aria-expanded="false" aria-controls="auth">
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
                    <a href="#" class="sidebar-link has-dropdown" data-bs-toggle="collapse" data-bs-target="#multi"
                        aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Multinível</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#multi-two"
                                aria-expanded="true" aria-controls="multi-two">
                                Editar
                            </a>
                            <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#multi-two"
                                aria-expanded="true" aria-controls="multi-two">
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
                <form class="form-navbar form-dash-navbar" action="dashboard.php" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="busca" autofocus>
                    <button tton class="btn btn-primary my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
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
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            while ($linha = mysqli_fetch_assoc($dados)) {
                                $cod_pessoa = $linha['cod_pessoa'];
                                $nome = $linha['nome'];
                                $senha = $linha['senha'];
                                $telefone = $linha['telefone'];
                                $email = $linha['email'];
                                $aps = $linha['aps'];
                                $matricula = $linha['matricula'];

                                

                                echo "<tr>
                                      
                                        <th scope='row'>$nome</th>
                                        <td>$email</td>
                                        <td>$matricula</td>
                                        <td>$aps</td>
                                        <td >
                                        
                                        <a href='atualizar_cadastro.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
                                        <a class='btn btn-danger btn-sm' 
                                        data-bs-toggle='modal' data-bs-target='#confirma'
                                        onclick=" .'"' ."pegarDados($cod_pessoa, '$nome')" .'"' ."
                                        >Excluir</a>
                                        </td>
                                     </tr>";

  
                            }
         
                        
                        ?>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-primary btn-sm btn-block" rel="noopener noreferrer">Voltar ao
                    início</a>
            </section>
        </div>
    </div>

    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar exclusão?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="excluir_cadastro.php" method="post">
                        <p>Deseja realmente excluir?</p>
                        <br>
                            <p><b id='nome_pessoa'>Nome da pessoa</b>?</p>
                        <input type="hidden" name="nome" id="nome_pess">
                        <input type="hidden" name="id" id="cod_pessoa">
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
                        <input type="submit" class="btn btn-danger" value="Sim"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/forms.js"></script>
</body>

</html>