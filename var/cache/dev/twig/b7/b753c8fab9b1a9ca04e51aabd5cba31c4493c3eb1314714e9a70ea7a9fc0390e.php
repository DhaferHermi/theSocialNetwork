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

/* account/editAccount.html.twig */
class __TwigTemplate_40e24adadec099c05b6aeeec5fffc6b3f24acc8e49a35e78c307795c094d15d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/editAccount.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/editAccount.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/editAccount.html.twig", 1);
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
                        <div class=\"card-header mb-3\">Edit Form</div>
                        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 18, $this->source); })()), "lastname", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 23, $this->source); })()), "birthday", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 33, $this->source); })()), "phone", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "form-control"]]);
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
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editUserForm"]) || array_key_exists("editUserForm", $context) ? $context["editUserForm"] : (function () { throw new RuntimeError('Variable "editUserForm" does not exist.', 43, $this->source); })()), 'form_end');
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
        return "account/editAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  114 => 33,  106 => 28,  98 => 23,  90 => 18,  82 => 13,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
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
                        <div class=\"card-header mb-3\">Edit Form</div>
                        {{ form_start(editUserForm) }}
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(editUserForm.firstname, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(editUserForm.lastname, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(editUserForm.birthday, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(editUserForm.email, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form_group\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_row(editUserForm.phone, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-user\"></i> Register
                                </button>
                            </div>
                        </div>
                        {{ form_end(editUserForm) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "account/editAccount.html.twig", "C:\\xampp\\htdocs\\theSocialNetwork\\templates\\account\\editAccount.html.twig");
    }
}
