<?php

namespace App\Entity;

use App\Repository\FactureElecRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureElecRepository::class)]
class FactureElec
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'float')]
    private $consommation;

    #[ORM\Column(type: 'string', length: 255)]
    private $puissance;

    #[ORM\Column(type: 'string', length: 255)]
    private $HC;

    #[ORM\Column(type: 'string', length: 255)]
    private $HP;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConsommation(): ?float
    {
        return $this->consommation;
    }

    public function setConsommation(float $consommation): self
    {
        $this->consommation = $consommation;

        return $this;
    }

    public function getPuissance(): ?string
    {
        return $this->puissance;
    }

    public function setPuissance(string $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getHC(): ?string
    {
        return $this->HC;
    }

    public function setHC(string $HC): self
    {
        $this->HC = $HC;

        return $this;
    }

    public function getHP(): ?string
    {
        return $this->HP;
    }

    public function setHP(string $HP): self
    {
        $this->HP = $HP;

        return $this;
    }
}
