<?php

/* BlogBundle:Public:index.html.twig */
class __TwigTemplate_aec33d38b8268cfb38fc34868b491ebf17258f69cc8b2f2a0902bf99e8949c4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle:Public:index.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('menu', $context, $blocks);
        // line 6
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-12  col-md-8\">
    \t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "    \t\t";
            $this->loadTemplate("BlogBundle:Public:article_layout.html.twig", "BlogBundle:Public:index.html.twig", 10)->display(array_merge($context, array("link" => true, "contenu" => false, "description" => true, "tags" => true)));
            // line 11
            echo "    \t<hr>
    \t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      <div class=\"pagination\">
        <ul>
          ";
        // line 15
        if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1) && ((isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")) > 1))) {
            // line 16
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_homepage", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
            echo "\">Suivant</a>
            ";
        } elseif (((        // line 17
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1) && ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))))) {
            // line 18
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_homepage", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
            echo "\"> Suivant</a>
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_homepage", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
            echo "\"> <p>Précédent</p> </a>
            ";
        } elseif (((        // line 20
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))) && ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != 1))) {
            // line 21
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_homepage", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
            echo "\"><p>Précédent</p></a>
          ";
        }
        // line 23
        echo "        </ul>
      </div>
   </div>
   <div class=\"col-xs-12  col-md-4 col-sm-12\">
    <div class=\"sidebar  boxed  push-down-30\">
      <div class=\"col-xs-10  col-xs-offset-1\">
        <div class=\"row\">
          <div class=\"widget-posts  push-down-30\">
            <h6> Article Populaires </h6>
            <hr>
              ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popularArticles"]) ? $context["popularArticles"] : $this->getContext($context, "popularArticles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["popArticle"]) {
            // line 34
            echo "
                ";
            // line 35
            $this->loadTemplate("BlogBundle:Public:sidebar_popular_article.html.twig", "BlogBundle:Public:index.html.twig", 35)->display($context);
            // line 36
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>
      </div>
      </div>
  </div>
</div>

";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo " ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'blogscience';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Public:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 46,  172 => 45,  164 => 5,  154 => 38,  139 => 36,  137 => 35,  134 => 34,  117 => 33,  105 => 23,  99 => 21,  97 => 20,  93 => 19,  88 => 18,  86 => 17,  81 => 16,  79 => 15,  75 => 13,  60 => 11,  57 => 10,  40 => 9,  35 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
