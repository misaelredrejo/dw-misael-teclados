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

/* categoria/index.html.twig */
class __TwigTemplate_a06580c1d58b42a374d96c5efa78cbd6e504f51f9215d16bef763d2112780582 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categoria/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Categoria index";
        
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
                <div class=\"card bg-light\">
                    <div class=\"card-header d-flex justify-content-between  bg-dark text-white\">
                        <div>
                            <h5 class=\"\">Categorías</h5>
                        </div>
                        <div>
                            <a class=\"mr-0\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoria_new");
        echo "\">Crea una nueva categoría</a>
                        </div>
                    </div>

                    <div class=\"card-body\">

                        <ul class=\"list-group\">
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 23
            echo "                                
                                <div class=\"card list-group-item \">
                                    <div class=\"card-body\">
                                        <ul class=\"list-group\">
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Id categoría</h6></div>
                                                <div class=\"lead\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</div >
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Nombre categoría</h6></div>
                                                <div class=\"lead\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nombre", [], "any", false, false, false, 33), "html", null, true);
            echo "</div >
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Descripción</h6></div>
                                                <div class=\"lead\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "descripcion", [], "any", false, false, false, 37), "html", null, true);
            echo "</div>
                                            </li>
                                            <li class=\"list-group-item pb-2 ml-auto border-left-0 border-right-0 border-bottom-0 \">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\">
                                                        <a class=\"btn btn-outline-primary\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoria_show", ["id" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">
                                                            <span class=\"fa fa-info p-2\"> </span>Mostrar
                                                        </a>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <a class=\"btn btn-outline-info\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoria_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">
                                                            <span class=\"fa fa-edit p-2\"> </span>Editar
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr/>
                                
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                                <div>
                                    <h3 colspan=\"6\">no records found</h3>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </ul>

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
        return "categoria/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 63,  154 => 59,  137 => 47,  129 => 42,  121 => 37,  114 => 33,  107 => 29,  99 => 23,  94 => 22,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categoria index{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <div class=\"card bg-light\">
                    <div class=\"card-header d-flex justify-content-between  bg-dark text-white\">
                        <div>
                            <h5 class=\"\">Categorías</h5>
                        </div>
                        <div>
                            <a class=\"mr-0\" href=\"{{ path('categoria_new') }}\">Crea una nueva categoría</a>
                        </div>
                    </div>

                    <div class=\"card-body\">

                        <ul class=\"list-group\">
                            {% for categoria in categorias %}
                                
                                <div class=\"card list-group-item \">
                                    <div class=\"card-body\">
                                        <ul class=\"list-group\">
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Id categoría</h6></div>
                                                <div class=\"lead\">{{ categoria.id }}</div >
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Nombre categoría</h6></div>
                                                <div class=\"lead\">{{ categoria.nombre }}</div >
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Descripción</h6></div>
                                                <div class=\"lead\">{{ categoria.descripcion }}</div>
                                            </li>
                                            <li class=\"list-group-item pb-2 ml-auto border-left-0 border-right-0 border-bottom-0 \">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\">
                                                        <a class=\"btn btn-outline-primary\" href=\"{{ path('categoria_show', {'id': categoria.id}) }}\">
                                                            <span class=\"fa fa-info p-2\"> </span>Mostrar
                                                        </a>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <a class=\"btn btn-outline-info\" href=\"{{ path('categoria_edit', {'id': categoria.id}) }}\">
                                                            <span class=\"fa fa-edit p-2\"> </span>Editar
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr/>
                                
                            {% else %}
                                <div>
                                    <h3 colspan=\"6\">no records found</h3>
                                </div>
                            {% endfor %}
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "categoria/index.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\categoria\\index.html.twig");
    }
}
