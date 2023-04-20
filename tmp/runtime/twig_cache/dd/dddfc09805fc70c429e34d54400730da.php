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

/* ./subviews/navigation/navigator.twig */
class __TwigTemplate_06d8286a31fb0f078d628dc37bb5332b extends Template
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
";
        // line 23
        $context["aNavigator"] = twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 23);
        // line 24
        echo "
<!-- PRESENT THE NAVIGATOR -->
<div class=\"";
        // line 26
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 26), "navigatorcontainer", [], "any", false, false, true, 26), 26, $this->source);
        echo " row navigator space-col\" id=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 26), "navigatorcontainer", [], "any", false, false, true, 26), 26, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 26), "navigatorcontainer", [], "any", false, false, true, 26), 26, $this->source);
        echo ">

    <!-- Previous button container -->
    <div class=\"";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 29), "navigatorbuttonl", [], "any", false, false, true, 29), 29, $this->source);
        echo " col-6 text-start\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 29), "navigatorbuttonl", [], "any", false, false, true, 29), 29, $this->source);
        echo ">

        ";
        // line 32
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aNavigator"] ?? null), "aMovePrev", [], "any", false, false, true, 32), "show", [], "any", false, false, true, 32)) {
            // line 33
            echo "            <!-- Button previous -->
            <button ";
            // line 34
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 34), "navigatorbuttonprev", [], "any", false, false, true, 34), 34, $this->source);
            echo " accesskey=\"p\" class=\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aNavigator"] ?? null), "disabled", [], "any", false, false, true, 34), 34, $this->source);
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 34), "navigatorbuttonprev", [], "any", false, false, true, 34), 34, $this->source);
            echo " btn btn-lg btn-outline-secondary \" >
                ";
            // line 35
            echo gT("Previous");
            echo "
            </button>
        ";
        }
        // line 38
        echo "    </div>
    <div class=\"";
        // line 39
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 39), "navigatorbuttonr", [], "any", false, false, true, 39), 39, $this->source);
        echo " col-6 text-end\">

        ";
        // line 42
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aNavigator"] ?? null), "aMoveNext", [], "any", false, false, true, 42), "show", [], "any", false, false, true, 42)) {
            // line 43
            echo "
            ";
            // line 45
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aNavigator"] ?? null), "aMoveNext", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45) == "movesubmit")) {
                // line 46
                echo "                ";
                if (((( !empty(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "mandViolation", [], "any", false, false, true, 46)) &&  !empty(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "mandSoft", [], "any", false, false, true, 46))) && empty(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "mandNonSoft", [], "any", false, false, true, 46))) && (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showPopups", [], "any", false, false, true, 46) != 1))) {
                    // line 47
                    echo "                <span class=\"checkbox-item\">
                    <input class=\"";
                    // line 48
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 48), "mandsoftcheckbox", [], "any", false, false, true, 48), 48, $this->source);
                    echo "\" type=\"checkbox\" name=\"mandSoft\" id=\"mandSoft\" value=\"";
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 48), "aMoveNext", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48), 48, $this->source);
                    echo "\" />
                    <label for=\"mandSoft\" class=\"control-label ";
                    // line 49
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 49), "mandsoftcheckboxlabel", [], "any", false, false, true, 49), 49, $this->source);
                    echo "\">";
                    echo gT("Continue without answering");
                    echo "</label>&nbsp;
                </span>
                ";
                }
                // line 52
                echo "                <!-- Button submit -->
                <button ";
                // line 53
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 53), "navigatorbuttonsubmit", [], "any", false, false, true, 53), 53, $this->source);
                echo " accesskey=\"n\" class=\" ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aNavigator"] ?? null), "disabled", [], "any", false, false, true, 53), 53, $this->source);
                echo " ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 53), "navigatorbuttonsubmit", [], "any", false, false, true, 53), 53, $this->source);
                echo " btn btn-lg btn-primary\">
                    ";
                // line 54
                echo gT("Submit");
                echo "
                </button>
            ";
            } else {
                // line 57
                echo "                <!-- Button Next -->
                <button ";
                // line 58
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 58), "navigatorbuttonnext", [], "any", false, false, true, 58), 58, $this->source);
                echo " accesskey=\"n\" class=\" ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aNavigator"] ?? null), "disabled", [], "any", false, false, true, 58), 58, $this->source);
                echo " ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 58), "navigatorbuttonnext", [], "any", false, false, true, 58), 58, $this->source);
                echo " btn btn-lg btn-primary \" >
                    ";
                // line 59
                echo gT("Next");
                echo "
                </button>
            ";
            }
            // line 62
            echo "        ";
        }
        // line 63
        echo "    </div>
</div>
<!-- Extra navigator part -->
";
        // line 66
        echo twig_include($this->env, $context, "./subviews/navigation/navigator_complement.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/navigator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 66,  159 => 63,  156 => 62,  150 => 59,  142 => 58,  139 => 57,  133 => 54,  125 => 53,  122 => 52,  114 => 49,  108 => 48,  105 => 47,  102 => 46,  99 => 45,  96 => 43,  93 => 42,  88 => 39,  85 => 38,  79 => 35,  71 => 34,  68 => 33,  65 => 32,  58 => 29,  48 => 26,  44 => 24,  42 => 23,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/navigator.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\navigator.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 32);
        static $filters = array();
        static $functions = array("gT" => 35, "empty" => 46, "include" => 66);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['gT', 'empty', 'include']
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
