<?php

namespace App\Entity;

use App\Repository\VolumeConeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VolumeConeRepository::class)]
class VolumeCone
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'float')]
    private $rayon;

    #[ORM\Column(type: 'float')]
    private $hauteur;

    #[ORM\Column(type: 'string', length: 255)]
    private $arrondi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRayon(): ?float
    {
        return $this->rayon;
    }

    public function setRayon(float $rayon): self
    {
        $this->rayon = $rayon;

        return $this;
    }

    public function getHauteur(): ?float
    {
        return $this->hauteur;
    }

    public function setHauteur(float $hauteur): self
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    public function getArrondi(): ?string
    {
        return $this->arrondi;
    }

    public function setArrondi(string $arrondi): self
    {
        $this->arrondi = $arrondi;

        return $this;
    }
}
