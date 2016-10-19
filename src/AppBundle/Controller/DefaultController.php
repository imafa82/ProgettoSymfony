<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/{nome}/{cognome}", name="homepage")
     */
    public function indexAction(Request $request)
    {
        echo $request->getBaseUrl();
        echo "<br>";
        echo $request->getRequestUri();
        echo "<br>";
        echo $request->getMethod();
        echo "<br>";
        echo $request->get('nome');
        echo "<br>";
        echo $request->get('cognome');
        echo "<br>";
        echo $request->query->get('citta');
        $this->get('logger')->debug("debug di prova");
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'res' => $request,
        ]);
    }
}
