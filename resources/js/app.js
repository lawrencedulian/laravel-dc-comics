import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteBtns = document.querySelectorAll('.delete-btn'); //prelevato tutti i btn con classe .delete-btn

deleteBtns.forEach((btn) => {
    btn.addEventListener("click", (event) => {
        event.preventDefault(); //non esegue la form
        const comicTitle = btn.getAttribute('data-comic-title'); //preleva titolo comic
        const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
        document.getElementById('modal-comic-title').innerText = comicTitle;
        modal.show();
        document.getElementById('delete-comic').addEventListener("click", () => {
            btn.parentElement.submit();
        });
    });
});