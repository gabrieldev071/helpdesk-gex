function validarFormulario() {
  var localizacaoSelecionada = document.getElementById("localizacao").value;
  if (localizacaoSelecionada === "") {
    alert("Por favor, selecione uma localização válida.");
    return false; // Impede o envio do formulário
  }
  return true; // Permite o envio do formulário
}

// pegar dados do PHP para JS
function pegarDados(id, nome) {
  
    document.getElementById('nome_pessoa').innerHTML = nome
    document.getElementById('nome_pess').value = nome;
    document.getElementById('cod_pessoa').value = id;
    document.getElementById('cod_pessoa_update').value = id;
}

// Função para carregar o formulário dentro do modal
function carregarFormulario() {
  $.ajax({
      url: 'chamado.php', // Arquivo PHP que contém o formulário
      type: 'GET',
      success: function(response) {
          $('#modalFormulario .modal-body').html(response); // Carrega o conteúdo do formulário dentro do modal
      },
      error: function(xhr, status, error) {
          console.error('Erro ao carregar formulário:', error); // Exibe um erro, se ocorrer
      }
  });
}

// Chama a função para carregar o formulário assim que o modal é exibido
$('#modalFormulario').on('show.bs.modal', function (e) {
  carregarFormulario();
});


function openModalUpdate(id) {
  // Faz uma requisição AJAX para o arquivo chamado.php usando o método GET
  $.ajax({
      url: 'atualizarchamado.php', // URL do arquivo PHP que contém o formulário
      type: 'GET', // Método da requisição
      success: function(response) { 
          // Insere o conteúdo retornado pelo arquivo chamado.php dentro do elemento com classe "modal-body" dentro do modal com ID "modalFormulario"
          $('#modalUpdate .modal-body').html(response);
          // Preenche os campos da modal com as informações do chamado
          $('#nome_update').val(response.nome);
          $('#email_update').val(response.email);
          $('#telefone_update').val(response.telefone);
          $('#matricula_update').val(response.matricula);
          $('#aps_update').val(response.aps);
          $('#categoria_update').val(response.categoria);
          $('#descricao_update').val(response.descricao);    
      },
      error: function(xhr, status, error) { // Função executada se ocorrer algum erro na requisição
          console.error('Erro ao carregar formulário:', error); // Exibe um erro no console do navegador
      }
  });
}


// Função executada quando o documento HTML está pronto
$(document).ready(function() {
  // Adiciona um ouvinte de evento de clique no botão com ID "openModalUpdate"
  $('#openModalUpdate').on('click', function() {
      // Chama a função loadForm() para carregar o formulário de atualização dentro do modal
      loadForm();
  });
});
