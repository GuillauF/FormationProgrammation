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
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $ventes;

    #[ORM\Column(type: 'string', length: 255)]
    private $billets;


    #[ORM\Column(type: 'string', length: 255)]
    private $maillots;

    #[ORM\Column(type: 'string', length: 255)]
    private $shorts;

    #[ORM\Column(type: 'string', length: 255)]
    private $sweats;

    #[ORM\Column(type: 'string', length: 255)]
    private $accessoires;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVentes(): ?string
    {
        return $this->ventes;
    }

    public function setVentes(string $ventes): self
    {
        $this->ventes = $ventes;

        return $this;
    }

    public function getBillets(): ?string
    {
        return $this->billets;
    }

    public function setBillets(string $billets): self
    {
        $this->billets = $billets;

        return $this;
    }

    public function getMaillots(): ?string
    {
        return $this->maillots;
    }

    public function setMaillots(string $maillots): self
    {
        $this->maillots = $maillots;

        return $this;
    }

    public function getShorts(): ?string
    {
        return $this->shorts;
    }

    public function setShorts(string $shorts): self
    {
        $this->shorts = $shorts;

        return $this;
    }

    public function getSweats(): ?string
    {
        return $this->sweats;
    }

    public function setSweats(string $sweats): self
    {
        $this->sweats = $sweats;

        return $this;
    }

    public function getAccessoires(): ?string
    {
        return $this->accessoires;
    }

    public function setAccessoires(string $accessoires): self
    {
        $this->accessoires = $accessoires;

        return $this;
    }
// J'ai rajouté name et email pour le formulaire de réservation de billets
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
