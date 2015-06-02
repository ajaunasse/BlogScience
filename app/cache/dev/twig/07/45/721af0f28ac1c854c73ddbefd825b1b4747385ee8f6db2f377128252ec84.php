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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo " </h3>
\t\t\t<time>";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d M Y"), "html", null, true);
        echo "</time>
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_categorie", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "id", array()), "name" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "name", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categorie", array()), "name", array()), "html", null, true);
        echo " </a>
\t\t\t</P>
\t\t</header>

\t\t <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/images/") . $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getImage", array(), "method"), "getPath", array(), "method")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getImage", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "\" height=\"392\" width=\"590\"/>
\t\t";
        // line 11
        if ((isset($context["description"]) ? $context["description"] : $this->getContext($context, "description"))) {
            // line 12
            echo "\t\t<p>
\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "description", array()), "html", null, true);
            echo "
\t\t</p>
\t\t";
        }
        // line 16
        echo "\t\t";
        if ((isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu"))) {
            // line 17
            echo "\t\t<div class=\"content\">


\t\t\t<p> ";
            // line 20
            echo $this->env->getExtension('markdown')->markdown($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array()));
            echo " </p>
\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t<div>
\t\t\t";
        // line 24
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 25
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_only", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array()), "html", null, true);
            echo "\"  data-disqus-identifier=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
            echo "\"> Lire la suite</a>
\t\t\t<span class=\"disqus-comment-count\" data-disqus-url=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_only", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
            echo "\">  </span>
\t\t\t<span class=\"disqus-comment-count\" data-disqus-identifier=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
            echo "\"> </span>
\t\t\t";
        }
        // line 29
        echo "\t\t</div>
\t</article>
";
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
        return array (  95 => 29,  90 => 27,  86 => 26,  77 => 25,  75 => 24,  72 => 23,  66 => 20,  61 => 17,  58 => 16,  52 => 13,  49 => 12,  47 => 11,  41 => 10,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
