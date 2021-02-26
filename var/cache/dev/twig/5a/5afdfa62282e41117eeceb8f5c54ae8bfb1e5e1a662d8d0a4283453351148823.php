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

/* navbar/public.html.twig */
class __TwigTemplate_be7995552cf304172e39f99bcffb11d4fb037168e01f0c16f779be80741ed6ff extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/public.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">

    <div class=\"d-flex\">
        <div class=\"p-2\">
            <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/cuatrovientos.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"logoCuatrovientos\">
            </a>
        </div>

    </div>

    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <!--Begin User Security: Login -->
        <div class=\"container d-flex justify-content-end\">
            <div class=\"p-2\">
                
                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" >
                    <span class=\"btn btn-primary\">Acceder</span>
                </a>
                
            </div>
            <div class=\"p-2\">
                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_register");
        echo "\" ><span class=\"btn\">Registrarse</span></a>
            </div>
        </div>
        <!--End  User Security: Login -->
    </div>
    </div>
</nav>
<hr/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar/public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  68 => 21,  50 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">

    <div class=\"d-flex\">
        <div class=\"p-2\">
            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                <img src=\"{{asset('assets/img/cuatrovientos.png')}}\" class=\"img-fluid rounded\" alt=\"logoCuatrovientos\">
            </a>
        </div>

    </div>

    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <!--Begin User Security: Login -->
        <div class=\"container d-flex justify-content-end\">
            <div class=\"p-2\">
                
                <a href=\"{{ path('security_login') }}\" >
                    <span class=\"btn btn-primary\">Acceder</span>
                </a>
                
            </div>
            <div class=\"p-2\">
                <a href=\"{{ path('user_register') }}\" ><span class=\"btn\">Registrarse</span></a>
            </div>
        </div>
        <!--End  User Security: Login -->
    </div>
    </div>
</nav>
<hr/>
", "navbar/public.html.twig", "C:\\workspace_sym\\dw-misael-teclados\\templates\\navbar\\public.html.twig");
    }
}
