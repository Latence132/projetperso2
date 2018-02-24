<?php

namespace APPLICATION\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//pour retourner une rquette HTTP
use Symfony\Component\HttpFoundation\Response;


class CoreController extends Controller
{
    public function indexAction()
    {
        //return $this->render('APPLICATIONCoreBundle:Default:index.html.twig');
        //return new Response("Notre propre Hello World !");
        $content = $this->get('templating')->render('APPLICATIONCoreBundle::layout.html.twig');

        return new Response($content);
    }
}
