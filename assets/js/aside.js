// Função para mostrar ou esconder a barra de navegação responsiva
function toggleNavbar() {
  const nav = document.querySelector('nav');
  nav.classList.toggle('responsive_nav');
}

// Função para atualizar a visibilidade do botão de menu com base na largura da janela
function updateMenuButtonVisibility() {
  const showMenuButton = window.innerWidth <= 1024;
  const navButton = document.getElementById('nav-btn');
  navButton.style.display = showMenuButton ? 'block' : 'none';
  console.log("A visibilidade do botão de menu foi atualizada.");
}

// Adiciona um ouvinte de evento de redimensionamento da janela para atualizar a visibilidade do botão de menu
window.addEventListener('resize', updateMenuButtonVisibility);

// Chamar a função updateMenuButtonVisibility para configurar a visibilidade do botão de menu inicialmente
updateMenuButtonVisibility();

// Adiciona um ouvinte de evento ao carregar o conteúdo DOM para manipular a abertura e fechamento do menu lateral
document.addEventListener("DOMContentLoaded", function() {

  const hamBurger = document.getElementById("toggle-btn-event");
 
  if (hamBurger) {

      // Adiciona um ouvinte de evento de clique ao botão do menu de hambúrguer
      hamBurger.addEventListener("click", function toggleSidebar() {
          const sidebar = document.querySelector("#sidebar");
          // Alterna a classe 'expand' na barra lateral para abrir ou fechar o menu lateral
          if (sidebar) {
              sidebar.classList.toggle("expand");
          }
      });
  }
});