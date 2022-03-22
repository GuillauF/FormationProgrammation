export default function searchUsers()
{
    let oDivListUsers = document.getElementById("listUsers");

    fetch("https://randomuser.me/api/?results=100&nat=fr")
    .then((r) => {
        if(r.ok) {
            r.json().then((listUsers) => search(listUsers, oDivListUsers));
        } else {
            oDivListUsers.innerHTML = "Il y a une erreur<br>code : " + r.status;
        }
    }).catch((e) => {
        oDivListUsers.textContent = e.message;
    });
}

function search(listUsers, el)
{
    let oSearch = document.getElementById("selectUsers");
    oSearch.focus();

    oSearch.addEventListener("keyup", (e) => {
        let tab = listUsers.results.filter((user)=> {
           return user.name.first.toLowerCase().indexOf(e.target.value.toLowerCase()) >= 0 || user.name.last.toLowerCase().indexOf(e.target.value.toLowerCase()) >= 0
        });
        // let tab = [];

        // for(let i = 0; i < listUsers.results.length; i++) {
        //     if(listUsers.results[i].name.first.toLowerCase().indexOf(e.target.value.toLowerCase()) >= 0) {
        //         console.log(listUsers.results[i].name.first);
        //         tab.push(listUsers.results[i]);
        //     }
        // }

        show(tab, el);
    });

    show(listUsers.results, el);
}

function show(listUsers, el)
{
    // Vide le contenu d'un element
    // el.innerHTML = '';
    while(el.firstChild) {
        el.firstChild.remove();
    }

    listUsers.map((user) => {
        let oContainer = document.createElement('div');
        let oFigure = document.createElement('figure');
        let oImg = document.createElement('img');
        let oFigCaption = document.createElement('figcaption');

        oContainer.className = "col-sm-4 col-md-3 col-lg-2 mb-3";
        oImg.src = user.picture.large;

        oFigCaption.innerHTML = `${user.name.title}, ${user.name.first} ${user.name.last}<br ><a href="mailto:${user.email}" title="${user.email}" ">${user.email}</a><br > <a href="tel:${user.cell}">${user.cell}</a>`;

        oFigure.appendChild(oImg);
        oFigure.appendChild(oFigCaption);
        oContainer.appendChild(oFigure);

        el.appendChild(oContainer);
    });
}