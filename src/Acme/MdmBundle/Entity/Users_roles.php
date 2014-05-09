<?php
namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\Users_roles
 *
 * @ORM\Table(name="users_roles")
 * @ORM\Entity
 */

class Users_roles{
    
    /** @Column(type="integer") */
    private  $urID;
    
    /** @Column(type="integer") */
    private $urrolID;
    
    /** @Column(type="integer") */
    private $urusrID;
    
}