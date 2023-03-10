const outsideModal = document.querySelector('#div-outside')
const btnClose = document.querySelector('#btn-close-id')

btnClose.addEventListener('click', () => outsideModal.style.display = 'none')
window.addEventListener('load', () => outsideModal.style.display = 'flex')
