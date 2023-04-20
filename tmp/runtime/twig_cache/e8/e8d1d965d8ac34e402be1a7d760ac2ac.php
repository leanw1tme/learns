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

/* ./subviews/header/nav_bar.twig */
class __TwigTemplate_8f8797175bef7628a39fe29c8b3c6499 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        $context["navClass"] = "navbar-light bg-light";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "template", [], "any", false, false, true, 20) == "bootswatch")) {
            // line 21
            echo "    ";
            $context["navClass"] = "navbar-default bg-primary";
        }
        // line 23
        echo "<!-- Bootstrap Navigation Bar -->
<div id=\"survey-nav\" class=\"navbar ";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(($context["navClass"] ?? null), 24, $this->source);
        echo " navbar-expand-md fixed-top border-bottom pt-0 pb-0\">
    <div class=\"container-fluid\">
     <a class=\"navbar-brand\" href=\"#\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\"
                aria-controls=\"small-screens-menus\" aria-expanded=\"false\">

            <span class=\"navbar-toggler-icon\"></span>
        </button>
        ";
        // line 33
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 33), "brandlogo", [], "any", false, false, true, 33) == "on")) {
            // line 34
            echo "            <div class=\"navbar-brand logo-container d-none d-md-block\">
                ";
            // line 35
            echo LS_Twig_Extension::image($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 35), "brandlogofile", [], "any", false, false, true, 35), 35, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 35), 35, $this->source), ["class" => "logo img-fluid"]);
            echo "
            </div>
        ";
        } else {
            // line 38
            echo "            <div class=\"navbar-brand\">
                ";
            // line 39
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 39), 39, $this->source);
            echo "
            </div>
        ";
        }
        // line 42
        echo "        <div id=\"navbar\" class=\"collapse navbar-collapse navbar-nav-scroll pt-2\">
            <ul class=\"nav navbar-nav navbar-action-link navbar-right ms-auto\">
                ";
        // line 44
        echo twig_include($this->env, $context, "./subviews/navigation/save_links.twig");
        echo "
                ";
        // line 45
        echo twig_include($this->env, $context, "./subviews/navigation/clearall_links.twig");
        echo "
                ";
        // line 46
        echo twig_include($this->env, $context, "./subviews/navigation/question_index_menu.twig");
        echo "
                ";
        // line 47
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer_top_menu.twig");
        echo "
            </ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/header/nav_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 47,  94 => 46,  90 => 45,  86 => 44,  82 => 42,  76 => 39,  73 => 38,  67 => 35,  64 => 34,  61 => 33,  50 => 24,  47 => 23,  43 => 21,  41 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/nav_bar.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\header\\nav_bar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 20);
        static $filters = array();
        static $functions = array("image" => 35, "include" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['image', 'include']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
