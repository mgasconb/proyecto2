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
    
    private  $usrID;
    
    private $usrlogin;
    
    private $usrpassword;
    
    private $usrnombre;
    
    private $usrapellidos;
    
    private $usrgrupoID;
    
    private $usrotros;
    
    
    
}
