<?php

require('exos/des/JeuDeDes.php');
require('util.php');
$resultat = '';

    if (!empty($_POST['dice'])) {
        $jeudedes = new JeuDeDes($_POST['dice']);


        $resultat = "Vous avez fait " . $jeudedes->diceRoll();;
    }
body('template/dés.php', $resultat);

