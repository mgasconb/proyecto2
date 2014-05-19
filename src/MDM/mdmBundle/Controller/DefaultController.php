<?php

namespace MDM\mdmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MDM\mdmBundle\Entity\Task;
use MDM\mdmBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('mdmBundle:Default:index.html.twig', array('name' => $name));
    }

    public function formAction(Request $request) {
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

    public function formUsersAction(Request $request) {
        $user = new Users();

        $form = $this->createFormBuilder($user)
                ->add('login', 'text')
                ->add('password', 'text')
                ->add('name', 'text')
                ->add('surname', 'text')
                ->add('other', 'text')
                ->add('email', 'text')               
                ->add('save', 'submit')
                ->getForm();
        /* ->add('group', 'text', array('mapped' => false))
                ->add('id', 'text', array('mapped' => false))*/
        
        
        
        /*
          return $this->render('mdmBundle:Default:formularioUsuarios.html.twig', array(
          'form' => $form->createView(),
          ));
         */

        

        /* Miramos si el formulario esta validado y recuperamos los datos. */
        /*$form->handleRequest($request);*/
        $form->bind( $request );

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            $nextAction = $form->get('save')->isClicked() ? 'mdm_homepage' : 'mdm_homepage';
            return $this->redirect($this->generateUrl('mdm_form_task'));
        }
        
        return $this->render('mdmBundle:Default:formularioUsuarios.html.twig', array('form' => $form->createView()));
    }

}