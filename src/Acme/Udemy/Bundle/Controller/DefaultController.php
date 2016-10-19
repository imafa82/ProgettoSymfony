<?php

namespace Acme\Udemy\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/prova/{nome}")
     */
    public function indexAction($nome)
    {
        $this->get('logger')->debug("debug di prova");
        $customLog = $this->get('monolog.logger.udemy');
        $this->get('app.hello_world')->saluta('ciao');
        $customLog->debug('ahooo');
        return $this->render('AcmeUdemyBundle:Default:index.html.twig', array(
            'nome'=> $nome
        ));
    }
}
