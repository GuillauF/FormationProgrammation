<?php

$variable = 'texte'; // entre guillemet / apostrophe = texte
$variableEntiere = 1; // chiffre
$boolean = true; // false //  vrai ou faux

// Je teste si une variable existe ou pas
// isset retourne vrai ou faux
// ici $variableExiste n'a jamais été créée donc notre condition est fausse
if(isset($variableExiste) === true) {} else {}
// empty permet de vérifier si la variable existe et si elle existe alors vérifie si il y a une valeur ou pas
if(empty($variableExiste)) {}
// je teste si c'est pas vide dans ce cas là
if(!empty($variableExiste)) {}

// condition autre
// dans ce cas on permet de verifier $variableExiste existe et si elle a un contenu alors $a aura la valeur de $variableExiste sinon $a aura pour valeur 'contenu'
$a = $variableExiste ?? 'contenu';
// $a = $variableExiste ?? 'contenu'; équivalence en php classique
if(isset($variableExiste) && $variableExiste) {
    $a = $variableExiste;
} else {
    $a = 'contenu';
}

// ici, si $variableA existe et a un contenu alors $a aura son contenu sinon elle prendra le contenu de $variableB, pareil si elle existe sinon ça sera le contenu de $variableC
$a = $variableA ?? $variableB ??

// si $variable est vrai (donc à un contenu) alors $a aura la valeur 'test' et sinon aura la valeur 'valeur par defaut'
$a = $variable ? 'test' : 'valeur par defaut';

if($variable) {
    $a = 'test';
} else {
    $a = 'valeur par defaut';
}

// on test si $variable existe et si elle existe alors $a aura la valeur de $variable et sinon aura la valeur 'valeur par defaut'
$a = isset($variable) ? $variable : 'valeur par defaut';

// $a = $variable ?: 'valeur par defaut';
// est équivalent écrire ça
// $a = $variable ? $variable: 'valeur par defaut';
// l'avantage est que l'on va éviter de dupliquer son code
$a = $variable ?: 'valeur par defaut';


// $i++ revient à dire $i = $i + 1;
// $i-- revient à dire $i = $i - 1;

// boucle incrémentale
for($i = 0; $i < 10; $i++) {}

// autre boucle
$i = 0;
do { // fait
    echo "Numero : $i";
} while($i++ < 10); // tant que $i est inférieur à dix
//
$i = 0;
while($i < 10) { // tant que $i < 10
    $i++;
    echo "Numero : $i";
}

// création d'un tableau
// deux façons d'écrire un tableau en php
$tableau = array(45, 2323, 234234);
$tableau = [45, 2323, 234234];

echo $tableau[0]; // 45;
echo $tableau[2]; // 234234;

// le premier element du tableau commence toujours par 0
$a = count($tableau); // permet de connaitre le nombre d'élement dans un tableau

//Je veux dans un tableau associer le prénom et le nom
// pour ça on va utiliser une clé et une valeur (valeur de la clé)
$tableau = [
    'laurent' => 'chaloupe',
    'nicolas' => 'nom de nicolas',
    'orféo' => 'nom d orfeo'
];

// ici je vérifie s'il existe un element de mon tableau qui a une clé 'laurent'
if(isset($tableau['eric'])) { // dans notre tableau eric n'existe pas
    echo $tableau['eric']; // affiche le nom d'eric
}
var_dump($_POST);

$tableau = [ // le premier tableau va contenir un autre tableau
    ['id' => 1, 'prenom' => 'laurent', 'nom' => 'chaloupe'],
    // id est une clé qui a pour valeur 1
    // prenom est la clé qui a pour valeur laurent
    ['id' => 2, 'prenom' => 'eric', 'nom' => 'son nom']
    // id est une clé qui a pour valeur 1
    // prenom est la clé qui a pour valeur laurent
];

// $tableau[0] à pour valeur ['id' => 1, 'prenom' => 'laurent', 'nom' => 'chaloupe']

for($i = 0; $i < count($tableau); $i++) {
    var_dump($tableau[$i]);
    var_dump($tableau[0]);
    echo $tableau[$i]['prenom'];
}

// exemple du tableau ancien avec les clés valeurs
$tableauBis = [45, 2323, 234234];
$tableauBis = [0 => 45, 1 => 2323, 2 => 234242];
echo '<br><br><br><br><br>';

$tableau = [
    ['id' => 1, 'prenom' => 'laurent', 'nom' => 'chaloupe'],
    ['id' => 2, 'prenom' => 'eric', 'nom' => 'son nom']
];

foreach ($tableau as $valeurDeMonTableau) {
    echo $valeurDeMonTableau['prenom'].'<br>';
}
/* equivalent avec une boucle for
for($i = 0; $i < count($tableau); $i++) {
    echo $tableau[$i]['prenom'];
}
*/
echo '<br><br><br><br><br>';

$tableau = [
    'laurent' => 'chaloupe',
    'nicolas' => 'nom de nicolas',
    'orféo' => 'nom d orfeo'
];
// Si on veut parcourir ce tableau on ne pourra pas le faire avec un for
foreach ($tableau as $cle => $valeur) {
    echo 'Cle = '. $cle . ' Valeur = '. $valeur. '<br>';
}