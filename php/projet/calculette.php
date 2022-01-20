<?php

require('exos/calculatrice/Calculette.php');
require('util.php');
$resultat = '';

if (!empty($_POST['premierNombre']) && !empty($_POST['deuxiemeNombre']) && isset($_POST['operateur'])) {
    $calculette = new Calculette($_POST['premierNombre'], $_POST['deuxiemeNombre'], $_POST['operateur']);

    $resultat = "Résultat : " .$calculette->Calculate();

}

body('template/calculette.php', $resultat);
