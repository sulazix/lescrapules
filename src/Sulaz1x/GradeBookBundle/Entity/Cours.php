<?php

namespace Sulaz1x\GradeBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Branches
 *
 * @ORM\Table(name="GradeBookBundle_cours")
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Sulaz1x\GradeBookBundle\Entity\Classe", mappedBy="cours", cascade={"persist"})
     */
    private $classes;

    /**
     * @ORM\OneToMany(targetEntity="Sulaz1x\GradeBookBundle\Entity\Examen", mappedBy="cours", cascade={"persist"})
     */
    private $examens;

    /**
     * @var interger
     *
     * @ORM\Column(name="Start", type="date")
     */
     private $start;


     /**
      * @var interger
      *
      * @ORM\Column(name="End", type="date")
      */
      private $end;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Branches
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Branches
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set classes
     *
     * @param integer $classes
     * @return Branches
     */
     public function addClasse($classes)
     {
         $this->classes[] = $classes;
         return $this;
     }

     public function setStart($date=null)
     {
         $this->start = $date;
         return $this;
     }
     public function setEnd($date=null)
     {
         $this->end = $date;
         return $this;
     }


    /**
     * Get classes
     *
     * @return integer
     */
    public function getClasses()
    {
        return $this->classes;
    }
}
