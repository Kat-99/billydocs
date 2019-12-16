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

/* components/_params.html.twig */
class __TwigTemplate_3d18c037daeef462c815aa6ad347d0a95cfe18adc7a4a74cfc134756c357fd6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_params.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_params.html.twig"));

        // line 1
        echo "<div class=\"fixed-plugin\">
    <div class=\"dropdown toggle\">
        <a href=\"#\" data-toggle=\"dropdown\">
            <i class=\"fa fa-cog fa-2x\"> </i>
        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 8
        echo "
            ";
        // line 10
        echo "            ";
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        // line 13
        echo "            ";
        // line 14
        echo "
            <form action=\"\" method=\"post\">
                <h3>Mes Paramètres</h3>
                <li class=\"\">
                    <a href=\"http://localhost:8000/profil\" class=\"switch\">
                        <button id=\"boutonprofil\" type=\"button\" class=\"btn btn-outline-primary\">Modifier mon profil
                        </button>
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"http://localhost:8000/updatemdp\" class=\"switch\">
                        <button id=\"boutonmdp\" type=\"button\" class=\"btn btn-outline-primary\">Modifier mon mot de passe
                        </button>
                    </a>
                </li>

            </form>

";
        // line 37
        echo "
";
        // line 42
        echo "            </li>
            ";
        // line 44
        echo "            ";
        // line 45
        echo "            ";
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        // line 48
        echo "
        </ul>
    </div>
</div> <!--/PARAMETRE-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_params.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 48,  94 => 47,  92 => 46,  90 => 45,  88 => 44,  85 => 42,  82 => 37,  62 => 14,  60 => 13,  58 => 12,  56 => 11,  54 => 10,  51 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"fixed-plugin\">
    <div class=\"dropdown toggle\">
        <a href=\"#\" data-toggle=\"dropdown\">
            <i class=\"fa fa-cog fa-2x\"> </i>
        </a>
        <ul class=\"dropdown-menu\">
            {#<li class=\"header-title\">{% block title %}Test affichage{% endblock %}</li> #}

            {#            <li class=\"active\">#}
            {#                <a href=\"#\" class=\"switch\">#}
            {#                    <p class=\"\">Changer mon nom</p>#}
            {#                </a>#}
            {#            </li>#}

            <form action=\"\" method=\"post\">
                <h3>Mes Paramètres</h3>
                <li class=\"\">
                    <a href=\"http://localhost:8000/profil\" class=\"switch\">
                        <button id=\"boutonprofil\" type=\"button\" class=\"btn btn-outline-primary\">Modifier mon profil
                        </button>
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"http://localhost:8000/updatemdp\" class=\"switch\">
                        <button id=\"boutonmdp\" type=\"button\" class=\"btn btn-outline-primary\">Modifier mon mot de passe
                        </button>
                    </a>
                </li>

            </form>

{#            <li class=\"active\">#}
{#                <a href=\"#\" class=\"switch\">#}
{#                    <p class=\"\"></p>#}
{#                </a>#}
{#            </li>#}

{#            <li class=\"active\">#}
{#                <a href=\"#\" class=\"switch\">#}
{#                    <p class=\"\"></p>#}
{#                </a>#}
            </li>
            {#            <li class=\"active\">#}
            {#                <a href=\"#\" class=\"switch\">#}
            {#                    <p class=\"\">Changer mon adresse email</p>#}
            {#                </a>#}
            {#            </li>#}

        </ul>
    </div>
</div> <!--/PARAMETRE-->", "components/_params.html.twig", "C:\\xampp\\htdocs\\billydocs-master\\billydocs-dev\\billydocs-dev\\templates\\components\\_params.html.twig");
    }
}
