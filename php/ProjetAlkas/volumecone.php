<?php

require('exos/volumecone/VolumeCone.php');
require('util.php');

if (!empty($_POST['radius']) && !empty($_POST['height'])) {
    $volume = new VolumeCone($_POST['radius'], $_POST['height'], $_POST['round']);

    $resultat = $volume->CalculateVolume();
}

body('template/volumecone.php', $resultat);
