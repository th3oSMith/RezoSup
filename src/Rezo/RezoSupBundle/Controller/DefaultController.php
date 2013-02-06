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
