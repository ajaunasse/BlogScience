<?php

/* BlogBundle:Admin:editer.html.twig */
class __TwigTemplate_08cc77cc41d527756a28588137d13443dc4dd4c178091213ce1865721d4a7c69 extends Twig_Template
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
<script type=\"text/javascript\">
\$(document).ready(function() {
  var \$container = \$('div#blog_blogbundle_article_tag');

  // On ajoute un lien pour ajouter une nouvelle catégorie
  var \$lienAjout = \$('<a href=\"#\" id=\"ajouter_tag\" class=\"btn btn-success\">Ajouter un tag</a>');
  \$container.append(\$lienAjout);

  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
  \$lienAjout.click(function(e) {
    \tajouterTag(\$container);
    \te.preventDefault(); // évite qu'un # apparaisse dans l'URL
    \treturn false;
  \t});

  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = \$container.find(':input').length;

  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
  if (index == 0) {
    ajouterTag(\$container);
  } else {
    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
    \$container.children('div').each(function() {
      ajouterLienSuppression(\$(this));
    });
  }

  // La fonction qui ajoute un formulaire Categorie
  function ajouterTag(\$container) {
    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Tag n°' + (index+1))
                                                        .replace(/__name__/g, index));

    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    ajouterLienSuppression(\$prototype);

    // On ajoute le prototype modifié à la fin de la balise <div>
    \$container.append(\$prototype);

    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }

  // La fonction qui ajoute un lien de suppression d'une catégorie
  function ajouterLienSuppression(\$prototype) {
    // Création du lien
    \$lienSuppression = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

    // Ajout du lien
    \$prototype.append(\$lienSuppression);

    // Ajout du listener sur le clic du lien
    \$lienSuppression.click(function(e) {
      \$prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
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
