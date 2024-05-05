<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include '../../head.php'?>
    <title>Atualizar cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
            include '../../conexao.php';
            $id = $_POST['id_chamado'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $matricula = $_POST['matricula'];
            $aps = $_POST['aps'];
            $categoria = $_POST['categoria'];
            
            $sql = "UPDATE `chamados` set `nome` = '$nome', `email` = '$email', `aps` = '$aps', `matricula` = '$matricula', `aps` = '$aps', `categoria` = '$categoria' WHERE id = '$id'";
            
                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome foi alterado com sucesso!", 'success');

                  //  print_r($_POST);
                } else {
                    mensagem("$nome  NÃO foi alterado!", 'danger');
                }
            ?>
            <a href="../../pages/dashboard.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>
</html>