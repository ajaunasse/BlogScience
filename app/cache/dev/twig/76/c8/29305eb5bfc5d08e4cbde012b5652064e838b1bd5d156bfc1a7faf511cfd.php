<?php

/* BlogUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_76c829305eb5bfc5d08e4cbde012b5652064e838b1bd5d156bfc1a7faf511cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"container\">
<h2> Editer profil </h2>
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <br>
    <div>
        <input  class=\"btn btn-primary\" type=\"submit\"  />
    </div>
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "BlogUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 4,  19 => 2,);
    }
}
