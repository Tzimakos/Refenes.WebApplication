<?php

namespace Geo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


class Transaction
{

    private $id;
    private $party;
    private $payer;
    private $amount;
    private $shares;
    private $comment;
    private $issuedAt;

    public function getId()
    {
        return $this->id;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->shares = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Transaction
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

    public function setIssuedAt($issuedAt)
    {
        $this->issuedAt = $issuedAt;

        return $this;
    }

    public function getIssuedAt()
    {
        return $this->issuedAt;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Transaction
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Add shares
     *
     * @param \Geo\AppBundle\Entity\Share $shares
     * @return Transaction
     */
    public function addShare(\Geo\AppBundle\Entity\Share $shares)
    {
        $this->shares[] = $shares;

        return $this;
    }

    /**
     * Remove shares
     *
     * @param \Geo\AppBundle\Entity\Share $shares
     */
    public function removeShare(\Geo\AppBundle\Entity\Share $shares)
    {
        $this->shares->removeElement($shares);
    }

    /**
     * Get shares
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShares()
    {
        return $this->shares;
    }

    /**
     * Set person
     *
     * @param \Geo\AppBundle\Entity\Person $person
     * @return Transaction
     */
    public function setPayer(\Geo\AppBundle\Entity\Person $payer = null)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get person
     *
     * @return \Geo\AppBundle\Entity\Person 
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Set party
     *
     * @param \Geo\AppBundle\Entity\Party $party
     * @return Transaction
     */
    public function setParty(\Geo\AppBundle\Entity\Party $party = null)
    {
        $this->party = $party;

        return $this;
    }

    /**
     * Get party
     *
     * @return \Geo\AppBundle\Entity\Party 
     */
    public function getParty()
    {
        return $this->party;
    }
}
