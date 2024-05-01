<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include 'head.php'
    ?>
    <title>Atualizar cadastro</title>
</head>

<body>

<?php
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = '$id'";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);
?>

    <div class="container baseContainer">
        <h2 class='cadastro-title'>ATUALIZAR DADOS</h2>
        <form action="atualizar_cadastroscript.php" method="POST" onsubmit="return validarFormulario()" class="needs-validation">

            <div class="wrap-input">
                <label for="nome">Nome completo:</label>
                <input type="text" class="input" id="nome" name="nome" required value="<?php echo $linha['nome'];?>">
            </div>

            <div class="wrap-input">
                <label for="email" class="">E-mail corporativo:</label>
                <input type="email" class="input" id="email" name="email" placeholder="exemplo@inss.gov.br" required value="<?php echo $linha['email'];?>">
            </div>

            <div class="wrap-input">
                <label for="aps">Localização:</label>
                <select class="input" id="aps" name="aps" required>
                    <option value="">Selecione sua APS</option>
                    <option value="13021040" <?php echo ($linha['aps'] == '13021040') ? 'selected' : ''; ?>>Campina G. APS - Tiradentes</option>
                    <option value="13021030" <?php echo ($linha['aps'] == '13021030') ? 'selected' : ''; ?>>Campina G. APS - Dinamérica</option>
                    <option value="13021020" <?php echo ($linha['aps'] == '13021020') ? 'selected' : ''; ?>>Campina G. APS - Catolé</option>
                </select>
            </div>

            <div class="wrap-input">
                <label for="matricula">Matrícula:</label>
                <input type="text" class="input" id="matricula" name="matricula" placeholder="Digite sua matrícula" required value="<?php echo $linha['matricula'];?>">
            </div>

            <button type="submit" class="btn btn-success" value="Salvar alterações">Atualizar</button>
            <input type="hidden" class="input" name="id" value="<?php echo $linha['cod_pessoa'];?>">
            <a href="dashboard.php" class="btn btn-secondary" rel="noopener noreferrer">Voltar ao Dashboard</a>
        </form>
    </div>
</body>

</html>
