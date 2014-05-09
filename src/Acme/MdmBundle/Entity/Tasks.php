<?php

namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\Tasks
 *
 * @ORM\Table(name="tasks")
 * @ORM\Entity
 */

class Tasks{
    /** @Column(type="integer") */
    private  $tarID;
    
    /** @Column(length=45) */
    private $tarnombre;
    
    /** @Column(length=45) */
    private $targrupoID;
    
    /** @Column(length=45) */
    private $tarotros;
   
}

