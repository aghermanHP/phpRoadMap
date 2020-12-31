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

/* job/show.html.twig */
class __TwigTemplate_a937b665aca1fd9cd722cbc1970960bab70ed87f873a1c34a6ca915b0cc8d25c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job</h1>

    <div class=\"media\" style=\"margin-top: 60px;\">
        <div class=\"media-body\">
            <div class=\"row\">
                <div class=\"col-sm-10\">
                    <h3 class=\"media-heading\"><strong>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 10, $this->source); })()), "company", [], "any", false, false, false, 10), "html", null, true);
        echo "</strong> <i>(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 10, $this->source); })()), "location", [], "any", false, false, false, 10), "html", null, true);
        echo ")</i></h3>
                </div>

                <div class=\"col-sm-2\">
                    <i class=\"pull-right\">posted on ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 14, $this->source); })()), "createdat", [], "any", false, false, false, 14), "m/d/Y"), "html", null, true);
        echo "</i>
                </div>
            </div>

            <p>
                <strong>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 19, $this->source); })()), "position", [], "any", false, false, false, 19), "html", null, true);
        echo "</strong>
                <small> - <i>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20), "html", null, true);
        echo "</i></small>
            </p>

            <p>";
        // line 23
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true));
        echo "</p>

            <p style=\"margin-top: 40px;\">
                <strong>How to apply?</strong>
            </p>

            <p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 29, $this->source); })()), "howToApply", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>

            <div class=\"row\">
                <div class=\"col-sm-12 text-right\">
                    <a class=\"btn btn-default\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.list");
        echo "\">
                        <span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>
                        Back to list
                    </a>

                        <a class=\"btn btn-primary\" href=\"#\">
                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                        Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  112 => 29,  103 => 23,  97 => 20,  93 => 19,  85 => 14,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Job</h1>

    <div class=\"media\" style=\"margin-top: 60px;\">
        <div class=\"media-body\">
            <div class=\"row\">
                <div class=\"col-sm-10\">
                    <h3 class=\"media-heading\"><strong>{{ job.company }}</strong> <i>({{ job.location }})</i></h3>
                </div>

                <div class=\"col-sm-2\">
                    <i class=\"pull-right\">posted on {{ job.createdat|date('m/d/Y') }}</i>
                </div>
            </div>

            <p>
                <strong>{{ job.position }}</strong>
                <small> - <i>{{ job.type }}</i></small>
            </p>

            <p>{{ job.description|nl2br }}</p>

            <p style=\"margin-top: 40px;\">
                <strong>How to apply?</strong>
            </p>

            <p>{{ job.howToApply }}</p>

            <div class=\"row\">
                <div class=\"col-sm-12 text-right\">
                    <a class=\"btn btn-default\" href=\"{{ path('job.list') }}\">
                        <span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>
                        Back to list
                    </a>

                        <a class=\"btn btn-primary\" href=\"#\">
                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                        Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "job/show.html.twig", "/application/templates/job/show.html.twig");
    }
}
