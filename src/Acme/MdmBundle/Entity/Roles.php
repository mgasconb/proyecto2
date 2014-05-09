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
    
    /** @Column(type="integer") */
    private  $rolID;
    
    /** @Column(length=100) */
    private $rolnombre;
    
    /** @Column(length=100) */
    private $roldescripcion;
   
}

