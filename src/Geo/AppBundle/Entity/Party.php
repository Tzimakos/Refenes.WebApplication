<?php

namespace Geo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Party
{
    private $id;
    private $name;
    private $user;
    private $transactions;
    private $createdAt;

    private $balance;
    private $persons;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->transactions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->persons = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Party
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Party
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Add transactions
     *
     * @param \Geo\AppBundle\Entity\Party $transactions
     * @return Party
     */
    public function addTransaction(\Geo\AppBundle\Entity\Party $transactions)
    {
        $this->transactions[] = $transactions;

        return $this;
    }

    /**
     * Remove transactions
     *
     * @param \Geo\AppBundle\Entity\Party $transactions
     */
    public function removeTransaction(\Geo\AppBundle\Entity\Party $transactions)
    {
        $this->transactions->removeElement($transactions);
    }

    /**
     * Get transactions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Set user
     *
     * @param \Geo\UserBundle\Entity\User $user
     * @return Party
     */
    public function setUser(\Geo\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Geo\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add persons
     *
     * @param \Geo\AppBundle\Entity\Person $persons
     * @return Party
     */
    public function addPerson(\Geo\AppBundle\Entity\Person $persons)
    {
        $this->persons[] = $persons;

        return $this;
    }

    /**
     * Remove persons
     *
     * @param \Geo\AppBundle\Entity\Person $persons
     */
    public function removePerson(\Geo\AppBundle\Entity\Person $persons)
    {
        $this->persons->removeElement($persons);
    }

    /**
     * Get persons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersons()
    {
        return $this->persons;
    }

    public function getBalance(){
        return $this->balance;
    }
}
