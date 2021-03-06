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

/* recruiter/toApply.html.twig */
class __TwigTemplate_e682f8c027f4504d7da937f0d7e4f1e573e8f1a9a0e15f2c639cbacbf4eebdd6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruiter/toApply.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recruiter/toApply.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Job candidats";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Liste des annonces pour lesquelles les candidats ont postul??</h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 7
            echo "
        <p>Pour l'annonce de \"<strong>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</strong>\", qui d??but en date du
            <strong>";
            // line 9
            ((twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 9)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 9), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</strong>. </p>
        ";
            // line 10
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["job"], "candidates", [], "any", false, false, false, 10))) {
                // line 11
                echo "            <div>
                <p><strong>Aucun candidat n'a postul?? ?? ce job pour le moment.</strong></p>
            </div>
        ";
            }
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["job"], "candidates", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
                // line 16
                echo "            <ul>
                <li>
                    Prenom : ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "firstName", [], "any", false, false, false, 18), "html", null, true);
                echo "
                </li>
                <li>
                    Nom : ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "name", [], "any", false, false, false, 21), "html", null, true);
                echo "
                </li>
                <li>
                    CV : <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["candidate"], "cv", [], "any", false, false, false, 24))), "html", null, true);
                echo "\" target=\"_blank\">Afficher</a>
                </li>
            </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruiter/toApply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 30,  131 => 28,  121 => 24,  115 => 21,  109 => 18,  105 => 16,  100 => 15,  94 => 11,  92 => 10,  88 => 9,  84 => 8,  81 => 7,  77 => 6,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Job candidats{% endblock %}
{% block body %}

    <h1>Liste des annonces pour lesquelles les candidats ont postul??</h1>
    {% for job in jobs %}

        <p>Pour l'annonce de \"<strong>{{ job.title }}</strong>\", qui d??but en date du
            <strong>{{ job.startDate ? job.startDate|date('d-m-Y') : '' }}</strong>. </p>
        {% if job.candidates is empty %}
            <div>
                <p><strong>Aucun candidat n'a postul?? ?? ce job pour le moment.</strong></p>
            </div>
        {% endif %}
        {% for candidate in job.candidates %}
            <ul>
                <li>
                    Prenom : {{ candidate.firstName }}
                </li>
                <li>
                    Nom : {{ candidate.name }}
                </li>
                <li>
                    CV : <a href=\"{{ asset('uploads/' ~ candidate.cv) }}\" target=\"_blank\">Afficher</a>
                </li>
            </ul>
        {% endfor %}

    {% endfor %}


{% endblock %}", "recruiter/toApply.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/recruiter/toApply.html.twig");
    }
}
