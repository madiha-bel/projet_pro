<?php

namespace App\Entity;

use App\Repository\ResultatReponseRepository;
use Doctrine\ORM\Mapping as ORM;
use LDAP\Result;

#[ORM\Entity(repositoryClass: ResultatReponseRepository::class)]
class ResultatReponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Reponses $reponse = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Resultat $resultat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReponse(): ?Reponses
    {
        return $this->reponse;
    }

    public function setReponse(?Reponses $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getResultat(): ?Resultat
    {
        return $this->resultat;
    }

    public function setResultat(?Resultat $resultat): static
    {
        $this->resultat = $resultat;

        return $this;
    }
    public function __toString()
    {
        $Result = $this->resultat . $this->reponse;
        return (string)$Result;
    }
}
