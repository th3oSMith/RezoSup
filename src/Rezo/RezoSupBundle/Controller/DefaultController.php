<?php

namespace Rezo\RezoSupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    

    
        public function newsAction($page)
    {
		
		$repository = $this->getDoctrine()
					->getRepository('RezoRezoSupBundle:News');
					
		$news = $repository->findAll();
		
		$elementsParPage=4;
		$dernier=false;
		
		if (count(array_slice($news,$elementsParPage*($page),$elementsParPage))==0) { //Si la dernière page a été atteinte
			$dernier=true;
		}
		
		$newsSliced = array_slice($news,$elementsParPage*($page-1),$elementsParPage);
		
        return $this->render('RezoRezoSupBundle:Default:news.html.twig',array('news'=>$newsSliced , 'page'=>$page,'dernier'=>$dernier));
    }



}
