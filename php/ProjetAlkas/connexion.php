<?php

session_start();

require ('exos/GestionBDD.php');
require ('config.php');
require ('util.php');
require ('exos/forum/GestionSecurite.php');
require ('exos/Request.php');


$request = new Request($_POST);
$gestionBDD = new GestionBDD();
$connexionBDD = $gestionBDD->connexionBDD();
$gestionSecurite = new GestionSecurite();
//var_dump($_POST);

$resultat = $gestionSecurite->connexionForum($connexionBDD, $request);

body('template/connexion.php', $resultat);

