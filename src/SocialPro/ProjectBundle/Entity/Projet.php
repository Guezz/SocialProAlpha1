<?php

namespace SocialPro\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="SocialPro\ProjectBundle\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ind", type="integer")
     */
    private $idInd;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="cout", type="float")
     */
    private $cout;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=255)
     */
    private $domaine;


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
     * Set idInd
     *
     * @param integer $idInd
     *
     * @return Projet
     */
    public function setIdInd($idInd)
    {
        $this->idInd = $idInd;
    
        return $this;
    }

    /**
     * Get idInd
     *
     * @return integer
     */
    public function getIdInd()
    {
        return $this->idInd;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
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
     * Set cout
     *
     * @param float $cout
     *
     * @return Projet
     */
    public function setCout($cout)
    {
        $this->cout = $cout;
    
        return $this;
    }

    /**
     * Get cout
     *
     * @return float
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     *
     * @return Projet
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    
        return $this;
    }

    /**
     * Get domaine
     *
     * @return string
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
}

