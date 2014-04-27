<?php

namespace Acme\MdmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeMdmBundle:Default:index.html.twig', array('name' => $name));
    }
}
