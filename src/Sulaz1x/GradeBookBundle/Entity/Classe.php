<?php

namespace Sulaz1x\GradeBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="GradeBookBundle_classe")
 * @ORM\Entity
 */
class Classe
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
    * @ORM\ManyToMany(targetEntity="Sulaz1x\GradeBookBundle\Entity\Cours", inversedBy="classes", cascade={"persist"})
    * @ORM\JoinTable(name="GradeBookBundle_classe_cours",
    *      joinColumns={@ORM\JoinColumn(name="cours_id", referencedColumnName="id")},
    *      inverseJoinColumns={@ORM\JoinColumn(name="classe_id", referencedColumnName="id")}
    *      )
    */
    private $cours;

    /**
     * @ORM\OneToMany(targetEntity="Sulaz1x\SecurityBundle\Entity\User", mappedBy="classe", cascade={"persist"})
     */
    private $students;
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
     * @return Classe
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
     * @return Classe
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
     * Set branches
     *
     * @param integer $branches
     * @return Classe
     */
    public function setBranches($branches)
    {
        $this->branches = $branches;

        return $this;
    }

    /**
     * Get branches
     *
     * @return integer
     */
    public function getBranches()
    {
        return $this->branches;
    }

    /**
     * Set students
     *
     * @param integer $students
     * @return Classe
     */
    public function setStudents($students)
    {
        $this->students = $students;

        return $this;
    }

    /**
     * Get students
     *
     * @return integer
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Add Cours
     *
     * @param Object $cours
     * @return Branches
     */
     public function addCours($cours)
     {
         $this->cours[] = $cours;
         return $this;
     }

}
