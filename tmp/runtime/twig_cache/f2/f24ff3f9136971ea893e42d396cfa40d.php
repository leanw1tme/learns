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

/* ./subviews/navigation/language_changer_form.twig */
class __TwigTemplate_ff8f1b03b1999d3b5adec70302dd631f extends Template
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
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 7)) {
            // line 8
            echo "    ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 8), "form", [0 => twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 8), 1 => "get"], "method", false, false, true, 8), 8, $this->source);
            echo " ";
        } else {
            // line 10
            echo "    <form method=\"get\">
";
        }
        // line 12
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer.twig");
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  46 => 10,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/language_changer_form.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\navigation\\language_changer_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array();
        static $functions = array("include" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['include']
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
