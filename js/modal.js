const modal = document.querySelector('#modal')
const btnOpen = document.querySelector('#open-modal')
const btnClose = document.querySelector('#modal-close')

btnOpen.addEventListener('click', () => {
    modal.classList.add('open')
})
btnClose.addEventListener('click', () => {
    modal.classList.add('close');
    modal.classList.remove('open');

    setTimeout(() => {
        modal.classList.remove('close')
    }, 300)
})

    