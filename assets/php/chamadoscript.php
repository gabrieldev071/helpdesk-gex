<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include '../../head.php'?>
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                /* Variáveis vindo do forms do chamado */
                include "../../conexao.php";
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $matricula = $_POST['matricula'];
                $aps = $_POST['aps'];
                $categoria = $_POST['categoria'];
                $descricao = $_POST['descricao'];
                $foto = $_FILES['foto'];

                $nome_foto = mover_foto($foto);
                
                /* variável que envia para o banco de dados e adiciona os valores com base nas variáveis vinda do forms post */
                $sql = "INSERT INTO `chamados` (`nome`, `email`, `telefone`, `matricula`, `aps`, `categoria`, `descricao`, `foto`)     
                VALUES ('$nome', '$email', '$telefone', '$matricula', '$aps', '$categoria', '$descricao', '$foto')";
    
                /* função que envia os dados através de 2 parâmetros (conexão e os dados, ou seja, da vairável $sql) */
                if (mysqli_query($conn, $sql)) {

                    echo "<img src='img/chamados/$nome_foto' title='$nome_foto'>";

                    mensagem("$nome foi cadastrado com sucesso!", 'success');

                  //  print_r($_POST);
                } else {
                    mensagem("$nome  NÃO foi cadastrado!", 'danger');
                }

            ?>
            <a href="../../pages/index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>
</html>