const buttonEl = document.querySelector("button");
const ModalEl = document.querySelector(".modal-container");

const openModal = () => {
    ModalEl.classList.add("open");
};
const closeModal = (e) => {
    if (e.target.classlist.contains ("open")) 
    ModalEl.classlist.remove("open");
};

buttonEl.addEventListener('click', openModal);
window.addEventListener('click', closeModal)