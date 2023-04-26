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

/* ./subviews/privacy/privacy.twig */
class __TwigTemplate_847176d3daa31c62e67c7059cc6e8dae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'anonymous' => [$this, 'block_anonymous'],
            'datasecurity' => [$this, 'block_datasecurity'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
<!-- Privacy message -->

<div class=\"";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 21), "privacycontainer", [], "any", false, false, true, 21), 21, $this->source);
        echo " row\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 21), "privacycontainer", [], "any", false, false, true, 21), 21, $this->source);
        echo ">
    <div class=\"";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 22), "privacycol", [], "any", false, false, true, 22), 22, $this->source);
        echo "  col-12 col-centered\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "privacycol", [], "any", false, false, true, 22), 22, $this->source);
        echo ">
        ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 23), "hideprivacyinfo", [], "any", false, false, true, 23) == "off")) {
            // line 24
            echo "            ";
            $this->displayBlock('anonymous', $context, $blocks);
            // line 43
            echo "        ";
        }
        // line 44
        echo "        ";
        $this->displayBlock('datasecurity', $context, $blocks);
        // line 53
        echo "    </div>
</div>
";
    }

    // line 24
    public function block_anonymous($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "anonymized", [], "any", false, false, true, 25) == "Y")) {
            // line 26
            echo "                <div class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 26), "privacyhead", [], "any", false, false, true, 26), 26, $this->source);
            echo " h4 text-primary \" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 26), "privacyhead", [], "any", false, false, true, 26), 26, $this->source);
            echo ">
                    ";
            // line 27
            echo gT("This survey is anonymous.");
            echo "
                </div>
                <div>
                    <p class=\"";
            // line 30
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 30), "privacybody", [], "any", false, false, true, 30), 30, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 30), "privacybody", [], "any", false, false, true, 30), 30, $this->source);
            echo ">
                        ";
            // line 31
            echo gT("The record of your survey responses does not contain any identifying information about you, unless a specific survey question explicitly asked for it.");
            // line 33
            echo "
                    </p>
                    <p class=\"";
            // line 35
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 35), "privacybody", [], "any", false, false, true, 35), 35, $this->source);
            echo "\">
                        ";
            // line 36
            echo gT("If you used an identifying access code to access this survey, please rest assured that this code will not be stored together with your responses. It is managed in a separate database and will only be updated to indicate whether you did (or did not) complete this survey. There is no way of matching identification access codes with survey responses.");
            // line 38
            echo "
                    </p>
                </div>
                ";
        }
        // line 42
        echo "            ";
    }

    // line 44
    public function block_datasecurity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 45) != "A")) {
            // line 46
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 46) == 1)) {
                // line 47
                echo "                    ";
                echo twig_include($this->env, $context, "./subviews/privacy/privacy_text.twig");
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 48
($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 48) == 2)) {
                // line 49
                echo "                    ";
                echo twig_include($this->env, $context, "./subviews/privacy/privacy_modal.twig");
                echo "
                ";
            }
            // line 51
            echo "            ";
        }
        // line 52
        echo "        ";
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/privacy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 52,  146 => 51,  140 => 49,  138 => 48,  133 => 47,  130 => 46,  127 => 45,  123 => 44,  119 => 42,  113 => 38,  111 => 36,  107 => 35,  103 => 33,  101 => 31,  95 => 30,  89 => 27,  82 => 26,  79 => 25,  75 => 24,  69 => 53,  66 => 44,  63 => 43,  60 => 24,  58 => 23,  52 => 22,  46 => 21,  41 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/privacy/privacy.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\privacy\\privacy.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23, "block" => 24);
        static $filters = array();
        static $functions = array("gT" => 27, "include" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                [],
                ['gT', 'include']
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
