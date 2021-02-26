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

/* @EasyAdmin/default/field_toggle.html.twig */
class __TwigTemplate_a8446040e5480b0e0eb5bf47220a7e47e4c65c361f26a936810ec7fcec9b3270 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((0 === twig_compare((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 3, $this->source); })()), "show")) || twig_in_filter("edit", twig_get_attribute($this->env, $this->source, (isset($context["backend_config"]) || array_key_exists("backend_config", $context) ? $context["backend_config"] : (function () { throw new RuntimeError('Variable "backend_config" does not exist.', 3, $this->source); })()), "disabled_actions", [], "any", false, false, false, 3)))) {
            // line 4
            echo "    ";
            if ((0 === twig_compare((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })()), true))) {
                // line 5
                echo "        <span class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.true", [], "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.false", [], "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <div class=\"checkbox-switch\" data-propertyname=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 10, $this->source); })()), "property", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
        <label>
            <input type=\"checkbox\" ";
            // line 12
            echo (((0 === twig_compare((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 12, $this->source); })()), true))) ? ("checked") : (""));
            echo ">
            ";
            // line 13
            echo "<span></span>
        </label>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  67 => 12,  61 => 10,  54 => 7,  48 => 5,  45 => 4,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if view == 'show' or ('edit' in backend_config.disabled_actions) %}
    {% if value == true %}
        <span class=\"badge badge-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"badge badge-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <div class=\"checkbox-switch\" data-propertyname=\"{{ field_options.property }}\">
        <label>
            <input type=\"checkbox\" {{ value == true ? 'checked' }}>
            {# the empty <span> is needed for styling. Don't remove it! #}<span></span>
        </label>
    </div>
{% endif %}
", "@EasyAdmin/default/field_toggle.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_toggle.html.twig");
    }
}
