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
    
    /**
     * @ManyToMany(targetEntity="roles")
     * @JoinTable(name="roles_permissions",
     *      joinColumns={@JoinColumn(name="rpperID", referencedColumnName="perID")},
     *      inverseJoinColumns={@JoinColumn(name="rprolID", referencedColumnName="rolID")}
     *      )
     * @var integer
     * @ORM\Column(type="integer" @GeneratedValue )
     **/
    private  $id;
    
    /** 
     * @var string
     * @ORM\Column(type="string" length=45) */
    private $nombre;
    
    /** 
     * @var string
     * @ORM\Column(type="string" length=45) */
    private $descripcion;
    
}