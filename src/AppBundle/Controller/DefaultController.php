<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    /* mike repository step1 */
    public function indexAction(Request $request)
    {
        $a = 123;
        return $this->render('default/index.html.twig', ['a' => $a ] );
    }
}
