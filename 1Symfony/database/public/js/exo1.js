// si on n'utilise pas defer dans la balise script, on peut executer des functions ou autre dans la function ci-dessous
document.addEventListener('DOMContentLoaded', function () {
    changeListe();
});

function changeListe() {
// let ulListOne = document.getElementById('ulListOne');
    let ulListOne = document.querySelector('#ulListOne');
// let items = ulListOne.getElementsByTagName('li');
    let items = ulListOne.querySelectorAll('li');

    ulListOne.setAttribute('type', 'circle');
    // ulListOne.style.listStyleType = 'upper-roman';
    // en css list-style-type : 'upper-roman'

    for (let i = 0; i < items.length; i++) {

        // items[i].setAttribute('onClick', "alert('item : '+(i+1))");
        items[i].addEventListener('click', function () {
            alert('item : '+(i+1));
        })

        items[i].innerText = "Blabla " + (i + 1);
    }
}