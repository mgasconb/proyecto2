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
    
    /** @Column(type="integer") */
    private  $usrID;
    
    /** @Column(length=45) */
    private $usrlogin;
    
    /** @Column(length=45) */
    private $usrpassword;
    
    /** @Column(length=45) */
    private $usrnombre;
    
    /** @Column(length=45) */
    private $usrapellidos;
    
    /** @Column(type="integer") */
    private $usrgrupoID;
    
    /** @Column(length=45) */
    private $usrotros;
    
    
    
}
