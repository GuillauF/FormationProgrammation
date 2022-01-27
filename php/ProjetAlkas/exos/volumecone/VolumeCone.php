<?php
class VolumeCone
{
    private $radius;
    private $height;
    private $round;

    public function __construct($radius, $height, $round) // $volume = $_POST["volume"];
    {
        $this->radius = $radius;
        $this->height = $height;
        $this->round = $round;
    }

    public function CalculateVolume()
    {
        $this->volume = (pi() * ($this->radius * $this->radius) * $this->height) / 3;

// si la case pour arrondir le résultat est cochée
        if (isset($this->round)) {
            // alors renvoie la valeur arrondie
            return "La valeur arrondie est : ".round($this->volume);
        } else {
            // sinon renvoie le résultat complet
            return "Le nombre decimal est : ".$this->volume;
        }
    }
}