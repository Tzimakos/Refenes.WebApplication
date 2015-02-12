<?php

namespace Geo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


class Transaction
{

    private $id;
    private $person;
    private $amount;
    private $shares;
    private $comment;

    public function getId()
    {
        return $this->id;
    }

}
