<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation\Slug as Gedmo;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\OneToMany(mappedBy: 'categories', targetEntity: Voiture::class, orphanRemoval: true)]
    private $annonceVoiture;

    #[Gedmo\slug(fields: ['nom'])]
    #[ORM\Column(type: 'string', length: 255)]
    #[ORM\JoinColumn(nullable: true)]
    private $slug;

    public function __construct()
    {
        $this->annonceVoiture = new ArrayCollection();
    }
    public function __toString(): string
    {
        return $this->nom;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Voiture>
     */
    public function getAnnonceVoiture(): Collection
    {
        return $this->annonceVoiture;
    }

    public function addAnnonceVoiture(Voiture $annonceVoiture): self
    {
        if (!$this->annonceVoiture->contains($annonceVoiture)) {
            $this->annonceVoiture[] = $annonceVoiture;
            $annonceVoiture->setCategories($this);
        }

        return $this;
    }

    public function removeAnnonceVoiture(Voiture $annonceVoiture): self
    {
        if ($this->annonceVoiture->removeElement($annonceVoiture)) {
            // set the owning side to null (unless already changed)
            if ($annonceVoiture->getCategories() === $this) {
                $annonceVoiture->setCategories(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

}
