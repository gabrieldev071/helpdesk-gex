<?php 
    // Definindo as informações de conexão com o banco de dados

    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa";

    global $pdo;

    try {
        // Estabelecendo uma conexão PDO com o banco de dados
        $pdo = new PDO("mysql:dbname=".$bd."; host=".$server, $user, $pass);
        // Definindo o modo de erro do PDO para lançar exceções
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Executando uma consulta para contar o número de linhas na tabela 'usuarios'
        $sql = $pdo->query("SELECT * FROM usuarios");
       /*  echo $sql->execute().'<br>';  */
      

        // Exibindo o número de linhas retornadas pela consulta
        // echo $sql->rowCount();
    
    } catch (PDOException $e) {   
        // Capturando e exibindo qualquer exceção lançada durante a conexão ou execução da consulta
        echo "ERRO: ".$e->getMessage();
    }
?>
