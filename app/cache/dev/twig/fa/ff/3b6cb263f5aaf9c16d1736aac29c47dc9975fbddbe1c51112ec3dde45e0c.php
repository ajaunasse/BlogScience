<?php

/* BlogBundle:Public:article_layout.html.twig */
class __TwigTemplate_faff3b6cb263f5aaf9c16d1736aac29c47dc9975fbddbe1c51112ec3dde45e0c extends Twig_Template
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
        echo "<div class=\"boxed  sticky  push-down-45\">
\t<div class=\"meta\">
\t\t\t\t<div class=\"categorie\" style=\"background-color : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "color", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_categorie", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "id", array()), "name" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "name", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "name", array()), "html", null, true);
        echo " </a>
\t\t\t\t\t</div>
\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/images/") . $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getImage", array(), "method"), "getPath", array(), "method")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getImage", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "\"  class=\"wp-post-image\"  width=\"748\" height=\"324\"/>

\t\t<div class=\"meta__container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12  col-sm-8\">

\t\t\t\t\t<div class=\"meta__info\">
\t\t\t\t\t\t<span class=\"meta__author\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-calendar\"></span> <time>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d M Y"), "html", null, true);
        echo "</time>
\t\t\t\t\t\t\t </span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12  col-sm-4\">
\t\t\t\t\t<div class=\"meta__comments\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-comment\"></span> &nbsp;
\t\t\t\t\t\t";
        // line 21
        if ((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags"))) {
            // line 22
            echo "\t\t\t\t\t\t\tTags : 
\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_tag", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo " </a>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
 
\t<div class=\"sticky__box\">
\t\t<span class=\"sticky__circle\"></span>
\t\t<span class=\"sticky__circle\"></span>
\t\t<span class=\"sticky__circle\"></span>
\t\t<span class=\"sticky__circle\"></span>
\t</div>
 
\t<div class=\"row\">
\t\t<div class=\"col-xs-10  col-xs-offset-1\">
\t\t\t<div class=\"post-content--front-page\">
\t\t\t\t<h2 class=\"front-page-title\">
\t\t\t\t\t\t<a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_only", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "\"  data-disqus-identifier=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</a>
\t\t\t\t</h2>
\t\t\t\t\t";
        // line 46
        if ((isset($context["description"]) ? $context["description"] : $this->getContext($context, "description"))) {
            // line 47
            echo "\t\t\t\t<p>
\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "description", array()), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t";
        if ((isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu"))) {
            // line 52
            echo "\t\t\t\t\t\t<p> ";
            echo $this->env->getExtension('markdown')->markdown($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array()));
            echo " </p>
\t\t\t\t";
        }
        // line 54
        echo "
\t\t\t</div>
 
\t\t\t\t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_only", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "\"  data-disqus-identifier=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 58
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 59
            echo "\t\t\t\t<div class=\"read-more\">
\t\t\t\t\tLire la suite
\t\t\t\t\t<div class=\"read-more__arrow\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t</a>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Public:article_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 66,  145 => 59,  143 => 58,  135 => 57,  130 => 54,  124 => 52,  121 => 51,  115 => 48,  112 => 47,  110 => 46,  99 => 44,  80 => 27,  77 => 26,  66 => 24,  62 => 23,  59 => 22,  57 => 21,  47 => 14,  34 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
