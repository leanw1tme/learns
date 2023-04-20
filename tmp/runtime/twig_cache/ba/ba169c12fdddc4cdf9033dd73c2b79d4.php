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

/* ./subviews/navigation/question_index_buttons.twig */
class __TwigTemplate_c538741f07167b6b5b22cf9327df7e1c extends Template
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
        echo "
<div class=\"col-md-6 index-wrapper\">
    ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 9) == "G")) {
            // line 10
            echo "        ";
            echo twig_include($this->env, $context, "./subviews/navigation/question_index_groups_buttons.twig");
            echo "
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 13) == "S")) {
            // line 14
            echo "        ";
            echo twig_include($this->env, $context, "./subviews/navigation/question_index_questions_buttons.twig");
            echo "
    ";
        }
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  56 => 14,  54 => 13,  51 => 12,  45 => 10,  43 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/question_index_buttons.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\question_index_buttons.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array();
        static $functions = array("include" => 10);

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
