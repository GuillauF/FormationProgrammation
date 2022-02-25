<?php

namespace App\Entity;

use App\Repository\CalculatriceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CalculatriceRepository::class)]
class Calculatrice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'float')]
    private $id;

    #[ORM\Column(type: 'float')]
    private $premierNombre;

    #[ORM\Column(type: 'string', length: 255)]
    private $operateur;

    #[ORM\Column(type: 'integer')]
    private $deuxiemeNombre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPremierNombre(): ?int
    {
        return $this->premierNombre;
    }

    public function setPremierNombre(int $premierNombre): self
    {
        $this->premierNombre = $premierNombre;

        return $this;
    }

    public function getOperateur(): ?string
    {
        return $this->operateur;
    }

    public function setOperateur(string $operateur): self
    {
        $this->operateur = $operateur;

        return $this;
    }

    public function getDeuxiemeNombre(): ?int
    {
        return $this->deuxiemeNombre;
    }

    public function setDeuxiemeNombre(int $deuxiemeNombre): self
    {
        $this->deuxiemeNombre = $deuxiemeNombre;

        return $this;
    }
}
