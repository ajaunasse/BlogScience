<?php

/* BlogBundle:Public:sidebar_popular_article.html.twig */
class __TwigTemplate_022a12d0342e09ab49adf63b51f2d32e08920fd90d31291ee8a4ef5770ef5734 extends Twig_Template
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
        echo "<div class=\"tab-pane  fade active in\" id=\"popular-posts\">
\t<div class=\"push-down-15\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/images/") . $this->getAttribute($this->getAttribute((isset($context["popArticle"]) ? $context["popArticle"] : $this->getContext($context, "popArticle")), "getImage", array(), "method"), "getPath", array(), "method")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["popArticle"]) ? $context["popArticle"] : $this->getContext($context, "popArticle")), "getImage", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "\"  width=\"90\" height=\"60\"/>
\t\t<h5>
\t\t\t<a href=\"single-post.html\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["popArticle"]) ? $context["popArticle"] : $this->getContext($context, "popArticle")), "titre", array()), "html", null, true);
        echo "</a> (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["popArticle"]) ? $context["popArticle"] : $this->getContext($context, "popArticle")), "nbVues", array()), "html", null, true);
        echo " vues)
\t\t</h5>
\t\t<span class=\"widget-posts__time\">";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["popArticle"]) ? $context["popArticle"] : $this->getContext($context, "popArticle")), "date", array()), "d M Y"), "html", null, true);
        echo "</span>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Public:sidebar_popular_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  30 => 5,  23 => 3,  19 => 1,);
    }
}
