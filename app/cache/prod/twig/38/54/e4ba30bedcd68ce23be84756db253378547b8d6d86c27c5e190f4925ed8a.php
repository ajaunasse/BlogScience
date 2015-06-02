<?php

/* BlogBundle:Admin:upload_image.html.twig */
class __TwigTemplate_3854e4ba30bedcd68ce23be84756db253378547b8d6d86c27c5e190f4925ed8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "BlogBundle:Admin:upload_image.html.twig", 1);
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
\t<h1> Uploader une image </h1>

\t<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_ajouter_image");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
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
        return "BlogBundle:Admin:upload_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  37 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
