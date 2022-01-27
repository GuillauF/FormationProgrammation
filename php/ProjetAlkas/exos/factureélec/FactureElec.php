<?php
class FactureElec
{
    private $kWh;
    private $puissance;
    private $HC;
    private $HP;

    public function __construct($kWh, $puissance, $HC, $HP) // $consommation = $_POST["kWh"];
    {
        $this->kWh = $kWh;
        $this->puissance = $puissance;
        $this->HC = $HC;
        $this->HP = $HP;
    }

    public function GetConsumption()
    {
        $Base = array("3kVA" => 0.1558, "6kVA" => 0.1558, "9kVA" => 0.1605, "12kVA" => 0.1605, "15kVA" => 0.1605, "18kVA" => 0.1605);
        $HC = ["3kVA" => 0.1558, "6kVA" => 0.1360, "9kVA" => 0.1360, "12kVA" => 0.1360, "15kVA" => 0.1360, "18kVA" => 0.1360];
        $HP = ["3kVA" => 0.1558, "6kVA" => 0.1821, "9kVA" => 0.1821, "12kVA" => 0.1821, "15kVA" => 0.1821, "18kVA" => 0.1821];

        if (isset($this->HC) && (isset($this->HP))) {
            return "Impossible d'avoir des tarifs HC et HP en même temps";
        }
        else {
            if (isset($this->HC)) {
                return "En heure creuse ça coûte :" . $this->kWh * ($HC[$this->puissance]) . "€";
            } else {
                if (isset($this->HP)) {
                    return "En heure pleine ça coûte :" . $this->kWh * ($HP[$this->puissance]) . "€";
                } else {
                    return $this->kWh * ($Base[$this->puissance]);
                }
            }
        }

    }
}