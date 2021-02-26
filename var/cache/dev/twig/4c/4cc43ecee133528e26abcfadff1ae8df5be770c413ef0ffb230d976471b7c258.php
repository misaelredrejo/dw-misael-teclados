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

/* security/login.html.twig */
class __TwigTemplate_570f3f728acb190b19da4690068af36e3c5d713d738a21b35976e1e43dd27e0e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 3
        echo "    ";
        $this->loadTemplate("navbar/empty.html.twig", "security/login.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-8 mx-auto\">

                    <div class=\"card\">
                        <div class=\"card-header\">
                            Accede
                        </div>
                        <div class=\"card-body\">

                         ";
        // line 17
        echo "                            <form method=\"post\">

                            ";
        // line 19
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "                                <div class=\"alert alert-danger\">
                                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageData", [], "any", false, false, false, 21), "security"), "html", null, true);
            echo "
                                </div>
                            ";
        }
        // line 24
        echo "                            <div class=\"border border-white  row\">
                                ";
        // line 26
        echo "                                <div class=\"col-8\">
                                   ";
        // line 28
        echo "                                    <input type=\"email\"  name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
";
        // line 34
        echo "                                <div class=\"col-8\">
                                   ";
        // line 36
        echo "                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
                                    <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success\">Login <span class=\"fa fa-lock\"></span></button>
                            &nbsp;
                            <a  href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_register");
        echo "\">Register</a>
                           ";
        // line 45
        echo "                            </form>

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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 45,  129 => 43,  121 => 38,  117 => 36,  114 => 34,  108 => 28,  105 => 26,  102 => 24,  96 => 21,  93 => 20,  91 => 19,  87 => 17,  75 => 6,  68 => 5,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block navbar %}
    {% include 'navbar/empty.html.twig' %}
{% endblock %}
    {% block body %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-8 mx-auto\">

                    <div class=\"card\">
                        <div class=\"card-header\">
                            Accede
                        </div>
                        <div class=\"card-body\">

                         {#   {{ form_start(form, { 'class': 'form-inline' }) }}#}
                            <form method=\"post\">

                            {% if error %}
                                <div class=\"alert alert-danger\">
                                    {{ error.messageKey|trans(error.messageData, 'security') }}
                                </div>
                            {% endif %}
                            <div class=\"border border-white  row\">
                                {#<label for=\"vTitle\" class=\"col-4 col-form-label\">{{ form_label(form.email) }}</label>#}
                                <div class=\"col-8\">
                                   {# {{ form_widget(form.email) }} #}
                                    <input type=\"email\"  name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>
                                </div>
                            </div>
                            <div class=\"border border-white  row\">
{#                                <label for=\"vTitle\" class=\"col-4 col-form-label\">{{ form_label(form.password) }}</label>
#}
                                <div class=\"col-8\">
                                   {# {{ form_widget(form.password) }} #}
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
                                    <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"{{ csrf_token('authenticate') }}\">
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success\">Login <span class=\"fa fa-lock\"></span></button>
                            &nbsp;
                            <a  href=\"{{ path('user_register') }}\">Register</a>
                           {# {{ form_end(form) }}#}
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    {% endblock %}



", "security/login.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\security\\login.html.twig");
    }
}
