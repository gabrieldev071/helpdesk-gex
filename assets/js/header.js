function showNavbar() {
    const nav = document.querySelector('nav');
    nav.classList.toggle('responsive_nav');
  }
  
  function updateMenuButtonVisibility() {
    const showMenuButton = window.innerWidth <= 1024;
    const navButton = document.getElementById('nav-btn');
    navButton.style.display = showMenuButton ? 'block' : 'none';
    console.log("Deu certo!");
  }
  
  window.addEventListener('resize', () => {
    updateMenuButtonVisibility();
  });
  
  updateMenuButtonVisibility();
  
const hamBurger = document.getElementById("toggle-btn-event");

hamBurger.addEventListener("click", function expand() {
  document.querySelector("#sidebar").classList.toggle("expand");

});