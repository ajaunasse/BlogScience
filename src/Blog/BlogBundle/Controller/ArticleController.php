<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blog\BlogBundle\Entity\Article ;
use Blog\BlogBundle\Form\ArticleType ;
use Blog\BlogBundle\Entity\ArticleRepository ;


class ArticleController extends Controller
{
  

    public function ajouterAction(){

    	$em = $this->getDoctrine()->getManager() ;
    	$a = new Article() ;
    	$type = new ArticleType() ;
    	$form = $this->createForm($type,$a) ;
    	$request = $this->getRequest() ;
    	if($request->isMethod("POST")){
    		$form->bind($request) ;
            if($form->isValid()){
                $a = $form->getData() ;
                $em->persist($a) ;
         
                $em->flush() ;
                return $this->redirect($this->generateUrl("Blog_admin_home")) ;
            }
             		
    	}
    	return $this->render('BlogBundle:Admin:ajouter.html.twig', array(
    		'form'      => $form->createView(),
    		));
    }

    public function editerAction(Article $article){
        $em = $this->getDoctrine()->getManager() ;
    
        $type = new ArticleType() ;
        $form = $this->createForm($type,$article) ;
        $request = $this->getRequest() ;
        if($request->isMethod("POST")){
            $form->bind($request) ;
            if($form->isValid()){
                $a = $form->getData() ;
                $em->persist($a) ;
                $em->flush() ;
                return $this->redirect($this->generateUrl("Blog_admin_home")) ;
            }
                    
        }
        return $this->render('BlogBundle:Admin:editer.html.twig', array(
            'id'        => $article->getId(),
            'form'      => $form->createView(),
            ));
    }

    public function supprimerAction(Article $article){
        $em = $this->getDoctrine()->getManager() ;
        $em->remove($article) ;
        $em->flush() ;
    
       
        return $this->redirect($this->generateUrl('Blog_admin_home')) ;
    }
}
