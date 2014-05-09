<?php

namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\Users_Tasks
 *
 * @ORM\Table(name="users_tasks")
 * @ORM\Entity
 */

class Tasks{
    private  $utID;
    
    private  $utusuarioID;
    
    private $uttareaID;
    
}

