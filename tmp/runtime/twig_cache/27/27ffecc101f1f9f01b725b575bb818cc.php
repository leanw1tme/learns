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

/* ./subviews/navigation/language_changer_first_page.twig */
class __TwigTemplate_9dc232e5c189f4f1eba6be328304df86 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 20), "show", [], "any", false, false, true, 20) == true)) {
            // line 21
            echo "    ";
            $context["htmlOptions"] = ["id" => "firstpage-changelang", "autocomplete" => "off", "class" => "form"];
            // line 26
            echo "
    <!-- Start of language change Form-->
    ";
            // line 28
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 28), "form", [0 => twig_get_attribute($this->env, $this->source,             // line 29
($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 29), 1 => "post", 2 =>             // line 31
($context["htmlOptions"] ?? null)], "method", false, false, true, 28), 28, $this->source);
            // line 32
            echo "


    ";
            // line 35
            echo twig_include($this->env, $context, "./subviews/navigation/language_changer.twig");
            echo "

    </form>
";
        }
        // line 39
        echo "

";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer_first_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 39,  57 => 35,  52 => 32,  50 => 31,  49 => 29,  48 => 28,  44 => 26,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/language_changer_first_page.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\navigation\\language_changer_first_page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 21);
        static $filters = array();
        static $functions = array("include" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
