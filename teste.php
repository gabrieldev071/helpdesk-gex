<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Atualização de Div com PHP</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div id="conteudo">
    <!-- O conteúdo será atualizado aqui -->
</div>

<button onclick="atualizarDiv()">Atualizar</button> <!-- Botão para atualizar a div -->

<script>
// Função para atualizar a div utilizando AJAX
function atualizarDiv() {
    $.ajax({
        url: 'atualizar_conteudo.php', // Arquivo PHP que processará a requisição
        type: 'GET',
        success: function(response) {
            $('#conteudo').html(response); // Atualiza o conteúdo da div com a resposta do servidor
        },
        error: function(xhr, status, error) {
            console.error('Erro ao atualizar div:', error); // Exibe um erro, se ocorrer
        }
    });
}
</script>

</body>
</html>
