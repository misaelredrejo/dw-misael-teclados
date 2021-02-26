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

/* categoria/show.html.twig */
class __TwigTemplate_090622bded347c58957cd0f7f7d0506bf913cf8613c5191bcbb1a947be656f38 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoria/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categoria/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Categoria";
        
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
                    <h5 class=\"card-header\">Categoría</h5>
                    <div class=\"card-body\">

                        <table class=\"table-borderless table-responsive\" >
                            <tr scope=\"row\" class=\"pb-2\">
                                <td ><h6 class=\"text-muted\">Id categoria</h6></td>
                                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
                            </tr>
                            <tr scope=\"row\" class=\"pb-2\">
                                <td><h6 class=\"text-muted\">Nombre Categoría</h6></td>
                                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 20, $this->source); })()), "nombre", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                            </tr>
                            <tr scope=\"row\" class=\"pb-2\">
                                <td><h6 class=\"text-muted\">Descripción</h6></td>
                                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 24, $this->source); })()), "descripcion", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                            </tr>
                        </table>

                    </div>
                    <ul class=\"list-inline-group mt-5 card-footer mb-0\">
                        <li class=\"list-inline-item\">
                            <a class=\"btn btn-outline-primary\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoria_index");
        echo "\">Volver a la lista</a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a class=\"btn btn-outline-primary\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoria_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">Editar</a>
                        </li>
                        <li class=\"list-inline-item\">
                            ";
        // line 37
        echo twig_include($this->env, $context, "categoria/_delete_form.html.twig");
        echo "
                        </li>
                    </ul>
                    ";
        // line 63
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "categoria/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 63,  121 => 37,  115 => 34,  109 => 31,  99 => 24,  92 => 20,  85 => 16,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categoria{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <div class=\"card\">
                    <h5 class=\"card-header\">Categoría</h5>
                    <div class=\"card-body\">

                        <table class=\"table-borderless table-responsive\" >
                            <tr scope=\"row\" class=\"pb-2\">
                                <td ><h6 class=\"text-muted\">Id categoria</h6></td>
                                <td>{{ categoria.id }}</td>
                            </tr>
                            <tr scope=\"row\" class=\"pb-2\">
                                <td><h6 class=\"text-muted\">Nombre Categoría</h6></td>
                                <td>{{ categoria.nombre }}</td>
                            </tr>
                            <tr scope=\"row\" class=\"pb-2\">
                                <td><h6 class=\"text-muted\">Descripción</h6></td>
                                <td>{{ categoria.descripcion }}</td>
                            </tr>
                        </table>

                    </div>
                    <ul class=\"list-inline-group mt-5 card-footer mb-0\">
                        <li class=\"list-inline-item\">
                            <a class=\"btn btn-outline-primary\" href=\"{{ path('categoria_index') }}\">Volver a la lista</a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a class=\"btn btn-outline-primary\" href=\"{{ path('categoria_edit', {'id': categoria.id}) }}\">Editar</a>
                        </li>
                        <li class=\"list-inline-item\">
                            {{ include('categoria/_delete_form.html.twig') }}
                        </li>
                    </ul>
                    {#
            <ul class=\"list-inline-group mt-5 card-footer mb-0\">
                {% if app.user is not null %}
                    {% if app.user.username == owner[0].username %}
                        <li class=\"list-inline-item\">
                            <a class=\"btn btn-outline-primary\" href=\"{{ path('show_candidates', { 'id' : offer.id }) }}\" >Candidates</a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a  class=\"btn btn-outline-secondary\" href=\"{{ path('offers_edit', { 'id': offer.id }) }}\">Edit</a>
                        </li>
                        <li class=\"list-inline-item\">
                            {{ form_start(delete_form) }}
                            <input   class=\"btn btn-outline-danger\" type=\"submit\" value=\"Delete\">
                            {{ form_end(delete_form) }}
                        </li>
                    {% else %}
                        <li class=\"list-inline-item\">
                            <a class=\"btn btn-primary\" href=\"{{ path('apply_offer', { 'id_offer':offer.id, 'username': app.user.username }) }}\">Apply to offer</a>
                        </li>
                    {% endif %}
                {% endif %}
            </ul>
                    #}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "categoria/show.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\categoria\\show.html.twig");
    }
}
