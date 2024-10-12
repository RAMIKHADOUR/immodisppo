<?php

namespace App\Entity;

use App\Entity\Annonces;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategorysRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategorysRepository::class)]
class Categorys
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:50)]
    private ?string $categorie = null;

    /**
     * @var Collection<int, Annonces>
     */
    #[ORM\OneToMany(targetEntity: Annonces::class, mappedBy: 'categorys')]
    private Collection $cannonce;

    public function __construct()
    {
        $this->cannonce = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Annonces>
     */
    public function getCannonce(): Collection
    {
        return $this->cannonce;
    }

    public function addCannonce(Annonces $cannonce): static
    {
        if (!$this->cannonce->contains($cannonce)) {
            $this->cannonce->add($cannonce);
            $cannonce->setCategorys($this);
        }

        return $this;
    }

    public function removeCannonce(Annonces $cannonce): static
    {
        if ($this->cannonce->removeElement($cannonce)) {
            // set the owning side to null (unless already changed)
            if ($cannonce->getCategorys() === $this) {
                $cannonce->setCategorys(null);
            }
        }

        return $this;
    }
}
