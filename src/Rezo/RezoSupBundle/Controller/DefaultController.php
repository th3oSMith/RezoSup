<?php

namespace Rezo\RezoSupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Rezo\RezoSupBundle\Entity\News;

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
    
        public function serversAction()
    {
        return $this->render('RezoRezoSupBundle:Default:servers.html.twig');
    }
    
        public function mapAction()
    {
        return $this->render('RezoRezoSupBundle:Default:map.html.twig');
    }
    
        public function sessionsAction()
    {
        return $this->render('RezoRezoSupBundle:Default:sessions.html.twig');
    }
    
        public function proxyAction()
    {
        return $this->render('RezoRezoSupBundle:Default:proxy.html.twig');
    }
    
        public function faqAction()
    {
        return $this->render('RezoRezoSupBundle:Default:faq.html.twig');
    }
    
        public function servicesAction()
    {
        return $this->render('RezoRezoSupBundle:Default:services.html.twig');
    }
    
    
        public function commandesAction()
    {
        return $this->render('RezoRezoSupBundle:Default:commandes.html.twig');
    }
    
    
        public function newsPostAction()
    {
		
		$news=new News();
		

		
		$form = $this->createFormBuilder($news)
			->add('title', 'text')
			->add('author', 'text')
			->add('content','textarea')
			->getForm();
		
		
        return $this->render('RezoRezoSupBundle:Default:newsPost.html.twig', array('form' => $form->createView()));
    }
    
        public function newsPostProcessAction(Request $request)
    {
		
			$news=new News();
			$form = $this->createFormBuilder($news)
			->add('title', 'text')
			->add('author', 'text')
			->add('content','textarea')
			->getForm();
		
		$form->bind($request);
		
		if ($form->isValid()) {
			
			$news=$form->getData();
			$date = new \DateTime();
			$news->setDate($date);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($news);
			$em->flush();
			
			
			return $this->render('RezoRezoSupBundle:Default:index.html.twig');
			
		}
		
        return $this->render('RezoRezoSupBundle:Default:charte.html.twig');
    }
    

    
        public function newsAction($page)
    {
		
		$repository = $this->getDoctrine()
					->getRepository('RezoRezoSupBundle:News');
					
		$news = $repository->findBy(array(),array('id'=>'DESC'));
		
		$elementsParPage=4;
		$dernier=false;
		
		if (count(array_slice($news,$elementsParPage*($page),$elementsParPage))==0) { //Si la dernière page a été atteinte
			$dernier=true;
		}
		
		$newsSliced = array_slice($news,$elementsParPage*($page-1),$elementsParPage);
		
        return $this->render('RezoRezoSupBundle:Default:news.html.twig',array('news'=>$newsSliced , 'page'=>$page,'dernier'=>$dernier));
    }



}
