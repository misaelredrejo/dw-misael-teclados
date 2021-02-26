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

/* default/index.html.twig */
class __TwigTemplate_15d00b44a082acae7d84bc3aa67d318b794ebec0d963725bf8110d32400770b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "    ";
        $this->loadTemplate("navbar/public.html.twig", "default/index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container-fluid alert alert-dark alert-dismissible fade show
         pt-0 pb-2\" role=\"alert\" >
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <h2 class=\"alert-heading display-2\">Teclados Misael</h2>
                <hr>
                <p class=\"mb-0 lead\">Venta de teclados de todas las gamas y precios, desde teclados mecánicos hasta teclados de membrana. Venta a todo el mundo</p>
            </div>
        </div>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" arialabel=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <h6 class=\"lead\">A continuación les mostramos los teclados</h6>
            </div>
        </div>
        <div class=\"row bg-white\">
            <div class=\"col-8 mx-auto \">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teclados"]) || array_key_exists("teclados", $context) ? $context["teclados"] : (function () { throw new RuntimeError('Variable "teclados" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teclado"]) {
            // line 30
            echo "                    <div class=\"media py-2\">
                        <img class=\"my-auto card-img\" style=\"width:60px\"
                             src=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teclado"], "getImagen", [], "method", false, false, false, 32), "html", null, true);
            echo "\" alt=\"imagen teclado\">
                        <div class=\"media-body\">
                            
                            <div class=\"mx-4 d-flex justify-content-between \">
                                <h4 class=\"p-0\"> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teclado"], "getNombre", [], "method", false, false, false, 36), "html", null, true);
            echo "
                                    ";
            // line 38
            echo "                                </h4>
                                ";
            // line 40
            echo "                            </div>
                            
                            <div class=\"px-2\">
                                <p class=\"card-body text-muted mb-0\"> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teclado"], "getDescripcion", [], "method", false, false, false, 43), "html", null, true);
            echo " </p>
                            </div>
                        </div>
                    </div>
                    <hr/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teclado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 49,  125 => 43,  120 => 40,  117 => 38,  113 => 36,  106 => 32,  102 => 30,  98 => 29,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %}
    {% include 'navbar/public.html.twig' %}{% endblock %}


{% block body %}
    <div class=\"container-fluid alert alert-dark alert-dismissible fade show
         pt-0 pb-2\" role=\"alert\" >
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <h2 class=\"alert-heading display-2\">Teclados Misael</h2>
                <hr>
                <p class=\"mb-0 lead\">Venta de teclados de todas las gamas y precios, desde teclados mecánicos hasta teclados de membrana. Venta a todo el mundo</p>
            </div>
        </div>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" arialabel=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-10 mx-auto\">
                <h6 class=\"lead\">A continuación les mostramos los teclados</h6>
            </div>
        </div>
        <div class=\"row bg-white\">
            <div class=\"col-8 mx-auto \">
                {% for teclado in teclados %}
                    <div class=\"media py-2\">
                        <img class=\"my-auto card-img\" style=\"width:60px\"
                             src=\"{{ teclado.getImagen() }}\" alt=\"imagen teclado\">
                        <div class=\"media-body\">
                            
                            <div class=\"mx-4 d-flex justify-content-between \">
                                <h4 class=\"p-0\"> {{ teclado.getNombre() }}
                                    {#<small ><i > {{ offer.getDActivationDate()| date('d-m-Y') }}</i></small>#}
                                </h4>
                                {#<a href=\"{{ path('offers_show', {'id':offer.getId()}) }}\" class=\"btn btn-outline-primary\">More details...</a>#}
                            </div>
                            
                            <div class=\"px-2\">
                                <p class=\"card-body text-muted mb-0\"> {{ teclado.getDescripcion() }} </p>
                            </div>
                        </div>
                    </div>
                    <hr/>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "default/index.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\default\\index.html.twig");
    }
}
