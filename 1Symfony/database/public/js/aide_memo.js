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
li.className = "liClass";
li.innerText = "Bonjour, C'est Mon LI créé en JS";

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


//
//
// class NomDeClasse { // Nom d'une classe commence toujours par une majuscule et est en CamelCase
//     // " visibilité " dans une classe ou projet (public, protected, private)
//
//     // Les attributs sont en camel case et commence toujours par une minuscule
//
//     public $attributPublic; // ouvert à tout le monde
//     protected $attributProtege; // partagé entre classe qui va hériter d'elle
//     private $attributPrive; // réserver uniquement à cette classe
//
//     public function __construct($parametre) {} // La construction d'un objet passe par un constructeur
//
//     // Les méthodes sont en camel case et commence toujours par une minuscule
//     public function methodeDeMaClasse() {}
// }
//
// //exemple
// class MaVie
// {
//     public $attribut;
//
//     public function __construct() {}
//
//     public function jeSuisUnLivreOuvert() {}
//
//     protected function jeCommuniqueQuAvecMesAmis() {}
//
//     private function monJardinSecret() {}
// }
//
// $maVie = new MaVie();
// $maVie->jeSuisUnLivreOuvert();
//
//
// // On ne peut hériter d'une classe que si elle fait partie d'elle
// // ex: class Homme extends Humain
// // L'homme est un humain
// // Quand on peut dire " est un " alors il y a héritage
// class NomDeClasseEnfant extends NomDeClasse { // on ne peut hériter que d'une classe, et la derniere s'appelle class mère
//     public function methode() {} // si une méthode a le même nom que la class mère, comme dans ce cas alors on appelle ça du polymorphisme
//     // le constructeur est toujours une méthode de polymorphisme quand il y a l'héritage
// }
//
//
// // création d'un objet
// // new permet de créer l'objet dont la variable est l'objet
// $nomObjet = new NomDeClasseEnfant('paramètre éventuel');
//
//
//
// // ---------------- Comment éviter les INJECTIONS SQL ---------------------------
// // au lieu de concatener une variable dans notre requête comme par exemple ci-dessous
// $query = "insert into user (nomColonne1, nomColonne2) values ('{$variable}', '{$variable2}')";
//
// // on va enlever les apostrophes ainsi que la variable et mettre un placeholder à la place
// // ça s'écrit par exemple
// // :nom
// // les placeholders seront sécurisé par PDO
// // il faudra ensuite spécifier par quoi on remplace ce placeholder dans un bindParam ou un tableau que l'on transmet à la méthode execute()
//
// $query = "insert into user (nomColonne1, nomColonne2) values (:placeHolderQuiALeNomDeSaColonne1, :nomColonne2)";
//
// $prepare = $this->connexion->prepare($query);
//
// $prepare->bindParam('placeHolderQuiALeNomDeSaColonne1' , $variable, PDO::PARAM_STR, 30); // 30 = nombre de caractère maxi
// $prepare->bindParam('nomColonne2' , $variable2, PDO::PARAM_INT);
//
// // ici dans cet exemple on précise le même nom du placeholder que dans bindParam
// // à l'emplacement du placeholder correspondant sera remplacé par la valeur variable mais protégé
//
// $prepare->execute();
//
// // autre façon plus rapide mais pas rigoureuse car on ne précise pas
// $prepare->execute([
//                       'placeHolderQuiALeNomDeSaColonne1' => $variable,
//     'nomColonne2' => $variable2,
// ]); // puis on execute sa requête
//
// // petite précision, on peut mettre ds placeholder que pour les noms des colones et non pas pour remplacer le sens du tri d'un "order by" par exemple
//
//
// // ------------------------- Crypter un mot de passe pour une base de donnée et le tester ----------------------------
// // admettons, on a un champ d'un formulaire qui s'appelle password
// // et le mot de passe tapé est "eric"
// $_POST['password'] = 'eric';
//
// // on devra crypter le mot de passe avec la fonction password_hash comme ci-dessous pour l'enregistrer dans la base de donnée
// // $motdepasseCrypte = password_hash($motDePasseACrypter, CONSTANTE_DE_TYPE_DE_CRYPTAGE);
// // exemple concret
// $motdepasseCrypte = password_hash($_POST['password'], PASSWORD_DEFAULT);
//
// // Le hash et le sel donné aura pour valeur quelque chose comme ça
// $motdepasseCrypte = '$2y$10$gxLQF12uzPb9qw34z/TfwOpmEYFI0rFc4wB1zDrMXutrbtzDQP.8.';
//
// // Pour info la taille d'un mot de passe crypté vaut toujours 72 caractères, donc la taille de la colonne d'une base de donnée qui
// // devra stocker le mot de passe devra faire cette taille mais pourra être supèrieur par sécurité et avoir une taille de 255 caractères
//
// // Puis il faudra dans un second temps vérifier le mot de passe saisie dans le formulaire
// // avec celui de la base de donnée avec la fonction password_verify
// // exemple
// if(password_verify($_POST['password'], $motdepasseCrypte)) {
//     echo 'mot de passe correct';
// } else {
//     echo 'Votre mot de passe est invalide';
// }
//
// // Faire des tests unitaires
// // Il faut installer un package qui s'appelle PHPUnit
// // ça permet de tester des méthodes (d'une classe) et de s'assurer que cette méthode retourne toujours un résultat attendu
// // Exemple on a besoin de vérifier qu'une méthode de mot de passe soit valide si il y a 1 majuscule, 1 chiffre, 1 symbol
// // de tester différent mot de passe valid et invalid et de certifier que celui ci est valid
// composer require --dev phpunit/phpunit ^9
//
// // Expression régulière
// // C'est un fonction php preg_match ou preg_replace qui va executer un pattern (chaine de caractère) qui est un tas de condition
// // Exemple on a besoin de vérifier qu'une méthode de mot de passe soit valide si il y a 1 majuscule, 1 chiffre, 1 symbol
// preg_match();
// preg_replace(); // permet de remplacer par exemple un mot ou lettre par un autre