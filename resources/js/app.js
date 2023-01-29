import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

/* elementi  */

const deleteForms_list = document.querySelectorAll(".delete-form");


deleteForms_list.forEach((deleteForm) => {
    deleteForm.addEventListener("submit", function (event) {

        event.preventDefault();
        const confirm = confirm("do you really want to delete this item?");

        if (confirm === true) {
            form.submit();
        }
    })
})