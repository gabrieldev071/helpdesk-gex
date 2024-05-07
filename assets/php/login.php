<?php
    include './conexao.php';
    
// Inicia a sessão
session_start();

// Verifica se os campos de email e senha foram submetidos e se o email não está vazio
if (isset($_POST['email_login']) && strlen($_POST['email_login']) > 0) {
    // Verifica se a conexão está estabelecida
    if ($conn) {
        // Escapa o email para prevenir injeção de SQL
        $email = mysqli_real_escape_string($conn, $_POST['email_login']);
        
        // Calcula o hash da senha usando MD5 (não recomendado, prefira algoritmos mais seguros)
        $password = md5(md5($_POST['password_login']));

        // Consulta SQL para buscar o usuário com o email fornecido
        $sql_code = "SELECT senha, cod_pessoa FROM usuarios WHERE email = '$email'";

        $sql_query = mysqli_query($conn, $sql_code) or die(mysqli_error($conn));

        // Obtém os dados do usuário
        $dado = mysqli_fetch_assoc($sql_query);
        // Obtém o número de linhas retornadas pela consulta
        $total = mysqli_num_rows($sql_query);

        // Verifica se o email está cadastrado no banco de dados
        if ($total == 0) {
            $erro[] = "Este email não pertence a nenhum usuário.";
        } else {
            // Verifica se a senha fornecida corresponde à senha armazenada no banco de dados
            if ($dado['senha'] == $password) {
                // Define a variável de sessão 'usuario' com o código do usuário
                $_SESSION['usuario'] = $dado['codigo'];
                header("Location: ./dashboard.php");
                exit; // Encerra o script para garantir que o redirecionamento funcione corretamente
            } else {
                $erro[] = "Senha incorreta.";
            }
        }
        
    } else {
        echo "Erro: Não foi possível estabelecer a conexão com o banco de dados.";
    }
}
?>
