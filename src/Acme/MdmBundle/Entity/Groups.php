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
    
    /**
     * @OneToMany(targetEntity="user", mappedBy="usegrupoID")
     * @Column(type="integer")
     **/
    private  $id;
    
    /** @Column(length=100) */
    private $nombre;
    
    /** @Column(length=255) */
    private $descripcion;
    
}