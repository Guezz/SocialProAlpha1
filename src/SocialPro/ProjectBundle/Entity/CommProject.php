<?php

namespace SocialPro\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommProject
 *
 * @ORM\Table(name="comm_project")
 * @ORM\Entity(repositoryClass="SocialPro\ProjectBundle\Repository\CommProjectRepository")
 */
class CommProject
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
     * @ORM\Column(name="idIndividu", type="integer")
     */
    private $idIndividu;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;


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
     * @return CommProject
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
     * Set idIndividu
     *
     * @param integer $idIndividu
     *
     * @return CommProject
     */
    public function setIdIndividu($idIndividu)
    {
        $this->idIndividu = $idIndividu;
    
        return $this;
    }

    /**
     * Get idIndividu
     *
     * @return integer
     */
    public function getIdIndividu()
    {
        return $this->idIndividu;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return CommProject
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}

