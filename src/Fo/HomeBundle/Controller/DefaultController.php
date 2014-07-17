<?php

namespace Fo\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FoHomeBundle:Default:index.html.twig');
    }
}
