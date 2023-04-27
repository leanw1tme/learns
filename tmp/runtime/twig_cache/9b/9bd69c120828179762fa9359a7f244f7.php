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

/* ./subviews/survey/question_subviews/question_text_content.twig */
class __TwigTemplate_30937949f5ec5df4ab72d45701300a70 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "mandatory", [], "any", false, false, true, 20) == "Y")) {
            // line 21
            echo "    ";
            echo twig_include($this->env, $context, "./subviews/survey/question_subviews/asterisk.twig");
            echo "
";
        }
        // line 23
        echo "
";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["aShow"] ?? null), "question_number", [], "any", false, false, true, 25)) {
            // line 26
            echo "    <span class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 26), "questionnumber", [], "any", false, false, true, 26), 26, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 26), "questionnumber", [], "any", false, false, true, 26), 26, $this->source);
            echo " >
        ";
            // line 27
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "number", [], "any", false, false, true, 27), 27, $this->source);
            echo "
    </span>
";
        }
        // line 30
        echo "
";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["aShow"] ?? null), "question_code", [], "any", false, false, true, 32)) {
            // line 33
            echo "    <span class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 33), "questioncode", [], "any", false, false, true, 33), 33, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 33), "questioncode", [], "any", false, false, true, 33), 33, $this->source);
            echo ">
        ";
            // line 34
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "code", [], "any", false, false, true, 34), 34, $this->source);
            echo "
    </span>
";
        }
        // line 37
        echo "
";
        // line 39
        echo "<div class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 39), "questiontext", [], "any", false, false, true, 39), 39, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 39), "questiontext", [], "any", false, false, true, 39), 39, $this->source);
        echo ">
    <div id=\"ls-question-text-";
        // line 40
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "SGQ", [], "any", false, false, true, 40), 40, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 40), "lsquestiontext", [], "any", false, false, true, 40), 40, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 40), "lsquestiontext", [], "any", false, false, true, 40), 40, $this->source);
        echo ">
        ";
        // line 41
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aQuestion"] ?? null), "text", [], "any", false, false, true, 41), 41, $this->source);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/question_text_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  93 => 40,  86 => 39,  83 => 37,  77 => 34,  70 => 33,  68 => 32,  65 => 30,  59 => 27,  52 => 26,  50 => 25,  47 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/question_subviews/question_text_content.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\survey\\question_subviews\\question_text_content.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array("raw" => 41);
        static $functions = array("include" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw'],
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
