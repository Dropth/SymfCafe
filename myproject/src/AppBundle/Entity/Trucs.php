<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trucs
 *
 * @ORM\Table(name="trucs")
 * @ORM\Entity
 */
class Trucs
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
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="othervalue", type="text", nullable=true)
     */
    private $othervalue;



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
     * Set value
     *
     * @param integer $value
     * @return Trucs
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set othervalue
     *
     * @param string $othervalue
     * @return Trucs
     */
    public function setOthervalue($othervalue)
    {
        $this->othervalue = $othervalue;

        return $this;
    }

    /**
     * Get othervalue
     *
     * @return string 
     */
    public function getOthervalue()
    {
        return $this->othervalue;
    }
}
