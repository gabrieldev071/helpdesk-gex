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


?>