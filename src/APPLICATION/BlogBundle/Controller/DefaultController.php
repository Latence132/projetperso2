<?php

namespace APPLICATION\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APPLICATIONBlogBundle:Default:index.html.twig');
    }
}
