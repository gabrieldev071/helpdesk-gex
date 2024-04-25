<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
include 'head.php'
?>

<link rel="stylesheet" href="./assets/styles/stylecadastro.css">
</head>
<body>

<div class="container baseContainer">
<h2 class='cadastro-title'>CADASTRO DE NOVO USUÁRIO</h2>
<form action="cadastro_script.php" method="post" onsubmit="return validarFormulario()" class="needs-validation">

    <input type="hidden" name="acao" value="cadastrar">

    <div class="form-group">
        <label for="nome">Nome completo:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>

    <div class="form-group">
        <label for="email" class="">E-mail corporativo:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@inss.gov.br" required>
    </div>

    <div class="form-group">
        <label for="senha">Senha para acesso ao help desk:</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="" required>
    </div>

    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="tel" placeholder="Ex.: (99) 99999-8888" class="form-control" id="telefone" name="telefone" pattern="(\+55)?(?:(\(\d{2,5}\)|\d{2,5})?((\d{8,9})|(\d{4,5}-\d{4})))" maxlength="20" minlength="10" title="Digite seu número corretamente. Não adicione espaços." required>
    </div>

    <div class="form-group">
        <label for="aps">Localização:</label>
        <select class="form-control" id="aps" name="aps" required>
            <option value="">Selecione sua APS</option>
            <option value="13021040 - Tirad">Campina G. APS - Tiradentes</option>
            <option value="13021030 - Dinam">Campina G. APS - Dinamérica</option>
            <option value="13021020 - Cato">Campina G. APS - Catolé</option>
        </select>
    </div>

    <div class="form-group">
        <label for="matricula">Matrícula:</label>
        <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Digite sua matrícula" required>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
    <a href="index.php" class="btn btn-primary btn-block" rel="noopener noreferrer">Voltar ao início</a>
</form>
</div>
</body>
</html>

