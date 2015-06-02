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
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
\t<li>
\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_index_categorie");
        echo "\"> Gestion des catégories </a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("Blog_admin_home");
        echo "\"> Gestion des Articles </a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_index_image");
        echo "\"> Gestion des images </a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\"> Retour au site </a>
\t</li>
</ul>
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
        return array (  64 => 18,  58 => 15,  52 => 12,  46 => 9,  42 => 7,  39 => 6,  29 => 3,  11 => 1,);
    }
}
