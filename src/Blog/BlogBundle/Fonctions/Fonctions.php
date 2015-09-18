<?php 
namespace Blog\BlogBundle\Fonctions;


public function debug($data){
	echo '<pre>';
	\Doctrine\Common\Util\Debug::dump($data, $recurciveLevelToDisplay);
	echo '</pre>';
}