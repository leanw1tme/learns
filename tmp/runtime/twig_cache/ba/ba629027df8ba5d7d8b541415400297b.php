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

/* ./subviews/survey/question.twig */
class __TwigTemplate_8f490847f8912bfe956ada719dee67ec extends Template
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
        // line 28
        echo "

";
        // line 31
        $context["aShow"] = twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aShow", [], "any", false, false, true, 31);
        // line 32
        echo "
    <!-- Question ";
        // line 33
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "code", [], "any", false, false, true, 33), 33, $this->source);
        echo " -->

    ";
        // line 36
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/question_subviews/question_text_container.twig");
        echo "

    ";
        // line 39
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 39), "questionhelptextposition", [], "any", false, false, true, 39) != "bottom")) {
            // line 40
            echo "        ";
            echo twig_include($this->env, $context, "./subviews/survey/question_subviews/survey_question_help.twig");
            echo "
    ";
        }
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/question_subviews/valid_message_and_help.twig");
        echo "

    ";
        // line 47
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/question_subviews/answers.twig");
        echo "

    ";
        // line 50
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 50), "questionhelptextposition", [], "any", false, false, true, 50) == "bottom")) {
            // line 51
            echo "        ";
            echo twig_include($this->env, $context, "./subviews/survey/question_subviews/survey_question_help.twig");
            echo "
    ";
        }
        // line 53
        echo "    
    <!-- End of question ";
        // line 54
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "code", [], "any", false, false, true, 54), 54, $this->source);
        echo " -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 54,  92 => 53,  86 => 51,  83 => 50,  77 => 47,  71 => 44,  68 => 42,  62 => 40,  59 => 39,  53 => 36,  48 => 33,  45 => 32,  43 => 31,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/question.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\survey\\question.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 39);
        static $filters = array();
        static $functions = array("include" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
