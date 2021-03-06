<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation\Slug as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    #[Groups("voiture:read")]
    private $nom;

    #[ORM\ManyToOne(targetEntity: Marque::class, inversedBy: 'voiture')]
    #[ORM\JoinColumn(nullable: true)]
    #[Groups("voiture:read")]
    private $marque;

    #[ORM\OneToMany(mappedBy: 'voiture', targetEntity: Images::class, cascade: ['persist'], orphanRemoval: true,)]
    #[Groups("voiture:read")]
    private $images;

    #[ORM\ManyToOne(targetEntity: Prix::class, inversedBy: 'voiture')]
    #[ORM\JoinColumn(nullable: true)]
    #[Groups("voiture:read")]
    private $prix;

    #[ORM\Column(type: 'text')]
    #[Groups("voiture:read")]
    private $description;

    #[ORM\ManyToOne(targetEntity: Categories::class, inversedBy: 'annonceVoiture')]
    #[ORM\JoinColumn(nullable: true)]
    #[Groups("voiture:read")]
    private $categories;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'voitures')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups("voiture:read")]
    private $user;

    #[Gedmo\Timestampable(['on = create'])]
    #[ORM\Column(type: 'string', length: 255)]
    #[ORM\JoinColumn(nullable: true)]
    private $slug;

    #[Gedmo\slug(fields: ['nom'])]
    #[ORM\Column(type: 'datetime')]
    #[ORM\JoinColumn(nullable: true)]
    private $created_at;


    public function __construct()
    {
        $this->images = new ArrayCollection();
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

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * @return Collection<int, Images>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setVoiture($this);
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getVoiture() === $this) {
                $image->setVoiture(null);
            }
        }

        return $this;
    }

    public function getPrix(): ?Prix
    {
        return $this->prix;
    }

    public function setPrix(?Prix $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(?Categories $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }


}
