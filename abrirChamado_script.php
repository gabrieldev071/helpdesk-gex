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
                $aps = $_POST['aps'];
                $foto = $_FILES['foto'];
                $nome_foto = mover_foto($foto);

                $sql = "INSERT INTO `chamados` (`nome`, `email`, `localizacao`, `foto`) VALUES ('$nome', '$email', '$aps', '$foto')";

                if (mysqli_query($conn, $sql)) {

                    echo "<img src='img/chamados/$nome_foto' title='$nome_foto'>";

                    mensagem("$nome foi cadastrado com sucesso!", 'success');

                  //  print_r($_POST);
                } else {
                    mensagem("$nome  NÃO foi cadastrado!", 'danger');
                }

            ?>
            <a href="cadastro.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>