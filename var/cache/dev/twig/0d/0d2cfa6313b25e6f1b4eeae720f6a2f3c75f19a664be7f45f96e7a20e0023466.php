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

/* publication/index.html.twig */
class __TwigTemplate_afacd76779a3298693c938c58a462170fe2f0d51d23bf704d7136cfec4f22f1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'cssPublication' => [$this, 'block_cssPublication'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "publication/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PublicationController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_cssPublication($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssPublication"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssPublication"));

        echo " ";
        $this->displayParentBlock("cssPublication", $context, $blocks);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello</h1>
</div>

    <div class=\"container mt-4 mb-5\">
        <div class=\"d-flex justify-content-center row\">
            <div class=\"col-md-8\">

                <div class=\"feed p-2\">

                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ListPublications"]) || array_key_exists("ListPublications", $context) ? $context["ListPublications"] : (function () { throw new RuntimeError('Variable "ListPublications" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 22
            echo "                    <div class=\"bg-white border mt-2\">

                        <div>
                            <div class=\"d-flex flex-row justify-content-between align-items-center p-2 border-bottom\">
                                <div class=\"d-flex flex-row align-items-center feed-text px-2\"><img class=\"rounded-circle\" src=\"https://i.imgur.com/aoKusnD.jpg\" width=\"45\">
                                    <div class=\"d-flex flex-column flex-wrap ml-2\"><span class=\"font-weight-bold\">";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["User"]) || array_key_exists("User", $context) ? $context["User"] : (function () { throw new RuntimeError('Variable "User" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "   </span><span class=\"text-black-50 time\"></span></div>
                                </div>

                                ";
            // line 30
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], "getUsrId", [], "method", false, false, false, 30), "id", [], "any", false, false, false, 30), (isset($context["user_Id"]) || array_key_exists("user_Id", $context) ? $context["user_Id"] : (function () { throw new RuntimeError('Variable "user_Id" does not exist.', 30, $this->source); })())))) {
                // line 31
                echo "


                                <div class=\"feed-icon px-2\"><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PublicationDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\"><i class=\"fa fa-trash \"style='color: red ; margin-right: 10px'  ></i></a> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PublicationUpdate", ["id" => twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\"> <i class=\"fa fa-pencil\" style='color: orange'></i></a></div>
                                ";
            }
            // line 36
            echo "                            </div>
                        </div>
                        <div class=\"p-2 px-3\"><span>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "publication", [], "any", false, false, false, 38), "html", null, true);
            echo ".</span></div>

                        <div class=\"feed-image p-2 px-2\"><img class=\"img-fluid img-responsive\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("../../../../uploads/" . twig_get_attribute($this->env, $this->source, $context["m"], "getPhotoUrl", [], "method", false, false, false, 40))), "html", null, true);
            echo "\"></div>
                        <div class=\"d-flex justify-content-end socials p-2 py-3\"></div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </div>

            </div>

        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "publication/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 44,  167 => 40,  162 => 38,  158 => 36,  151 => 34,  146 => 31,  144 => 30,  138 => 27,  131 => 22,  127 => 21,  110 => 6,  100 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PublicationController!{% endblock %}
{% block cssPublication %} {{ parent() }} {% endblock %}
{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello</h1>
</div>

    <div class=\"container mt-4 mb-5\">
        <div class=\"d-flex justify-content-center row\">
            <div class=\"col-md-8\">

                <div class=\"feed p-2\">

                    {% for m in ListPublications %}
                    <div class=\"bg-white border mt-2\">

                        <div>
                            <div class=\"d-flex flex-row justify-content-between align-items-center p-2 border-bottom\">
                                <div class=\"d-flex flex-row align-items-center feed-text px-2\"><img class=\"rounded-circle\" src=\"https://i.imgur.com/aoKusnD.jpg\" width=\"45\">
                                    <div class=\"d-flex flex-column flex-wrap ml-2\"><span class=\"font-weight-bold\">{{ User }}   </span><span class=\"text-black-50 time\"></span></div>
                                </div>

                                {% if m.getUsrId().id == user_Id %}



                                <div class=\"feed-icon px-2\"><a href=\"{{ path(\"PublicationDelete\", {'id': m.id}) }}\"><i class=\"fa fa-trash \"style='color: red ; margin-right: 10px'  ></i></a> <a href=\"{{ path(\"PublicationUpdate\", {'id': m.id}) }}\"> <i class=\"fa fa-pencil\" style='color: orange'></i></a></div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"p-2 px-3\"><span>{{ m.publication }}.</span></div>

                        <div class=\"feed-image p-2 px-2\"><img class=\"img-fluid img-responsive\" src=\"{{ asset('../../../../uploads/'~ m.getPhotoUrl() )}}\"></div>
                        <div class=\"d-flex justify-content-end socials p-2 py-3\"></div>
                    </div>
                    {% endfor %}
                </div>

            </div>

        </div>
    </div>



{% endblock %}
", "publication/index.html.twig", "C:\\xampp\\htdocs\\theSocialNetwork\\templates\\publication\\index.html.twig");
    }
}
