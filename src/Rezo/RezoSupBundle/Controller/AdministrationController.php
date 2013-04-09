<?php

namespace Rezo\RezoSupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Rezo\RezoSupBundle\Entity\News;
use JMS\SecurityExtraBundle\Annotation\Secure;

class AdministrationController extends Controller
{
    public function indexAction()
    {
        return $this->render('RezoRezoSupBundle:Administration:index.html.twig');
    }
	
	
	 /**
     * @Secure(roles="ROLE_ADMIN")
     **/
	        public function newsPostAction()
    {
		$news=new News();
		$news->setTitle("Yep Yep")
			 ->setText("Je suis une News");
		
		$form = $this->createFormBuilder($news)
			->add('title', 'text')
			->add('text','textarea')
			->getForm();
		
		
        return $this->render('RezoRezoSupBundle:Administration:newsPost.html.twig', array('form' => $form->createView()));
    }
    
     /**
     * @Secure(roles="ROLE_ADMIN")
     **/
    
    
        public function newsPostProcessAction(Request $request, $newsId)
    {
		if ($newsId<0){
			$news=new News();
		}else{
			$em = $this->getDoctrine()->getEntityManager();
			$news = $em->getRepository('RezoRezoSupBundle:News')->find($newsId);
			echo "fghjk";
			
			if (!$news) {
				throw $this->createNotFoundException(
					'No news found for id '.$newsId
				);
			}
		}
			
			$form = $this->createFormBuilder($news)
			->add('title', 'text')
			->add('text','textarea')
			->getForm();
		
		if ($request->isMethod('POST')) {
		
			$form->bind($request);
			
			if ($form->isValid()) {
				
				$user = $this->get('security.context')->getToken()->getUser();
				
				
							
				$news=$form->getData();				
				$date = new \DateTime();
				$news->setDate($date);
				$news->setOperId($user->getId()); //OpID ----------------------------------
				$news->setDeleted(0);
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($news);
				$em->flush();
				
				
				return $this->redirect($this->generateUrl('newsAdministration'));
				
			}
		}
        return $this->render('RezoRezoSupBundle:Administration:newsPost.html.twig', array('form' => $form->createView(), 'newsId'=>$newsId));
    }
	
	
	/**
     * @Secure(roles="ROLE_ADMIN")
     **/
	
	
	 public function newsAction($page)
    {
		
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
		'SELECT n.title, n.date, n.text, o.pseudo1 as pseudo1, n.url, n.id, n.deleted
		FROM RezoRezoSupBundle:News n
		LEFT JOIN RezoRezoSupBundle:Opers o WITH n.oper_id = o.id
		ORDER BY n.id DESC'
		);
		
		$news = $query->getResult();
		
		$elementsParPage=5;
		$dernier=false;
		
		if (count(array_slice($news,$elementsParPage*($page),$elementsParPage))==0) { //Si la dernière page a été atteinte
			$dernier=true;
		}
		
		$newsSliced = array_slice($news,$elementsParPage*($page-1),$elementsParPage);
		
        return $this->render('RezoRezoSupBundle:Administration:news.html.twig',array('news'=>$newsSliced , 'page'=>$page,'dernier'=>$dernier));
    }
	
	/**
     * @Secure(roles="ROLE_ADMIN")
     **/
	
	 public function deleteAction($newsId)
    {
		
		$em = $this->getDoctrine()->getEntityManager();
		$product = $em->getRepository('RezoRezoSupBundle:News')->find($newsId);

		if (!$product) {
			throw $this->createNotFoundException(
				'No news found for id '.$newsId
			);
		}

		$product->setDeleted(1);
		$em->flush();
		
		$this->get('session')->setFlash(
            'notice',
            'News supprimée'
        );
		
		return $this->redirect($this->generateUrl('newsAdministration'));    
		}
	
}
