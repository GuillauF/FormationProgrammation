<?php

require('exos/factureélec/FactureElec.php');
require('util.php');


if (!empty($_POST['kWh'])) {
    $consommation = new FactureElec($_POST['kWh'], $_POST['puissance'], $_POST['HC'], $_POST['HP']);

    $resultat = $consommation->GetConsumption();
}

body('template/factureélec.php', $resultat);
