<?php

namespace App\Entity;

use App\Entity\Users;
use App\Entity\Categorys;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AnnoncesRepository;


#[ORM\Entity(repositoryClass: AnnoncesRepository::class)]
class Annonces
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $title = null;

    #[ORM\ManyToOne(inversedBy: 'annonces')]
    private ?Users $user = null;

    #[ORM\ManyToOne(inversedBy: 'cannonce')]
    private ?Categorys $categorys = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getCategorys(): ?Categorys
    {
        return $this->categorys;
    }

    public function setCategorys(?Categorys $categorys): static
    {
        $this->categorys = $categorys;

        return $this;
    }
}
