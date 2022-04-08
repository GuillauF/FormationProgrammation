<?php

namespace App\Entity;

use App\Repository\StoreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StoreRepository::class)]
class Store
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Ventes;

    #[ORM\Column(type: 'string', length: 255)]
    private $Billets;

    #[ORM\Column(type: 'string', length: 255)]
    private $Maillots;

    #[ORM\Column(type: 'string', length: 255)]
    private $Shorts;

    #[ORM\Column(type: 'string', length: 255)]
    private $Sweats;

    #[ORM\Column(type: 'string', length: 255)]
    private $Accessoires;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVentes(): ?string
    {
        return $this->Ventes;
    }

    public function setVentes(string $Ventes): self
    {
        $this->Ventes = $Ventes;

        return $this;
    }

    public function getBillets(): ?string
    {
        return $this->Billets;
    }

    public function setBillets(string $Billets): self
    {
        $this->Billets = $Billets;

        return $this;
    }

    public function getMaillots(): ?string
    {
        return $this->Maillots;
    }

    public function setMaillots(string $Maillots): self
    {
        $this->Maillots = $Maillots;

        return $this;
    }

    public function getShorts(): ?string
    {
        return $this->Shorts;
    }

    public function setShorts(string $Shorts): self
    {
        $this->Shorts = $Shorts;

        return $this;
    }

    public function getSweats(): ?string
    {
        return $this->Sweats;
    }

    public function setSweats(string $Sweats): self
    {
        $this->Sweats = $Sweats;

        return $this;
    }

    public function getAccessoires(): ?string
    {
        return $this->Accessoires;
    }

    public function setAccessoires(string $Accessoires): self
    {
        $this->Accessoires = $Accessoires;

        return $this;
    }
}
