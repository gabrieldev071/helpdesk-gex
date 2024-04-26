function validarFormulario() {
  var localizacaoSelecionada = document.getElementById("localizacao").value;
  if (localizacaoSelecionada === "") {
    alert("Por favor, selecione uma localização válida.");
    return false; // Impede o envio do formulário
  }
  return true; // Permite o envio do formulário
}

function pegarDados(id, nome) {
  
    document.getElementById('nome_pessoa').innerHTML = nome
    document.getElementById('nome_pess').value = nome;
    document.getElementById('cod_pessoa').value = id;
}
