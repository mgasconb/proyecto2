<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
