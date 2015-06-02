<?php

	namespace Blog\BlogBundle\Controller; 

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	class AdminController extends Controller{

		public function indexAction(){

			$em = $this->getDoctrine()->getManager() ;
    	$articles = $em->getRepository("BlogBundle:Article")->findAll() ;
        return $this->render('BlogBundle:Admin:index.html.twig', array(

        	'articles' => $articles));
    	}

    	public function categorieAction(){
	    	$em = $this->getDoctrine()->getManager() ;
	    	$categories = $em->getRepository("BlogBundle:Categorie")->findAll() ;
	        return $this->render('BlogBundle:Admin:categorie.html.twig', array(

	        	'categories' => $categories));
	    	}

	    	public function imageAction(){

	    	$em = $this->getDoctrine()->getManager() ;
	    	$images = $em->getRepository("BlogBundle:Image")->findAll() ;
	        return $this->render('BlogBundle:Admin:image.html.twig', array(

	        	'images' => $images));
	    	}

	}
	