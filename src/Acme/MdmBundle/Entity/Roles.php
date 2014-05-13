<?php

namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */

class Roles{
    
    /**
     * @ManyToMany(targetEntity="permissions")
     * @JoinTable(name="roles_permissions",
     *      joinColumns={@JoinColumn(name="rprolID", referencedColumnName="rolID")},
     *      inverseJoinColumns={@JoinColumn(name="rpperID", referencedColumnName="perID")}
     *      )
     * 
     * @ManyToMany(targetEntity="user")
     * @JoinTable(name="users_roles",
     *      joinColumns={@JoinColumn(name="urrolID", referencedColumnName="rolID")},
     *      inverseJoinColumns={@JoinColumn(name="uruseID", referencedColumnName="useID")}
     *      )
     * @Column(type="integer")
     **/
    private  $id;
    
    /** @Column(length=100) */
    private $nombre;
    
    /** @Column(length=100) */
    private $descripcion;
   
}

