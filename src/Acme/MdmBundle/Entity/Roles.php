<?php

namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */

class Tasks{
    
    private  $rolID;
    
    private $rolnombre;
    
    private $roldescripcion;
   
}

