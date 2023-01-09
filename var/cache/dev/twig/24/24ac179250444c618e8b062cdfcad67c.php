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
class __TwigTemplate_23c2b6d22ff22a7f66321c177da7ca50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Détails bien";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "    <div class=\"alert alert-success text-center\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "<section class=\"post\">
  <div class=\"card mb-3\">
  <h4 class=\"card-header\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "intitule", [], "any", false, false, false, 23), "html", null, true);
        echo "</font></font></h4>
  <div class=\"card-body\">
    <h5 class=\"card-title\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Localisation: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 25, $this->source); })()), "localisation", [], "any", false, false, false, 25), "html", null, true);
        echo "</font></font></h5>
    <h6 class=\"card-subtitle text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Type : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "descriptif", [], "any", false, false, false, 26), "html", null, true);
        echo "</font></font></h6>
  </div>
  <div class=\"card-body\">
    <p class=\"card-text\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Descritpion : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 29, $this->source); })()), "descriptif", [], "any", false, false, false, 29), "html", null, true);
        echo "</font></font></p>
  </div>
  <ul class=\"list-group list-group-flush\">
    <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">surface: ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "surface", [], "any", false, false, false, 32), "html", null, true);
        echo " Ha</font></font></li>
    <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prix: ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 33, $this->source); })()), "prix", [], "any", false, false, false, 33), "html", null, true);
        echo " €</font></font></li>
  </ul>
  <div class=\"card-footer text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">
    <div class=\"card-body\">
    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\" class=\"card-link\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Ajout favoris</font></font></a>
  </div>
  </font></font></div>
  </div>    
  </article>
</section>

<hr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  155 => 37,  148 => 33,  144 => 32,  138 => 29,  132 => 26,  128 => 25,  123 => 23,  119 => 21,  110 => 18,  107 => 17,  103 => 16,  89 => 4,  79 => 3,  60 => 2,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block title %}Détails bien{% endblock %}
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
{% endblock%}", "post/show.html.twig", "C:\\Users\\KOMENAN\\Desktop\\MySafer\\mysafer\\templates\\post\\show.html.twig");
    }
}
