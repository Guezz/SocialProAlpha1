<?php

namespace SocialPro\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectLike
 *
 * @ORM\Table(name="project_like")
 * @ORM\Entity(repositoryClass="SocialPro\ProjectBundle\Repository\ProjectLikeRepository")
 */
class ProjectLike
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
     * @return ProjectLike
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
     * @return ProjectLike
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
}

