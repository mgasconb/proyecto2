<?php

namespace MDM\mdmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MDM\mdmBundle\Entity\Task;
use MDM\mdmBundle\Entity\Users;
use MDM\mdmBundle\Entity\Groups;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
        $id = 5;
        $em = $this->getDoctrine()->getManager();
        $group = $em->getRepository('mdmBundle:Groups')
                ->find($id);


        $user = new Users();
        $form = $this->createFormBuilder()
                ->add('login', 'text')
                ->add('password', 'text')
                ->add('name', 'text')
                ->add('surname', 'text')
                ->add('other', 'text')
                ->add('email', 'text')
                ->add('save', 'submit')
                ->getForm();
        /* ->add('group', 'text', array('mapped' => false))
          ->add('id', 'text', array('mapped' => false)) */

        $form->handleRequest($request);

        if ($form->isValid()) {

            $data = $form->getData();

            $user->setName($data['name']);
            $user->setEmail($data['email']);
            $user->setSurname($data['surname']);
            $user->setLogin($data['login']);
            $user->setOther($data['other']);
            $user->setPassword($data['password']);
            $user->setGroup($group);



            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
             /**  Aqui una vez registrado le 
             * redirigimos a otra pagina que sera bienvenido 
              * ya puede loguearse y disfrutar de esta aplicación algo así.
              * Por el momento le dirigo a esta pagina que ya estaba hecha que es una prueba .
              */
            return $this->redirect($this->generateUrl('mdm_form_task')); 
        }
        
        return $this->render('mdmBundle:Default:formularioUsuarios.html.twig', array('form' => $form->createView()));
    }

    function formloginAction(Request $request) {
        
        /** Esto puedes  borrar todo si es necesario este sería el controlador de loguearse (sign in/up)
        * 
         *  */
        $user= new Users();
        $form = $this->createFormBuilder()
                ->add('login', 'text')
                ->add('password', 'text')
                ->add('save', 'submit')
                ->getForm();
        /* ->add('group', 'text', array('mapped' => false))
          ->add('id', 'text', array('mapped' => false)) */

        $form->handleRequest($request);
       
       /*  if ($form->isValid()) {
            $data = $form->getData();
            
            $repository = $this->getDoctrine()
                 ->getRepository('mdmBundle:Users');
            $login->$repository->findOneBylogin($data['login']);
            $password>$repository->findOneBypassword($data['password']);
            
            if(!$login && !$password ){
                return new Response('No existe'); 
            }
            else{ return new Response('bienvenido');
            
            }
            
         }*/
         return $this->render('mdmBundle:Default:formularioGrupo.html.twig', array(
                    'form' => $form->createView()));
    }

}
