// d'abord je crée tous les elements dont j'ai besoin
// un container qui sera un div dont je vais mettre un autre div qui va contenir un champ de type input text, puis j'ajoute un boutton
// une fois que j'ai ajouté les attributs de chaque élément alors j'insére dans le body le container
let oContainer = document.createElement('div');
let oDivChoix = document.createElement('div');
let oChoix = document.createElement('input');
let oValid = document.createElement('button');
let oResultat = document.createElement('div');
let oScore = document.createElement('div');

oContainer.innerHTML = '<h1>Jeu de chifoumi</h1>';
oContainer.className = 'container-sm';

oDivChoix.className = "col-sm-3";

oChoix.id = "choix";
oChoix.type = "text";
oChoix.className = "form-control";

oValid.id = "valid";
oValid.textContent = "Joue";
oValid.className = "btn btn-primary";
oValid.addEventListener('click', function() {afficheScore(oChoix.value)});

let score = [0, 0];
let possibilite = ['pierre', 'feuille', 'ciseaux'];
let resultatTab = ['égalité', 'perd', 'gagne'];

oDivChoix.appendChild(oChoix);
oContainer.appendChild(oDivChoix);
oContainer.appendChild(oValid);
oContainer.appendChild(oResultat);
oContainer.appendChild(oScore);
document.body.appendChild(oContainer);

// l'étape suivante sera d'ajouter un évenement sur le bouton qui va me permettre de lire la valeur de mon champ

/**
 * Calcul aléatoire de ce que va jouer l'ordinateur
 */
function ordi() {
   return Math.round(Math.random() * 2);
}

function analyse(choixPersonne, choixOrdi) {
   let result = -1;

   if(choixPersonne !== choixOrdi) {
      result = 0;

      switch (choixPersonne) {
         case 0: // pierre
             if(1 === choixOrdi) {
                result = 1;
             }

             break;
         case 1: // feuille
            if(2 === choixOrdi) {
               result = 1;
            }
            break;
         case 2: //ciseaux
            if(0 === choixOrdi) {
               result = 1;
            }
      }
   }

   return result;
}

function personne(choix)
{
   let result = 0;

   for(let i = 0; i < possibilite.length; i++) {
      if(choix === possibilite[i]) {
         result = i;
         break;
      }
   }

   return result;
}

function afficheScore(choixJoeur) {
   let choixOrdi = ordi();
   let choixPersonne = personne(choixJoeur);
   let resultatAnalyse = analyse(choixPersonne, choixOrdi);

   if(1 === resultatAnalyse) {
      score[0]++;
   } else if(0 === resultatAnalyse) {
      score[1]++;
   }

   oResultat.innerHTML = `Le choix de l'ordi : ${possibilite[choixOrdi]} vs le choix de Guy : ${possibilite[choixPersonne]} ${resultatTab[resultatAnalyse+1]}`;
   oScore.innerHTML = `score de l'ordi : ${score[0]} vs Guyyyy : ${score[1]}`;

   if(score[0] > 2) {
      oScore.innerText = "TU as perdu espece de naze ! ";
   } else if(score[1] > 2) {
      oScore.textContent = "I WIN";
   }
}