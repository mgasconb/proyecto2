<?php

namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\Tasks
 *
 * @ORM\Table(name="tasks")
 * @ORM\Entity
 */

class Tasks{
    
    /**
     * @ManyToMany(targetEntity="roles")
     * @JoinTable(name="users_roles",
     *      joinColumns={@JoinColumn(name="uruseID", referencedColumnName="useID")},
     *      inverseJoinColumns={@JoinColumn(name="urrolID", referencedColumnName="rolID")}
     *      )
     * 
     * @ManyToMany(targetEntity="user")
     * @JoinTable(name="users_tasks",
     *      joinColumns={@JoinColumn(name="uttasID", referencedColumnName="tasID")},
     *      inverseJoinColumns={@JoinColumn(name="utuseID", referencedColumnName="useID")}
     *      )
     * 
     * @Column(type="integer")
     **/
    private  $tasID;
    
    /** @Column(length=45) */
    private $tasnombre;
    
    /** @Column(length=45) */
    private $tasgrupoID;
    
    /** @Column(length=45) */
    private $tasotros;
   
}

