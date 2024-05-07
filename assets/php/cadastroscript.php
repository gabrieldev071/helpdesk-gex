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
                include "../../conexao.php";

                $nome_cadastro = $_POST['nome_cadastro'];
                $email_cadastro = $_POST['email_cadastro'];
                $senha_cadastro = $_POST['senha_cadastro'];
                $telefone_cadastro = $_POST['telefone_cadastro'];
                $aps_cadastro = $_POST['aps_cadastro'];
                $matricula_cadastro = $_POST['matricula_cadastro'];

                $sql = "INSERT INTO `usuarios` (`nome`, `email`, `senha`, `telefone`, `aps`, `matricula`) VALUES ('$nome_cadastro', '$email_cadastro', '$senha_cadastro', '$telefone_cadastro', '$aps_cadastro', '$matricula_cadastro')";

                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome_cadastro foi cadastrado com sucesso!", 'success');

                  //  print_r($_POST);
                } else {
                    mensagem("$nome_cadastro  NÃO foi cadastrado!", 'danger');
                }

            ?>
            <a href="../../index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>
</html>