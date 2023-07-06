<?php

namespace App\Entity;

use App\Repository\ReponsesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponsesRepository::class)]
class Reponses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $correct_reponse = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $detail_reponse = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse_candidat = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Candidat $candidat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCorrectReponse(): ?string
    {
        return $this->correct_reponse;
    }

    public function setCorrectReponse(string $correct_reponse): static
    {
        $this->correct_reponse = $correct_reponse;

        return $this;
    }

    public function getDetailReponse(): ?string
    {
        return $this->detail_reponse;
    }

    public function setDetailReponse(string $detail_reponse): static
    {
        $this->detail_reponse = $detail_reponse;

        return $this;
    }

    public function getReponseCandidat(): ?string
    {
        return $this->reponse_candidat;
    }

    public function setReponseCandidat(string $reponse_candidat): static
    {
        $this->reponse_candidat = $reponse_candidat;

        return $this;
    }

    public function getCandidat(): ?Candidat
    {
        return $this->candidat;
    }

    public function setCandidat(?Candidat $candidat): static
    {
        $this->candidat = $candidat;

        return $this;
    }
    public function __toString()
    {
        $result=$this->correct_reponse;
        return $result;
    }
}
