<?php
/**
 * Created by PhpStorm.
 * User: slima
 * Date: 02/07/2019
 * Time: 12:01
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @UniqueEntity(fields={"niveau"})
 */
class Niveau
{
    use IdTrait;

    /**
     * @ORM\Column(type="string",unique=true)
     * @Assert\NotNull()
     * @Assert\Length(max="255")
     * @Assert\Type("string")
     */
    private $niveau;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Niveau
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @param mixed $niveau
     * @return Niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
        return $this;
    }





}