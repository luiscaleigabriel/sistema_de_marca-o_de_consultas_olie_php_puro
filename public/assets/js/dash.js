const toggle = document.querySelector('#toggle');
const contentL = document.querySelector('.content-l');

toggle.addEventListener('click', () => {
    contentL.classList.toggle('active');
});