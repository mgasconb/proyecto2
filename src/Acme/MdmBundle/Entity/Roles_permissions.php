<?php
namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\Roles_permissions
 *
 * @ORM\Table(name="roles_permissions")
 * @ORM\Entity
 */

class Roles_permissions{
    
    private  $rpID;
    
    private $rprolID;
    
    private $rpperID;
    
}