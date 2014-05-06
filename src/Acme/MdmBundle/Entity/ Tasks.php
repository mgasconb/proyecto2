<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\MdmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MdmBundle\Entity\Tasks
 *
 * @ORM\Table(name="tasks")
 * @ORM\Entity
 */

class Tasks{
    
    private  $tarID;
    
    private $tarnombre;
    
    private $targrupoID;
    
    private $tarotros;
   
    
    
    
}