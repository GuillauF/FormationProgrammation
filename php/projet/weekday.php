<?php

require('exos/weekday/JourDeLaSemaine.php');
require('util.php');

if (!empty($_POST['day']) && !empty($_POST['month']) && !empty($_POST['year'])) {
    $weekday = new JourDeLaSemaine ($_POST['day'], $_POST['month'], $_POST['year']);

    $resultat = $weekday->GetDate();
}

body('template/weekday.php', $resultat);
