<?php
class BandePassante
{
    private $value;
    private $unit1;
    private $unit2;

    public function __construct($value, $unit1, $unit2) // $bp = $_POST["bp"];
    {
        $this->value = $value;
        $this->unit1 = $unit1;
        $this->unit2 = $unit2;
    }

    public function Conversion()
    {

//on prépare des ratios de conversion en référence à une unité de base : ici le b/s
//étant donné que le point de référence est le même pour tous les ratios de notre tableau, le résultat peut toujours être calculé de façon relative et sera ainsi toujours correct
        $ratios = ["b/s" => 1, "kb/s" => 1 / 1e3, "Mb/s" => 1 / 1e6, "Gb/s" => 1 / 1e9, "o/s" => 1 / 8, "ko/s" => 1 / 8e3, "Mo/s" => 1 / 8e6, "Go/s" => 1 / 8e9];
//1e3 signifie 1000 en notation scientifique, cette notation est acceptée comme un nombre en PHP

//tout ce qu'il nous reste à faire c'est calculer le ratio de conversion entre la valeur d'arrivée et la valeur de départ, et la multiplier à notre valeur pour la convertir
        return number_format($result = $this->value * ($ratios[$this->unit2] / $ratios[$this->unit1]), 2, '.', ' ');
    }
}