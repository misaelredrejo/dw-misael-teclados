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

/* navbar/private.html.twig */
class __TwigTemplate_baa73c2b301c935c9edcded86b59bc4ea95d66b7017d487677652fc28b2841b9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/private.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-white \" >
    <a class=\"navbar-brand d-flex flex-column\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/dev_logo.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"logoCuatrovientos\">
        <span class=\"badge\"> ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4), "html", null, true);
        echo "</span>
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <ul class=\"navbar-nav mr-auto\">
                ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER_EMPLOYEERS")) {
            // line 14
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offers_new");
            echo "\" ><span class=\"fa fa-file p-2\"></span>Publicar ofertas</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offers_index");
            echo "\" ><span class=\"fa fa-address-book p-2\"></span>Mis ofertas</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cvs_index");
            echo "\" ><span class=\"fa fa-binoculars p-2\"></span>Buscador de  CVs</a>
                    </li>
                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER_FORMER_STUDENTS")) {
            // line 24
            echo "                    <li class=\"nav-item\">
                       <a class=\"nav-link \" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formerstudents_show", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "username", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"><span class=\"fa fa-file p-2\"></span>Mi CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_appliances", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
                            <span class=\"fa fa-address-book p-2\"></span> Mis Candidaturas
                        </a>
                    </li>

                ";
        }
        // line 34
        echo "            </ul>
            <ul class=\"navbar-nav d-flex justify-content-end\">
                <li class=\"nav-item\">
                    <a class=\"nav-link \"  href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\" ><span class=\"fa fa-sign-out  p-2\"></span> Salir</a>
                </li>
            </ul>

    </div>
</nav>
<hr/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar/private.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  104 => 34,  95 => 28,  89 => 25,  86 => 24,  80 => 21,  74 => 18,  68 => 15,  65 => 14,  63 => 13,  51 => 4,  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-white \" >
    <a class=\"navbar-brand d-flex flex-column\" href=\"{{ path('homepage') }}\">
        <img src=\"{{ asset('assets/img/dev_logo.png') }}\" class=\"img-fluid rounded\" alt=\"logoCuatrovientos\">
        <span class=\"badge\"> {{ app.user.username }}</span>
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <ul class=\"navbar-nav mr-auto\">
                {% if is_granted('ROLE_USER_EMPLOYEERS') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"{{ path('offers_new') }}\" ><span class=\"fa fa-file p-2\"></span>Publicar ofertas</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"{{ path('offers_index') }}\" ><span class=\"fa fa-address-book p-2\"></span>Mis ofertas</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"{{ path('cvs_index') }}\" ><span class=\"fa fa-binoculars p-2\"></span>Buscador de  CVs</a>
                    </li>
                    {% elseif is_granted('ROLE_USER_FORMER_STUDENTS') %}
                    <li class=\"nav-item\">
                       <a class=\"nav-link \" href=\"{{ path('formerstudents_show', {'username': app.user.username } ) }}\"><span class=\"fa fa-file p-2\"></span>Mi CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"{{ path('show_appliances', {'username': app.user.username } ) }}\">
                            <span class=\"fa fa-address-book p-2\"></span> Mis Candidaturas
                        </a>
                    </li>

                {% endif %}
            </ul>
            <ul class=\"navbar-nav d-flex justify-content-end\">
                <li class=\"nav-item\">
                    <a class=\"nav-link \"  href=\"{{ path('security_logout') }}\" ><span class=\"fa fa-sign-out  p-2\"></span> Salir</a>
                </li>
            </ul>

    </div>
</nav>
<hr/>
", "navbar/private.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\navbar\\private.html.twig");
    }
}
