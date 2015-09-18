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
                    ->join('a.tag', 't')
                    ->addSelect('t')
                    ->where('a.online = :boolean')
                    ->setParameter('boolean', true)
                    ->orderBy('a.date', 'DESC')
                    ->getQuery();

    $query->setFirstResult(($page-1) * $nombreParPage)
          ->setMaxResults($nombreParPage);
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

  public function getArticlesByTag($name){
    $query = $this->createQueryBuilder('a')
                  ->join('a.tag', 't')
                  ->where('t.name = :name')
                  ->setParameter('name', $name)
                  ->getQuery();
    return $query->getResult() ;
  }

  public function getPopularArticle($limit){
    $query = $this->createQueryBuilder('a')
                  ->where('a.online = :boolean')
                  ->setParameter('boolean' , true)
                  ->orderBy('a.nbvues', 'DESC')
                  ->setMaxResults($limit) ;

    return $query->getQuery()->getResult() ;
  }

}