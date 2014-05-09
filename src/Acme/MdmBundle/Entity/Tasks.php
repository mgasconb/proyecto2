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
    
    private  $tarID;
    
    private $tarnombre;
    
    private $targrupoID;
    
    private $tarotros;
   
}

