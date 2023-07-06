<?php

namespace App\Entity;

use App\Repository\SeriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesRepository::class)]
class Series
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $nbr_question = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptions = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbrQuestion(): ?string
    {
        return $this->nbr_question;
    }

    public function setNbrQuestion(string $nbr_question): static
    {
        $this->nbr_question = $nbr_question;

        return $this;
    }

    public function getDescriptions(): ?string
    {
        return $this->descriptions;
    }

    public function setDescriptions(string $descriptions): static
    {
        $this->descriptions = $descriptions;

        return $this;
    }
    public function __toString()
    {
        $result = $this->titre. $this->nbr_question . $this->descriptions;
        return $result;
    }
}
