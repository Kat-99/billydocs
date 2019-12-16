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

/* @SchebTwoFactor/Authentication/form.html.twig */
class __TwigTemplate_d97f59f2d988f257a2c4ff71e5bb564ecec119435cfe95aa3a1143aa9b056b7b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SchebTwoFactor/Authentication/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SchebTwoFactor/Authentication/form.html.twig"));

        // line 5
        echo "
";
        // line 7
        if ((isset($context["authenticationError"]) || array_key_exists("authenticationError", $context) ? $context["authenticationError"] : (function () { throw new RuntimeError('Variable "authenticationError" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "<p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["authenticationError"]) || array_key_exists("authenticationError", $context) ? $context["authenticationError"] : (function () { throw new RuntimeError('Variable "authenticationError" does not exist.', 8, $this->source); })()), (isset($context["authenticationErrorData"]) || array_key_exists("authenticationErrorData", $context) ? $context["authenticationErrorData"] : (function () { throw new RuntimeError('Variable "authenticationErrorData" does not exist.', 8, $this->source); })()), "SchebTwoFactorBundle"), "html", null, true);
            echo "</p>
";
        }
        // line 10
        echo "
";
        // line 12
        echo "<p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("choose_provider", [], "SchebTwoFactorBundle"), "html", null, true);
        echo ":
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableTwoFactorProviders"]) || array_key_exists("availableTwoFactorProviders", $context) ? $context["availableTwoFactorProviders"] : (function () { throw new RuntimeError('Variable "availableTwoFactorProviders" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 14
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("2fa_login", ["preferProvider" => $context["provider"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["provider"], "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</p>

";
        // line 19
        echo "<p class=\"label\"><label for=\"_auth_code\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("auth_code", [], "SchebTwoFactorBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["twoFactorProvider"]) || array_key_exists("twoFactorProvider", $context) ? $context["twoFactorProvider"] : (function () { throw new RuntimeError('Variable "twoFactorProvider" does not exist.', 19, $this->source); })()), "html", null, true);
        echo ":</label></p>

<form class=\"form\" action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("2fa_login_check");
        echo "\" method=\"post\">
    <p class=\"widget\"><input id=\"_auth_code\" type=\"text\" autocomplete=\"off\" name=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["authCodeParameterName"]) || array_key_exists("authCodeParameterName", $context) ? $context["authCodeParameterName"] : (function () { throw new RuntimeError('Variable "authCodeParameterName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" autofocus /></p>
    ";
        // line 23
        if ((isset($context["displayTrustedOption"]) || array_key_exists("displayTrustedOption", $context) ? $context["displayTrustedOption"] : (function () { throw new RuntimeError('Variable "displayTrustedOption" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "        <p class=\"widget\"><label for=\"_trusted\"><input id=\"_trusted\" type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["trustedParameterName"]) || array_key_exists("trustedParameterName", $context) ? $context["trustedParameterName"] : (function () { throw new RuntimeError('Variable "trustedParameterName" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("trusted", [], "SchebTwoFactorBundle"), "html", null, true);
            echo "</label></p>
    ";
        }
        // line 26
        echo "    ";
        if ((isset($context["isCsrfProtectionEnabled"]) || array_key_exists("isCsrfProtectionEnabled", $context) ? $context["isCsrfProtectionEnabled"] : (function () { throw new RuntimeError('Variable "isCsrfProtectionEnabled" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["csrfParameterName"]) || array_key_exists("csrfParameterName", $context) ? $context["csrfParameterName"] : (function () { throw new RuntimeError('Variable "csrfParameterName" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["csrfTokenId"]) || array_key_exists("csrfTokenId", $context) ? $context["csrfTokenId"] : (function () { throw new RuntimeError('Variable "csrfTokenId" does not exist.', 27, $this->source); })())), "html", null, true);
            echo "\">
    ";
        }
        // line 29
        echo "    <p class=\"submit\"><input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login", [], "SchebTwoFactorBundle"), "html", null, true);
        echo "\" /></p>
</form>

";
        // line 33
        echo "<p class=\"cancel\"><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["logoutPath"]) || array_key_exists("logoutPath", $context) ? $context["logoutPath"] : (function () { throw new RuntimeError('Variable "logoutPath" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel", [], "SchebTwoFactorBundle"), "html", null, true);
        echo "</a></p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SchebTwoFactor/Authentication/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  118 => 29,  110 => 27,  107 => 26,  99 => 24,  97 => 23,  93 => 22,  89 => 21,  81 => 19,  77 => 16,  66 => 14,  62 => 13,  57 => 12,  54 => 10,  48 => 8,  46 => 7,  43 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This is a demo template for the authentication form. Please consider overwriting this with your own template,
especially when you're using different route names than the ones used here.
#}

{# Authentication errors #}
{% if authenticationError %}
<p>{{ authenticationError|trans(authenticationErrorData, 'SchebTwoFactorBundle') }}</p>
{% endif %}

{# Let the user select the authentication method #}
<p>{{ \"choose_provider\"|trans({}, 'SchebTwoFactorBundle') }}:
    {% for provider in availableTwoFactorProviders %}
        <a href=\"{{ path(\"2fa_login\", {\"preferProvider\": provider}) }}\">{{ provider }}</a>
    {% endfor %}
</p>

{# Display current two-factor provider #}
<p class=\"label\"><label for=\"_auth_code\">{{ \"auth_code\"|trans({}, 'SchebTwoFactorBundle') }} {{ twoFactorProvider }}:</label></p>

<form class=\"form\" action=\"{{ path(\"2fa_login_check\") }}\" method=\"post\">
    <p class=\"widget\"><input id=\"_auth_code\" type=\"text\" autocomplete=\"off\" name=\"{{ authCodeParameterName }}\" autofocus /></p>
    {% if displayTrustedOption %}
        <p class=\"widget\"><label for=\"_trusted\"><input id=\"_trusted\" type=\"checkbox\" name=\"{{ trustedParameterName }}\" /> {{ \"trusted\"|trans({}, 'SchebTwoFactorBundle') }}</label></p>
    {% endif %}
    {% if isCsrfProtectionEnabled %}
        <input type=\"hidden\" name=\"{{ csrfParameterName }}\" value=\"{{ csrf_token(csrfTokenId) }}\">
    {% endif %}
    <p class=\"submit\"><input type=\"submit\" value=\"{{ \"login\"|trans({}, 'SchebTwoFactorBundle') }}\" /></p>
</form>

{# The logout link gives the user a way out if they can't complete two-factor authentication #}
<p class=\"cancel\"><a href=\"{{ logoutPath }}\">{{ \"cancel\"|trans({}, 'SchebTwoFactorBundle') }}</a></p>
", "@SchebTwoFactor/Authentication/form.html.twig", "C:\\xampp\\htdocs\\billydocs-master\\billydocs-dev\\billydocs-dev\\vendor\\scheb\\two-factor-bundle\\Resources\\views\\Authentication\\form.html.twig");
    }
}
