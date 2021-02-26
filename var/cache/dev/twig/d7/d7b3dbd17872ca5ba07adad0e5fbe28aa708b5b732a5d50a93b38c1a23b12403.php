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

/* categoria/edit.html.twig */
class __TwigTemplate_930321dc8c186c4e84ed4dbb0f084b95279ce6d0b8b8e1af47eb5d363151d0d4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoria/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categoria/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Categoria";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Categoría</h3>
                        <div class=\"d-flex justify-content-between\">
                            <h4 class=\"card-subtitle mb-2 text-muted\">Actualizar</h4>
                            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoria_index");
        echo "\"><span class=\"p-2 glyphicon glyphicon-list\"></span>Volver a la lista</a>
                            <div class=\"p-2\">
                                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 16, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoria_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)])]);
        echo "
                                <input type=\"submit\" value=\"Borrar\">
                                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>

                        <div class=\"card-text\">
                            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 23, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoria_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "method" => "POST"]);
        echo "
                            <div class=\"border border-white row\">
                                <label for=\"nombre\"
                                       class=\"col-4 col-form-label\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 26, $this->source); })()), "nombre", [], "any", false, false, false, 26), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 28, $this->source); })()), "nombre", [], "any", false, false, false, 28), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
                                <label for=\"descripcion\"
                                       class=\"col-4 col-form-label\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 33, $this->source); })()), "descripcion", [], "any", false, false, false, 33), 'label');
        echo "</label>
                                <div class=\"col-8\">
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 35, $this->source); })()), "descripcion", [], "any", false, false, false, 35), 'widget');
        echo "
                                </div>
                            </div>

                            <div class=\"d-flex \">
                                <div class=\"p-2\">
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 41, $this->source); })()), "save", [], "any", false, false, false, 41), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 45, $this->source); })()), 'form_end');
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
        return "categoria/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  134 => 41,  125 => 35,  120 => 33,  112 => 28,  107 => 26,  101 => 23,  93 => 18,  88 => 16,  83 => 14,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Categoria{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Categoría</h3>
                        <div class=\"d-flex justify-content-between\">
                            <h4 class=\"card-subtitle mb-2 text-muted\">Actualizar</h4>
                            <a href=\"{{ path('categoria_index') }}\"><span class=\"p-2 glyphicon glyphicon-list\"></span>Volver a la lista</a>
                            <div class=\"p-2\">
                                {{ form_start(delete_form, {'action': path('categoria_delete',{'id':categoria.id})}) }}
                                <input type=\"submit\" value=\"Borrar\">
                                {{ form_end(delete_form) }}
                            </div>
                        </div>

                        <div class=\"card-text\">
                            {{ form_start(edit_form, {'action': path('categoria_edit',{'id':categoria.id}), 'method': 'POST'}) }}
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
", "categoria/edit.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\categoria\\edit.html.twig");
    }
}
