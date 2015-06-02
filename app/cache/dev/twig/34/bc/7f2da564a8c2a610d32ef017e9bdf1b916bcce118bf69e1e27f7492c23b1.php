<?php

/* BlogUserBundle::layout.html.twig */
class __TwigTemplate_34bc7f2da564a8c2a610d32ef017e9bdf1b916bcce118bf69e1e27f7492c23b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "BlogUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Blog_admin_home");
        echo "\">Administration</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("Blog_admin_home");
        echo "\"> Gestion des Articles </a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_index_categorie");
        echo "\"> Gestion des catégories </a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_index_image");
        echo "\"> Gestion des images </a></li>       
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"> Profile </a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"> Deconnexion</a></li>
            
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\"> Retour au site </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
   

        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 24
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        <div>
            ";
        // line 32
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "        </div>
";
    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 33
        echo "            ";
    }

    public function getTemplateName()
    {
        return "BlogUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  115 => 32,  110 => 34,  108 => 32,  104 => 30,  98 => 29,  89 => 26,  84 => 25,  79 => 24,  75 => 23,  65 => 16,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
