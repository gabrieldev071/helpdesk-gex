<?php 
    // Definindo as informações de conexão com o banco de dados
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa";

    // Tentativa de conexão com o banco de dados
    if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
        // Se a conexão for bem-sucedida, exibe uma mensagem
        
        //echo "Conectado! <br>";
    } else {
        // Se a conexão falhar, exibe uma mensagem de erro
       // echo "Erro!";
    }

    // Função para exibir mensagens formatadas
    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo'  role='alert'>
                $texto  
             </div>";
    }

    // Função para mover arquivos de fotos para um diretório específico
    function mover_foto($vetor_foto) {
        // Verifica se não houve erros durante o upload do arquivo
        if (!$vetor_foto['erro']) {
            // Gera um nome de arquivo único baseado na data e hora
            $nome_arquivo = date('Y-m-d--h-m-s') . ".jpg";

            // Move o arquivo para o diretório de destino
            move_uploaded_file($vetor_foto['tmp_name'], "img/chamados/" . $nome_arquivo);

            // Retorna o nome do arquivo movido
            return $nome_arquivo;
        } else {
            // Retorna 0 se houver erro durante o upload
            return 0;
        }
    }
?>
