<?php
require ('exos/GestionBDD.php');
require ('config.php');
require ('util.php');
require ('exos/forum/GestionSecurite.php');

session_start();

$gestionSecurite = new GestionSecurite();
body('template/espacemembre.php');