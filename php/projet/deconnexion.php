<?php

require ('exos/forum/GestionSecurite.php');
require ('util.php');

session_start();

$gestionSecurite = new GestionSecurite();
$gestionSecurite->Deconnexion();

