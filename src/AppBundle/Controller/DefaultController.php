<?php

namespace AppBundle\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use AppBundle\Entity\Utente;
use AppBundle\Entity\utenti;
use AppBundle\Form\UtenteType;
use AppBundle\Form\utentiType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array());
    }
    
    
     /**
     * @Route("/users/new", name="users_new")
      * @Method({"GET", "POST"})
     */
    public function createUserAction(Request $request)
    {
        $user = new User();
        $form= $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();

            /**
             * @var $file UploadedFile
             */
            $fileName = $this->get('app.avatar_upload')->upload($user->getAvatar());
            //$thumb = $this->get('app.avatar_resize')->resizeImage($fileName);
            $user->setAvatar($fileName);
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('homepage');
        }

        // replace this example code with whatever you need
        return $this->render('default/users.html.twig', array('form' => $form->createView()));
    }
    
    /**
     * @Route("/users/{id}/edit", name="users_edit")
     * @Method({"GET", "PUT"})
     */
    public function editAction(Request $request, User $user)
    {
        
        $file = new File($this->getParameter('upload_dir').'/'.$user->getAvatar());
        $user->setAvatar($file);
        $form = $this->createForm(UserType::class, $user, array('method' => 'PUT'));
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            // UPDATE Utente
            $em = $this->getDoctrine()->getManager();
            $fileName = $this->get('app.avatar_upload')->upload($user->getAvatar());
            $user->setAvatar($fileName);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('default/users.html.twig', array('form' => $form->createView()));
    }
    
    /**
     * @Route("/utente", name="utente_edit")
     */
    public function editUtente(Request $request)
    {
        $utente = new Utente();
        $form = $this->createForm(UtenteType::class);
         return $this->render('default/utente.html.twig', array('form' => $form->createView()));
    }
    
    /**
     * @Route("/utenti", name="utenti_edit")
     */
    public function editUtenti(Request $request)
    {
        $utenti = new utenti();
        $form = $this->createForm(UtentiType::class);
         return $this->render('default/utente.html.twig', array('form' => $form->createView()));
    }
    
}
