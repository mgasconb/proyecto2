<?php

namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\Permissions
 *
 * @ORM\Table(name="permissions")
 * @ORM\Entity
 */

class Permissions{
    
    private  $perID;
    
    private $pernombre;
    
    private $perdescripcion;
    
}