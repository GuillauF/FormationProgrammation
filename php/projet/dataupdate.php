<?php
require ('exos/GestionBDD.php');
require ('config.php');
require ('util.php');
require ('exos/forum/GestionSecurite.php');
require ('exos/Request.php');

session_start();

$request = new Request($_POST);
$gestionBDD = new GestionBDD();
$connexionBDD = $gestionBDD->connexionBDD();
$gestionSecurite = new GestionSecurite();
//var_dump($_POST);

$resultat = $gestionSecurite->DataUpdate($connexionBDD, $request);
body('template/dataupdate.php');