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

/* registration/index.html.twig */
class __TwigTemplate_4f2c6847dd39427d798dae466d66d43156c10ed79915417a8489dc4d87271db0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 ml-md-auto\">
                <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px\">
                    <div class=\"card-body\">
                        <div class=\"card-header mb-3\">Registration Form</div>
                        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "

                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "username", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "firstname", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "lastname", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "birthday", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "gender", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "phone", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control"]]);
        // line 50
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), "second", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "form-control"]]);
        // line 56
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-user\"></i> Register
                                </button>
                            </div>
                        </div>
                        ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
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
        return "registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 66,  150 => 56,  148 => 55,  141 => 50,  139 => 49,  131 => 44,  123 => 39,  115 => 34,  107 => 29,  99 => 24,  91 => 19,  83 => 14,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 ml-md-auto\">
                <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px\">
                    <div class=\"card-body\">
                        <div class=\"card-header mb-3\">Registration Form</div>
                        {{ form_start(form) }}

                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.username, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.firstname, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.lastname, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.birthday, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.gender, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.phone, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.password.first, {'attr': {'class':
                                    'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(form.password.second, {'attr': {'class':
                                    'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-user\"></i> Register
                                </button>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "registration/index.html.twig", "C:\\xampp\\htdocs\\theSocialNetwork\\templates\\registration\\index.html.twig");
    }
}
