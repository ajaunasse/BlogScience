<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blog\BlogBundle\Entity\Categorie ;
use Blog\BlogBundle\Form\CategorieType ;


class CategorieController extends Controller
{
  
  public function ajouterAction(){

    	$em = $this->getDoctrine()->getManager() ;
    	$c = new Categorie() ;
    	$type = new CategorieType() ;
    	$form = $this->createForm($type,$c) ;
    	$request = $this->getRequest() ;
    	if($request->isMethod("POST")){
    		$form->bind($request) ;
            if($form->isValid()){
                $c = $form->getData() ;
                $em->persist($c) ;
                $em->flush() ;
                return $this->redirect($this->generateUrl("admin_index_categorie")) ;
            }
             		
    	}
    	return $this->render('BlogBundle:Admin:ajout_categorie.html.twig', array(
    		'form'      => $form->createView(),
    		));
    }

    public function editerAction(Categorie $categorie){
        $em = $this->getDoctrine()->getManager() ;
    
        $type = new CategorieType() ;
        $form = $this->createForm($type,$categorie) ;
        $request = $this->getRequest() ;
        if($request->isMethod("POST")){
            $form->bind($request) ;
            if($form->isValid()){
                $c = $form->getData() ;
                $em->persist($c) ;
                $em->flush() ;
                return $this->redirect($this->generateUrl("admin_index_categorie")) ;
            }
                    
        }
        return $this->render('BlogBundle:Admin:editer_categorie.html.twig', array(
            'id'        => $categorie->getId(),
            'form'      => $form->createView(),
            ));
    }

    public function supprimerAction(Categorie $categorie){
        $em = $this->getDoctrine()->getManager() ;
        $em->remove($categorie) ;
        $em->flush() ;
    
       
        return $this->redirect($this->generateUrl('admin_index_categorie')) ;
    }

   
}
