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
    
    /** @Column(type="integer") */
    private  $rpID;
    
    /** @Column(type="integer") */
    private $rprolID;
    
    /** @Column(type="integer") */
    private $rpperID;
    
}