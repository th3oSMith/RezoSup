<?php

namespace Rezo\RezoSupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Rezo\RezoSupBundle\Entity\News;
use JMS\SecurityExtraBundle\Annotation\Secure;

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
		
		/*
		 * SELECT * FROM Server as s LEFT OUTER JOIN  (SELECT * from (SELECT * FROM fos_user ORDER BY id DESC ) as tmp  GROUP BY id_server ) as f ON s.id = f.id_server
		 * 
		 * */
		
		$sql="SELECT s.serveur, s.ecole, s.libelle, s.type, f.pseudo1  FROM Server as s LEFT OUTER JOIN  (SELECT * from (SELECT * FROM fos_user WHERE level=1 ORDER BY id DESC ) as tmp  GROUP BY server_id ) as f ON s.id = f.server_id";
		$stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
		$stmt->execute();
		$servers = $stmt->fetchAll();
		
        return $this->render('RezoRezoSupBundle:Default:servers.html.twig',array("list"=>$servers));
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
    
        public function compteAction()
    {
        return $this->render('RezoRezoSupBundle:Default:compte.html.twig');
    }
    
        public function annuaireAction()
    {
		
		$repository = $this->getDoctrine()
		->getRepository('RezoRezoSupBundle:Server');
		
		$servers=$repository->findAll();
		
		/*
		if ($this->get('security.context')->isGranted('ROLE_USER')){
			echo $this->get('security.context')->getToken()->getUser()->getUsername();
		}
		*/
		
		
        return $this->render('RezoRezoSupBundle:Default:annuaire.html.twig', array("servers"=>$servers));
    }
    
        public function faqAction()
    {
        return $this->render('RezoRezoSupBundle:Default:faq.html.twig');
    }
    
        public function loginAction()
    {
        return $this->render('RezoRezoSupBundle:Default:login.html.twig');
    }
    
        public function servicesAction()
    {
        return $this->render('RezoRezoSupBundle:Default:services.html.twig');
    }
    
        public function redirectAction(){

			return $this->redirect($this->generateUrl('home'));

    }
    
    
        public function commandesAction()
    {
        return $this->render('RezoRezoSupBundle:Default:commandes.html.twig');
    }
    
    
        public function newsAction($page)
    {
		
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
		'SELECT n.title, n.date, n.text, o.pseudo1 as pseudo1, n.url, n.id
		FROM RezoRezoSupBundle:News n
		LEFT JOIN RezoRezoSupBundle:User o WITH n.oper_id = o.id
		WHERE n.deleted=0
		ORDER BY n.id DESC'
		);
		
		$news = $query->getResult();
		
		$elementsParPage=5;
		$dernier=false;
		
		if (count(array_slice($news,$elementsParPage*($page),$elementsParPage))==0) { //Si la dernière page a été atteinte
			$dernier=true;
		}
		
		$newsSliced = array_slice($news,$elementsParPage*($page-1),$elementsParPage);
		
        return $this->render('RezoRezoSupBundle:Default:news.html.twig',array('news'=>$newsSliced , 'page'=>$page,'dernier'=>$dernier));
    }



}
