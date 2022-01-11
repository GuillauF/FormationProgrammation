<?php
require ('exos/GestionBDD.php');
require ('config.php');
require ('util.php');
require ('exos/forum/GestionUtilisateur.php');

$gestionBDD = new GestionBDD();
$connexionBDD = $gestionBDD->connexionBDD();
$gestionUtilisateur = new GestionUtilisateur($connexionBDD);

    $resultat ='';

    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['login']) && !empty($_POST['password'])){

   $resultat .= $gestionUtilisateur->inscription( $_POST['nom'], $_POST['prenom'], $_POST['login'], $_POST['password']);
}
    $resultat .= "Derniers utilisateurs : ".'<br>' .$gestionUtilisateur->find() .$gestionUtilisateur->findUser();

    body('template/forum.php', $resultat);


