<?php 
    // Verifica se o formulário de login foi enviado e se os campos não estão vazios
    if (isset($_POST["email_login"]) 
        && !empty($_POST["email_login"]) 
        && !empty($_POST["password_login"]) // Verifica se a senha foi fornecida
        && !empty($_POST["password_login"] // Condicional redundante
    )){

        // Inclui o arquivo de conexão com o banco de dados
        require 'conexaoPDO.php';
        // Inclui a classe Usuario
        require './assets/php/Usuario.Class.php';

        // Cria uma nova instância da classe Usuario
        $u = new Usuario();

        // Obtém e filtra o email e a senha fornecidos pelo usuário
        $email = addslashes($_POST['email_login']);
        $password = addslashes($_POST['password_login']);

        // Tenta efetuar o login com o email e senha fornecidos
        if ($u->login($email, $password)) {
            // Se o login for bem-sucedido, verifica se a sessão do usuário foi criada
            if (isset($_SESSION['iduser'])) {
                // Redireciona para a página do usuário se a sessão existir
                header("Location: ./pages/usuario.php");
            } else {
                // Redireciona para a página inicial se a sessão não existir
                header("Location: index.php");
            }
            
        } else {
            // Se o login falhar, redireciona para a página inicial
            header("Location: index.php");
        }
        

    } else {
        // Se algum dos campos estiver vazio, redireciona para a página inicial
        header("Location: index.php");
        // Encerra o script após o redirecionamento
        exit; 
    }
?>
