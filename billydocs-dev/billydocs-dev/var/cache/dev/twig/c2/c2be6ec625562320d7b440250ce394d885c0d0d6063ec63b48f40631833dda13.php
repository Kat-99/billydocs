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

/* user/create.html.twig */
class __TwigTemplate_15e58e6b5620dc596bad91d6fef6710c7f74760ad04463f1eef4ccd973eb712f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Inscription/connexion
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                &nbsp;</div>
            <div class=\"bg-light py-3 px-3\">
                <h1>BILLYDOCS</h1>
                <form action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("log");
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"_lastname\" id=\"email\" class=\"form-control\"
                               placeholder=\"votre email...\"required>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"_password\" id=\"password\" class=\"form-control\"
                               placeholder=\"votre password...\"required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                </form>

                <input type=\"email\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>


            </div>
        </div>
    </div>



















    <div class=\"container md-7 \">
        <div class=\"row d-flex flex-column mx-auto\">
            <div class=\"col-md-6 border border-primary mx-auto\">
                <div class=\"col-12\">
                    <div class=\"col-12 d-block\">
                        <h1 class=\"text-center\">BILLYDOCS</h1>
                        ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form');
        echo "
                    </div>
                    <div class=\"col-12 d-block\">
                        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formname"]) || array_key_exists("formname", $context) ? $context["formname"] : (function () { throw new RuntimeError('Variable "formname" does not exist.', 67, $this->source); })()), 'form');
        echo "
                    </div>
                </div>



                <div class=\"col-md-6 d-inline mx-auto\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfirst"]) || array_key_exists("formfirst", $context) ? $context["formfirst"] : (function () { throw new RuntimeError('Variable "formfirst" does not exist.', 76, $this->source); })()), 'form');
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formlog"]) || array_key_exists("formlog", $context) ? $context["formlog"] : (function () { throw new RuntimeError('Variable "formlog" does not exist.', 79, $this->source); })()), 'form');
        echo "
                        </div>
                    </div>

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
        return "user/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 79,  188 => 76,  176 => 67,  170 => 64,  136 => 33,  121 => 21,  112 => 14,  102 => 13,  91 => 10,  81 => 9,  70 => 6,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{#{% form_theme form 'bootstrap_4_layout.html.twig' %}#}

{% block title %}
    Inscription/connexion
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
{% endblock %}

{% block  body %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                &nbsp;</div>
            <div class=\"bg-light py-3 px-3\">
                <h1>BILLYDOCS</h1>
                <form action=\"{{ path('log') }}\" method=\"post\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"_lastname\" id=\"email\" class=\"form-control\"
                               placeholder=\"votre email...\"required>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"_password\" id=\"password\" class=\"form-control\"
                               placeholder=\"votre password...\"required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                </form>

                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>


            </div>
        </div>
    </div>



















    <div class=\"container md-7 \">
        <div class=\"row d-flex flex-column mx-auto\">
            <div class=\"col-md-6 border border-primary mx-auto\">
                <div class=\"col-12\">
                    <div class=\"col-12 d-block\">
                        <h1 class=\"text-center\">BILLYDOCS</h1>
                        {{ form(form) }}
                    </div>
                    <div class=\"col-12 d-block\">
                        {{ form(formname) }}
                    </div>
                </div>



                <div class=\"col-md-6 d-inline mx-auto\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            {{ form(formfirst) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form(formlog) }}
                        </div>
                    </div>

                </div>
            </div>





        </div>
    </div>

{% endblock %}
", "user/create.html.twig", "C:\\xampp\\htdocs\\billydocs-master\\billydocs-dev\\billydocs-dev\\templates\\user\\create.html.twig");
    }
}
