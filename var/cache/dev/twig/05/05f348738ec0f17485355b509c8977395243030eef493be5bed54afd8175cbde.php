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

/* teclado/edit.html.twig */
class __TwigTemplate_51f6409229c22fcb7b4669f29605cd77af9a0091d06bd6930650988a2329c4ef extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teclado/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "teclado/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Teclado";
        
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
        // line 18
        echo "    
    
    
    
    
    
    
    
    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Teclado</h3>
                        <div class=\"d-flex justify-content-between\">
                            <h4 class=\"card-subtitle mb-2 text-muted\">Actualizar</h4>
                            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teclado_index");
        echo "\"><span class=\"p-2 glyphicon glyphicon-list\"></span>Volver a la lista</a>
                            <div class=\"p-2\">
                                ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 37, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teclado_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["teclado"]) || array_key_exists("teclado", $context) ? $context["teclado"] : (function () { throw new RuntimeError('Variable "teclado" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)])]);
        echo "
                                <input type=\"submit\" value=\"Borrar\">
                                ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>

                        <div class=\"card-text\">
                            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 44, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teclado_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["teclado"]) || array_key_exists("teclado", $context) ? $context["teclado"] : (function () { throw new RuntimeError('Variable "teclado" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "method" => "POST"]);
        echo "
                            <div class=\"border border-white row\">
                                <label for=\"nombre\"
                                       class=\"col-4 col-form-label\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 47, $this->source); })()), "nombre", [], "any", false, false, false, 47), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 49, $this->source); })()), "nombre", [], "any", false, false, false, 49), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"descripcion\"
                                       class=\"col-4 col-form-label\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 54, $this->source); })()), "descripcion", [], "any", false, false, false, 54), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 56, $this->source); })()), "descripcion", [], "any", false, false, false, 56), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"imagen\"
                                       class=\"col-4 col-form-label\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 61, $this->source); })()), "imagen", [], "any", false, false, false, 61), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 63, $this->source); })()), "imagen", [], "any", false, false, false, 63), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"precio\"
                                       class=\"col-4 col-form-label\">";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 68, $this->source); })()), "precio", [], "any", false, false, false, 68), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 70, $this->source); })()), "precio", [], "any", false, false, false, 70), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"categoria\"
                                       class=\"col-4 col-form-label\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 75, $this->source); })()), "categoria", [], "any", false, false, false, 75), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 77, $this->source); })()), "categoria", [], "any", false, false, false, 77), 'widget');
        echo "
                                </div>
                            </div>

                            <div class=\"d-flex \">
                                <div class=\"p-2\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 83, $this->source); })()), "save", [], "any", false, false, false, 83), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
                    </div>

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
        return "teclado/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 87,  184 => 83,  175 => 77,  170 => 75,  162 => 70,  157 => 68,  149 => 63,  144 => 61,  136 => 56,  131 => 54,  123 => 49,  118 => 47,  112 => 44,  104 => 39,  99 => 37,  94 => 35,  75 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Teclado{% endblock %}

{% block body %}
    {#
    <h1>Edit Teclado</h1>

    {{ include('teclado/_form.html.twig', {'button_label': 'Actualizar'}) }}

    <a href=\"{{ path('teclado_index') }}\">volver a la lista</a>

    {{ include('teclado/_delete_form.html.twig') }}
    
    
    
    #}
    
    
    
    
    
    
    
    
    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Teclado</h3>
                        <div class=\"d-flex justify-content-between\">
                            <h4 class=\"card-subtitle mb-2 text-muted\">Actualizar</h4>
                            <a href=\"{{ path('teclado_index') }}\"><span class=\"p-2 glyphicon glyphicon-list\"></span>Volver a la lista</a>
                            <div class=\"p-2\">
                                {{ form_start(delete_form, {'action': path('teclado_delete',{'id':teclado.id})}) }}
                                <input type=\"submit\" value=\"Borrar\">
                                {{ form_end(delete_form) }}
                            </div>
                        </div>

                        <div class=\"card-text\">
                            {{ form_start(edit_form, {'action': path('teclado_edit',{'id':teclado.id}), 'method': 'POST'}) }}
                            <div class=\"border border-white row\">
                                <label for=\"nombre\"
                                       class=\"col-4 col-form-label\">{{ form_label(edit_form.nombre) }}</label>
                                <div class=\"col-8\">
                                    {{ form_widget(edit_form.nombre) }}
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"descripcion\"
                                       class=\"col-4 col-form-label\">{{ form_label(edit_form.descripcion) }}</label>
                                <div class=\"col-8\">
                                    {{ form_widget(edit_form.descripcion) }}
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"imagen\"
                                       class=\"col-4 col-form-label\">{{ form_label(edit_form.imagen) }}</label>
                                <div class=\"col-8\">
                                    {{ form_widget(edit_form.imagen) }}
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"precio\"
                                       class=\"col-4 col-form-label\">{{ form_label(edit_form.precio) }}</label>
                                <div class=\"col-8\">
                                    {{ form_widget(edit_form.precio) }}
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"categoria\"
                                       class=\"col-4 col-form-label\">{{ form_label(edit_form.categoria) }}</label>
                                <div class=\"col-8\">
                                    {{ form_widget(edit_form.categoria) }}
                                </div>
                            </div>

                            <div class=\"d-flex \">
                                <div class=\"p-2\">
                                    {{ form_widget(edit_form.save) }}
                                </div>
                            </div>
                        </div>
                        {{ form_end(edit_form) }}
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
{% endblock %}
", "teclado/edit.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\teclado\\edit.html.twig");
    }
}
