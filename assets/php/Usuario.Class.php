<?php 

// Definição da classe Usuario
class Usuario {
    // Método para efetuar o login do usuário
    public function login($email, $password) {
        // Acesso à variável global $pdo que contém a conexão com o banco de dados
        global $pdo;

        // Consulta SQL para verificar se o email e a senha fornecidos correspondem a um usuário na tabela
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :password";

        // Prepara a consulta SQL para execução
        $sql = $pdo->prepare($sql);

        // Substitui os parâmetros na consulta SQL pelos valores fornecidos
        $sql->bindValue("email", $email);
        $sql->bindValue("password", $password);

        // Executa a consulta SQL
        $sql->execute();

        // Verifica se a consulta retornou algum resultado (ou seja, se o login foi bem-sucedido)
        if ($sql->rowCount() > 0) {
            // Obtém os dados do usuário encontrado na consulta
            $dado = $sql->fetch();
            
            // Define a variável de sessão 'iduser' com o código da pessoa obtido na consulta
            $_SESSION['iduser'] = $dado['cod_pessoa'];
            // Imprime o código da pessoa apenas para fins de depuração
            echo $dado['cod_pessoa'];

            // Retorna verdadeiro para indicar que o login foi bem-sucedido
            return true;
        } else {
            // Retorna falso para indicar que o login falhou
            return false;
        }       
    }
}
?>
<!--  -->