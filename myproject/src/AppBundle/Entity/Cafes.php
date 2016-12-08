<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cafes
 *
 * @ORM\Table(name="cafes")
 * @ORM\Entity
 */
class Cafes
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=42, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=71, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="arrondissement", type="string", length=14, nullable=true)
     */
    private $arrondissement;

    /**
     * @var string
     *
     * @ORM\Column(name="geo_latitude", type="string", length=24, nullable=true)
     */
    private $geoLatitude;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_comptoir", type="string", length=13, nullable=true)
     */
    private $prixComptoir;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_salle", type="string", length=10, nullable=true)
     */
    private $prixSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_terasse", type="string", length=12, nullable=true)
     */
    private $prixTerasse;



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
     * Set nom
     *
     * @param string $nom
     * @return Cafes
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Cafes
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set arrondissement
     *
     * @param string $arrondissement
     * @return Cafes
     */
    public function setArrondissement($arrondissement)
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    /**
     * Get arrondissement
     *
     * @return string 
     */
    public function getArrondissement()
    {
        return $this->arrondissement;
    }

    /**
     * Set geoLatitude
     *
     * @param string $geoLatitude
     * @return Cafes
     */
    public function setGeoLatitude($geoLatitude)
    {
        $this->geoLatitude = $geoLatitude;

        return $this;
    }

    /**
     * Get geoLatitude
     *
     * @return string 
     */
    public function getGeoLatitude()
    {
        return $this->geoLatitude;
    }

    /**
     * Set prixComptoir
     *
     * @param string $prixComptoir
     * @return Cafes
     */
    public function setPrixComptoir($prixComptoir)
    {
        $this->prixComptoir = $prixComptoir;

        return $this;
    }

    /**
     * Get prixComptoir
     *
     * @return string 
     */
    public function getPrixComptoir()
    {
        return $this->prixComptoir;
    }

    /**
     * Set prixSalle
     *
     * @param string $prixSalle
     * @return Cafes
     */
    public function setPrixSalle($prixSalle)
    {
        $this->prixSalle = $prixSalle;

        return $this;
    }

    /**
     * Get prixSalle
     *
     * @return string 
     */
    public function getPrixSalle()
    {
        return $this->prixSalle;
    }

    /**
     * Set prixTerasse
     *
     * @param string $prixTerasse
     * @return Cafes
     */
    public function setPrixTerasse($prixTerasse)
    {
        $this->prixTerasse = $prixTerasse;

        return $this;
    }

    /**
     * Get prixTerasse
     *
     * @return string 
     */
    public function getPrixTerasse()
    {
        return $this->prixTerasse;
    }
}
