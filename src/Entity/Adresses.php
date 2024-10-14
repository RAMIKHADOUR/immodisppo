<?php

namespace App\Entity;

use DateTimeImmutable;
use App\Entity\Annonces;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AdressesRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AdressesRepository::class)]
class Adresses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $n_voie = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:50)]
    private ?string $type_voie = null;

    #[ORM\Column(length: 255)]
    private ?string $name_voie = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:50)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $code_postale = null;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Annonces $adannonce = null;

    #[ORM\Column]
    private ?DateTimeImmutable $updateAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNVoie(): ?int
    {
        return $this->n_voie;
    }

    public function setNVoie(int $n_voie): static
    {
        $this->n_voie = $n_voie;

        return $this;
    }

    public function getTypeVoie(): ?string
    {
        return $this->type_voie;
    }

    public function setTypeVoie(string $type_voie): static
    {
        $this->type_voie = $type_voie;

        return $this;
    }

    public function getNameVoie(): ?string
    {
        return $this->name_voie;
    }

    public function setNameVoie(string $name_voie): static
    {
        $this->name_voie = $name_voie;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostale(): ?string
    {
        return $this->code_postale;
    }

    public function setCodePostale(string $code_postale): static
    {
        $this->code_postale = $code_postale;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getAdannonce(): ?Annonces
    {
        return $this->adannonce;
    }

    public function setAdannonce(?Annonces $adannonce): static
    {
        $this->adannonce = $adannonce;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeImmutable
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTimeImmutable $updateAt): static
    {
        $this->updateAt = $updateAt;

        return $this;
    }
}
