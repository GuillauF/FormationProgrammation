<?php

namespace App\Entity;

use App\Repository\NombreAleatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NombreAleatRepository::class)]
class NombreAleat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $min;

    #[ORM\Column(type: 'integer')]
    private $max;

    #[ORM\Column(type: 'integer')]
    private $nbValeurs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMin(): ?int
    {
        return $this->min;
    }

    public function setMin(int $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(int $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function getNbValeurs(): ?int
    {
        return $this->nbValeurs;
    }

    public function setNbValeurs(int $nbValeurs): self
    {
        $this->nbValeurs = $nbValeurs;

        return $this;
    }
}
