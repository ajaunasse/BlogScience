<?php

/* BlogBundle:Public:article_layout.html.twig */
class __TwigTemplate_0745721af0f28ac1c854c73ddbefd825b1b4747385ee8f6db2f377128252ec84 extends Twig_Template
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
        echo "\t<article>
\t\t<header>
\t\t\t<h3> ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "titre", array()), "html", null, true);
        echo " </h3>
\t\t\t<time>";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "date", array()), "d M Y"), "html", null, true);
        echo "</time>
\t\t</header>

\t\t <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/images/") . $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "getImage", array(), "method"), "getPath", array(), "method")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "getImage", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "\" height=\"392\" width=\"590\"/>
\t\t";
        // line 8
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 9
            echo "\t\t<p>
\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "description", array()), "html", null, true);
            echo "
\t\t</p>
\t\t";
        }
        // line 13
        echo "\t\t<p> Categorie : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "categorie", array()), "name", array()), "html", null, true);
        echo " </p>


\t\t 
\t\t";
        // line 17
        if ((isset($context["contenu"]) ? $context["contenu"] : null)) {
            // line 18
            echo "\t\t<div class=\"content\">


\t\t\t<p> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "contenu", array()), "html", null, true);
            echo " </p>
\t\t</div>
\t\t";
        }
        // line 24
        echo "\t\t<div>
\t\t\t";
        // line 25
        if ((isset($context["link"]) ? $context["link"] : null)) {
            // line 26
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_only", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "contenu", array()), "html", null, true);
            echo "\"> Lire la suite</a>
\t\t\t";
        }
        // line 28
        echo "\t\t</div>
\t</article>";
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
        return array (  84 => 28,  76 => 26,  74 => 25,  71 => 24,  65 => 21,  60 => 18,  58 => 17,  50 => 13,  44 => 10,  41 => 9,  39 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
