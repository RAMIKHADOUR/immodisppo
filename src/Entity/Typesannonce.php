<?php

namespace App\Entity;

use App\Entity\Annonces;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TypesannonceRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TypesannonceRepository::class)]
class Typesannonce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:50)]
    private ?string $type_annonce = null;

    /**
     * @var Collection<int, Annonces>
     */
    #[ORM\OneToMany(targetEntity: Annonces::class, mappedBy: 'typesannonce')]
    private Collection $tannonce;

    public function __construct()
    {
        $this->tannonce = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeAnnonce(): ?string
    {
        return $this->type_annonce;
    }

    public function setTypeAnnonce(string $type_annonce): static
    {
        $this->type_annonce = $type_annonce;

        return $this;
    }

    /**
     * @return Collection<int, Annonces>
     */
    public function getTannonce(): Collection
    {
        return $this->tannonce;
    }

    public function addTannonce(Annonces $tannonce): static
    {
        if (!$this->tannonce->contains($tannonce)) {
            $this->tannonce->add($tannonce);
            $tannonce->setTypesannonce($this);
        }

        return $this;
    }

    public function removeTannonce(Annonces $tannonce): static
    {
        if ($this->tannonce->removeElement($tannonce)) {
            // set the owning side to null (unless already changed)
            if ($tannonce->getTypesannonce() === $this) {
                $tannonce->setTypesannonce(null);
            }
        }

        return $this;
    }
}
