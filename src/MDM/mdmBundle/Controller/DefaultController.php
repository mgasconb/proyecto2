<?php

namespace MDM\mdmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MDM\mdmBundle\Entity\Tasks;
use MDM\mdmBundle\Entity\Users;
use MDM\mdmBundle\Entity\Groups;
use MDM\mdmBundle\Entity\UsersTasks;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function createTasksAction(Request $request) {
        $task = new Tasks();
        $form = $this->createFormBuilder()
                ->add('name', 'text')
                ->add('other', 'text')
                ->add('save', 'submit')
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();

            $task->setGroupId(5);
            $task->setName($data['name']);
            $task->setother($data['other']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            return new response('se ha grabado');
        }
        return $this->render('mdmBundle:Tasks:new.html.twig', array('form' => $form->createView()));
    }

    public function signupAction(Request $request) {
        $group = "";
        if ($request->getMethod() == 'POST') {

            $em = $this->getDoctrine()->getManager();

            $descripcion = $request->get('descripcion');
            if ($descripcion == NULL) {
                $nombre = $request->get('nombre');
                $apellidos = $request->get('apellidos');
                $login = $request->get('login');
                $password = $request->get('password');
                $email = $request->get('email');
                $other = $request->get('other');
                $groupName = $request->get('groupname');
                $group = $this->getDoctrine()
                        ->getRepository('mdmBundle:Groups')
                        ->findOneByName(array('name' => $groupName));

                $user = new Users();
                $user->setName($nombre);
                $user->setSurname($apellidos);
                $user->setLogin($login);
                $user->setPassword($password);
                $user->setEmail($email);
                $user->setOther($other);
                $user->setGroup($group);
                $user->setRoles('ROLE_JEFE');
                
                $em->persist($user);
                $em->flush();
                /*Creamos el rol y el rolusuario*/
                /*No funciona*/
                /*
                $rol=new RolesUsers();
                $rol->setRol(3);
                $rol->setUser($user);
                
                $em->persist($rol);
                $em->flush();
                 */
                
            } else {
                if ($descripcion != NULL) {
                    $nombre = $request->get('nombre');
                    $apellidos = $request->get('apellidos');
                    $login = $request->get('login');
                    $password = $request->get('password');
                    $email = $request->get('email');
                    $other = $request->get('other');
                    $groupName = $request->get('nombreGrupo');
                    $descripcion = $request->get('descripcion');

                    $grupo = new Groups();
                    $grupo->setName($groupName);
                    $grupo->setDescription($descripcion);
                    $em->persist($grupo);
                    $em->flush();

                    $group = $this->getDoctrine()
                            ->getRepository('mdmBundle:Groups')
                            ->findOneByName(array('name' => $groupName));


                    $user = new Users();
                    $user->setName($nombre);
                    $user->setSurname($apellidos);
                    $user->setLogin($login);
                    $user->setPassword($password);
                    $user->setEmail($email);
                    $user->setOther($other);
                    $user->setGroup($group);

                    $em->persist($user);
                    $em->flush();
                }
            }
        }
        return $this->render('mdmBundle:Users:signup.html.twig');
    }

    public function formloginAction(Request $request) {

        $form = $this->createFormBuilder()
                ->add('login', 'text')
                ->add('password', 'text')
                ->add('save', 'submit')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $data = $form->getData();
            $username = $data['login'];
            $userpassword = $data['password'];
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('mdmBundle:Users')
                    ->findOneBy(array('login' => $username, 'password' => $userpassword));
            if ($user) {

                return $this->redirect($this->generateUrl("mdm_tasks_user", array("id" => $user->getId())));
            } else {
                return $this->render('mdmBundle:Users:formularioGrupo.html.twig', array('name' => 'LOGIN FAILED'));
            }
        }
        return $this->render('mdmBundle:Users:formularioGrupo.html.twig', array('form' => $form->createView()));
    }

    /* funcion que muestra todas las tareas de un usuario */

    public function AllTaskUserAction($id) {
        $em = $this->getDoctrine()->getManager();

        $tasks = $em->getRepository('mdmBundle:UsersTasks')
                ->findByUser($id);
        //coger taskid -> task findId($tasks id)
        
        
        return $this->render('mdmBundle:Tasks:showTasks.html.twig', array('all' => $tasks));
    }

    /* funcion que muestra todas las tareas de un grupo */

    public function tasksGroupAction($id) {

        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('mdmBundle:Tasks')
                ->findBygroup_id($id);


        return $this->render('mdmBundle:tasks:tasksgroup.html.twig', array('all' => $task));
    }

    public function deleteTaskAction($id) {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('mdmBundle:Tasks')
                ->find($id);

        $em->remove($task);
        $em->flush();


        return $this->render('mdmBundle:Default:deletetask.html.twig', array('message' => 'Seguro de forrar la tarea'));
    }

    public function modifyTaskAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('mdmBundle:Tasks')
                ->findOneBy(array('id' => $id));
        
        $form = $this->createFormBuilder()
                ->add('name', 'text', array('data'=>$task->getName()))
                ->add('other', 'text', array('data'=>$task->getOther()))
                ->add('save', 'submit')
                ->getForm();
        
        
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            
            $task->setName($data['name']);
            $task->setOther($data['other']);
            $em->persist($task);
            $em->flush();
            return $this->render('mdmBundle:Tasks:editTasks.html.twig', array('form' => $form->createView()));
        }
        return $this->render('mdmBundle:Tasks:editTasks.html.twig', array('form' => $form->createView()));
    }

}
