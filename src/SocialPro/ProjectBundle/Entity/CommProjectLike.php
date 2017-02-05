<?php

namespace SocialPro\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommProjectLike
 *
 * @ORM\Table(name="comm_project_like")
 * @ORM\Entity(repositoryClass="SocialPro\ProjectBundle\Repository\CommProjectLikeRepository")
 */
class CommProjectLike
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
     * @ORM\Column(name="idCommentaire", type="integer")
     */
    private $idCommentaire;

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
     * Set idCommentaire
     *
     * @param integer $idCommentaire
     *
     * @return CommProjectLike
     */
    public function setIdCommentaire($idCommentaire)
    {
        $this->idCommentaire = $idCommentaire;
    
        return $this;
    }

    /**
     * Get idCommentaire
     *
     * @return integer
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * Set idIndividu
     *
     * @param integer $idIndividu
     *
     * @return CommProjectLike
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

