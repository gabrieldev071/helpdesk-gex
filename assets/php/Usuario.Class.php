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

    public function logged($id) {
        global $pdo;
    
        try {
            $array = array(); // Array para armazenar os dados do usuário
    
            // Define a consulta SQL para selecionar o nome do usuário com base no ID fornecido
            $sql = "SELECT nome FROM usuarios WHERE cod_pessoa = :id";
    
            // Prepara a consulta SQL para execução
            $sql = $pdo->prepare($sql);
    
            // Substitui o marcador de posição :id pelo valor do parâmetro $id
            $sql->bindValue("id", $id);
    
            // Executa a consulta SQL
            $sql->execute();
    
            // Verifica se a consulta retornou algum resultado
            if ($sql->rowCount() > 0) {
                // Se houver resultados, armazena o resultado em $array
                $array = $sql->fetch();
            } else {
                // Se não houver resultados, lança uma exceção informando que o usuário não foi encontrado
                throw new Exception("Usuário não encontrado");
            }
    
            // Retorna o array contendo os dados do usuário
            return $array;
        } catch (PDOException $e) {
            // Se ocorrer um erro durante a execução da consulta, lança uma exceção PDOException
            // Nesse caso, a exceção será capturada pelo código que chama essa função e poderá ser tratada adequadamente
            throw new Exception("Erro durante a consulta: " . $e->getMessage());
        }
    }
    

}
?>
