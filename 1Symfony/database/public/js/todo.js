let oContainer = document.createElement('span');
let oDivTodoPrompt = document.createElement('div');
let oTodoPrompt = document.createElement('input');
let oBoutonAjouterUneTache = document.createElement('button');
let oAFaire = document.createElement('p');
let oTodoList = document.createElement('ul');
let oFait = document.createElement('p');
let oTodoListDone = document.createElement('ul');

oContainer.classList.add('container-sm');
oContainer.innerHTML = '<h1>Tache à faire</h1>';

oDivTodoPrompt.classList.add('col-sm-2');
oTodoPrompt.classList.add('form-control');

oDivTodoPrompt.appendChild(oTodoPrompt);

oBoutonAjouterUneTache.addEventListener('click', ajouterUneTache);
// oBoutonAjouterUneTache.addEventListener('click', function () {ajouterUneTache()});
// oBoutonAjouterUneTache.addEventListener('click', () => {ajouterUneTache()});
// oBoutonAjouterUneTache.addEventListener('click', () => ajouterUneTache());
oBoutonAjouterUneTache.classList.add("btn");
oBoutonAjouterUneTache.classList.add("btn-primary");
oBoutonAjouterUneTache.classList.add("mt-3");
oBoutonAjouterUneTache.textContent = "Ajouter";

oAFaire.textContent = "Tache.s à faire";
oFait.textContent = "Tache.s faite.s";

oContainer.appendChild(oDivTodoPrompt);
oContainer.appendChild(oBoutonAjouterUneTache);
oContainer.appendChild(oAFaire);
oContainer.appendChild(oTodoList);
oContainer.appendChild(oFait);
oContainer.appendChild(oTodoListDone);

let mains = document.body.getElementsByTagName('main');
if(mains.length) {
    mains[0].appendChild(oContainer);
} else {
    document.body.appendChild(oContainer);
}

oTodoPrompt.focus();

function ajouterUneTache()
{
    let oNouveau = document.createElement("li");
    let oSupprime = document.createElement("button");

    oSupprime.textContent = "supprimer";
    oSupprime.addEventListener('click', () => oNouveau.remove());
    // oSupprime.className = "btn btn-danger ms-3 me-3";
    oSupprime.classList.add("btn");
    oSupprime.classList.add("btn-danger");
    oSupprime.classList.add("ms-3");
    oSupprime.classList.add("me-3");

    oNouveau.textContent = oTodoPrompt.value;
    oNouveau.appendChild(oSupprime);
    oNouveau.appendChild(creationBtFait(oNouveau));
    oTodoList.appendChild(oNouveau);
}

function creationBtFait(el)
{
    let oFaitBoutton = document.createElement("button");

    oFaitBoutton.textContent = "Fait";
    //btn btn-success ms-3
    oFaitBoutton.classList.add("btn");
    oFaitBoutton.classList.add("btn-success");
    oFaitBoutton.classList.add("ms-3");
    oFaitBoutton.addEventListener('click', () => oTodoListDone.appendChild(el));

    return oFaitBoutton;
}