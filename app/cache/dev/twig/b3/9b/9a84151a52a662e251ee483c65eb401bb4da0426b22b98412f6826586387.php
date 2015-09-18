<?php

/* BlogBundle:Admin:index.html.twig */
class __TwigTemplate_b39b9a84151a52a662e251ee483c65eb401bb4da0426b22b98412f6826586387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "BlogBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<br>
\t\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_ajout_article");
        echo "\"> Ajouter un article</a>
\t\t\t\t<table class=\"table table-striped\" > 
\t\t  \t\t\t<caption> Liste des articles </caption> 
\t\t  \t\t\t<thead>
\t\t\t\t  \t\t<tr> 
\t\t\t\t \t\t\t<th> Id </th> 
\t\t\t\t\t\t\t<th> Titre </th> 
\t\t\t\t\t\t\t<th> Statut </th> 
\t\t\t\t\t\t\t<th> Action </th> 
\t\t\t\t  \t\t</tr> 
\t\t  \t\t\t</thead>
\t\t  \t\t\t<tbody>
\t\t  \t\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "\t\t  \t\t\t\t\t<tr> 
\t\t\t\t\t\t\t\t<td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo " </td> 
\t\t\t\t\t\t\t\t<td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "  </td> 
\t\t\t\t\t\t\t\t";
            // line 24
            if (($this->getAttribute($context["article"], "online", array()) == false)) {
                // line 25
                echo "\t\t\t\t\t\t\t\t<td><span class=\"btn btn-danger\"> Hors Ligne </span> </td> 
\t\t\t\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t\t\t<td> <span class=\"btn btn-success\" >En ligne </span> </td>
\t\t\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t\t\t<td>  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_only", array("id" => $this->getAttribute($context["article"], "id", array()), "slug" => $this->getAttribute($context["article"], "slug", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "contenu", array()), "html", null, true);
            echo "\"> Voir </a> |  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_editer_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"> editer </a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_supprimer_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"> Supprimer </a> </td> 
\t\t  \t\t\t\t\t</tr> 
\t\t  \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t  \t\t\t</tbody>
\t\t\t\t</table> 
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  79 => 29,  75 => 27,  71 => 25,  69 => 24,  65 => 23,  61 => 22,  58 => 21,  54 => 20,  39 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
