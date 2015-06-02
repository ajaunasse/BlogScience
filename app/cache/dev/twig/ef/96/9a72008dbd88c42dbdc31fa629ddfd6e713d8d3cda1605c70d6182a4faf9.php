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
        echo "\t";
        $this->loadTemplate("BlogBundle:Public:article_layout.html.twig", "BlogBundle:Public:only.html.twig", 4)->display(array_merge($context, array("link" => false, "contenu" => true, "description" => false)));
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "            <div id=\"disqus_thread\"></div>
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
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
