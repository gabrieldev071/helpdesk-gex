<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include '../head.php' ?>
</head>

<body>

    <style>
        body {
            background-color: #f9bc07;
        }
    </style>

    <div class="container baseContainer">
        <h2 class='cadastro-title'>CADASTRO DE NOVO USUÁRIO</h2>
        <form action="../assets/php/cadastroscript.php" method="post" class="">

            <input type="hidden" name="acao" value="cadastrar">

            <div class="form-group">
                <label for="nome" class="">Nome completo:</label>
                <input type="text" class="form-control" id="nome" name="nome_cadastro" placeholder="Digite aqui..." required>
            </div>

            <div class="form-group">
                <label for="email" class="">E-mail corporativo:</label>
                <input type="email" class="form-control" id="email" name="email_cadastro" placeholder="exemplo@inss.gov.br" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha para acesso ao help desk:</label>
                <input type="password" class="form-control" id="senha" name="senha_cadastro" placeholder="Digite aqui..." required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" placeholder="Ex.: (99) 99999-8888" class="form-control" id="telefone" name="telefone_cadastro" pattern="(\+55)?(?:(\(\d{2,5}\)|\d{2,5})?((\d{8,9})|(\d{4,5}-\d{4})))" maxlength="20" minlength="10" title="Digite seu número corretamente. Não adicione espaços." required>
            </div>

            <div class="form-group">
                <label for="aps">Localização:</label>
                <select class="form-control" id="aps" name="aps_cadastro" required>
                    <option value="">Selecione sua APS</option>
                    <option value="GEX">Campina G. GEX</option>
                    <option value="DINA">Campina G. APS - Dinamérica</option>
                    <option value="CATOLE">Campina G. APS - Catolé</option>
                    <option value="OUTROS">Outros</option>
                </select>
            </div>

            <div class="form-group">
                <label for="matricula">Matrícula:</label>
                <input type="number" class="form-control" id="matricula" name="matricula_cadastro" placeholder="Digite sua matrícula" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastra</button>
            <a href="../index.php" type="button" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>

</html>