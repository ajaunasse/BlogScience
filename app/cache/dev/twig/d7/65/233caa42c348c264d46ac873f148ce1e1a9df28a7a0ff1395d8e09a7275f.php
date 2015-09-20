<?php

/* BlogBundle:Public:only.html.twig */
class __TwigTemplate_d765233caa42c348c264d46ac873f148ce1e1a9df28a7a0ff1395d8e09a7275f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle:Public:only.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'javascripts' => array($this, 'block_javascripts'),
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
        $this->displayBlock('menu', $context, $blocks);
        // line 5
        echo "<div class=\"container\">
<div class=\"row\">
     <div class=\"col-xs-12 col-md-12\">
\t";
        // line 8
        $this->loadTemplate("BlogBundle:Public:article_layout.html.twig", "BlogBundle:Public:only.html.twig", 8)->display(array_merge($context, array("link" => false, "contenu" => true, "description" => false, "tags" => true)));
        // line 9
        echo "    </div>
</div>
</div>
";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo " ";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <div id=\"disqus_thread\"></div>
            <script type=\"text/javascript\">
                /* * * CONFIGURATION VARIABLES * * */
                var disqus_shortname = 'blogscience';
                
                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\" rel=\"nofollow\">comments powered by Disqus.</a></noscript>
";
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
        return array (  60 => 15,  57 => 14,  49 => 4,  42 => 9,  40 => 8,  35 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
