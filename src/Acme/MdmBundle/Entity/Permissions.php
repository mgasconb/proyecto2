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
    
    /** @Column(type="integer") */
    private  $perID;
    
    /** @Column(length=45) */
    private $pernombre;
    
    /** @Column(length=45) */
    private $perdescripcion;
    
}