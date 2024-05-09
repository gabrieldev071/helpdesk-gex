// Função para fazer logout do usuário
/* function logout() {
  // Redireciona o usuário para a página de logout (logout.php)
  window.location.href = "../index.php";
}
 */
// Evento que é acionado quando o DOM é completamente carregado

document.addEventListener("DOMContentLoaded", function () {
  // Obtém o formulário de pesquisa pelo ID
  const form = document.getElementById("searchForm");
  // Obtém o campo de entrada de pesquisa pelo ID
  const input = document.getElementById("searchInput");
  // Obtém todas as linhas da tabela
  const tableRows = document.querySelectorAll("tbody tr");

  // Adiciona um evento de "submit" ao formulário de pesquisa
  form.addEventListener("submit", function (event) {
    // Impede o comportamento padrão de enviar o formulário
    event.preventDefault();
    // Obtém o termo de pesquisa digitado pelo usuário e remove espaços em branco
    const searchTerm = input.value.trim().toLowerCase();
    // Verifica se o campo de pesquisa está vazio
    if (searchTerm === "") {
      // Se estiver vazio, exibe todas as linhas da tabela
      tableRows.forEach((row) => {
        row.style.display = "table-row";
      });
    } else {
      // Se houver um termo de pesquisa, filtra as linhas da tabela conforme necessário
      tableRows.forEach((row) => {
        // Obtém o código do ticket da linha atual
        const ticketCode = row.querySelector("th").textContent.trim();
        // Verifica se o código do ticket contém o termo de pesquisa
        if (ticketCode.includes(searchTerm)) {
          // Se contiver, exibe a linha
          row.style.display = "table-row";
        } else {
          // Se não contiver, oculta a linha
          row.style.display = "none";
        }
      });
    }
  });
});
