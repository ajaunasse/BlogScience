<?php

/* BlogBundle:Public:menu.html.twig */
class __TwigTemplate_484521475bda767426314119ecc0f2a3f7dfe113b8a230aed644ee7893d5b9dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"header  push-down-45\">
\t<div class=\"container\">
\t\t<div class=\"logo  pull-left\">
\t\t\t<a href=\"index.html\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"352\" height=\"140\">
\t\t\t</a>
\t\t</div>
\t\t<div class=\"navbar-header\">
\t\t\t<button id=\"hamburger\" type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#readable-navbar-collapse\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t</div>
\t\t<nav class=\"navbar  navbar-default\" role=\"navigation\">
\t\t\t<div  class=\"collapse  navbar-collapse\" id=\"readable-navbar-collapse\">
\t\t\t\t<ul class=\"navigation\">
\t\t\t\t\t<li class=\"dropdown  active\">
\t\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Accueil</a> <br>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 23
            echo "\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_categorie", array("id" => $this->getAttribute($context["categorie"], "id", array()), "name" => $this->getAttribute($context["categorie"], "name", array()))), "html", null, true);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            echo " </a> <br>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t</ul>
\t\t\t</div> 
\t\t</nav>
\t</div>
</header>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Public:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  55 => 24,  52 => 23,  48 => 22,  43 => 20,  25 => 5,  19 => 1,);
    }
}
