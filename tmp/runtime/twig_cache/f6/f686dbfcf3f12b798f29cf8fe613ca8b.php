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

/* ./subviews/content/mainrow.twig */
class __TwigTemplate_1f6faf40c486c6deabd9337acf865f06 extends Template
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
        // line 15
        echo "
<!-- Main Row -->
<div id=\"";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 17), "mainrow", [], "any", false, false, true, 17), 17, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 17), "mainrow", [], "any", false, false, true, 17), 17, $this->source);
        echo " >
    <!-- Main Col -->
    <div class=\"";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 19), "maincol", [], "any", false, false, true, 19), 19, $this->source);
        echo " col-centered  space-col\" id=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 19), "maincol", [], "any", false, false, true, 19), 19, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 19), "maincol", [], "any", false, false, true, 19), 19, $this->source);
        echo ">

        ";
        // line 22
        echo "            ";
        // line 23
        echo "            ";
        echo twig_include($this->env, $context, "./subviews/messages/warnings.twig");
        echo "
            ";
        // line 25
        echo "            ";
        echo twig_include($this->env, $context, "./subviews/messages/justsaved.twig");
        echo "

            ";
        // line 28
        echo "            ";
        if ((($context["include_content"] ?? null) != "./subviews/content/")) {
            // line 29
            echo "                ";
            echo twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["include_content"] ?? null), 29, $this->source));
            echo "
            ";
        }
        // line 31
        echo "

    </div> <!-- main col -->
</div> <!-- main row -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/mainrow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  75 => 29,  72 => 28,  66 => 25,  61 => 23,  59 => 22,  50 => 19,  43 => 17,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/mainrow.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\content\\mainrow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 28);
        static $filters = array();
        static $functions = array("include" => 23);

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
