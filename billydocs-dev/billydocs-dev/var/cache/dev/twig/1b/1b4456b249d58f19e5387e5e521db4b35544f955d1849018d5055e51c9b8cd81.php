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

/* components/sub-nav.html.twig */
class __TwigTemplate_58a0fdcd50f43fde2644a3b75eaaff78e37ae518f7fd431ef82a093938912923 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sub-nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sub-nav.html.twig"));

        // line 1
        echo "<!--MiniNav-->
    <nav id=\"mininav\">
        <ul class=\"nav nav-tabs\">
            <li role=\"presentation\"><a href=\"#\">Modifié le</a></li>
            <li role=\"presentation\"><a href=\"#\">Date</a></li>
            <li role=\"presentation\"><a href=\"#\">Catégorie</a></li>
            <li role=\"presentation\"><a href=\"#\">Nom</a></li>
            <li role=\"presentation\" id=\"regroup\"><a>Regrouper par:</a></li>
            <li id=\"add\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addfile");
        echo "\">Ajouter un fichier</a></li>
        </ul>
    </nav>
<!--FinMiniNav-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/sub-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--MiniNav-->
    <nav id=\"mininav\">
        <ul class=\"nav nav-tabs\">
            <li role=\"presentation\"><a href=\"#\">Modifié le</a></li>
            <li role=\"presentation\"><a href=\"#\">Date</a></li>
            <li role=\"presentation\"><a href=\"#\">Catégorie</a></li>
            <li role=\"presentation\"><a href=\"#\">Nom</a></li>
            <li role=\"presentation\" id=\"regroup\"><a>Regrouper par:</a></li>
            <li id=\"add\"><a href=\"{{ path('addfile') }}\">Ajouter un fichier</a></li>
        </ul>
    </nav>
<!--FinMiniNav-->", "components/sub-nav.html.twig", "C:\\xampp\\htdocs\\billydocs-master\\billydocs-dev\\billydocs-dev\\templates\\components\\sub-nav.html.twig");
    }
}
