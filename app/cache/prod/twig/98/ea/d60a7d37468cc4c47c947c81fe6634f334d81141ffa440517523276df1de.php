<?php

/* BlogBundle:Admin:ajout_categorie.html.twig */
class __TwigTemplate_98ead60a7d37468cc4c47c947c81fe6634f334d81141ffa440517523276df1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "BlogBundle:Admin:ajout_categorie.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<h1> Ajouter  une categorie </h1>

\t<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_ajout_categorie");
        echo "\" method=\"post\">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

\t\t<input type=\"submit\">
\t</form>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Admin:ajout_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  37 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
