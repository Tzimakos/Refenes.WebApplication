<?php

namespace Geo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


class Share
{

    private $id;
    private $transaction;
    private $person;
    private $amount;


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
     * Set amount
     *
     * @param string $amount
     * @return Share
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set transaction
     *
     * @param \Geo\AppBundle\Entity\Transaction $transaction
     * @return Share
     */
    public function setTransaction(\Geo\AppBundle\Entity\Transaction $transaction = null)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return \Geo\AppBundle\Entity\Transaction 
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set person
     *
     * @param \Geo\AppBundle\Entity\Person $person
     * @return Share
     */
    public function setPerson(\Geo\AppBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \Geo\AppBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }
}
