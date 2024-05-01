function updateInputClasses() {
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");

  const nomeInput = document.getElementById("nome_chamado");
  const email_Input = document.getElementById("email_chamado");

  const telefoneInput = document.getElementById("telefone_chamado");
  const matriculaInput = document.getElementById("matricula_chamado");
  const apsInput = document.getElementById("aps_chamado");
  const categoriaInput = document.getElementById("categoria_chamado");
  const descricaoInput = document.getElementById("descricao_chamado");

  if (emailInput.value !== "") {
    emailInput.classList.add("has-val");
  } else {
    emailInput.classList.remove("has-val");
  }

  if (passwordInput.value !== "") {
    passwordInput.classList.add("has-val");
  } else {
    passwordInput.classList.remove("has-val");
  }

  if (telefoneInput.value !== "") {
    telefoneInput.classList.add("has-val");
  } else {
    telefoneInput.classList.remove("has-val");
  }

  if (matriculaInput.value !== "") {
    matriculaInput.classList.add("has-val");
  } else {
    matriculaInput.classList.remove("has-val");
  }

  if (apsInput.value !== "") {
    apsInput.classList.add("has-val");
  } else {
    apsInput.classList.remove("has-val");
  }

  if (categoriaInput.value !== "") {
    categoriaInput.classList.add("has-val");
  } else {
    categoriaInput.classList.remove("has-val");
  }

  if (descricaoInput.value !== "") {
    descricaoInput.classList.add("has-val");
  } else {
    descricaoInput.classList.remove("has-val");
  }

  if (nomeInput.value !== "") {
    nomeInput.classList.add("has-val");
  } else {
    nomeInput.classList.remove("has-val");
  }

  if (email_Input.value !== "") {
    email_Input.classList.add("has-val");
  } else {
    email_Input.classList.remove("has-val");
  }
}

// Adiciona ouvinte de evento para chamar a função quando o valor dos inputs mudar
document.getElementById("email").addEventListener("input", updateInputClasses);
document
  .getElementById("password")
  .addEventListener("input", updateInputClasses);

document
  .getElementById("nome_chamado")
  .addEventListener("input", updateInputClasses);

document
  .getElementById("email_chamado")
  .addEventListener("input", updateInputClasses);

document
  .getElementById("telefone_chamado")
  .addEventListener("input", updateInputClasses);
document
  .getElementById("matricula_chamado")
  .addEventListener("input", updateInputClasses);
document
  .getElementById("aps_chamado")
  .addEventListener("input", updateInputClasses);
document
  .getElementById("categoria_chamado")
  .addEventListener("input", updateInputClasses);
document
  .getElementById("descricao_chamado")
  .addEventListener("input", updateInputClasses);
