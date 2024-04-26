<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
include 'head.php'
?>

<link rel="stylesheet" href="./assets/styles/stylecadastro.css">

<title>Abertura de chamado</title>
</head>
<body>

<div class="container baseContainer">
<h2 class='cadastro-title'>ABERTURA DE CHAMADO</h2>
<form action="cadastro_script.php" method="post" enctype="multipart/form-data" onsubmit="return validarFormulario()" class="needs-validation">

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
        <label for="categoria">Categoria do chamado:</label>
        <select class="form-control" id="categoria" name="categoria" required>
            <option value="">Selecione a categoria</option>
            <option value="Problema de Hardware">Problema de Hardware</option>
            <option value="Problema de Software">Problema de Software</option>
            <option value="Problema de Rede">Problema de Rede</option>
            <option value="Outros">Outros</option>
        </select>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição do problema:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="5" required></textarea>
    </div>

    <div class="form-group">
        <label for="anexo">Anexar imagem ou print:</label>
        <input type="file" class="form-control-file" id="anexo" name="anexo">
    </div>

    <button type="submit" class="btn btn-primary btn-block">Abrir Chamado</button>
    <a href="index.php" class="btn btn-primary btn-block" rel="noopener noreferrer">Voltar ao início</a>
</form>
</div>
</body>
</html>

