<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../../head.php'?>
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                include "../../conexao.php";

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $telefone = $_POST['telefone'];
                $aps = $_POST['aps'];
                $matricula = $_POST['matricula'];
                $foto = $_FILES['foto'];
                $nome_foto = mover_foto($foto);

                $sql = "INSERT INTO `chamados` (`nome`, `email`, `senha`, `telefone`, `aps`, `matricula`, `foto`) VALUES ('$nome', '$email', '$senha', '$telefone', '$aps', '$matricula' '$foto')";

                if (mysqli_query($conn, $sql)) {

                    echo "<img src='img/chamados/$nome_foto' title='$nome_foto' class='mostrar-foto'>";


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