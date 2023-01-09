<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* post/show.html.twig */
class __TwigTemplate_425728a0d507a8784b74e16cba44ad72 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Post Show";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .post{
        border-radius: 10px;
        box-shadow: 0 10px 16px rgba(0,0,0,.25);
        margin-bottom: 40px;
        padding: 40px;
        margin-top: 40px;
    }
    img{
        border-radius: 10px;
    }
</style>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "    <div class=\"alert alert-success text-center\">
        ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "<section class=\"post\">
  <div class=\"card mb-3\">
  <h4 class=\"card-header\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 25, $this->source); })()), "intitule", [], "any", false, false, false, 25), "html", null, true);
        echo "</font></font></h4>
  <div class=\"card-body\">
    <h5 class=\"card-title\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Localisation: ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "localisation", [], "any", false, false, false, 27), "html", null, true);
        echo "</font></font></h5>
    <img src=\"https://picsum.photos/300/200?grayscale\" alt=\"\" class=\"mt-3 mb-3\">
    <h6 class=\"card-subtitle text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Type : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 29, $this->source); })()), "descriptif", [], "any", false, false, false, 29), "html", null, true);
        echo "</font></font></h6>
  </div>
  <div class=\"card-body\">
    <p class=\"card-text\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Descritpion : ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "descriptif", [], "any", false, false, false, 32), "html", null, true);
        echo "</font></font></p>
  </div>
  <ul class=\"list-group list-group-flush\">
    <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">surface: ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "surface", [], "any", false, false, false, 35), "html", null, true);
        echo " Ha</font></font></li>
    <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prix: ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), "html", null, true);
        echo " €</font></font></li>
  </ul>
  <div class=\"card-footer text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">
    <div class=\"card-body\">
    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\" class=\"card-link\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Ajout favoris</font></font></a>
  </div>
  </font></font></div>
  </div>    
  </article>
</section>

<hr>
<h2>Add Comment</h2>
";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 49, $this->source); })()), 'form_start');
        echo "
    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 50, $this->source); })()), 'widget');
        echo "
        <button class=\"btn btn-success mt-5\">Add a Comment</button>
    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 52,  174 => 50,  170 => 49,  158 => 40,  151 => 36,  147 => 35,  141 => 32,  135 => 29,  130 => 27,  125 => 25,  121 => 23,  112 => 20,  109 => 19,  105 => 18,  91 => 6,  81 => 5,  62 => 4,  51 => 2,  49 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
{% form_theme commentForm'bootstrap_4_layout.html.twig'%}
{% block title %}Post Show{% endblock %}
{% block body %}
<style>
    .post{
        border-radius: 10px;
        box-shadow: 0 10px 16px rgba(0,0,0,.25);
        margin-bottom: 40px;
        padding: 40px;
        margin-top: 40px;
    }
    img{
        border-radius: 10px;
    }
</style>
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success text-center\">
        {{ message }}
    </div>
{% endfor %}
<section class=\"post\">
  <div class=\"card mb-3\">
  <h4 class=\"card-header\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{post.intitule}}</font></font></h4>
  <div class=\"card-body\">
    <h5 class=\"card-title\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Localisation: {{post.localisation}}</font></font></h5>
    <img src=\"https://picsum.photos/300/200?grayscale\" alt=\"\" class=\"mt-3 mb-3\">
    <h6 class=\"card-subtitle text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Type : {{post.descriptif}}</font></font></h6>
  </div>
  <div class=\"card-body\">
    <p class=\"card-text\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Descritpion : {{post.descriptif}}</font></font></p>
  </div>
  <ul class=\"list-group list-group-flush\">
    <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">surface: {{post.surface}} Ha</font></font></li>
    <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prix: {{post.prix}} €</font></font></li>
  </ul>
  <div class=\"card-footer text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">
    <div class=\"card-body\">
    <a href=\"{{ path('favoris_add' , {'id' : post.id})}}\" class=\"card-link\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Ajout favoris</font></font></a>
  </div>
  </font></font></div>
  </div>    
  </article>
</section>

<hr>
<h2>Add Comment</h2>
{{form_start(commentForm)}}
    {{form_widget(commentForm)}}
        <button class=\"btn btn-success mt-5\">Add a Comment</button>
    {{ form_end(commentForm)}}
{% endblock%}", "post/show.html.twig", "/Users/magalseck/Downloads/PWL3/templates/post/show.html.twig");
    }
}
