<?php
class JourDeLaSemaine
{
    private $day;
    private $month;
    private $year;

    public function __construct($day, $month, $year) // $volume = $_POST["volume"];
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    public function GetDate()
    {
        $equivalent = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];

        if ($this->month < 3) {
            $weekday = (((23 * $this->month) / 9) + $this->day + 4 + $this->year + (($this->year - 1) / 4) - (($this->year - 1) / 100) + (($this->year - 1) / 400)) % 7;
        } else {
            $weekday = (((23 * $this->month) / 9) + $this->day + 2 + $this->year + ($this->year / 4) - ($this->year / 100) + ($this->year / 400)) %7;
        }
        return ($equivalent[$weekday]);

    }
}