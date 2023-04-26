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

/* ./subviews/content/submit.twig */
class __TwigTemplate_3593544390401661ffcdc04f254f02c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'endtext' => [$this, 'block_endtext'],
            'assessments' => [$this, 'block_assessments'],
            'printanswer' => [$this, 'block_printanswer'],
            'publicstatistics' => [$this, 'block_publicstatistics'],
            'endurl' => [$this, 'block_endurl'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
";
        // line 28
        echo "<!-- main form -->
";
        // line 29
        echo twig_include($this->env, $context, "./subviews/header/start_form.twig");
        echo "
    ";
        // line 31
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "EM", [], "any", false, false, true, 31), "ScriptsAndHiddenInputs", [], "any", false, false, true, 31), 31, $this->source);
        echo "
    <div class=\"";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 32), "submitwrapper", [], "any", false, false, true, 32), 32, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 32), "submitwrapper", [], "any", false, false, true, 32), 32, $this->source);
        echo ">
        <div class='";
        // line 33
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 33), "submitwrappertext", [], "any", false, false, true, 33), 33, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 33), "submitwrappertext", [], "any", false, false, true, 33), 33, $this->source);
        echo ">
            ";
        // line 34
        $this->displayBlock('endtext', $context, $blocks);
        // line 42
        echo "
            ";
        // line 43
        $this->displayBlock('assessments', $context, $blocks);
        // line 49
        echo "
            ";
        // line 50
        $this->displayBlock('printanswer', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('publicstatistics', $context, $blocks);
        // line 73
        echo "
            ";
        // line 75
        echo "            ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 75), "sPluginHTML", [], "any", false, false, true, 75), 75, $this->source);
        echo "

            ";
        // line 77
        $this->displayBlock('endurl', $context, $blocks);
        // line 83
        echo "        </div>
    </div>
</form> <!-- main form -->
";
    }

    // line 34
    public function block_endtext($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 35), "showDefault", [], "any", false, false, true, 35) == true)) {
            // line 36
            echo "                <p ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 36), "submitwrappertextpa", [], "any", false, false, true, 36), 36, $this->source);
            echo ">";
            echo gT("Thank you!");
            echo "</p>
                <p ";
            // line 37
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 37), "submitwrappertextpb", [], "any", false, false, true, 37), 37, $this->source);
            echo ">";
            echo gT("Your survey responses have been recorded.");
            echo "</p>
            ";
        } else {
            // line 39
            echo "                ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 39), "sEndText", [], "any", false, false, true, 39), 39, $this->source);
            echo "
            ";
        }
        // line 41
        echo "            ";
    }

    // line 43
    public function block_assessments($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "            ";
        // line 45
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aAssessments", [], "any", false, false, true, 45), "show", [], "any", false, false, true, 45)) {
            // line 46
            echo "                ";
            echo twig_include($this->env, $context, "./subviews/messages/assessments.twig");
            echo "
            ";
        }
        // line 48
        echo "            ";
    }

    // line 50
    public function block_printanswer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "            ";
        // line 52
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 52), "aPrintAnswers", [], "any", false, false, true, 52), "show", [], "any", false, false, true, 52) == true)) {
            // line 53
            echo "                <!--  Link to Print Answer Preview -->
                <div class=\"";
            // line 54
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 54), "submitwrapperdiva", [], "any", false, false, true, 54), 54, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 54), "submitwrapperdiv", [], "any", false, false, true, 54), 54, $this->source);
            echo ">
                    <a href=\"";
            // line 55
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 55), "aPrintAnswers", [], "any", false, false, true, 55), "sUrl", [], "any", false, false, true, 55), 55, $this->source);
            echo "\" title=";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 55), "aPrintAnswers", [], "any", false, false, true, 55), "sTitle", [], "any", false, false, true, 55), 55, $this->source);
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 55), "submitwrapperdivaa", [], "any", false, false, true, 55), 55, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 55), "submitwrapperdivaa", [], "any", false, false, true, 55), 55, $this->source);
            echo ">
                        ";
            // line 56
            echo gT("Print your answers.");
            echo "
                    </a>
                </div>
            ";
        }
        // line 60
        echo "            ";
    }

    // line 62
    public function block_publicstatistics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "            ";
        // line 64
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 64), "aPublicStatistics", [], "any", false, false, true, 64), "show", [], "any", false, false, true, 64) == true)) {
            // line 65
            echo "                <!-- Link to Public statistics -->
                <div class=\"";
            // line 66
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 66), "submitwrapperdivb", [], "any", false, false, true, 66), 66, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 66), "submitwrapperdivb", [], "any", false, false, true, 66), 66, $this->source);
            echo ">
                    <a href=\"";
            // line 67
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 67), "aPublicStatistics", [], "any", false, false, true, 67), "sUrl", [], "any", false, false, true, 67), 67, $this->source);
            echo "\" title=";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 67), "aPublicStatistics", [], "any", false, false, true, 67), "sTitle", [], "any", false, false, true, 67), 67, $this->source);
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 67), "submitwrapperdivba", [], "any", false, false, true, 67), 67, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 67), "submitwrapperdivba", [], "any", false, false, true, 67), 67, $this->source);
            echo ">
                        ";
            // line 68
            echo gT("View the statistics for this survey.");
            echo "
                    </a>
                </div>
            ";
        }
        // line 72
        echo "            ";
    }

    // line 77
    public function block_endurl($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "            ";
        // line 79
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 79), "sSurveylsUrl", [], "any", false, false, true, 79)) {
            // line 80
            echo "                <a href=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 80), "sSurveylsUrl", [], "any", false, false, true, 80), 80, $this->source);
            echo "\">";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 80), "sSurveylsUrlDescription", [], "any", false, false, true, 80), 80, $this->source);
            echo "</a>
            ";
        }
        // line 82
        echo "            ";
    }

    public function getTemplateName()
    {
        return "./subviews/content/submit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 82,  243 => 80,  240 => 79,  238 => 78,  234 => 77,  230 => 72,  223 => 68,  213 => 67,  207 => 66,  204 => 65,  201 => 64,  199 => 63,  195 => 62,  191 => 60,  184 => 56,  174 => 55,  168 => 54,  165 => 53,  162 => 52,  160 => 51,  156 => 50,  152 => 48,  146 => 46,  143 => 45,  141 => 44,  137 => 43,  133 => 41,  127 => 39,  120 => 37,  113 => 36,  110 => 35,  106 => 34,  99 => 83,  97 => 77,  91 => 75,  88 => 73,  86 => 62,  83 => 61,  81 => 50,  78 => 49,  76 => 43,  73 => 42,  71 => 34,  65 => 33,  59 => 32,  54 => 31,  50 => 29,  47 => 28,  44 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/submit.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\content\\submit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 34, "if" => 35);
        static $filters = array();
        static $functions = array("include" => 29, "gT" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                [],
                ['include', 'gT']
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
