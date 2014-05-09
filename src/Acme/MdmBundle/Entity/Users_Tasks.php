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
    /** @Column(type="integer") */
    private  $utID;
    
    /** @Column(type="integer") */
    private  $utusuarioID;
    
    /** @Column(type="integer") */
    private $uttareaID;
    
}

