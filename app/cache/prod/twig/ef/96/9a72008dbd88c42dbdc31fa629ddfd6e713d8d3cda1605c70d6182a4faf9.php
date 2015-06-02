<?php

/* BlogBundle:Public:only.html.twig */
class __TwigTemplate_ef969a72008dbd88c42dbdc31fa629ddfd6e713d8d3cda1605c70d6182a4faf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle:Public:only.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->loadTemplate("BlogBundle:Public:article_layout.html.twig", "BlogBundle:Public:only.html.twig", 4)->display(array_merge($context, array("link" => false, "contenu" => true, "description" => false)));
    }

    public function getTemplateName()
    {
        return "BlogBundle:Public:only.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
