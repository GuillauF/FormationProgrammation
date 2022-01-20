<?php
require ('exos/GestionBDD.php');
require ('config.php');
require ('util.php');
require ('exos/forum/GestionUtilisateur.php');
require ('exos/Request.php');

$request = new Request($_POST);
$gestionBDD = new GestionBDD();
$connexionBDD = $gestionBDD->connexionBDD();
$gestionUtilisateur = new GestionUtilisateur($connexionBDD);

        $resultat = '';

        $inscription = $gestionUtilisateur->inscription($request);
        $find = "Derniers utilisateurs : " . '<br>' . $gestionUtilisateur->find() . $gestionUtilisateur->findUser();
        $resultat .= $inscription.$find;

    body('template/forum.php', $resultat);

