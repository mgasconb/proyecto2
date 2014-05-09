<?php
namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity
 */

class Groups{
    
    /** @Column(type="integer") */
    private  $grpID;
    
    /** @Column(length=100) */
    private $grpnombre;
    
    /** @Column(length=255) */
    private $grpdescripcion;
    
}