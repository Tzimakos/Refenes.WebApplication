<?php

namespace Geo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Person
{

    private $id;
    private $name;
    private $parties;


    public function getId()
    {
        return $this->id;
    }


}
