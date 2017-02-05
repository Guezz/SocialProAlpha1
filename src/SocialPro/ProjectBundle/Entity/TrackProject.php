<?php

namespace SocialPro\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrackProject
 *
 * @ORM\Table(name="track_project")
 * @ORM\Entity(repositoryClass="SocialPro\ProjectBundle\Repository\TrackProjectRepository")
 */
class TrackProject
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
     * @ORM\Column(name="idProject", type="integer")
     */
    private $idProject;

    /**
     * @var int
     *
     * @ORM\Column(name="idDonneur", type="integer")
     */
    private $idDonneur;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;


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
     * Set idProject
     *
     * @param integer $idProject
     *
     * @return TrackProject
     */
    public function setIdProject($idProject)
    {
        $this->idProject = $idProject;
    
        return $this;
    }

    /**
     * Get idProject
     *
     * @return integer
     */
    public function getIdProject()
    {
        return $this->idProject;
    }

    /**
     * Set idDonneur
     *
     * @param integer $idDonneur
     *
     * @return TrackProject
     */
    public function setIdDonneur($idDonneur)
    {
        $this->idDonneur = $idDonneur;
    
        return $this;
    }

    /**
     * Get idDonneur
     *
     * @return integer
     */
    public function getIdDonneur()
    {
        return $this->idDonneur;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return TrackProject
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }
}

