<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blog\BlogBundle\Entity\Image ;
use Symfony\Component\HttpFoundation\File\UploadedFile ;



class ImageController extends Controller
{
  

    public function ajouterAction(){
   		$image = new Image();
    	$form = $this->createFormBuilder($image)
        	->add('name', 'text', array(
              'attr' => array('class'=> 'form-control')))
        	->add('file')
        	->getForm()
    ;

    if ($this->getRequest()->isMethod('POST')) {
        $form->handleRequest($this->getRequest());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
 
            $em->flush();

            $this->redirect($this->generateUrl("admin_index_image"));
        	}
    	}

   
    	return $this->render('BlogBundle:Admin:upload_image.html.twig', array(
    		'form'      => $form->createView(),
    		));
    }
    
    public function editerAction(Image $image){
    
    }

    public function supprimerAction(Image $image){
    
    }
}
