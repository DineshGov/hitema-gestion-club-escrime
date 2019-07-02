<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 */
class Lecon {

    use IdTrait;

    /**
     * @ORM\ManyToOne(targetEntity="Lecon")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     * @Assert\Type("Integer")
     */
    private $entrainement;



    /**
     * @ORM\Column()
     * @Assert\NotNull()
     * @Assert\Type("Integer")
     */
    private $idMaitreArme;


    /**
     * @ORM\Column()
     * @Assert\NotNull()
     * @Assert\Type("Integer")
     */
    private $idTireur;

    /**
     * @return mixed
     */
    public function getIdEntrainement()
    {
        return $this->idEntrainement;
    }

    /**
     * @param mixed $idEntrainement
     */
    public function setIdEntrainement($idEntrainement): void
    {
        $this->idEntrainement = $idEntrainement;
    }

    /**
     * @return mixed
     */
    public function getIdMaitreArme()
    {
        return $this->idMaitreArme;
    }

    /**
     * @param mixed $idMaitreArme
     */
    public function setIdMaitreArme($idMaitreArme): void
    {
        $this->idMaitreArme = $idMaitreArme;
    }

    /**
     * @return mixed
     */
    public function getIdTireur()
    {
        return $this->idTireur;
    }

    /**
     * @param mixed $idTireur
     */
    public function setIdTireur($idTireur): void
    {
        $this->idTireur = $idTireur;
    }

    /**
     * @return mixed
     */
    public function getEntrainement()
    {
        return $this->entrainement;
    }

    /**
     * @param mixed $entrainement
     */
    public function setEntrainement($entrainement): void
    {
        $this->entrainement = $entrainement;
    }


}
