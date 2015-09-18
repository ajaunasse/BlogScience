<?php

/* BlogBundle:Admin:ajout_categorie.html.twig */
class __TwigTemplate_c2cbba223896ba9c2900baa3898bc75f6cfc99cbd1d099cbccf1a080c397529f extends Twig_Template
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
<div class=\"container\">
\t<h2> Ajouter  une categorie </h2>

\t<form class=\"form-group\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_ajout_categorie");
        echo "\" method=\"post\">
\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

\t\t<input class=\"btn btn-primary\"  type=\"submit\">
\t</form>
</div>
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
        return array (  42 => 9,  38 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
