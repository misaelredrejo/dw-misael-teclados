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

/* user/register.html.twig */
class __TwigTemplate_85146e7055d2e24af5d61a9340d4b69d44a677c55f06f12a308bb25c7ec29ce5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
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
        $this->loadTemplate("navbar/empty.html.twig", "user/register.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Access information</h3>
                        <div class=\"card-text\">
                            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_register"), "method" => "POST"]);
        echo "
                            ";
        // line 18
        if (twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "username", [], "any", false, false, false, 18), 'errors'))) {
            // line 19
            echo "                                <span class=\"badge badge-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "username", [], "any", false, false, false, 19), 'errors');
            echo "</span>
                            ";
        }
        // line 21
        echo "                            ";
        if (twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), 'errors'))) {
            // line 22
            echo "                                <span class=\"badge badge-danger\"> ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "plainPassword", [], "any", false, false, false, 22), 'errors');
            echo "</span>
                            ";
        }
        // line 24
        echo "                            ";
        if (twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "plainPassword", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), 'errors'))) {
            // line 25
            echo "                                <span class=\"badge badge-danger\"> ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "plainPassword", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), 'errors');
            echo "</span>
                            ";
        }
        // line 27
        echo "                            ";
        if (twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), "second", [], "any", false, false, false, 27), 'errors'))) {
            // line 28
            echo "                                <span class=\"badge badge-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "plainPassword", [], "any", false, false, false, 28), "second", [], "any", false, false, false, 28), 'errors');
            echo "</span>
                            ";
        }
        // line 30
        echo "                            ";
        if (twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'errors'))) {
            // line 31
            echo "                                <span class=\"badge badge-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'errors');
            echo "</span>
                            ";
        }
        // line 33
        echo "                            <div class=\"border border-white row\">
                                <label for=\"vPosition\" class=\"col-sm-2 col-form-label\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "username", [], "any", false, false, false, 34), 'label');
        echo "</label>
                                <div class=\"col-sm-10\">
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white row\">
                                <label for=\"vPosition\" class=\"col-sm-2 col-form-label\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'label');
        echo "</label>
                                <div class=\"col-sm-10\">
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white row\">
                                <label for=\"vPosition\" class=\"col-sm-2 col-form-label\">Password: </label>
                                <div class=\"col-sm-10\">
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48), 'widget', ["attr" => ["type" => "password", "class" => "form-control"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"border border-white row\">
                                <label for=\"vPosition\" class=\"col-sm-2 col-form-label\">Repeat password: </label>
                                <div class=\"col-sm-10 mt-2\">
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "plainPassword", [], "any", false, false, false, 54), "second", [], "any", false, false, false, 54), 'widget', ["attr" => ["type" => "password", "class" => "form-control"]]);
        echo "
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Register</button>

                            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
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
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 60,  174 => 54,  165 => 48,  156 => 42,  151 => 40,  144 => 36,  139 => 34,  136 => 33,  130 => 31,  127 => 30,  121 => 28,  118 => 27,  112 => 25,  109 => 24,  103 => 22,  100 => 21,  94 => 19,  92 => 18,  88 => 17,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %}
    {% include 'navbar/empty.html.twig' %}
{% endblock %}

{% block body %}
    {{ parent() }}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Access information</h3>
                        <div class=\"card-text\">
                            {{ form_start(form, {'action': path('user_register'), 'method': 'POST'}) }}
                            {% if form_errors(form.username)|length %}
                                <span class=\"badge badge-danger\">{{ form_errors(form.username) }}</span>
                            {% endif %}
                            {% if form_errors(form.plainPassword) |length %}
                                <span class=\"badge badge-danger\"> {{ form_errors(form.plainPassword) }}</span>
                            {% endif %}
                            {% if form_errors(form.plainPassword.first)|length %}
                                <span class=\"badge badge-danger\"> {{ form_errors(form.plainPassword.first) }}</span>
                            {% endif %}
                            {% if form_errors(form.plainPassword.second)|length %}
                                <span class=\"badge badge-danger\">{{ form_errors(form.plainPassword.second) }}</span>
                            {% endif %}
                            {% if form_errors(form.email)|length %}
                                <span class=\"badge badge-danger\">{{ form_errors(form.email) }}</span>
                            {% endif %}
                            <div class=\"border border-white row\">
                                <label for=\"vPosition\" class=\"col-sm-2 col-form-label\">{{ form_label(form.username) }}</label>
                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.username) }}
                                </div>
                            </div>
                            <div class=\"border border-white row\">
                                <label for=\"vPosition\" class=\"col-sm-2 col-form-label\">{{ form_label(form.email) }}</label>
                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.email) }}
                                </div>
                            </div>
                            <div class=\"border border-white row\">
                                <label for=\"vPosition\" class=\"col-sm-2 col-form-label\">Password: </label>
                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.plainPassword.first, { 'attr': {'type': 'password', 'class': 'form-control'}  }) }}
                                </div>
                            </div>
                            <div class=\"border border-white row\">
                                <label for=\"vPosition\" class=\"col-sm-2 col-form-label\">Repeat password: </label>
                                <div class=\"col-sm-10 mt-2\">
                                    {{ form_widget(form.plainPassword.second, { 'attr': {'type': 'password', 'class': 'form-control'}  }) }}
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Register</button>

                            {{ form_end(form) }}

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
{% endblock %}", "user/register.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\user\\register.html.twig");
    }
}
