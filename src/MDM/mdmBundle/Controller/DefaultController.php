<?php

namespace MDM\mdmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MDM\mdmBundle\Entity\Task;
use MDM\mdmBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name){
        return $this->render('mdmBundle:Default:index.html.twig', array('name' => $name));
    }
    
     public function formAction(Request $request){
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();

        return $this->render('mdmBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function formUsersAction(Request $request){
        // create a task and give it some dummy data for this example
        $user = new Users();
        /*$user->setTask('Write a blog post');*/

        $form = $this->createFormBuilder($user)
            ->add('login', 'text')
            ->add('password', 'text')
            ->add('name', 'text')
            ->add('surname', 'text')
            ->add('other', 'text')
            ->add('email', 'text')
            ->add('save', 'submit')
            ->getForm();
        /*
        return $this->render('mdmBundle:Default:formularioUsuarios.html.twig', array(
            'form' => $form->createView(),
        ));
         */
        
        return $this->render('mdmBundle:Default:formularioUsuarios.html.twig', array('form' => $form->createView()
        ));
    }
}