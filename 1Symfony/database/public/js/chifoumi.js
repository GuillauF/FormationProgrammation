// d'abord je crée tous les elements dont j'ai besoin
// un container qui sera un div dont je vais mettre un autre div qui va contenir un champ de type input text, puis j'ajoute un boutton
// une fois que j'ai ajouter les attributs de chaque élémenent alors j'insére dans le body le container
let oContainer = document.createElement('div');
let oDivChoix = document.createElement('div');
let oChoix = document.createElement('input');
let oValid = document.createElement('button');

oContainer.innerHTML = '<h1>Jeu de chifoumi</h1>';
oContainer.className = 'container-sm';

oDivChoix.className = "col-sm-3";

oChoix.id = "choix";
oChoix.type = "text";
oChoix.className = "form-control";

oValid.id = "valid";
oValid.textContent = "Joue";
oValid.className = "btn btn-primary";

oDivChoix.appendChild(oChoix);
oContainer.appendChild(oDivChoix);
oContainer.appendChild(oValid);
document.body.appendChild(oContainer);

// l'étape suivante sera d'ajouter un évenement sur le bouton qui va me permettre de lire la valeur de mon champ
