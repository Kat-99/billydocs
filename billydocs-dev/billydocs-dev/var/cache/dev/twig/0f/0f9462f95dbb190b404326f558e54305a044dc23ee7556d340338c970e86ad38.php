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

/* contact/contact.html.twig */
class __TwigTemplate_14f4ecea8eb4d575dd64c1767e59338c10bba79a79591158af76f96184b88596 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"assets/img/billy/flavicon.png\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>BillyDocs | Votre base de donnée personnelle.</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />

    <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/landing-page.css\" rel=\"stylesheet\" />

    <!--     Fonts and icons     -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    <link href=\"https://fonts.googleapis.com/css?family=Quicksand&display=swap\" rel=\"stylesheet\">
    <link href=\"assets/css/pe-icon-7-stroke.css\" rel=\"stylesheet\" />

</head>

<body class=\"landing-page landing-page1\">
<nav class=\"navbar navbar-transparent navbar-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button id=\"menu-toggle\" type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#example\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar bar1\"></span>
                <span class=\"icon-bar bar2\"></span>
                <span class=\"icon-bar bar3\"></span>
            </button>
            <a href=\"#\">
                <div class=\"logo-container\">
                    <div class=\"logo\">
                        <a href=\"/\">
                            <img src=\"assets/img/billy/billydoclogo.png\" alt=\"billydocsLogo\">
                        </a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</nav>

<div id=\"contact\" class=\"container\">
    <h2 id=\"contacttitle\">Un problème? Contactez-nous</h2>
<form action=\"/html/tags/html_form_tag_action.cfm\" class=\"form-horizontal\">
    <div class=\"form-group\">
        <label for=\"first_name\" class=\"col-xs-3 control-label\">Prénom</label>
        <div class=\"col-xs-6\">
            <input type=\"text\" class=\"form-control\" id=\"first_name\" name=\"first_name\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"last_name\" class=\"col-xs-3 control-label\">Nom</label>
        <div class=\"col-xs-6\">
            <input type=\"text\" class=\"form-control\" id=\"last_name\" name=\"last_name\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"email\" class=\"col-xs-3 control-label\">Email</label>
        <div class=\"col-xs-6\">
            <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"msg\" class=\"col-xs-3 control-label\">Votre message</label>
        <div class=\"col-xs-6\">
        <textarea class=\"form-control\" id=\"msg\" rows=\"3\"></textarea>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-xs-offset-3 col-xs-9\">
            <a href=\"/\">
                <button id=\"boutonmsg\" type=\"button\" class=\"btn btn-default\">Envoyer</button>
            </a>
        </div>
    </div>
</form>
</div>
<!--FOOTER-->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"copyright\">
            &copy; 2019 <a href=\"inscription.html\">BillyDocs</a>
        </div>
    </div>
</footer> <!--/FOOTER-->
</body>
<script src=\"assets/js/jquery-1.10.2.js\" type=\"text/javascript\"></script>
<script src=\"assets/js/jquery-ui-1.10.4.custom.min.js\" type=\"text/javascript\"></script>
<script src=\"assets/js/bootstrap.js\" type=\"text/javascript\"></script>
<script src=\"assets/js/awesome-landing-page.js\" type=\"text/javascript\"></script></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"assets/img/billy/flavicon.png\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>BillyDocs | Votre base de donnée personnelle.</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />

    <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/landing-page.css\" rel=\"stylesheet\" />

    <!--     Fonts and icons     -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    <link href=\"https://fonts.googleapis.com/css?family=Quicksand&display=swap\" rel=\"stylesheet\">
    <link href=\"assets/css/pe-icon-7-stroke.css\" rel=\"stylesheet\" />

</head>

<body class=\"landing-page landing-page1\">
<nav class=\"navbar navbar-transparent navbar-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button id=\"menu-toggle\" type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#example\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar bar1\"></span>
                <span class=\"icon-bar bar2\"></span>
                <span class=\"icon-bar bar3\"></span>
            </button>
            <a href=\"#\">
                <div class=\"logo-container\">
                    <div class=\"logo\">
                        <a href=\"/\">
                            <img src=\"assets/img/billy/billydoclogo.png\" alt=\"billydocsLogo\">
                        </a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</nav>

<div id=\"contact\" class=\"container\">
    <h2 id=\"contacttitle\">Un problème? Contactez-nous</h2>
<form action=\"/html/tags/html_form_tag_action.cfm\" class=\"form-horizontal\">
    <div class=\"form-group\">
        <label for=\"first_name\" class=\"col-xs-3 control-label\">Prénom</label>
        <div class=\"col-xs-6\">
            <input type=\"text\" class=\"form-control\" id=\"first_name\" name=\"first_name\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"last_name\" class=\"col-xs-3 control-label\">Nom</label>
        <div class=\"col-xs-6\">
            <input type=\"text\" class=\"form-control\" id=\"last_name\" name=\"last_name\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"email\" class=\"col-xs-3 control-label\">Email</label>
        <div class=\"col-xs-6\">
            <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"msg\" class=\"col-xs-3 control-label\">Votre message</label>
        <div class=\"col-xs-6\">
        <textarea class=\"form-control\" id=\"msg\" rows=\"3\"></textarea>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-xs-offset-3 col-xs-9\">
            <a href=\"/\">
                <button id=\"boutonmsg\" type=\"button\" class=\"btn btn-default\">Envoyer</button>
            </a>
        </div>
    </div>
</form>
</div>
<!--FOOTER-->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"copyright\">
            &copy; 2019 <a href=\"inscription.html\">BillyDocs</a>
        </div>
    </div>
</footer> <!--/FOOTER-->
</body>
<script src=\"assets/js/jquery-1.10.2.js\" type=\"text/javascript\"></script>
<script src=\"assets/js/jquery-ui-1.10.4.custom.min.js\" type=\"text/javascript\"></script>
<script src=\"assets/js/bootstrap.js\" type=\"text/javascript\"></script>
<script src=\"assets/js/awesome-landing-page.js\" type=\"text/javascript\"></script></html>
", "contact/contact.html.twig", "C:\\xampp\\htdocs\\billydocs-master\\billydocs-dev\\billydocs-dev\\templates\\contact\\contact.html.twig");
    }
}
