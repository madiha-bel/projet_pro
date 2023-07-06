<?php

namespace App\Entity;

use App\Repository\OptionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionsRepository::class)]
class Options
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse1 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse2 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse3 = null;

    #[ORM\Column(length: 255)]
    private ?string $reponse4 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?ResultatReponse $resultat_reponse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReponse1(): ?string
    {
        return $this->reponse1;
    }

    public function setReponse1(string $reponse1): static
    {
        $this->reponse1 = $reponse1;

        return $this;
    }

    public function getReponse2(): ?string
    {
        return $this->reponse2;
    }

    public function setReponse2(string $reponse2): static
    {
        $this->reponse2 = $reponse2;

        return $this;
    }

    public function getReponse3(): ?string
    {
        return $this->reponse3;
    }

    public function setReponse3(string $reponse3): static
    {
        $this->reponse3 = $reponse3;

        return $this;
    }

    public function getReponse4(): ?string
    {
        return $this->reponse4;
    }

    public function setReponse4(string $reponse4): static
    {
        $this->reponse4 = $reponse4;

        return $this;
    }

    public function getResultatReponse(): ?ResultatReponse
    {
        return $this->resultat_reponse;
    }

    public function setResultatReponse(?ResultatReponse $resultat_reponse): static
    {
        $this->resultat_reponse = $resultat_reponse;

        return $this;
    }
    public function __toString()
    {
        $result =$this->reponse1 . $this->reponse2 . $this->reponse3 . $this->reponse4;
        return $result;
    }
}
