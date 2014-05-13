<?php

namespace Mdm\MdmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MdmMdmBundle:Default:index.html.twig', array('name' => $name));
    }
}
