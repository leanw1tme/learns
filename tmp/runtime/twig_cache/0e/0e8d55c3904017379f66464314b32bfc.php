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

/* ./subviews/survey/question_subviews/valid_message_and_help.twig */
class __TwigTemplate_1e2c7808b2a3303a3e3bf6f4823033f6 extends Template
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
        // line 21
        echo "
<!-- LimeSurvey valid message and help -->
<div class=\"";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 23), "questionvalidcontainer", [], "any", false, false, true, 23), 23, $this->source);
        echo " text-info col-12\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 23), "questionvalidcontainer", [], "any", false, false, true, 23), 23, $this->source);
        echo ">
    ";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "valid_message", [], "any", false, false, true, 24), 24, $this->source);
        echo " ";
        // line 25
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "man_message", [], "any", false, false, true, 25), 25, $this->source);
        echo " ";
        // line 26
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "file_valid_message", [], "any", false, false, true, 26), 26, $this->source);
        echo " ";
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/valid_message_and_help.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 27,  56 => 26,  52 => 25,  49 => 24,  43 => 23,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/question_subviews/valid_message_and_help.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\survey\\question_subviews\\valid_message_and_help.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("raw" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
