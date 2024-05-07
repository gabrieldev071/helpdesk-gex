<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    ?>
    <title>Atualizar chamado</title>
</head>
<body>

<?php
include '../conexao.php';

// Verifica se o parâmetro 'id' foi passado na URL
$id = $_GET['id'] ?? '';

// Verifica se o ID foi fornecido na URL
if (empty($id)) {
    echo "ID não fornecido.";
    // Retorna uma resposta vazia se o ID não foi fornecido
    exit; // Encerra a execução do script se o ID estiver vazio
}

// Consulta SQL para selecionar o chamado com base no ID
$sql = "SELECT * FROM chamados WHERE id = '$id'";
$dados = mysqli_query($conn, $sql);

// Verifica se a consulta SQL foi executada com sucesso
if (!$dados) {
    echo "Erro ao executar a consulta SQL: " . mysqli_error($conn);
    exit; // Encerra a execução do script em caso de erro na consulta SQL
}

// Verifica se o chamado foi encontrado
if (mysqli_num_rows($dados) == 0) {
    echo "Chamado não encontrado.";
    exit; // Encerra a execução do script se o chamado não for encontrado
    echo json_encode($linha);
}

// Obtém os dados do chamado
$linha = mysqli_fetch_assoc($dados);
?>
    <div class="container baseContainer">
        <h2 class='cadastro-title'>ATUALIZAR CHAMADO</h2>
        <form action="../assets/php/updatechamado-script.php" method="POST" onsubmit="return validarFormulario()" class="needs-validation">

            <input type="hidden" name="acao" value="cadastrar">

            <div class="wrap-input">
                <input type="text" class="input has-val" id="nome_update" name="nome" value="<?php echo $linha['nome'];?>" required>
                <span class="focus-input" data-placeholder="Nome completo"></span>
            </div>

            <div class="wrap-input">
                <input type="email" class="input has-val" id="email_update" name="email" required value="<?php echo $linha['email'];?>">
                <span class="focus-input" data-placeholder="Email: exemplo@inss.gov.br"></span>
            </div>

            <div class="wrap-input">
                <input type="tel" class="input has-val" id="telefone_update" name="telefone" pattern="(\+55)?(?:(\(\d{2,5}\)|\d{2,5})?((\d{8,9})|(\d{4,5}-\d{4})))" maxlength="20" minlength="10" title="Digite seu número corretamente. Não adicione espaços." required value="<?php echo $linha['telefone'];?>">
                <span class="focus-input" data-placeholder="Telefone: (99) 99999-8888"></span>
            </div>

            <div class="wrap-input">
                <input type="text" class="input has-val" id="matricula_update" name="matricula" required value="<?php echo $linha['matricula'];?>">
                <span class="focus-input" data-placeholder="Matrícula"></span>
            </div>

            <div class="wrap-input">
                <select class="input has-val" id="aps_update" name="aps" required value="">
                    <option value="">Selecione sua APS</option>
                    <option value="GEX">Campina G. GEX</option>
                    <option value="DINA">Campina G. APS - Dinamérica</option>
                    <option value="CATOLE">Campina G. APS - Catolé</option>
                    <option value="OUTROS">Outros</option>
                </select>
            </div>

            <div class="wrap-input">
                <select class="input has-val" id="categoria_update" name="categoria" required value="">
                    <option value="">Selecione uma categoria</option>
                    <option value="Problema de Hardware">Problema de Hardwares</option>
                    <option value="Problema de Software">Problema de Softwares</option>
                    <option value="Problema de Rede">Problema de Rede / Acesso</option>
                    <option value="SABI/PRIMA/TOKEN">SABI, PRISMA, TOKEN</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Salvar alterações</button>
            <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
            <a href="../../index.php" class="btn btn-secondary" rel="noopener noreferrer">Voltar ao início</a>
        </form>
    </div>
</body>

</html>