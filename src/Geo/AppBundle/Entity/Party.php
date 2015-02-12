<?php

namespace Geo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Party
{
    private $id;
    private $name;
    private $persons;
    private $balance;
    private $createdAt;

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
