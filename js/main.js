import Modal from './modules/Modal.js';
import Timer from './timer.js';
// console.log(location);
// Modules init
const modal = new Modal()
let btnInput = document.getElementById('btnInput');

btnInput.addEventListener('click', async() => {
    // Mostramos boton de enviar
    modal.openModal('modalInput');
})