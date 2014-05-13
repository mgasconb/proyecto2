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
     * @Column(type="integer")
     **/
    private  $id;
    
    /** @Column(length=45) */
    private $nombre;
    
    /** @Column(length=45) */
    private $descripcion;
    
}