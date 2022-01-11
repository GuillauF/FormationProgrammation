<?php
class Calculette
{
    private $premierNombre;
    private $deuxiemeNombre;
    private $operateur;

    public function __construct($premierNombre, $deuxiemeNombre, $operateur) // $operateur = $_POST["operateur"];
    {
        $this->premierNombre = $premierNombre;
        $this->deuxiemeNombre = $deuxiemeNombre;
        $this->operateur = $operateur;
    }
    public function Calculate()
    {

// fonction isset pour vérifier que le formulaire garde son intégrité
// is_numeric pour vérifier que les valeurs a calculer soient bien des nombres
        if (!empty($this->premierNombre) && !empty($this->deuxiemeNombre)) {

            if ("add" == $this->operateur) {
                return $this->premierNombre + $this->deuxiemeNombre;
            } else if ("sub" == $this->operateur) {
                return $this->premierNombre - $this->deuxiemeNombre;
            } else if ("mul" == $this->operateur) {
                return $this->premierNombre * $this->deuxiemeNombre;
            } else if (("div" == $this->operateur) && ($this->deuxiemeNombre == 0)){
                return "Erreur division par zéro";
            } else {
                return $this->premierNombre / $this->deuxiemeNombre;

                }

            }

    }
}


