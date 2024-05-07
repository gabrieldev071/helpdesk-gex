// Função para atualizar as classes dos inputs com base no valor
// Array de IDs dos inputs a serem monitorados
const inputIds = [
  "email_login",
  "password_login",
  "nome_chamado",
  "email_chamado",
  "telefone_chamado",
  "matricula_chamado",
  "aps_chamado",
  "categoria_chamado",
  "descricao_chamado",

  "nome_update",
  "email_update",
  "telefone_update",
  "matricula_update",
  "categoria_update",
  "status_update"
];

function updateInputClasses(input) {

  if (input.value !== "") {
    input.classList.add("has-val");
  } else {
 
    input.classList.remove("has-val");
  }
}

// Adiciona ouvinte de evento para cada input
document.addEventListener("input", function(event) {
  // Obtém o elemento que disparou o evento
  const target = event.target;
  
  // Verifica se o elemento possui a classe "input"
  if (target.classList.contains("input")) {
    // Se sim, chama a função para atualizar as classes do input
    updateInputClasses(target);
  }
});
