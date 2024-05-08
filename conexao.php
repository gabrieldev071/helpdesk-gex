<?php 
    // Definindo as informações de conexão com o banco de dados
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa";

    // Se a conexão for bem-sucedida, exibe uma mensagem
    if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
       // echo "Conectado! <br>";
    } else {
       //echo "Erro!";
    }

    // Função para exibir mensagens formatadas
    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo'  role='alert'>
                $texto  
             </div>";
    }
    
    // Função para mover arquivos de fotos para um diretório específico
    function mover_foto($vetor_foto) {

        $vtipo = explode("/", $vetor_foto['type']);
        $tipo = $vtipo[0] ?? '';
        $extensao = '.' .$vtipo[1] ?? '';

        // Verifica se não houve erros durante o upload do arquivo
        if (!$vetor_foto['error'] and ($vetor_foto['size'] <= 500000) and ($tipo == 'image')) {
            // Gera um nome de arquivo único baseado na data e hora
            $nome_arquivo = date('d-m-Y--H-i-s') .$extensao;
            // Move o arquivo para o diretório de destino
            $caminho_destino = __DIR__ . "./assets/img/chamados/" . $nome_arquivo; // Caminho absoluto para o diretório de destino
            if (move_uploaded_file($vetor_foto['tmp_name'], $caminho_destino)) {
                return $nome_arquivo;
            } else {
                return false;
            }
        } else {
            // Retorna 0 se houver erro durante o upload
            return 0;
        }
    }
?>
