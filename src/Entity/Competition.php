<?php
/**
 * Created by PhpStorm.
 * User: slima
 * Date: 02/07/2019
 * Time: 12:01
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Competition
 * @ORM\Entity()
 *
 */
class Competition
{

    use IdTrait;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotNull()
     * @Assert\Length(max="255")
     * @Assert\Type("string")
     */
    private $nomCompetition;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotNull()
     * @Assert\Type("datetime")
     */
    private $dateCompetition;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotNull()
     * @Assert\Length(max="255")
     * @Assert\Type("string")
     */
    private $villeCompetition;

    /**
     * @ORM\ManyToMany(targetEntity="Niveau",cascade={"persist"})
     */
    private $niveaux;

    public function __construct()
    {
        $this->niveaux= new ArrayCollection();
    }

    public function addNiveau(Niveau $niveau){
            $this->niveaux[]=$niveau;
    }

    public function removeNiveau(Niveau $niveau){
        $this->niveaux->removeElement($niveau);

    }

    /**
     * @return mixed
     */
    public function getNiveaux()
    {
        return $this->niveaux;
    }


    /**
     * @return mixed
     */
    public function getNomCompetition()
    {
        return $this->nomCompetition;
    }

    /**
     * @param mixed $nomCompetition
     * @return Competition
     */
    public function setNomCompetition($nomCompetition)
    {
        $this->nomCompetion = $nomCompetition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVilleCompetition()
    {
        return $this->villeCompetition;
    }

    /**
     * @param mixed $villeCompetition
     * @return Competition
     */
    public function setVilleCompetition($villeCompetition)
    {
        $this->villeCompetition = $villeCompetition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateCompetition()
    {
        return $this->dateCompetition;
    }

    /**
     * @param mixed $dateCompetition
     * @return Competition
     */
    public function setDateCompetition($dateCompetition)
    {
        $this->dateCompetition = $dateCompetition;
        return $this;
    }


    /**
     * @param mixed $niveaux
     * @return Competition
     */
    public function setNiveaux($niveaux)
    {
        $this->niveaux = $niveaux;
        return $this;
    }



}