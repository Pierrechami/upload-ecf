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

/* home_page/accueil.html.twig */
class __TwigTemplate_a650bb4dc87d58a4f31275997f579bcaf7cb12b556409c520eb2f59674b83b9d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h1> R??sultat de recherche pour :<u> <b> ";
        echo twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</b></u></h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Description du Poste</th>
            <th>Lieu</th>
            <th>Type de contrat</th>
            <th>date de d??but</th>
            <th>date de fin</th>
            <th>Nombre d'heures</th>
            <th>Salaire Mensuel</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 25
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["job"], "isAccepted", [], "any", false, false, false, 25), true))) {
                // line 26
                echo "                <tr>
                    <td><strong>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 27), "html", null, true);
                echo "</strong></td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "place", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "typeContrat", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                    <td>";
                // line 31
                ((twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 31), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>";
                // line 32
                ((twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 32), "d-m-Y"), "html", null, true))) : (print ("Pas de date de fin de contrat")));
                echo "</td>
                    <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "time", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "salary", [], "any", false, false, false, 34), "html", null, true);
                echo " ???</td>
                </tr>
            ";
            }
            // line 37
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app");
        echo "\" class=\"float-end\">Retour ?? la liste</a>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home_page/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 40,  147 => 38,  141 => 37,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  104 => 26,  101 => 25,  97 => 24,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ search }}
{% endblock %}

{% block body %}
<h1> R??sultat de recherche pour :<u> <b> {{ search }}</b></u></h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Description du Poste</th>
            <th>Lieu</th>
            <th>Type de contrat</th>
            <th>date de d??but</th>
            <th>date de fin</th>
            <th>Nombre d'heures</th>
            <th>Salaire Mensuel</th>
        </tr>
        </thead>
        <tbody>
        {% for job in jobs %}
            {% if job.isAccepted == true %}
                <tr>
                    <td><strong>{{ job.title }}</strong></td>
                    <td>{{ job.description }}</td>
                    <td>{{ job.place }}</td>
                    <td>{{ job.typeContrat }}</td>
                    <td>{{ job.startDate ? job.startDate|date('d-m-Y') : '' }}</td>
                    <td>{{ job.endDate ? job.endDate|date('d-m-Y') : 'Pas de date de fin de contrat' }}</td>
                    <td>{{ job.time }}</td>
                    <td>{{ job.salary }} ???</td>
                </tr>
            {% endif %}
        {% endfor %}
        </tbody>
    </table>
    <a href=\"{{ path('app') }}\" class=\"float-end\">Retour ?? la liste</a>


    {% endblock %}



", "home_page/accueil.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/home_page/accueil.html.twig");
    }
}
