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

/* ./subviews/header/start_form.twig */
class __TwigTemplate_e916935631beacf923123919da4d5eb3 extends Template
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
        // line 24
        echo "
";
        // line 30
        $context["htmlOptions"] = ["id" => "limesurvey", "name" => "limesurvey", "autocomplete" => "off", "class" => "survey-form-container form"];
        // line 37
        echo "
";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "upload_file", [], "any", false, false, true, 39) == true)) {
            // line 40
            echo "    ";
            $context["htmlOptions"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["htmlOptions"] ?? null), 40, $this->source), ["enctype" => "multipart/form-data"]);
        }
        // line 45
        echo "
<!-- Start of the main Form-->
";
        // line 47
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["C"] ?? null), "Html", [], "any", false, false, true, 48), "form", [0 => twig_get_attribute($this->env, $this->source,         // line 49
($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 49), 1 => "post", 2 =>         // line 51
($context["htmlOptions"] ?? null)], "method", false, false, true, 48), 48, $this->source);
        // line 53
        echo "

<!-- Ajax value -->
<!-- Needs to be set by javascript! Because if JavaScript is disabled, ajaxmode will completely fail! -->
";
        // line 57
        echo LS_Twig_Extension::registerScript("AJAXACTIVATE", "
    \$('#limesurvey').append('<input type=\"hidden\" name=\"ajax\" value=\"off\" id=\"ajax\" />');
    ", "POS_POSTSCRIPT");
        // line 61
        echo "


<!-- Field Names -->
<input type='hidden' name='fieldnames' value='";
        // line 65
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "hiddenfieldnames", [], "any", false, false, true, 65), 65, $this->source);
        echo "' id='fieldnames' />

";
        // line 68
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "hiddenInputs", [], "any", false, false, true, 68), 68, $this->source);
        echo "

<!-- Submit button -->
<button type=\"submit\" id=\"defaultbtn\" value=\"default\" name=\"move\" class=\"submit d-none\" style=\"display:none\">";
        // line 71
        echo gT("default");
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "./subviews/header/start_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 71,  83 => 68,  78 => 65,  72 => 61,  68 => 57,  62 => 53,  60 => 51,  59 => 49,  58 => 48,  57 => 47,  53 => 45,  49 => 40,  47 => 39,  44 => 37,  42 => 30,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/start_form.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\header\\start_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 39);
        static $filters = array("merge" => 40);
        static $functions = array("registerScript" => 58, "gT" => 71);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge'],
                ['registerScript', 'gT']
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
