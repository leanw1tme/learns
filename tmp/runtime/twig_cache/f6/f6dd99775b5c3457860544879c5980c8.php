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

/* ./subviews/privacy/allinone_mode_welcome_privacy.twig */
class __TwigTemplate_0de319ac1fe4bed0ddc58989729e4b46 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 20) == "A")) {
            // line 21
            echo "    ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showwelcome", [], "any", true, true, true, 21) || ( !twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showwelcome", [], "any", false, false, true, 21) != "N"))) {
                // line 22
                echo "        ";
                echo twig_include($this->env, $context, "./subviews/messages/welcome.twig");
                echo "
    ";
            }
            // line 24
            echo "
    ";
            // line 25
            echo twig_include($this->env, $context, "./subviews/privacy/privacy.twig");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/allinone_mode_welcome_privacy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 25,  50 => 24,  44 => 22,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/privacy/allinone_mode_welcome_privacy.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\privacy\\allinone_mode_welcome_privacy.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array();
        static $functions = array("include" => 22);

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
