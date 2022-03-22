let tab = new Array(1, 2, 4);
let tableau = [1,2,4]

let variable = 'texte'; // entre guillemet / apostrophe = texte
let variableEntiere = 1; // chiffre
let boolean = true; // false //  vrai ou faux
let variableExiste; // undefined

let a = variableExiste ?? 'contenu';
// a = variableExiste ?? 'contenu'; équivalence en php classique
if(variableExiste) {
    a = variableExiste;
} else {
    a = 'contenu';
}

a = variable ? variable : 'contenu';

let variableA;
let variableB;
let variableC;
// ici, si variableA à été défini et a un contenu alors a aura son contenu sinon elle prendra le contenu de variableB, pareil si elle existe sinon ça sera le contenu de variableC
a = variableA ?? variableB ?? variableC;


// Operateur ternaire
// ? :
// si $variable est vrai (donc à un contenu) alors $a aura la valeur 'test' et sinon aura la valeur 'valeur par defaut'
a = variable ? 'test' : 'valeur par defaut';



// condition d'égalité multiple
// Si (dans le cas suivant) $voiture est = à EriMobile alors execute le cas EricMobile et aussi NicolasMobile car tant que
// la condition ne rencontre pas de break alors il exécute tous les cas suivants.
let voiture = 'EricMobile'
switch (voiture) {
    case 'EricMobile':
        // traitement d'Eric Mobile
        console.log('Eric Mobile est selectionné');

    case 'NicolasMobile':
        // traitement de Nicolas Mobile
        console.log('Nicolas Mobile est selectionné');
        break;

    case 'DjibrilMobile':
        console.log('Djibril Mobile est selectionné');
        break;
}


// $i++ revient à dire $i = $i + 1;
// $i-- revient à dire $i = $i - 1;

// boucle incrémentale
for(let i = 0; i < 10; i++) {
    console.log("Numero : " + i)
}

// autre boucle
let i = 0
do { // fait
    console.log( "Numero : " + i )
} while(i++ < 10) // tant que $i est inférieur à dix
//
i = 0
while(i < 10) { // tant que $i < 10
    i++;
    console.log("Numero : " + i);
}

// création d'un tableau
// deux façons d'écrire un tableau en php
// $tableau = array(45, 2323, 234234);
let tableauBis = [45, 2323, 234234];

console.error(tableauBis[0]); // 45;

// /* equivalent avec une boucle for
// for($i = 0; $i < count($tableau); $i++) {
for(let i = 0; i < tableau.length; i++) {
    console.warn(tableau[i])
}

////////////////////////////////////////////////////
// Parcours de tableau de façon différente
let semaine = ['lundi', 'mardi'];
// - avec une simple boucle
for(let i = 0; i< semaine.length; i++) {
    let jour = semaine[i];
}

for (let jour in semaine) {}

semaine.forEach((jour) => {})

// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/map
// parcours de tableau


// map va boucler sur son tableau, donc va commencer par 'lundi'
// puis retourne un resultat (non obligatoire)
let semaineBis = semaine.map((cle) => {

});


//
// // Permet d'essayer un code et s'il y a un envoi d'exception
// // alors dans le catch on peut afficher un message adéquat suivant l'erreur envoyée
try {
    //     throw new Exception("Message d'erreur", 77); // en php, Envoie une exception, donc un message et un code
    throw "monException";
    // } catch (Exception $e) { en php
} catch (e) {
    console.error(e)
}

function maFunction() {
    let i = 0;
    console.log(i)
}

maFunction();

function maFunctionBis(message) {
    console.log(message)
}

maFunctionBis("Bonjour")

// utilisation de variable externe à la fonction
// C'est le mal
let variableTest = "Figolu";

function maFunctionFigolu() {
    console.log(variableTest + " c'est n'importe quoi ");
}

maFunctionFigolu();

let variableTestBis = 5;

function maFunctionFigoluBis() {
    console.log(variableTest + variableTestBis);
}

maFunctionFigoluBis()

// Autre façon d'écrire une fonction que l'on va retrouver souvent dans des scripts
let maFunctionTernaire = function() {
    console.log("maFunctionTernaire")
}

console.log(maFunctionTernaire)

// fonction fléché
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Functions/Arrow_functions
let maFonction = () => {
}

// normalement on a besoin d'utiliser les accolades, mais dans le cadre d'une fonction fléché et si on n'a qu'une seule instruction à executer alors on n'est pas obligé dans mettre
let maFonction = () => alert(1);

// on n'a pas forcément besoin des parenthèses quand on a qu'un paramètre
let maFonctionAuCarre = x => x * x;
maFonctionAuCarre(10);
// attention, le this appartient au contexte et non à l'événement par exemple




// information du navigateur
console.log(navigator);
// information sur notre fenetre de notre navigateur
console.log(window);
// toutes les infos sur notre page html
console.log(document)
// exemple recupere une fois la page html chargé tous les enfants de body
console.log(document.body.children);
// childNodes donne tous les noeuds (les elements + texte), dans ce cas présent du body
console.log(document.body.childNodes);


let ulListOne = document.getElementById('ulListOne');
let items = ulListOne.getElementsByTagName('li');

// querySelector permet de recuperer un element comme je le ferai en CSS
// dans cet exemple #ulListOne je recupere l'element ulListOne dans ma page
let ulListOne = document.querySelector('#ulListOne');
// Ici je récupere l'element ulListOne qui a une classe " maclasse "
let ulListOne = document.querySelector('#ulListOne.maclasse');
// Lui va recuperer un ensemble d'element avec la meme notation que les CSS
let items = ulListOne.querySelectorAll('li');

////////////////////////////////////////////////////////////////////////////////////////
// 4 façcons d'écrire des class en JS

// en json
let json = {
    cle: "valeur",
    prenom: "Jason",
    nom: "Vorhees",

    getPrenom : function () {
        return this.prenom;
    }
}

console.log(json.getPrenom());

// Je peux ajouter une méthode à ma " class " qui s'appelle json
json.getNom = function () {
    return this.nom
}

let tabJson = [
    {prenom: "test"},
    {prenom: "blabla"}
]

console.log(tabJson)
console.log(tabJson[0].prenom)
console.log(tabJson[1].prenom)

// anciennne méthode
function TotoBis() {
    this.monAttribut = 'test';
}

TotoBis.prototype.maMethode()
{
    console.log(this.monAttribut);
}

var TotoVersionObject = Object.create()

Object.setPrototypeOf(TotoVersionObject.prototype, TotoJson);

// méthode récente
class Toto {
    constructor(test)
    {
    }

    bonjour()
    {
    }

    static maMethode()
    {
    }
}

class Titi extends Toto { // titi hérite de toto
    constructor()
    {
        super(); // appel du constructeur parent
    }

    bonjour()
    {
    }
}



///////////////////////////////////////////////////////////////////////////
// Creation en DOM d'un élement div
let div = document.createElement('div');
div.id = 'divCree'; // je lui rajoute un identifiant
div.innerText = "texte"; // du contenu
// textContent récupère le contenu de tous les éléments, y compris <script> et <style>, ce qui n'est pas le cas de innerText.
// voir doc https://developer.mozilla.org/fr/docs/Web/API/Node/textContent
div.textContent = "texte"; // du contenu

// on ajouter des attributs à element de cette façon
div.setAttribute("class", "maClasse");
// en dom
div.className = "maClasse";

// Permet d'ajouter la création de l'élement precedent, ici dans notre body
document.body.appendChild(div);

let li = document.createElement('li');
li.title = "C'est mon titre";
// li.className = "liClass active";
li.innerText = "Bonjour, C'est Mon LI créé en JS";
li.classList.add("active"); // ajoute une class css
li.classList.contains("active") // verifie si mon el à la class css active
li.classList.remove("active");  // supprime la class css

li.remove(); // supprime mon element li

let ul = document.getElementById('ul');
ul.appendChild(li);

let span = document.createElement('span');
span.innerHTML = '<strong>mon span</strong>';

let divCree = document.getElementById('divCree');

// ajouter des evenements il faut utiliser sur element "addEventListener"
document.getElementById('testid').addEventListener("click", function (e) {
    // e.target.textContent = "fffff"
    console.log(e, this);
    this.innerHTML = '<h2>je change le texte</h2>';
});

//////////////////////////////////////////////
// Module JavaScript (ou sorte de require / namespace en php)
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Modules

// export
function monAlert() {alert(1);}
function monAutreAlert() {}

export default UneClasseParExemple; // l'importation s'écrira "import UneClasseParExemple from 'monFichier.js'";
export {monAlert, monAutreAlert}; // dans le cas ou on a plusieurs fonctions ou classes à exporter en plus de celle par défaut

// import
// Pour importer uniquement une classe / fonction par défaut
import UneClasseParExemple from 'monFichier.js';
// Importer la classe / fonction par défaut et les autres qui ne sont pas par défaut
import UneClasseParExemple, {monAlert, monAutreAlert} from 'monFichier.js';

// fichier qui va importer nos modules
// Attention, par défaut c'est en defer
<script type="module" src="monFichier.js"></script>


//////////////////////////////////////////////////////////
// Ajax permet de recuperer des données provenant d'ailleurs (de son propre site ou d'un autre)
fetch("https://randomuser.me/api/?results=100&nat=fr") // on lui donne l'adresse
.then((reponse) => { // on vérifie la réponse donnée du site
    if(reponse.ok) {
        reponse.text().then((monText)=> {}); // on recupere les données au format text si tout va bien
        reponse.json().then((monJson)=> {});// on recupere les données au format json si tout va bien
    }
}).catch((e) => { // en cas d'une erreur interne
    alert(e.message);
});


//////////////////////////////////////////////////
// evenement JS
// evenement onchange
document.getElementById("monChamp").addEventListener('onchange', (e) => {
    alert(e.target.value);
});

//////////////////////////////////////////////////////////
// evenement sur l'envoie d'un formulaire
document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault(); // annule le comportement par défaut
    //traitement et éventuellement on envoie le formulaire
    e.target.submit();
});

// Customiser les messages d'erreur en html5
// https://developer.mozilla.org/en-US/docs/Web/API/HTMLObjectElement/setCustomValidity

let oNom = document.getElementById("nom");
let validityState = oNom.validity;
let message = '';

if (validityState.valueMissing) {
    message= `tu dois écrire quelque chose`;
} else if (validityState.rangeUnderflow) {
    message = `tu dois taper un chiffre plus grand`;
} else if (validityState.rangeOverflow) {
    message = `ton chiffre est trop grand`;
}

oNom.setCustomValidity(message);

oNom.reportValidity();

// css personnalisé
// :invalid {
//     border: 2px solid orangered;
// }
//
// :valid {
//     border: 2px solid greenyellow;
// }