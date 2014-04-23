<?php

namespace Cabinet\PatientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cabinet\PatientBundle\Entity\OperationRepository")
 */
class Operation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="doit", type="float")
     */
    private $doit;

    /**
     * @var float
     *
     * @ORM\Column(name="recu", type="float")
     */
    private $recu;
    
    /**
     * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="operations")
     * @ORM\JoinColumn(name="fiche_id", referencedColumnName="id")
     */
    protected $fiche;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Operation
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
     * Set type
     *
     * @param string $type
     * @return Operation
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set doit
     *
     * @param float $doit
     * @return Operation
     */
    public function setDoit($doit)
    {
        $this->doit = $doit;
    
        return $this;
    }

    /**
     * Get doit
     *
     * @return float 
     */
    public function getDoit()
    {
        return $this->doit;
    }

    /**
     * Set recu
     *
     * @param float $recu
     * @return Operation
     */
    public function setRecu($recu)
    {
        $this->recu = $recu;
    
        return $this;
    }

    /**
     * Get recu
     *
     * @return float 
     */
    public function getRecu()
    {
        return $this->recu;
    }

    /**
     * Set fiche
     *
     * @param \Cabinet\PatientBundle\Entity\Fiche $fiche
     * @return Operation
     */
    public function setFiche(\Cabinet\PatientBundle\Entity\Fiche $fiche = null)
    {
        $this->fiche = $fiche;
    
        return $this;
    }

    /**
     * Get fiche
     *
     * @return \Cabinet\PatientBundle\Entity\Fiche 
     */
    public function getFiche()
    {
        return $this->fiche;
    }
}