<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_homepage');
            }

            return array (  '_controller' => 'Blog\\BlogBundle\\Controller\\PublicController::indexAction',  '_route' => 'blog_homepage',);
        }

        // article_only
        if (preg_match('#^/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_only')), array (  '_controller' => 'Blog\\BlogBundle\\Controller\\PublicController::onlyAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // Blog_admin_home
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_Blog_admin_home;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Blog_admin_home');
                }

                return array (  '_controller' => 'Blog\\BlogBundle\\Controller\\AdminController::indexAction',  '_route' => 'Blog_admin_home',);
            }
            not_Blog_admin_home:

            // admin_ajout_article
            if ($pathinfo === '/admin/ajouter') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_ajout_article;
                }

                return array (  '_controller' => 'Blog\\BlogBundle\\Controller\\ArticleController::ajouterAction',  '_route' => 'admin_ajout_article',);
            }
            not_admin_ajout_article:

            // admin_editer_article
            if (preg_match('#^/admin/(?P<id>[^/]++)/editer$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_editer_article;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_editer_article')), array (  '_controller' => 'Blog\\BlogBundle\\Controller\\ArticleController::editerAction',));
            }
            not_admin_editer_article:

            // admin_supprimer_article
            if (preg_match('#^/admin/(?P<id>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_supprimer_article;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_supprimer_article')), array (  '_controller' => 'Blog\\BlogBundle\\Controller\\ArticleController::supprimerAction',));
            }
            not_admin_supprimer_article:

            if (0 === strpos($pathinfo, '/admin/Categorie')) {
                // admin_index_categorie
                if ($pathinfo === '/admin/Categorie') {
                    return array (  '_controller' => 'Blog\\BlogBundle\\Controller\\AdminController::CategorieAction',  '_route' => 'admin_index_categorie',);
                }

                // admin_ajout_categorie
                if ($pathinfo === '/admin/Categorie/add') {
                    return array (  '_controller' => 'Blog\\BlogBundle\\Controller\\CategorieController::ajouterAction',  '_route' => 'admin_ajout_categorie',);
                }

                // admin_editer_categorie
                if (preg_match('#^/admin/Categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_editer_categorie')), array (  '_controller' => 'Blog\\BlogBundle\\Controller\\CategorieController::editerAction',));
                }

                // admin_supprimer_categorie
                if (preg_match('#^/admin/Categorie/(?P<id>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_supprimer_categorie')), array (  '_controller' => 'Blog\\BlogBundle\\Controller\\CategorieController::supprimerAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/Image')) {
                // admin_index_image
                if ($pathinfo === '/admin/Image') {
                    return array (  '_controller' => 'Blog\\BlogBundle\\Controller\\AdminController::imageAction',  '_route' => 'admin_index_image',);
                }

                // admin_ajouter_image
                if ($pathinfo === '/admin/Image/add') {
                    return array (  '_controller' => 'Blog\\BlogBundle\\Controller\\ImageController::ajouterAction',  '_route' => 'admin_ajouter_image',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
