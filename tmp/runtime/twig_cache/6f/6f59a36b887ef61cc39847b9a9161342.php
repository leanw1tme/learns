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

/* ./subviews/survey/question_subviews/survey_question_help.twig */
class __TwigTemplate_60c68f8b4a31e459b605babc2c7af103 extends Template
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
        echo "
<!-- Survey question help -->
<div class=\"";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 21), "helpcontainer", [], "any", false, false, true, 21), 21, $this->source);
        echo "  text-info col-12 \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 21), "helpcontainer", [], "any", false, false, true, 21), 21, $this->source);
        echo ">
    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "help", [], "any", false, false, true, 22), "show", [], "any", false, false, true, 22)) {
            // line 23
            echo "        <div class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 23), "lsquestionhelp", [], "any", false, false, true, 23), 23, $this->source);
            echo "\">
            ";
            // line 24
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "help", [], "any", false, false, true, 24), "text", [], "any", false, false, true, 24), 24, $this->source);
            echo "
        </div>
    ";
        } else {
            // line 27
            echo "            ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "help", [], "any", false, false, true, 27), "text", [], "any", false, false, true, 27), 27, $this->source);
            echo "
    ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/survey_question_help.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 29,  62 => 27,  56 => 24,  51 => 23,  49 => 22,  43 => 21,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/question_subviews/survey_question_help.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\survey\\question_subviews\\survey_question_help.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array("raw" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw'],
                []
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
