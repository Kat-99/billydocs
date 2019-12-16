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

/* home/home.html.twig */
class __TwigTemplate_37cf6c478e924586afd27b9212e20215751f94926a09d769754dd1a348f90e44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("components/_nav.html.twig", "home/home.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("components/_params.html.twig", "home/home.html.twig", 6)->display($context);
        // line 7
        echo "
    <div class=\"section section-features mt-10\">
        <div class=\"container\">

            ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "
                <div class=\"row\">
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "                        <div class=\"alert alert-success\">
                            ";
                // line 16
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </div>

                <h2 class=\"header-text text-center\">Vos documents</h2>
                ";
            // line 22
            $this->loadTemplate("components/sub-nav.html.twig", "home/home.html.twig", 22)->display($context);
            // line 23
            echo "                <div class=\"row\">

                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 26
                echo "                        <div class=\"col-md-4\">
                            <div class=\"card card-blue\">
                                <h3 class=\"section-title\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "title", [], "any", false, false, false, 28), "html", null, true);
                echo "</h3>
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        ";
                // line 31
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["file"], "fileType", [], "any", false, false, false, 31), "application/pdf")) {
                    // line 32
                    echo "                                            <object data=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/files/" . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 32))), "html", null, true);
                    echo "\"
                                                    type=\"application/pdf\"
                                                    width=\"100%\"
                                                    height=\"250\"></object>
                                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 36
$context["file"], "fileType", [], "any", false, false, false, 36), "image/jpeg") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["file"], "fileType", [], "any", false, false, false, 36), "image/png"))) {
                    // line 37
                    echo "                                            <img class=\"img-responsive\"
                                                 src=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/files/" . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 38))), "html", null, true);
                    echo "\"
                                                 alt=\"";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "title", [], "any", false, false, false, 39), "html", null, true);
                    echo "\">
                                        ";
                }
                // line 41
                echo "                                    </div>
                                    <div class=\"col-xs-12 mt-2\">
                                        <a target=\"_blank\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/files/" . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 43))), "html", null, true);
                echo "\" class=\"btn btn-block btn-success\">Télécharger</a>
                                        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdocument", ["id" => twig_get_attribute($this->env, $this->source, $context["file"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" class=\"btn btn-block btn-warning\">Modifier</a>
                                        <a href=\"\" class=\"btn btn-block btn-danger\">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </div>
            ";
        }
        // line 53
        echo "        </div>
    </div>

    <!--CARDS FORMULES-->
    <div class=\"section section-features\">
        <div class=\"container\">
            <h2 id=\"formules\" class=\"header-text text-center\">Formules</h2>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"card card-blue\">
                        <div class=\"icon\">
                            <i class=\"pe-7s-magic-wand\"></i>
                        </div>
                        <div class=\"text\">
                            <h3>Gratuit</h3>
                            <h3>0€ <span>/mois</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto magnam, consequatur sint
                                officiis. Blanditiis numquam officia nobis id iure sed doloribus, adipisci, maiores
                                harum totam ratione ad nostrum ipsum iste?</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card card-blue\">
                        <div class=\"icon\">
                            <i class=\"pe-7s-pendrive\"></i>
                        </div>
                        <h3>Plus</h3>
                        <h3>5.50€ <span>/mois</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione tempora vero nemo placeat
                            fuga, vitae pariatur dolorum ab! Doloribus qui autem fugiat voluptate tempore, eaque
                            perferendis quibusdam tempora, quis arc</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card card-blue\">
                        <div class=\"icon\">
                            <i class=\"pe-7s-server\"></i>
                        </div>
                        <h3>Pro</h3>
                        <h3>15.90€ <span>/mois</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in libero voluptatibus ut,
                            eaque provident blanditiis aut impedit modi quos laboriosam repellat iste quia tenetur
                            sapiente. Quasi expedita, exercitationem a!</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--/CARDS FORMULES-->
    ";
        // line 103
        $this->loadTemplate("components/_footer.html.twig", "home/home.html.twig", 103)->display($context);
        // line 104
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 104,  230 => 103,  178 => 53,  174 => 51,  161 => 44,  157 => 43,  153 => 41,  148 => 39,  144 => 38,  141 => 37,  139 => 36,  131 => 32,  129 => 31,  123 => 28,  119 => 26,  115 => 25,  111 => 23,  109 => 22,  104 => 19,  95 => 16,  92 => 15,  88 => 14,  84 => 12,  82 => 11,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}

    {% include 'components/_nav.html.twig' %}
    {% include 'components/_params.html.twig' %}

    <div class=\"section section-features mt-10\">
        <div class=\"container\">

            {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                <div class=\"row\">
                    {% for message in app.flashes('notice') %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                    {% endfor %}
                </div>

                <h2 class=\"header-text text-center\">Vos documents</h2>
                {% include \"components/sub-nav.html.twig\" %}
                <div class=\"row\">

                    {% for file in files %}
                        <div class=\"col-md-4\">
                            <div class=\"card card-blue\">
                                <h3 class=\"section-title\">{{ file.title }}</h3>
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        {% if file.fileType == 'application/pdf' %}
                                            <object data=\"{{ asset('uploads/files/' ~ file.filename) }}\"
                                                    type=\"application/pdf\"
                                                    width=\"100%\"
                                                    height=\"250\"></object>
                                        {% elseif file.fileType == 'image/jpeg' or file.fileType == 'image/png' %}
                                            <img class=\"img-responsive\"
                                                 src=\"{{ asset('uploads/files/' ~ file.filename) }}\"
                                                 alt=\"{{ file.title }}\">
                                        {% endif %}
                                    </div>
                                    <div class=\"col-xs-12 mt-2\">
                                        <a target=\"_blank\" href=\"{{ asset('uploads/files/' ~ file.filename) }}\" class=\"btn btn-block btn-success\">Télécharger</a>
                                        <a href=\"{{ path('editdocument', { 'id' : file.id }) }}\" class=\"btn btn-block btn-warning\">Modifier</a>
                                        <a href=\"\" class=\"btn btn-block btn-danger\">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>

    <!--CARDS FORMULES-->
    <div class=\"section section-features\">
        <div class=\"container\">
            <h2 id=\"formules\" class=\"header-text text-center\">Formules</h2>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"card card-blue\">
                        <div class=\"icon\">
                            <i class=\"pe-7s-magic-wand\"></i>
                        </div>
                        <div class=\"text\">
                            <h3>Gratuit</h3>
                            <h3>0€ <span>/mois</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto magnam, consequatur sint
                                officiis. Blanditiis numquam officia nobis id iure sed doloribus, adipisci, maiores
                                harum totam ratione ad nostrum ipsum iste?</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card card-blue\">
                        <div class=\"icon\">
                            <i class=\"pe-7s-pendrive\"></i>
                        </div>
                        <h3>Plus</h3>
                        <h3>5.50€ <span>/mois</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione tempora vero nemo placeat
                            fuga, vitae pariatur dolorum ab! Doloribus qui autem fugiat voluptate tempore, eaque
                            perferendis quibusdam tempora, quis arc</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card card-blue\">
                        <div class=\"icon\">
                            <i class=\"pe-7s-server\"></i>
                        </div>
                        <h3>Pro</h3>
                        <h3>15.90€ <span>/mois</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in libero voluptatibus ut,
                            eaque provident blanditiis aut impedit modi quos laboriosam repellat iste quia tenetur
                            sapiente. Quasi expedita, exercitationem a!</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--/CARDS FORMULES-->
    {% include 'components/_footer.html.twig' %}

{% endblock %}
", "home/home.html.twig", "C:\\xampp\\htdocs\\billydocs-master\\billydocs-dev\\billydocs-dev\\templates\\home\\home.html.twig");
    }
}
