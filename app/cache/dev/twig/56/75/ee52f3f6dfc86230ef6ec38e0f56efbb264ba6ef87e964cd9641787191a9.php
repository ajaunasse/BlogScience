<?php

/* BlogBundle:Admin:editer_categorie.html.twig */
class __TwigTemplate_5675ee52f3f6dfc86230ef6ec38e0f56efbb264ba6ef87e964cd9641787191a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "BlogBundle:Admin:editer_categorie.html.twig", 1);
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
<div class=\"container\">
\t<h2> Editer  une categorie </h2>

\t<form class=\"form-group\"  action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_editer_categorie", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\">
\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

\t\t<input class=\"btn btn-primary\" type=\"submit\">
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Admin:editer_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  38 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
