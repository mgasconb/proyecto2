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
    
    private  $grpID;
    
    private $grpnombre;
    
    private $grpdescripcion;
    
}