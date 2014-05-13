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
    private $id;
    
    /** @Column(length=45) */
    private $login;
    
    /** @Column(length=45) */
    private $password;
    
    /** @Column(length=45) */
    private $nombre;
    
    /** @Column(length=45) */
    private $apellidos;
    
    /** 
     * @ManyToOne(targetEntity="groups", inversedBy="groID")
     * @Column(type="integer") */
    private $grupos;
    
    /** @Column(length=45) */
    private $otros;
    
    
    
}
