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

/* favoris/index.html.twig */
class __TwigTemplate_5860085f9c5ad807b0de2195d5cebeea extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favoris/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favoris/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "favoris/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello FavorisController!";
        
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
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .form-group{margin-bottom:20px}
    .btn-sm{margin-top:5px; margin-left:300px;}
</style>

<div class=\"example-wrapper\">

    ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 15, $this->source); })())) > 0)) {
            // line 16
            echo "    <h3>Vos favoris </font></font><span class=\"badge bg-primary rounded-pill\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">  ";
            echo twig_escape_filter($this->env, (isset($context["nb_biens_favoris"]) || array_key_exists("nb_biens_favoris", $context) ? $context["nb_biens_favoris"] : (function () { throw new RuntimeError('Variable "nb_biens_favoris" does not exist.', 16, $this->source); })()), "html", null, true);
            echo " </font></font></span></h3>
    <div class=\"form-group\">
      <label for=\"exampleInputEmail1\" class=\"form-label mt-4\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Se partager par mail</font></font></label>
      <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Entrez l'e-mail\">
      <small id=\"emailHelp\" class=\"form-text text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">La liste des biens ci-dessous vous sera transférer par mail.</font></font></small>
      <button type=\"button\" class=\"btn btn-primary btn-sm\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Envoyer</font></font></button>
    </div>
    
    
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo " 
    <div class=\"card mb-3\">
    <h4 class=\"card-header\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 27), "intitule", [], "any", false, false, false, 27), "html", null, true);
                echo "</font></font></h4>
    <div class=\"card-body\">
        <h5 class=\"card-title\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Localisation: ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 29), "localisation", [], "any", false, false, false, 29), "html", null, true);
                echo "</font></font></h5>
        <h6 class=\"card-subtitle text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Type : ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 30), "descriptif", [], "any", false, false, false, 30), "html", null, true);
                echo "</font></font></h6>
    </div>
    <div class=\"card-body\">
        <p class=\"card-text\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Descritpion : ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 33), "descriptif", [], "any", false, false, false, 33), "html", null, true);
                echo "</font></font></p>
    </div>
    <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">surface: ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 36), "surface", [], "any", false, false, false, 36), "html", null, true);
                echo " Ha</font></font></li>
        <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prix: ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 37), "prix", [], "any", false, false, false, 37), "html", null, true);
                echo " €</font></font></li>
    </ul>
    <div class=\"card-footer text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">
        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">Rétiré des favoris<i class=\"fas fa-trash\"></i></a>
    </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "   
    ";
        } else {
            // line 45
            echo "        <h3>Votre liste de biens favoris est vide !!!</h3>
    ";
        }
        // line 47
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "favoris/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 47,  166 => 45,  162 => 43,  152 => 40,  146 => 37,  142 => 36,  136 => 33,  130 => 30,  126 => 29,  121 => 27,  114 => 25,  101 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FavorisController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .form-group{margin-bottom:20px}
    .btn-sm{margin-top:5px; margin-left:300px;}
</style>

<div class=\"example-wrapper\">

    {% if items | length > 0 %}
    <h3>Vos favoris </font></font><span class=\"badge bg-primary rounded-pill\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">  {{ nb_biens_favoris }} </font></font></span></h3>
    <div class=\"form-group\">
      <label for=\"exampleInputEmail1\" class=\"form-label mt-4\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Se partager par mail</font></font></label>
      <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Entrez l'e-mail\">
      <small id=\"emailHelp\" class=\"form-text text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">La liste des biens ci-dessous vous sera transférer par mail.</font></font></small>
      <button type=\"button\" class=\"btn btn-primary btn-sm\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Envoyer</font></font></button>
    </div>
    
    
    {% for item in items %} 
    <div class=\"card mb-3\">
    <h4 class=\"card-header\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{item.post.intitule}}</font></font></h4>
    <div class=\"card-body\">
        <h5 class=\"card-title\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Localisation: {{item.post.localisation}}</font></font></h5>
        <h6 class=\"card-subtitle text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Type : {{item.post.descriptif}}</font></font></h6>
    </div>
    <div class=\"card-body\">
        <p class=\"card-text\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Descritpion : {{item.post.descriptif}}</font></font></p>
    </div>
    <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">surface: {{item.post.surface}} Ha</font></font></li>
        <li class=\"list-group-item\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prix: {{item.post.prix}} €</font></font></li>
    </ul>
    <div class=\"card-footer text-muted\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">
        <a href=\"{{ path('favoris_remove', {'id': item.post.id})}}\" class=\"btn btn-danger btn-sm\">Rétiré des favoris<i class=\"fas fa-trash\"></i></a>
    </div>
    </div>
    {% endfor %}   
    {% else %}
        <h3>Votre liste de biens favoris est vide !!!</h3>
    {% endif %}
</div>
{% endblock %}
", "favoris/index.html.twig", "/Users/magalseck/Downloads/PWL3/templates/favoris/index.html.twig");
    }
}
