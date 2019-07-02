<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TireurRepository")
 */
class Tireur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $groupe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $blason;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveauSurclassement;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Membre", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $membre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $arme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(string $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getBlason(): ?string
    {
        return $this->blason;
    }

    public function setBlason(string $blason): self
    {
        $this->blason = $blason;

        return $this;
    }

    public function getNiveauSurclassement(): ?int
    {
        return $this->niveauSurclassement;
    }

    public function setNiveauSurclassement(int $niveauSurclassement): self
    {
        $this->niveauSurclassement = $niveauSurclassement;

        return $this;
    }

    public function getMembre(): ?Membre
    {
        return $this->membre;
    }

    public function setMembre(Membre $membre): self
    {
        $this->membre = $membre;

        return $this;
    }

    public function getArme(): ?string
    {
        return $this->arme;
    }

    public function setArme(string $arme): self
    {
        $this->arme = $arme;

        return $this;
    }
}
