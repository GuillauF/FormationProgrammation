<?php
//ici on traite les données de notre formulaire form.html

//pour traiter les valeurs reçues d'un formulaire en méthode POST, il faut pouvoir les récupérer
//Dans un traitement en POST, les valeurs sont stockées dans une variable nommée $_POST
//Et ce sous la forme d'un tableau associatif (clé/valeurs) les clés étant les noms de nos champs input, les valeurs les données des champs
//var_dump($_POST); //var_dump permet d'inspecter l'intérieur d'une variable à des fins de développement

//pour utiliser la valeur d'un champ de formulaire on peut donc accéder via sa clé à la valeur dans le tableau $_POST :
//pour vérifier l'existence des données, il faut qu'on vérifie que le champ existe
//on peut le faire avec une fonction nommée isset()
//si notre valeur de formulaire est renseignée

if (!isset($_POST["agreeTerms"])) {
    echo "Veuillez accepter les termes du contrat.";
} else {

    if (isset($_POST['nickname']) && isset($_POST["country"])) {

        $greetings = ["FR" => "Bonjour ", "DE" => "Guten Tag ", "UK" => "Hello "];

        $_countryCode = $_POST["country"];
        echo $greetings[$_POST["country"]] . "" . $_POST["nickname"];
    } else {
        //sinon on affiche un message
        echo "Erreur de formulaire";
    }
}

