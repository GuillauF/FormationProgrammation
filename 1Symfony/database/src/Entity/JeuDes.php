<?php

namespace App\Entity;

use App\Repository\JeuDesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JeuDesRepository::class)]
class JeuDes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $valeurLancer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValeurLancer(): ?string
    {
        return $this->valeurLancer;
    }

    public function setValeurLancer(string $valeurLancer): self
    {
        $this->valeurLancer = $valeurLancer;

        return $this;
    }
}
