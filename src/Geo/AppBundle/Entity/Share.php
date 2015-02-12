<?php

namespace Geo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


class Share
{

    private $id;
    private $transaction;
    private $person;
    private $amount;

    public function getId()
    {
        return $this->id;
    }

    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function getTransactionId()
    {
        return $this->transactionId;
    }


    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}
