// Função para atualizar as classes dos inputs com base nos valores
function updateInputClasses() {
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
  
    if (emailInput.value !== "") {
      emailInput.classList.add('has-val');
    } else {
      emailInput.classList.remove('has-val');
    }
  
    if (passwordInput.value !== "") {
      passwordInput.classList.add('has-val');
    } else {
      passwordInput.classList.remove('has-val');
    }
  }
  
  // Adiciona ouvinte de evento para chamar a função quando o valor dos inputs mudar
  document.getElementById('email').addEventListener('input', updateInputClasses);
  document.getElementById('password').addEventListener('input', updateInputClasses);
  