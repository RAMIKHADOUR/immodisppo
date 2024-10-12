<?php

namespace App\Entity;

use App\Repository\DescriptionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DescriptionsRepository::class)]
class Descriptions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $etat = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?float $surface = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?float $prix = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?int $nchambres = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?int $nsallebains = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?int $netages = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?int $queletage = null;

    #[ORM\Column]
    private ?bool $internet = null;

    #[ORM\Column]
    private ?bool $garage = null;

    #[ORM\Column]
    private ?bool $piscine = null;

    #[ORM\Column]
    private ?bool $camerasurv = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Annonces $annonce = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): static
    {
        $this->surface = $surface;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNchambres(): ?int
    {
        return $this->nchambres;
    }

    public function setNchambres(int $nchambres): static
    {
        $this->nchambres = $nchambres;

        return $this;
    }

    public function getNsallebains(): ?int
    {
        return $this->nsallebains;
    }

    public function setNsallebains(int $nsallebains): static
    {
        $this->nsallebains = $nsallebains;

        return $this;
    }

    public function getNetages(): ?int
    {
        return $this->netages;
    }

    public function setNetages(int $netages): static
    {
        $this->netages = $netages;

        return $this;
    }

    public function getQueletage(): ?int
    {
        return $this->queletage;
    }

    public function setQueletage(int $queletage): static
    {
        $this->queletage = $queletage;

        return $this;
    }

    public function isInternet(): ?bool
    {
        return $this->internet;
    }

    public function setInternet(bool $internet): static
    {
        $this->internet = $internet;

        return $this;
    }

    public function isGarage(): ?bool
    {
        return $this->garage;
    }

    public function setGarage(bool $garage): static
    {
        $this->garage = $garage;

        return $this;
    }

    public function isPiscine(): ?bool
    {
        return $this->piscine;
    }

    public function setPiscine(bool $piscine): static
    {
        $this->piscine = $piscine;

        return $this;
    }

    public function isCamerasurv(): ?bool
    {
        return $this->camerasurv;
    }

    public function setCamerasurv(bool $camerasurv): static
    {
        $this->camerasurv = $camerasurv;

        return $this;
    }

    public function getAnnonce(): ?Annonces
    {
        return $this->annonce;
    }

    public function setAnnonce(?Annonces $annonce): static
    {
        $this->annonce = $annonce;

        return $this;
    }
}
