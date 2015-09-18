<?php

/* BlogBundle:Admin:image.html.twig */
class __TwigTemplate_fce7f251f2a36a3c8c0242a03b8facb3988982826c4b3c8219bda481d85cbaea extends Twig_Template
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
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h1> Gestion des images </h1>
\t\t\t\t<br>
\t\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_ajouter_image");
        echo "\"> Uploader une image</a>
\t\t\t\t<table class=\"table table-striped\" > 
\t\t  \t\t\t<caption> Liste des images</caption> 
\t\t  \t\t\t<thead>
\t\t\t\t  \t\t<tr> 
\t\t\t\t \t\t\t<th> Id </th> 
\t\t\t\t\t\t\t<th> Titre </th>
\t\t\t\t\t\t\t<th> Image </th> 
\t\t\t\t\t\t\t<th> Action </th>  
\t\t\t\t  \t\t</tr> 
\t\t  \t\t\t</thead>
\t\t  \t\t\t<tbody>
\t\t  \t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 22
            echo "\t\t  \t\t\t\t\t<tr> 
\t\t\t\t\t\t\t\t<td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo " </td> 
\t\t\t\t\t\t\t\t<td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array()), "html", null, true);
            echo "  </td> 
\t\t\t\t\t\t\t\t<td>  <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/images/") . $this->getAttribute($context["image"], "path", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array()), "html", null, true);
            echo "\" height=\"200\" width=\"340\" /> </td>
\t\t\t\t\t\t\t\t<td>  <a href=\"\"> Voir </a> |  <a href=\"\"> editer </a> | <a href=\"\"> Supprimer </a> </td> 
  \t\t\t\t\t\t\t</tr> 
\t\t  \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
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
        return "BlogBundle:Admin:image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  70 => 25,  66 => 24,  62 => 23,  59 => 22,  55 => 21,  40 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
