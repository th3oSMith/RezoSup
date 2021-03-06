<?php

namespace Rezo\RezoSupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Rezo\RezoSupBundle\Entity\News;
use Rezo\RezoSupBundle\Entity\Admin;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
	
	 public function listeAction($username, $server_id, $operateur)
    {
		
		$em = $this->getDoctrine()->getManager();
		
		$sql= "SELECT f.username,f.email,f.pseudo1, f.pseudo2, f.sexe, f.naissance, s.serveur, f.channels, f.ville, f.icq, f.url, f.message, f.level, f.nom, f.prenom
		FROM RezoRezoSupBundle:User f
		LEFT JOIN RezoRezoSupBundle:Server s WITH f.serveur=s.id
		WHERE f.pseudo1 LIKE '%".$username."%'";
		

		
		if ($server_id!=-1){
			$sql.=" AND f.serveur=".$server_id;
		}
		
		if ($operateur=="true"){
			$sql.=" AND f.level>0";
		}
		
		
		$query = $em->createQuery($sql);
		$users = $query->getResult();

		if (count($users)==1){$users[0]["op"]=false;}

		if (count($users)==1 && $users[0]["level"]>0){
			
			$users[0]["op"]=true;
			
			switch($users[0]["level"]){
				case 1:
				$users[0]["level"]="Opérateur de ".$users[0]["serveur"];
				break;
				case 2:
				$users[0]["level"]="Ancien opérateur de ".$users[0]["serveur"]." toujours actif sur le serveur";
				break;
				case 3:
				$users[0]["level"]="Ancien opérateur de ".$users[0]["serveur"]." plus actif sur le serveur";
				break;
			
			
			}
			
		}
		
		
        return $this->render('RezoRezoSupBundle:Ajax:liste.html.twig', array("liste"=>$users));
    }
    
    /*
     * Modifier les accréditation d'un utilisateur
     * 
     * Codes erreurs :
     * 	1 --> L'id n'existe pas
     *  2 --> L'utilisateur est en fait un alias
     * 
     * */
    
    
     /**
     * @Secure(roles="ROLE_ADMIN")
     **/	
    
    
    public function changeAccessAction($id, $level){
		
		
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $this->getDoctrine()
		->getRepository('RezoRezoSupBundle:Admin');
		
		$admin=$repository->findOneById($id);
		
		$json['error']=0;
		
		if (!$admin) {
			$json['error']=1;
			$out = json_encode($json);
			return new Response($out);
		}
		
		if ($admin->getAlias()!=0){
			$json['error']=2;
			$out = json_encode($json);
			return new Response($out);
			} 
		
		switch($level){
			case 1:
				if (checkRole("ROLE_OPER", $this)){
					$admin->setMailing(($admin->getMailing()+1)%2);
					$em->flush();
					$json['value']=$admin->getMailing();					
				}
				break;
			case 2:
				if (checkRole("ROLE_ADMIN", $this)){
					$admin->setOper(($admin->getOper()+1)%2);
					$em->flush();
					$json['value']=$admin->getOper();
				}
				break;
			case 3:
				if (checkRole("ROLE_ADMIN",$this)){
					$admin->setAdmin(($admin->getAdmin()+1)%2);
					$em->flush();
					$json['value']=$admin->getAdmin();
				}
				break;
			
		}
		
		//Modification des rôles dans la sécurité de Symfony
		
		$user = $admin->getAssociatedUser();
				
		if ($admin->getMailing()==1)
			$user->addRole("ROLE_MAILING");
		else
			$user->removeRole("ROLE_MAILING");

		if ($admin->getOper()==1)
			$user->addRole("ROLE_OPER");
		else
			$user->removeRole("ROLE_OPER");

		if ($admin->getAdmin()==1)
			$user->addRole("ROLE_ADMIN");
		else
			$user->removeRole("ROLE_ADMIN");
		
		
		//On n'oublie pas de sauvegarder les modifications
		$em->flush();
		
		$out = json_encode($json);
		return new Response($out);
}

	public function delAdminAction($id){ //FIXME Protection par utilisateur
				
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $this->getDoctrine()
		->getRepository('RezoRezoSupBundle:Admin');
		
		$admin=$repository->findOneById($id);
		
		
				
		if (!$admin) {
			$json['error']=1;
			$out = json_encode($json);
			return new Response($out);
		}
		
		$test=false;
		
		if ($admin->getAlias()!=0){
		$owner = $repository->findOneById($admin->getAlias())->getAssociatedUser();
		$user = $this->container->get('security.context')->getToken()->getUser();	
		
		
		
		
		if ($owner==$user)
			$test=true;

		
		}
		
		

		
		if ($test || checkRole("ROLE_ADMIN",$this)){
			$em->remove($admin);
			
			$aliases = $repository->findByAlias($id);
			
			foreach ($aliases as $alias){
				$em->remove($alias);
			}
			
			
			
			$em->flush();
			
			$json['error']=0;
			$out = json_encode($json);
			return new Response($out);
		
			$aliases = $repository->findByAlias($id);
			
			
		
		}
	
	report(3);
	
	}

	public function updateMailAction(){
		
		exec("sudo /usr/local/sbin/genere_virtual.pl 2>&1",$output);
		$count = count($output);

		
		$json['output']=$output[$count-1];
		
		return new Response(json_encode($json));
		
		
		}

	public function createAliasAction(Request $request){
		
		
		$id = $request->request->get('id',-1);
		$name = $request->request->get('name');

		if ($id==-1){
				report(1);	
			}
		
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $this->getDoctrine()
		->getRepository('RezoRezoSupBundle:Admin');
		
		$admin=$repository->findOneById($id);
		
		if ($admin->getAlias()!=0){
			report(2);
		}
		
		$alias = new Admin();
		$alias->setUser($name);
		$alias->setAlias($id);
		$alias->setPassword("");
		$alias->setEmail($admin->getUser()."@rezosup.net");
		
		$user = $this->container->get('security.context')->getToken()->getUser();	

		
		if ($user==$admin->getAssociatedUser() || checkRole("ROLE_ADMIN",$this)){
			$em->persist($alias);
			$em->flush();
		}
		
		
		report(3);
		return new Response();
		
		
	}

	public function getAdminAction($id){
		
		
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $this->getDoctrine()
		->getRepository('RezoRezoSupBundle:Admin');
		
		$admin=$repository->findOneById($id);
		
		$json['error']=0;
		
		if (!$admin) {
			report(1);
		}
		
		if ($admin->getAlias()!=0){
			report(2);
			} 
		
		$out['mailing']=0;
		$out['oper']=0;
		$out['admin']=0;

		$out['associatedUser']=$admin->getAssociatedUser()->getId();
		$out['user']=$admin->getUser();
		$out['email']=$admin->getEmail();
		if ($admin->getOper())
			$out['oper']=1;
		if ($admin->getMailing())
			$out['mailing']=1;
		if ($admin->getAdmin())
			$out['admin']=1;
		$out['error']=0;
		
		return new Response(json_encode($out));
		
	}

}

function report($id){
	
	$json['error']=$id;
	die(json_encode($json));
	
	}

function checkRole($role, $self){
	if (! $self->get('security.context')->isGranted($role))
				{
					$json['error']=3;
					die(json_encode($json));
					}
	
	return true;
	}
