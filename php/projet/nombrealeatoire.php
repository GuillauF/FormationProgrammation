<?php
require ('exos/nombrealeatoire/NombreAleatoire.php');
require ('util.php');

$result = '';

if(!empty($_POST['min']) &&
    !empty($_POST['max']) &&
    isset($_POST['nombreValeurs'])) {
    $nombrealeatoire = new NombreAleatoire($_POST['min'], $_POST['max'], $_POST['nombreValeurs']
    );

    $result = $nombrealeatoire->result();
}

body("template/nombrealeatoire.php", $result);