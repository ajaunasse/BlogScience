<?php

/* BlogBundle:Admin:categorie.html.twig */
class __TwigTemplate_0419734ab97911ade33747fdfa875d0f6eaafdd196875c5137686f772ee9a3be extends Twig_Template
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
\t<h1> Gestiond des categories </h1>
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_ajout_categorie");
        echo "\"> Ajouter une categorie</a>
\t\t<table> 
  \t\t\t<caption> Liste des categories </caption> 
  \t\t<tr> 
 \t\t\t<th> Id </th> 
\t\t\t<th> Titre </th> 
\t\t\t<th> Statut </th> 
\t\t\t<th> Action </th> 
  \t\t</tr> 
  \t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 15
            echo "  \t\t<tr> 
\t\t\t<td> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo " </td> 
\t\t\t<td> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            echo "  </td> 
\t\t\t<td>  <a href=\"\"> Voir </a> |  <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_editer_categorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> editer </a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_supprimer_categorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> Supprimer </a> </td> 
  \t\t</tr> 
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table> 
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
        return array (  74 => 21,  63 => 18,  59 => 17,  55 => 16,  52 => 15,  48 => 14,  36 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
