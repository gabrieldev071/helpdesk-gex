<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'?>
    <title>Atualizar cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                include "conexao.php";
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                //$senha = $_POST['senha'];
               // $telefone = $_POST['telefone'];
                $aps = $_POST['aps'];
                $matricula = $_POST['matricula'];

            /*     $sql = "INSERT INTO `pessoas` (`nome`, `email`, `senha`, `telefone`, `aps`, `matricula`) VALUES ('$nome', '$email', '$senha', '$telefone', '$aps', '$matricula')"; */

            $sql = "UPDATE `pessoas` set `nome` = '$nome', `email` = '$email', `aps` = '$aps', `matricula` = '$matricula' WHERE cod_pessoa = '$id'";
            
    

                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome foi alterado com sucesso!", 'success');

                  //  print_r($_POST);
                } else {
                    mensagem("$nome  NÃO foi alterado!", 'danger');
                }
            ?>
            <a href="dashboard.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>
</html>