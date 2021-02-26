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

/* teclado/new.html.twig */
class __TwigTemplate_efc3ba839d1a6c94157edefb3b20ebca67808bbd4831544655439fae09eb9fa4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teclado/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "teclado/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Teclado";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-8 mx-auto\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Creación de teclado</h3>
                        <h4 class=\"card-subtitle mb-2 text-muted\">Añadir nuevo</h4>
                        <div class=\"card-text\">
                            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                            <div class=\"border border-white row\">
                                <label for=\"nombre\"
                                       class=\"col-4 col-form-label\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nombre", [], "any", false, false, false, 21), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nombre", [], "any", false, false, false, 23), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"descripcion\"
                                       class=\"col-4 col-form-label\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "descripcion", [], "any", false, false, false, 28), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "descripcion", [], "any", false, false, false, 30), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"imagen\"
                                       class=\"col-4 col-form-label\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "imagen", [], "any", false, false, false, 35), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "imagen", [], "any", false, false, false, 37), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"precio\"
                                       class=\"col-4 col-form-label\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "precio", [], "any", false, false, false, 42), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "precio", [], "any", false, false, false, 44), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"categoria\"
                                       class=\"col-4 col-form-label\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "categoria", [], "any", false, false, false, 49), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "categoria", [], "any", false, false, false, 51), 'widget');
        echo "
                                </div>
                            </div>

                            <div class=\"border border-white  row\">
                                <div class=\"col-sm-4 textarea\">
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "save", [], "any", false, false, false, 57), 'widget');
        echo "
                                </div>
                            </div>
                            <a class=\"btn btn-primary\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teclado_index");
        echo "\">back to list</a>
                                
                        </div>
                        ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
                    </div>

                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "teclado/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 63,  167 => 60,  161 => 57,  152 => 51,  147 => 49,  139 => 44,  134 => 42,  126 => 37,  121 => 35,  113 => 30,  108 => 28,  100 => 23,  95 => 21,  89 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Teclado{% endblock %}

{% block body %}
    {{ parent() }}

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-8 mx-auto\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Creación de teclado</h3>
                        <h4 class=\"card-subtitle mb-2 text-muted\">Añadir nuevo</h4>
                        <div class=\"card-text\">
                            {{ form_start(form) }}
                            <div class=\"border border-white row\">
                                <label for=\"nombre\"
                                       class=\"col-4 col-form-label\">{{ form_label(form.nombre) }}</label>
                                <div class=\"col-8\">
                                    {{ form_widget(form.nombre) }}
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"descripcion\"
                                       class=\"col-4 col-form-label\">{{ form_label(form.descripcion) }}</label>
                                <div class=\"col-8\">
                                    {{ form_widget(form.descripcion) }}
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"imagen\"
                                       class=\"col-4 col-form-label\">{{ form_label(form.imagen) }}</label>
                                <div class=\"col-8\">
                                    {{ form_widget(form.imagen) }}
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"precio\"
                                       class=\"col-4 col-form-label\">{{ form_label(form.precio) }}</label>
                                <div class=\"col-8\">
                                    {{ form_widget(form.precio) }}
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"categoria\"
                                       class=\"col-4 col-form-label\">{{ form_label(form.categoria) }}</label>
                                <div class=\"col-8\">
                                    {{ form_widget(form.categoria) }}
                                </div>
                            </div>

                            <div class=\"border border-white  row\">
                                <div class=\"col-sm-4 textarea\">
                                    {{ form_widget(form.save) }}
                                </div>
                            </div>
                            <a class=\"btn btn-primary\" href=\"{{ path('teclado_index') }}\">back to list</a>
                                
                        </div>
                        {{ form_end(form) }}
                    </div>

                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "teclado/new.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\teclado\\new.html.twig");
    }
}
