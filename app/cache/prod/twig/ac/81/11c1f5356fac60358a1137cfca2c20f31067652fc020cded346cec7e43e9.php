<?php

/* BlogBundle:Admin:image.html.twig */
class __TwigTemplate_ac8111c1f5356fac60358a1137cfca2c20f31067652fc020cded346cec7e43e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "BlogBundle:Admin:image.html.twig", 1);
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
\t<h1> Gestion des images </h1>
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_ajouter_image");
        echo "\"> Uploader une image</a>
\t\t<table> 
  \t\t\t<caption> Liste des images </caption> 
  \t\t<tr> 
 \t\t\t<th> Id </th> 
\t\t\t<th> Titre </th>
\t\t\t<th> Image </th> 
\t\t\t<th> Action </th> 
  \t\t</tr> 
  \t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 15
            echo "  \t\t<tr> 
\t\t\t<td> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo " </td> 
\t\t\t<td> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array()), "html", null, true);
            echo "  </td> 
\t\t\t<td>  <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/images/") . $this->getAttribute($context["image"], "path", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array()), "html", null, true);
            echo "\" height=\"100\" width=\"100\" /> </td>
\t\t\t<td>  <a href=\"\"> Voir </a> |  <a href=\"\"> editer </a> | <a href=\"\"> Supprimer </a> </td> 
  \t\t</tr> 
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table> 
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Admin:image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  63 => 18,  59 => 17,  55 => 16,  52 => 15,  48 => 14,  36 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
