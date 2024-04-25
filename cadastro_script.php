<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                include "conexao.php";

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $telefone = $_POST['telefone'];
                $aps = $_POST['aps'];
                $matricula = $_POST['matricula'];

                $sql = "INSERT INTO `pessoas` (`nome`, `email`, `senha`, `telefone`, `aps`, `matricula`) VALUES ('$nome', '$email', '$senha', '$telefone', '$aps', '$matricula')";

                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome foi cadastrado com sucesso!", 'success');

                  //  print_r($_POST);
                } else {
                    mensagem("$nome  NÃO foi cadastrado!", 'danger');
                }
            ?>
            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>