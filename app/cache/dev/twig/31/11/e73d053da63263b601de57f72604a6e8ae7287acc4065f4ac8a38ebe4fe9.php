<?php

/* BlogBundle:Admin:editer.html.twig */
class __TwigTemplate_3111e73d053da63263b601de57f72604a6e8ae7287acc4065f4ac8a38ebe4fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "BlogBundle:Admin:editer.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mdeditor.css"), "html", null, true);
        echo " \">
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"container\">
\t\t<h1> Editer  un article </h1>

\t<form class=\"form-group\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_editer_article", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\">
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

\t\t<input class=\"btn btn-primary\" type=\"submit\">
\t</form>

";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mdeditor.js"), "html", null, true);
        echo "\"></script>
<script>
  var md = new MdEditor('#blog_blogbundle_article_contenu', {
    uploader: 'http://local.dev/Lab/MdEditor/app/upload.php',
    preview: true,
  });
</script>

 ";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Admin:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  70 => 19,  67 => 18,  57 => 12,  53 => 11,  46 => 7,  43 => 6,  37 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
