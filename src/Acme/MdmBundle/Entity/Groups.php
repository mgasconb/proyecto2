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
     * @var integer
     * @OneToMany(targetEntity="user", mappedBy="grupo")
     * @ORM\Id Column(type="integer" ) 
     * @ORM\GeneratedValue
     * 
     **/
    private  $id;
    
    /** 
     * @var string
     * @ORM\Column(type="string" length=100 nullable=false) */
    private $nombre;
    
    /**
     * @var string
     * @ORM\Column(type="string" length=255 nullable=false) */
    private $descripcion;
    
}