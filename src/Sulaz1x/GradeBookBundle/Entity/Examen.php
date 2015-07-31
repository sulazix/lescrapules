<?php

namespace Sulaz1x\GradeBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="GradeBookBundle_examen")
 * @ORM\Entity
 */
class Examen
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
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="Moyenne", type="integer")
     */
    private $moyenne;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isClosed", type="boolean")
     */
    private $isClosed;

    /**
     * @var string
     *
     * @ORM\Column(name="Objectifs", type="text")
     */
    private $objectifs;

    /**
     * @ORM\ManyToOne(targetEntity="Sulaz1x\GradeBookBundle\Entity\Cours", inversedBy="examens", cascade={"persist"})
     * @ORM\JoinColumn(name="cours_id",referencedColumnName="id")
     */
    private $cours;

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
     * @return Examen
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
     * @return Examen
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
     * Set date
     *
     * @param \DateTime $date
     * @return Examen
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set moyenne
     *
     * @param integer $moyenne
     * @return Examen
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get moyenne
     *
     * @return integer
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * Set isClosed
     *
     * @param boolean $isClosed
     * @return Examen
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    /**
     * Get isClosed
     *
     * @return boolean
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Set objectifs
     *
     * @param string $objectifs
     * @return Examen
     */
    public function setObjectifs($objectifs)
    {
        $this->objectifs = $objectifs;

        return $this;
    }

    /**
     * Get objectifs
     *
     * @return string
     */
    public function getObjectifs()
    {
        return $this->objectifs;
    }
}
