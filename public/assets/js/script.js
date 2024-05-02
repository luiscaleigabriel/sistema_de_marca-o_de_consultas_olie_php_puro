const toggle = document.getElementById('toggle');
const headerleft = document.querySelector('.header-left');

function openClose() {
    toggle.classList.toggle('open');
    headerleft.classList.toggle('open');
}