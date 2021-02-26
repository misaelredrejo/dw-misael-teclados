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

/* categoria/new.html.twig */
class __TwigTemplate_bb8013b511e6ec3f2391d914d752a6dfcb69c1fff9f1e9cc08c414866ca3a31f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoria/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categoria/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Categoria";
        
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
                        <h3 class=\"card-title\">Creación de categoría</h3>
                        <h4 class=\"card-subtitle mb-2 text-muted\">Añadir nueva</h4>
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
                                <div class=\"col-sm-4 textarea\">
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "save", [], "any", false, false, false, 36), 'widget');
        echo "
                                </div>
                            </div>
                            <a class=\"btn btn-primary\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoria_index");
        echo "\">Volver a la lista</a>
                        </div>
                        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
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
        return "categoria/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  128 => 39,  122 => 36,  113 => 30,  108 => 28,  100 => 23,  95 => 21,  89 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Categoria{% endblock %}

{% block body %}
    {{ parent() }}

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-8 mx-auto\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Creación de categoría</h3>
                        <h4 class=\"card-subtitle mb-2 text-muted\">Añadir nueva</h4>
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
                                <div class=\"col-sm-4 textarea\">
                                    {{ form_widget(form.save) }}
                                </div>
                            </div>
                            <a class=\"btn btn-primary\" href=\"{{ path('categoria_index') }}\">Volver a la lista</a>
                        </div>
                        {{ form_end(form) }}
                    </div>

                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "categoria/new.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\categoria\\new.html.twig");
    }
}
