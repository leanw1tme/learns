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

/* ./subviews/header/progress_bar.twig */
class __TwigTemplate_0864d53222f4a948027c54c54e6c27a8 extends Template
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
        // line 20
        if ((((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showprogress", [], "any", false, false, true, 20) == "Y") && (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 20) != "A")) &&  !twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 20))) {
            // line 21
            echo "    <!-- Top container -->
    <div class=\"";
            // line 22
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 22), "topcontainer", [], "any", false, false, true, 22), 22, $this->source);
            echo " space-col\"  ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "topcontainer", [], "any", false, false, true, 22), 22, $this->source);
            echo " >
        <div class=\"";
            // line 23
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 23), "topcontent", [], "any", false, false, true, 23), 23, $this->source);
            echo " container-fluid\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 23), "topcontent", [], "any", false, false, true, 23), 23, $this->source);
            echo " >
            ";
            // line 24
            $context["progressValue"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "progress", [], "any", false, false, true, 24), "total", [], "any", false, false, true, 24) > 0)) ? (intval((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "progress", [], "any", false, false, true, 24), "currentstep", [], "any", false, false, true, 24) - 1) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "progress", [], "any", false, false, true, 24), "total", [], "any", false, false, true, 24)) * 100))) : (0));
            // line 25
            echo "            <div class=\"visually-hidden\">";
            echo sprintf(gT("You have completed %s%% of this survey"), $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null), 25, $this->source));
            echo "</div>
                <div class=\"";
            // line 26
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 26), "progress", [], "any", false, false, true, 26), 26, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 26), "progress", [], "any", false, false, true, 26), 26, $this->source);
            echo "  aria-hidden=\"true\">
                    <div class=\"";
            // line 27
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 27), "progressbar", [], "any", false, false, true, 27), 27, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 27), "progressbar", [], "any", false, false, true, 27), 27, $this->source);
            echo " style=\"min-width: 2em; width: ";
            echo $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null), 27, $this->source);
            echo "%;\">
                        ";
            // line 28
            echo $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null), 28, $this->source);
            echo "%
                    </div>
                </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/progress_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  69 => 27,  63 => 26,  58 => 25,  56 => 24,  50 => 23,  44 => 22,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/progress_bar.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\header\\progress_bar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 24);
        static $filters = array();
        static $functions = array("intval" => 24, "sprintf" => 25, "gT" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['intval', 'sprintf', 'gT']
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
