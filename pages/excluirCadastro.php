<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include '../head.php' ?>
    <title>Exclusão de Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                include "conexao.php";
                $id = $_POST['id'];
                $nome = $_POST['nome'];

            $sql = "DELETE from `chamados` WHERE cod_pessoa = '$id'";
            
                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome excluido com sucesso!", 'success');

                  //  print_r($_POST);
                } else {
                    mensagem("$nome  NÃO foi excluido!", 'danger');
                }
            ?>
            <a href="./pages/dashboard.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>
</html>