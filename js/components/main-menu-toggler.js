const navbarToggler = document.querySelector('.navbar__toggler');
const navbarMainMenu = document.querySelector('.navbar__main-menu');

navbarToggler.addEventListener('click', function() {
    navbarMainMenu.classList.toggle('navbar__main-menu--active')
    this.classList.toggle('navbar__toggler--active')
})