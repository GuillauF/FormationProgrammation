<?php

function body(string $nomDuFichier, string $resultat = null, array $detail = []) : void
{
    $menu = '';

    require('./template/body.php');
}
function redirection(string $url) : void
{
    header("Location: ".$url);
    die();
}
