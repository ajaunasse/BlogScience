<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blog\BlogBundle\Entity\Article ;
use Blog\BlogBundle\Form\ArticleType ;
use Symfony\Component\HttpFoundation\Response ;


class PublicController extends Controller
{
    public function indexAction($page)
    {
    	$em = $this->getDoctrine()->getManager() ;
        try {
    	        $articles = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('BlogBundle:Article')
                     ->getArticles(5, $page);

        } catch(\Exception $e){
            return new Response( "Article introuvable", 404) ;
        }

        return $this->render('BlogBundle:Public:index.html.twig', array(
            'articles'      => $articles,
            'page'          => $page,
            'nombrePage'    => ceil(count($articles)/5)));
    }

    public function onlyAction($id){

    	$em = $this->getDoctrine()->getManager() ;
    	try {
    		$article = $em->getRepository("BlogBundle:Article")->findOneById($id) ;
            $nbvue = $article->getNbvues() ;
            $newnbvue = $nbvue +1 ;
            $article->setNbvues($newnbvue) ;
            $em->flush();
    	} catch(\Exception $e){
    		return new Response( "Article introuvable", 404) ;
    	}
    	
    	return $this->render('BlogBundle:Public:only.html.twig', array(

        	'article' => $article));
    }

    public function categorieAction($id){

        $em = $this->getDoctrine()->getManager() ;

        $articles = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('BlogBundle:Article')
                     ->getArticlesByCateg($id);
       
        
        return $this->render('BlogBundle:Public:categorie.html.twig', array(

            'articles' => $articles));
    }

    public function tagAction($name){
        $em = $this->getDoctrine()->getManager() ;
    try {
        $articles = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('BlogBundle:Article')
                     ->getArticlesByTag($name);
       
        } catch(\Exception $e){
            return new Response( "Article introuvable", 404) ;
        }
        return $this->render('BlogBundle:Public:tag.html.twig', array(

            'articles' => $articles));
    }
    public function menuAction(){
        $categories = $this->getDoctrine()->getManager()->getRepository('BlogBundle:Categorie')->findAll() ;
        return $this->render('BlogBundle:Public:menu.html.twig', array('categories' => $categories)) ;
    }

}
