function validarFormulario() {
  var localizacaoSelecionada = document.getElementById("localizacao").value;
  if (localizacaoSelecionada === "") {
    alert("Por favor, selecione uma localização válida.");
    return false; // Impede o envio do formulário
  }
  return true; // Permite o envio do formulário
}
