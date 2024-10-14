<?php

namespace App\Entity;

use App\Entity\Annonces;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CordonnesRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CordonnesRepository::class)]
class Cordonnes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:50)]
    private ?string $civilite = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:50)]
    private ?string $nom_prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $tel_mobile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tel_fixe = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Annonces $corannonce = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): static
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getNomPrenom(): ?string
    {
        return $this->nom_prenom;
    }

    public function setNomPrenom(string $nom_prenom): static
    {
        $this->nom_prenom = $nom_prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTelMobile(): ?string
    {
        return $this->tel_mobile;
    }

    public function setTelMobile(string $tel_mobile): static
    {
        $this->tel_mobile = $tel_mobile;

        return $this;
    }

    public function getTelFixe(): ?string
    {
        return $this->tel_fixe;
    }

    public function setTelFixe(?string $tel_fixe): static
    {
        $this->tel_fixe = $tel_fixe;

        return $this;
    }

    public function getCorannonce(): ?Annonces
    {
        return $this->corannonce;
    }

    public function setCorannonce(?Annonces $corannonce): static
    {
        $this->corannonce = $corannonce;

        return $this;
    }
}
