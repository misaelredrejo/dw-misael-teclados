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

/* teclado/index.html.twig */
class __TwigTemplate_373fdce8b95186aae36471bd358a12bf1307b61c172345140cc18db0e7238df0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teclado/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "teclado/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Teclado index";
        
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
                            <h5 class=\"\">Teclados</h5>
                        </div>
                        <div>
                            <a class=\"mr-0\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teclado_new");
        echo "\">Crea un nuevo teclado</a>
                        </div>
                    </div>

                    <div class=\"card-body\">

                        <ul class=\"list-group\">
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teclados"]) || array_key_exists("teclados", $context) ? $context["teclados"] : (function () { throw new RuntimeError('Variable "teclados" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["teclado"]) {
            // line 23
            echo "                                
                                <div class=\"card list-group-item \">
                                    <div class=\"card-body\">
                                        <ul class=\"list-group\">
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Id teclado</h6></div>
                                                <div class=\"lead\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teclado"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</div >
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Nombre teclado</h6></div>
                                                <div class=\"lead\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teclado"], "nombre", [], "any", false, false, false, 33), "html", null, true);
            echo "</div >
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Categoría teclado</h6></div>
                                                <div class=\"lead\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teclado"], "categoria", [], "any", false, false, false, 37), "html", null, true);
            echo "</div>
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Precio</h6></div>
                                                <div class=\"lead\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teclado"], "precio", [], "any", false, false, false, 41), "html", null, true);
            echo "</div>
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Imagen</h6></div>
                                                <div class=\"lead\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teclado"], "imagen", [], "any", false, false, false, 45), "html", null, true);
            echo "</div>
                                            </li>
                                            <li class=\"list-group-item pb-2 ml-auto border-left-0 border-right-0 border-bottom-0 \">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\">
                                                        <a class=\"btn btn-outline-primary\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teclado_show", ["id" => twig_get_attribute($this->env, $this->source, $context["teclado"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
                                                            <span class=\"fa fa-info p-2\"> </span>Mostrar
                                                        </a>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <a class=\"btn btn-outline-info\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teclado_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["teclado"], "id", [], "any", false, false, false, 55)]), "html", null, true);
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
            // line 67
            echo "                                <div>
                                    <h3 colspan=\"6\">no records found</h3>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teclado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        return "teclado/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 71,  168 => 67,  151 => 55,  143 => 50,  135 => 45,  128 => 41,  121 => 37,  114 => 33,  107 => 29,  99 => 23,  94 => 22,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Teclado index{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <div class=\"card bg-light\">
                    <div class=\"card-header d-flex justify-content-between  bg-dark text-white\">
                        <div>
                            <h5 class=\"\">Teclados</h5>
                        </div>
                        <div>
                            <a class=\"mr-0\" href=\"{{ path('teclado_new') }}\">Crea un nuevo teclado</a>
                        </div>
                    </div>

                    <div class=\"card-body\">

                        <ul class=\"list-group\">
                            {% for teclado in teclados %}
                                
                                <div class=\"card list-group-item \">
                                    <div class=\"card-body\">
                                        <ul class=\"list-group\">
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Id teclado</h6></div>
                                                <div class=\"lead\">{{ teclado.id }}</div >
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Nombre teclado</h6></div>
                                                <div class=\"lead\">{{ teclado.nombre }}</div >
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Categoría teclado</h6></div>
                                                <div class=\"lead\">{{ teclado.categoria }}</div>
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Precio</h6></div>
                                                <div class=\"lead\">{{ teclado.precio }}</div>
                                            </li>
                                            <li class=\"list-group-item pb-2\">
                                                <div class=\"lead\"><h6 class=\"text-muted\">Imagen</h6></div>
                                                <div class=\"lead\">{{ teclado.imagen }}</div>
                                            </li>
                                            <li class=\"list-group-item pb-2 ml-auto border-left-0 border-right-0 border-bottom-0 \">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\">
                                                        <a class=\"btn btn-outline-primary\" href=\"{{ path('teclado_show', {'id': teclado.id}) }}\">
                                                            <span class=\"fa fa-info p-2\"> </span>Mostrar
                                                        </a>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <a class=\"btn btn-outline-info\" href=\"{{ path('teclado_edit', {'id': teclado.id}) }}\">
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
", "teclado/index.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\teclado\\index.html.twig");
    }
}
