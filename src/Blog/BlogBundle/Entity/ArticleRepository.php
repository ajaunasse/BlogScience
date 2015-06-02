<?php

namespace Blog\BlogBundle\Entity ;

use Doctrine\ORM\EntityRepository ;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ArticleRepository extends EntityRepository {

	public function getArticles($nombreParPage, $page){

	if ($page < 1) {
      throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "'.$page.'").');
    }
  		$query = $this->createQueryBuilder('a')
                ->where('a.online = :boolean')
                  ->setParameter('boolean', true)
                  ->orderBy('a.date', 'DESC')
                  ->getQuery();

   // On définit l'article à partir duquel commencer la liste
    $query->setFirstResult(($page-1) * $nombreParPage)
          ->setMaxResults($nombreParPage);

    // Enfin, on retourne l'objet Paginator correspondant à la requête construite
    // (n'oubliez pas le use correspondant en début de fichier)
    return new Paginator($query);
	}

	public function getArticlesByCateg($id){

		$query = $this->createQueryBuilder('a')
				->where('a.categorie = :id')
				->setParameter('id', $id)
                 ->orderBy('a.date', 'DESC')
                 ->getQuery();

    	return $query->getResult();

	}

}