<?php

namespace App\Entity;

use App\Repository\BandePassanteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BandePassanteRepository::class)]
class BandePassante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'float')]
    private $valeur;

    #[ORM\Column(type: 'string', length: 255)]
    private $unite1;

    #[ORM\Column(type: 'string', length: 255)]
    private $unite2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValeur(): ?float
    {
        return $this->valeur;
    }

    public function setValeur(float $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getUnite1(): ?string
    {
        return $this->unite1;
    }

    public function setUnite1(string $unite1): self
    {
        $this->unite1 = $unite1;

        return $this;
    }

    public function getUnite2(): ?string
    {
        return $this->unite2;
    }

    public function setUnite2(string $unite2): self
    {
        $this->unite2 = $unite2;

        return $this;
    }
}
