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

/* components/_nav.html.twig */
class __TwigTemplate_c5342f1b2201d4699a2920bffbb9adf24944e116a85b675eff93757f55b8708f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-transparent navbar-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button id=\"menu-toggle\" type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#example\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar bar1\"></span>
                <span class=\"icon-bar bar2\"></span>
                <span class=\"icon-bar bar3\"></span>
            </button>
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                <div class=\"logo-container\">
                    <div class=\"logo\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/billy/billydoclogo.png"), "html", null, true);
        echo "\" alt=\"billydocsLogo\">
                    </div>
                </div>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"example\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <form id=\"search\" class=\"form-inline my-2 my-lg-0\">
                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher\" aria-label=\"Search\">
                        <button id=\"boutonrecherche\" class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">
                            Rechercher
                        </button>
                    </form>
                </li>
                ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 31
            echo "                    <li>
                        <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                            <button id=\"boutondedeconnexion\" type=\"button\" class=\"btn btn-outline-primary\">Deconnexion
                            </button>
                        </a>
                    </li>
                ";
        } else {
            // line 38
            echo "                    <li>
                        <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                            <button id=\"boutondeconnexion\" type=\"button\" class=\"btn btn-outline-primary\">Connexion</button>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_register");
            echo "\">
                            <button id=\"boutondeinscription\" type=\"button\" class=\"btn btn-outline-primary\">Inscription</button>
                        </a>
                    </li>
                ";
        }
        // line 49
        echo "            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 49,  105 => 44,  97 => 39,  94 => 38,  85 => 32,  82 => 31,  80 => 30,  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-transparent navbar-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button id=\"menu-toggle\" type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#example\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar bar1\"></span>
                <span class=\"icon-bar bar2\"></span>
                <span class=\"icon-bar bar3\"></span>
            </button>
            <a href=\"{{ path('home') }}\">
                <div class=\"logo-container\">
                    <div class=\"logo\">
                        <img src=\"{{ asset('assets/img/billy/billydoclogo.png') }}\" alt=\"billydocsLogo\">
                    </div>
                </div>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"example\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <form id=\"search\" class=\"form-inline my-2 my-lg-0\">
                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher\" aria-label=\"Search\">
                        <button id=\"boutonrecherche\" class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">
                            Rechercher
                        </button>
                    </form>
                </li>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li>
                        <a href=\"{{ path('app_logout') }}\">
                            <button id=\"boutondedeconnexion\" type=\"button\" class=\"btn btn-outline-primary\">Deconnexion
                            </button>
                        </a>
                    </li>
                {% else %}
                    <li>
                        <a href=\"{{ path('app_login') }}\">
                            <button id=\"boutondeconnexion\" type=\"button\" class=\"btn btn-outline-primary\">Connexion</button>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('user_register') }}\">
                            <button id=\"boutondeinscription\" type=\"button\" class=\"btn btn-outline-primary\">Inscription</button>
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
", "components/_nav.html.twig", "C:\\xampp\\htdocs\\billydocs-master\\billydocs-dev\\billydocs-dev\\templates\\components\\_nav.html.twig");
    }
}
