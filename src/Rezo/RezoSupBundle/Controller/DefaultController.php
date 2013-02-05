<?php

namespace Rezo\RezoSupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RezoRezoSupBundle:Default:index.html.twig');
    }
    public function thanksAction()
    {
        return $this->render('RezoRezoSupBundle:Default:thanks.html.twig');
    }
    
        public function charteAction()
    {
        return $this->render('RezoRezoSupBundle:Default:charte.html.twig');
    }
}
