<?php

/* BlogBundle:Admin:index.html.twig */
class __TwigTemplate_6e0ba4afcf82cc785c8fd21e539b017b61b374213e8021e7b0e15c17a89f4b69 extends Twig_Template
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
\t<h1> Admin </h1>
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_ajout_article");
        echo "\"> Ajouter un article</a>
\t\t<table> 
  \t\t\t<caption> Liste des articles </caption> 
  \t\t<tr> 
 \t\t\t<th> Id </th> 
\t\t\t<th> Titre </th> 
\t\t\t<th> Statut </th> 
\t\t\t<th> Action </th> 
  \t\t</tr> 
  \t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "  \t\t<tr> 
\t\t\t<td> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo " </td> 
\t\t\t<td> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "  </td> 
\t\t\t";
            // line 18
            if (($this->getAttribute($context["article"], "online", array()) == false)) {
                // line 19
                echo "\t\t\t<td> Hors Ligne </td> 
\t\t\t";
            } else {
                // line 21
                echo "\t\t\t<td> En ligne </td>
\t\t\t";
            }
            // line 23
            echo "\t\t\t<td>  <a href=\"\"> Voir </a> |  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_editer_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"> editer </a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_supprimer_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"> Supprimer </a> </td> 
  \t\t</tr> 
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</table> 
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
        return array (  85 => 26,  73 => 23,  69 => 21,  65 => 19,  63 => 18,  59 => 17,  55 => 16,  52 => 15,  48 => 14,  36 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
