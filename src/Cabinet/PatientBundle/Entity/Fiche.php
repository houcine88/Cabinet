<?php

namespace Cabinet\PatientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cabinet\PatientBundle\Entity\FicheRepository")
 */
class Fiche
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
     * @ORM\Column(name="annee", type="date")
     */
    private $annee;
    
    /**
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="fiche")
     */
    protected $operations;


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
     * Set annee
     *
     * @param \DateTime $annee
     * @return Fiche
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime 
     */
    public function getAnnee()
    {
        return $this->annee;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->operations = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add operations
     *
     * @param \Cabinet\PatientBundle\Entity\Operation $operations
     * @return Fiche
     */
    public function addOperation(\Cabinet\PatientBundle\Entity\Operation $operations)
    {
        $this->operations[] = $operations;
    
        return $this;
    }

    /**
     * Remove operations
     *
     * @param \Cabinet\PatientBundle\Entity\Operation $operations
     */
    public function removeOperation(\Cabinet\PatientBundle\Entity\Operation $operations)
    {
        $this->operations->removeElement($operations);
    }

    /**
     * Get operations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOperations()
    {
        return $this->operations;
    }
}