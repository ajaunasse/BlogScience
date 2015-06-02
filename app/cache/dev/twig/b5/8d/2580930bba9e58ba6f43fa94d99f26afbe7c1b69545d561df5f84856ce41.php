<?php

/* ::admin_base.html.twig */
class __TwigTemplate_b58d2580930bba9e58ba6f43fa94d99f26afbe7c1b69545d561df5f84856ce41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::admin_base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Administration 

";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo " \">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style_admin.css"), "html", null, true);
        echo " \">
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("Blog_admin_home");
        echo "\">Administration</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("Blog_admin_home");
        echo "\"> Gestion des Articles </a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_index_categorie");
        echo "\"> Gestion des catégories </a></li>
           \t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_index_image");
        echo "\"> Gestion des images </a></li>       
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"> Profile </a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"> Deconnexion</a></li>
            
            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\"> Retour au site </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "::admin_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  65 => 16,  59 => 12,  56 => 11,  50 => 9,  46 => 8,  43 => 7,  40 => 6,  30 => 3,  11 => 1,);
    }
}
