<?php

namespace Geo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Person
{

    private $id;
    private $name;
    private $parties;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parties = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add parties
     *
     * @param \Geo\AppBundle\Entity\Party $parties
     * @return Person
     */
    public function addParty(\Geo\AppBundle\Entity\Party $parties)
    {
        $this->parties[] = $parties;

        return $this;
    }

    /**
     * Remove parties
     *
     * @param \Geo\AppBundle\Entity\Party $parties
     */
    public function removeParty(\Geo\AppBundle\Entity\Party $parties)
    {
        $this->parties->removeElement($parties);
    }

    /**
     * Get parties
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParties()
    {
        return $this->parties;
    }
}
