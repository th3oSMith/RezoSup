<?php

namespace Rezo\RezoSupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Rezo\RezoSupBundle\Entity\News;
use Rezo\RezoSupBundle\Entity\Admin;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Response;




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
		LEFT JOIN RezoRezoSupBundle:User o WITH n.oper_id = o.id
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
	
	
	/**
     * @Secure(roles="ROLE_MAILING")
     **/	
	
		public function mailingAction(){
		
				
		$repository = $this->getDoctrine()
		->getRepository('RezoRezoSupBundle:Admin');
		
		$admins=$repository->findByAlias(0);
		
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
		'SELECT a.id, a.user, a.alias
		FROM RezoRezoSupBundle:Admin a
		WHERE a.alias != 0'
		);
		
		$aliases = $query->getResult();
		
			
		//Génération du formulaire de création d'un nouvel admin
		
		$admin = new Admin;
		
		$form = $this->createFormBuilder($admin)
			//->add('user', 'text')
			->add('associatedUser', 'entity', array(
											'class' => 'RezoRezoSupBundle:User',
											'property' => 'username',
											))
			->add('email','email')
			->add('password','password')
			->add('mailing','choice', array(
			'choices'=>array(1=>"Oui", 0=>"Non")))
			->add('oper','choice', array(
			'choices'=>array(0=>"Non", 1=>"Oui")))
			->add('admin','choice', array(
			'choices'=>array(0=>"Non", 1=>"Oui")))
			->getForm();
		
		$passForm = $this->createFormBuilder($admin)
			->add('password','password')
			->add('newPass','password', array("mapped"=>false, "required"=>true))
			->getForm();
		
		$user = $this->container->get('security.context')->getToken()->getUser();	
				
		return $this->render('RezoRezoSupBundle:Administration:mailing.html.twig', array("admins"=>$admins, "aliases"=>$aliases, "user"=>$user, "form"=>$form->createView(), "passForm"=>$passForm->createView()));
	
		}



	public function createAdminAction(Request $request){
		
		$userId = $request->request->get('userId');
		
		if ($userId<0 && !($this->get('security.context')->isGranted('ROLE_ADMIN'))){
			return new Response("Vous n'avez pas les droits pour créer un utilisateur !");
			}
		

		if ($userId<0){
			$admin=new Admin();
		}else{
			$em = $this->getDoctrine()->getEntityManager();
			$admin = $em->getRepository('RezoRezoSupBundle:Admin')->find($userId);
			
			$passSave = $admin->getPassword();
			
			if (!$admin) {
				throw $this->createNotFoundException(
					'No Admin found for id '.$userId
				);
			}
		}
		
			
		
		
		$form = $this->createFormBuilder($admin)
			->add('associatedUser', 'entity', array(
											'class' => 'RezoRezoSupBundle:User',
											'property' => 'username',
											))
			->add('email','email')
			->add('password','password')
			->add('mailing','choice', array(
			'choices'=>array(1=>"Oui", 0=>"Non")))
			->add('oper','choice', array(
			'choices'=>array(0=>"Non", 1=>"Oui")))
			->add('admin','choice', array(
			'choices'=>array(0=>"Non", 1=>"Oui")))
			->getForm();
		
		if ($request->isMethod('POST')) {
		
			$form->bind($request);
			
			if ($form->isValid()) {
				
						
				$user = $this->get('security.context')->getToken()->getUser();
					
				$admin=$form->getData();
				
				$admin->setUser($admin->getAssociatedUser()->getUsername());
				
				$admin->setAlias(0);
				if ($userId>0)
					$admin->setPassword($passSave);
				else
					$admin->setPassword(crypt_apr1_md5($admin->getPassword()));
											
				$em = $this->getDoctrine()->getManager();
				$em->persist($admin);
				$em->flush();
				
				
				return $this->redirect($this->generateUrl('mailingAdministration'));
				
			}
		}
		
        return new Response("Erreur lors de la création de l'administrateur");
		
		
	}
	
	public function changePassAction(Request $request){
		
		$user = $this->get('security.context')->getToken()->getUser();

		
		$admin = $user->getAdmin();
		
		
		$passForm = $this->createFormBuilder(new Admin)
			->add('password','password')
			->add('newPass','password', array("mapped"=>false))
			->getForm();
		
		if ($request->isMethod('POST')) {
		
			$passForm->bind($request);
			
			$oldPassword =  $passForm["password"]->getData();
			$password = $passForm["newPass"]->getData();
			
			$salt = explode('$', $admin->getPassword(), 4);
            $salt = $salt[2];
            $oldPassword = crypt_apr1_md5($oldPassword, $salt);

			if ($oldPassword ==  $admin->getPassword()){
				
				if (!empty($password)){
					
					$admin->setPassword(crypt_apr1_md5($password));
												
					$em = $this->getDoctrine()->getManager();
					$em->persist($admin);
					$em->flush();
					
					$this->get('session')->setFlash(
												'notice',
												'Mot de passe modifié'
											);
					
					}else{
					$this->get('session')->setFlash(
												'notice',
												'Mot de passe vide !!!'
											);				
						}
				
				}
			else{
					$this->get('session')->setFlash(
												'notice',
												'Erreur dans le mot de passe'
											);
				}
		
		}
		
        return $this->redirect($this->generateUrl("mailingAdministration"));		
		
	}
	
}

function crypt_apr1_md5($plainpasswd, $salt = null) {
    
    $tmp="";
    
    if (empty($salt) || strlen($salt) != 8)
	    $salt = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);

    $len = strlen($plainpasswd);
    $text = $plainpasswd.'$apr1$'.$salt;
    $bin = pack("H32", md5($plainpasswd.$salt.$plainpasswd));
    for($i = $len; $i > 0; $i -= 16) { $text .= substr($bin, 0, min(16, $i)); }
    for($i = $len; $i > 0; $i >>= 1) { $text .= ($i & 1) ? chr(0) : $plainpasswd{0}; }
    $bin = pack("H32", md5($text));

    for($i = 0; $i < 1000; $i++) {
        $new = ($i & 1) ? $plainpasswd : $bin;
        if ($i % 3) $new .= $salt;
        if ($i % 7) $new .= $plainpasswd;
        $new .= ($i & 1) ? $bin : $plainpasswd;
        $bin = pack("H32", md5($new));
    }

    for ($i = 0; $i < 5; $i++) {
        $k = $i + 6;
        $j = $i + 12;
        if ($j == 16) $j = 5;
        $tmp = $bin[$i].$bin[$k].$bin[$j].$tmp;
    }
    $tmp = chr(0).chr(0).$bin[11].$tmp;
    $tmp = strtr(strrev(substr(base64_encode($tmp), 2)),
          "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",
          "./0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz");
    return "$"."apr1"."$".$salt."$".$tmp;
}
