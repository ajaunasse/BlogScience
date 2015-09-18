<?php

/* BlogBundle:Admin:categorie.html.twig */
class __TwigTemplate_fa864963490ee93f86c7c109bce8216e4fcd4ed717db34f98c4a960c856036f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "BlogBundle:Admin:categorie.html.twig", 1);
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
\t\t\t\t<h1> Gestion des categories </h1>
\t\t\t\t<br>
\t\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_ajout_categorie");
        echo "\"> Ajouter une categorie</a>
\t\t\t\t<table class=\"table table-striped\" > 
\t\t  \t\t\t<caption> Liste des categories</caption> 
\t\t  \t\t\t<thead>
\t\t\t\t  \t\t<tr> 
\t\t\t\t \t\t\t<th> Id </th> 
\t\t\t\t\t\t\t<th> Titre </th> 
\t\t\t\t\t\t\t<th> Description </th> 
\t\t\t\t\t\t\t<th> Action </th> 
\t\t\t\t  \t\t</tr> 
\t\t  \t\t\t</thead>
\t\t  \t\t\t<tbody>
\t\t  \t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 22
            echo "\t\t  \t\t\t\t\t<tr> 
\t\t\t\t\t\t\t\t<td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo " </td> 
\t\t\t\t\t\t\t\t<td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            echo "  </td> 
\t\t\t\t\t\t\t\t<td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "description", array()), "html", null, true);
            echo "  </td> 
\t\t\t\t\t\t\t\t<td>  <a href=\"\"> Voir </a> |  <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_editer_categorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> editer </a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_supprimer_categorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> Supprimer </a> </td> 
  \t\t\t\t\t\t\t</tr> 
\t\t  \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t  \t\t\t</tbody>
\t\t\t\t</table> 
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Admin:categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  74 => 26,  70 => 25,  66 => 24,  62 => 23,  59 => 22,  55 => 21,  40 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
