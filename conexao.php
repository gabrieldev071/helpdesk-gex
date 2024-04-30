<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa";

    if ( $conn = mysqli_connect($server, $user, $pass, $bd)) {
   // echo "Conectado! <br>";
    } else {
   // echo "Erro!";
    }

    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo'  role='alert'>
                $texto  
            </div>";
    }

    function mover_foto($vetor_foto) {
        if (!$vetor_foto['erro']) {

            $nome_arquivo = date('Y-m-d--h-m-s') .".jpg";
            move_uploaded_file($vetor_foto['tmp_name'], "img/chamados" .$nome_arquivo);
            return $nome_arquivo;

        } else {
            return 0;
        }
    }


?>