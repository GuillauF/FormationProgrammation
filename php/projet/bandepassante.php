<?php

require('exos/bandepassante/BandePassante.php');
require('util.php');
$result = '';

if (!empty($_POST['value'])) {
    $bp = new BandePassante($_POST['value'], $_POST['unit1'], $_POST['unit2']);

    $resultat = $bp->Conversion();
}

body('template/bandepassante.php', $resultat);
