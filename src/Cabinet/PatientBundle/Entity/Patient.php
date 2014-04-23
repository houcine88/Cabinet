<?php

namespace Cabinet\PatientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cabinet\PatientBundle\Entity\PatientRepository")
 */
class Patient {

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tel", type="integer")
     */
    private $tel;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin", type="integer", nullable=true)
     */
    private $cin;

    /**
     * @ORM\ManyToOne(targetEntity="Cabinet\UserBundle\Entity\Medecin", inversedBy="patients")
     * @ORM\JoinColumn(name="medecin_id", referencedColumnName="id")
     */
    protected $medecin;

    /**
     * @ORM\OneToOne(targetEntity="Fiche", cascade={"persist"})
     */
    private $fiche;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Patient
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Patient
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Patient
     */
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Patient
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Patient
     */
    public function setTel($tel) {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Set cin
     *
     * @param integer $cin
     * @return Patient
     */
    public function setCin($cin) {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin() {
        return $this->cin;
    }

    /**
     * Set medecin
     *
     * @param \Cabinet\UserBundle\Entity\Medecin $medecin
     * @return Patient
     */
    public function setMedecin(\Cabinet\UserBundle\Entity\Medecin $medecin = null) {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return \Cabinet\UserBundle\Entity\Medecin 
     */
    public function getMedecin() {
        return $this->medecin;
    }

    /**
     * Set fiche
     *
     * @param \Cabinet\PatientBundle\Entity\Fiche $fiche
     * @return Patient
     */
    public function setFiche(\Cabinet\PatientBundle\Entity\Fiche $fiche = null) {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return \Cabinet\PatientBundle\Entity\Fiche 
     */
    public function getFiche() {
        return $this->fiche;
    }


    
    public function __toString() {
        return $this->getNom().' '.$this->getPrenom();
    }
}