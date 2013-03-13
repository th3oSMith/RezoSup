<?php

namespace Rezo\RezoSupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Rezo\RezoSupBundle\Entity\News;
use JMS\SecurityExtraBundle\Annotation\Secure;

class AjaxController extends Controller
{
	
	 public function listeAction($username, $server_id, $operateur)
    {
		
		$em = $this->getDoctrine()->getManager();
		
		$sql= "SELECT f.username,f.email,f.pseudo1, f.pseudo2, f.sexe, f.naissance, s.serveur, f.channels, f.ville, f.icq, f.url, f.message, f.level, f.nom, f.prenom
		FROM RezoRezoSupBundle:User f
		LEFT JOIN RezoRezoSupBundle:Server s WITH f.id_server=s.id
		WHERE f.pseudo1 LIKE '%".$username."%'";
		

		
		if ($server_id!=-1){
			$sql.=" AND f.id_server=".$server_id;
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
	
	
}
