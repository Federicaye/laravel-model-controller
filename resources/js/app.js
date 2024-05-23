import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
import jsonBooks from '../../public/books.json';
console.log(jsonBooks);
let idActive = 1;
let detailsButton = document.querySelectorAll('.details');
detailsButton.forEach(function (button) {
    button.addEventListener('click', function () {
        idActive = this.id;
        console.log(idActive);
        let selectedBook = document.querySelector('.selectedBook');
        selectedBook.innerHTML = `<p>${jsonBooks[idActive-1].title}</p>`;
    })
})


