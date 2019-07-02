<?php

namespace App\Entity;
use App\Entity\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity()
 */
class Entrainement{

    use IdTrait;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotNull()
     * @Assert\Type("DateTime")
     */
    private $dateEntrainement;


    /**
     * @ORM\Column()
     * @Assert\NotNull()
     * @Assert\Type("String")
     * @Assert\Length(max=255)
     */
    private $groupe;

    /**
     * @return mixed
     */
    public function getDateEntrainement()
    {
        return $this->dateEntrainement;
    }

    /**
     * @param mixed $dateEntrainement
     */
    public function setDateEntrainement($dateEntrainement): void
    {
        $this->dateEntrainement = $dateEntrainement;
    }

    /**
     * @return mixed
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * @param mixed $groupe
     */
    public function setGroupe($groupe): void
    {
        $this->groupe = $groupe;
    }







}
