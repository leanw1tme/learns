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

/* ./subviews/messages/welcome.twig */
class __TwigTemplate_8d64f00c265cfd03344012238491fdf3 extends Template
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
        // line 23
        echo "
<!-- Welcome Message -->
<div id=\"";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 25), "welcomecontainer", [], "any", false, false, true, 25), 25, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 25), "welcomecontainer", [], "any", false, false, true, 25), 25, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 25), "welcomecontainer", [], "any", false, false, true, 25), 25, $this->source);
        echo ">

    <!-- Survey Name -->
    <h1 class=\"";
        // line 28
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 28), "surveyname", [], "any", false, false, true, 28), 28, $this->source);
        echo " text-center\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 28), "surveyname", [], "any", false, false, true, 28), 28, $this->source);
        echo " >
        ";
        // line 29
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 29), 29, $this->source), 1);
        echo "
    </h1>

    <!-- Survey description -->
    <div class=\"";
        // line 33
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 33), "description", [], "any", false, false, true, 33), 33, $this->source);
        echo " text-info text-center\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 33), "description", [], "any", false, false, true, 33), 33, $this->source);
        echo ">
        ";
        // line 34
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "description", [], "any", false, false, true, 34), 34, $this->source), 1);
        echo "
    </div>

    <!-- Welcome text -->
    <div class=\"";
        // line 38
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 38), "welcome", [], "any", false, false, true, 38), 38, $this->source);
        echo " h5 text-primary\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 38), "welcome", [], "any", false, false, true, 38), 38, $this->source);
        echo ">
        ";
        // line 39
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "welcome", [], "any", false, false, true, 39), 39, $this->source), 1);
        echo "
    </div>

    <!-- Question count -->
    <div class=\"";
        // line 43
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 43), "questioncount", [], "any", false, false, true, 43), 43, $this->source);
        echo " text-muted\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 43), "questioncount", [], "any", false, false, true, 43), 43, $this->source);
        echo ">
        <div class='";
        // line 44
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 44), "questioncounttext", [], "any", false, false, true, 44), 44, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 44), "questioncounttext", [], "any", false, false, true, 44), 44, $this->source);
        echo ">

            ";
        // line 47
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowxquestions", [], "any", false, false, true, 47) == true)) {
            // line 48
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "iTotalquestions", [], "any", false, false, true, 48) < 1)) {
                // line 49
                echo "                    ";
                echo gT("There are no questions in this survey.");
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 50
($context["aSurveyInfo"] ?? null), "iTotalquestions", [], "any", false, false, true, 50) == 1)) {
                // line 51
                echo "                    ";
                echo gT("There is 1 question in this survey.");
                echo "
                ";
            } else {
                // line 53
                echo "                    ";
                echo twig_sprintf(gT("There are %s questions in this survey."), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "iTotalquestions", [], "any", false, false, true, 53), 53, $this->source));
                echo "
              ";
            }
            // line 55
            echo "            ";
        }
        // line 56
        echo "        </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/messages/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 56,  130 => 55,  124 => 53,  118 => 51,  116 => 50,  111 => 49,  108 => 48,  105 => 47,  98 => 44,  92 => 43,  85 => 39,  79 => 38,  72 => 34,  66 => 33,  59 => 29,  53 => 28,  43 => 25,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/welcome.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\messages\\welcome.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 47);
        static $filters = array("format" => 53);
        static $functions = array("processString" => 29, "gT" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['format'],
                ['processString', 'gT']
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
