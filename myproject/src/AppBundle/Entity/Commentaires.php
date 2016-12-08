<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaires
 *
 * @ORM\Table(name="commentaires")
 * @ORM\Entity
 */
class Commentaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cafe", type="integer", nullable=false)
     */
    private $idCafe;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=250, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=535, nullable=false)
     */
    private $texte;

    /**
     * @var integer
     *
     * @ORM\Column(name="etoile", type="integer", nullable=false)
     */
    private $etoile;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=65, nullable=false)
     */
    private $auteur;



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
     * Set idCafe
     *
     * @param integer $idCafe
     * @return Commentaires
     */
    public function setIdCafe($idCafe)
    {
        $this->idCafe = $idCafe;

        return $this;
    }

    /**
     * Get idCafe
     *
     * @return integer 
     */
    public function getIdCafe()
    {
        return $this->idCafe;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Commentaires
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Commentaires
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set etoile
     *
     * @param integer $etoile
     * @return Commentaires
     */
    public function setEtoile($etoile)
    {
        $this->etoile = $etoile;

        return $this;
    }

    /**
     * Get etoile
     *
     * @return integer 
     */
    public function getEtoile()
    {
        return $this->etoile;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Commentaires
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}
