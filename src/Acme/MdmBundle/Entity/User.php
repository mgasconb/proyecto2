<?php

namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */

class User{
    
    /**
     * @ManyToMany(targetEntity="roles")
     * @JoinTable(name="users_roles",
     *      joinColumns={@JoinColumn(name="uruseID", referencedColumnName="useID")},
     *      inverseJoinColumns={@JoinColumn(name="urrolID", referencedColumnName="rolID")}
     *      )
     * 
     * @ManyToMany(targetEntity="tasks")
     * @JoinTable(name="users_tasks",
     *      joinColumns={@JoinColumn(name="utuseID", referencedColumnName="useID")},
     *      inverseJoinColumns={@JoinColumn(name="uttasID", referencedColumnName="tasID")}
     *      )
     * 
     * @Column(type="integer")
     **/
    private $useID;
    
    /** @Column(length=45) */
    private $uselogin;
    
    /** @Column(length=45) */
    private $usepassword;
    
    /** @Column(length=45) */
    private $usenombre;
    
    /** @Column(length=45) */
    private $useapellidos;
    
    /** 
     * @ManyToOne(targetEntity="groups", inversedBy="groID")
     * @Column(type="integer") */
    private $usegrupoID;
    
    /** @Column(length=45) */
    private $useotros;
    
    
    
}
