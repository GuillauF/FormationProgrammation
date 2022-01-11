<?php
require ('exos/GestionBDD.php');
require ('config.php');
require ('util.php');
require ('exos/forum/GestionUtilisateur.php');

$gestionBDD = new GestionBDD();
$connexionBDD = $gestionBDD->connexionBDD();
$gestionUtilisateur = new GestionUtilisateur($connexionBDD);


$resultat ='';
if (isset($_POST['connexion']) && $_POST['connexion'] == 'connexion') {
    if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {

        $resultat .= $gestionUtilisateur->connexionForum($_POST['login'], $_POST['password']);
    }
}

body('template/connexion.php', $resultat);
