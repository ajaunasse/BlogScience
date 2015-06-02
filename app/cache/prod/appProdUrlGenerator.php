<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'blog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\PublicController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'article_only' => array (  0 =>   array (    0 => 'id',    1 => 'slug',  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\PublicController::onlyAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),  ),  4 =>   array (  ),),
        'Blog_admin_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'admin_ajout_article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\ArticleController::ajouterAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ajouter',    ),  ),  4 =>   array (  ),),
        'admin_editer_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\ArticleController::editerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'admin_supprimer_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\ArticleController::supprimerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'admin_index_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\AdminController::CategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/Categorie',    ),  ),  4 =>   array (  ),),
        'admin_ajout_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\CategorieController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/Categorie/add',    ),  ),  4 =>   array (  ),),
        'admin_editer_categorie' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\CategorieController::editerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/Categorie',    ),  ),  4 =>   array (  ),),
        'admin_supprimer_categorie' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\CategorieController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/Categorie',    ),  ),  4 =>   array (  ),),
        'admin_index_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\AdminController::imageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/Image',    ),  ),  4 =>   array (  ),),
        'admin_ajouter_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\BlogBundle\\Controller\\ImageController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/Image/add',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
