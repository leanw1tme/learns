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

/* __string_template__d38bd62e1a85c955c066e735b28cedcc */
class __TwigTemplate_d9b4b2461a4401bf75be1977832dbfaf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        echo LS_Twig_Extension::registerTemplateCssFile("css/errors.css");
        echo "
";
        // line 28
        $context["aError"] = twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aError", [], "any", false, false, true, 28);
        // line 29
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 31), 31, $this->source);
        echo "\" dir=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 31), 31, $this->source);
        echo "\"
      class=\"";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 32), 32, $this->source);
        echo " dir-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 32), 32, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 32), "html", [], "any", false, false, true, 32), 32, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 32), "html", [], "any", false, false, true, 32), 32, $this->source);
        echo "
      xmlns=\"http://www.w3.org/1999/html\">

<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    <title>
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 41)) {
            // line 42
            echo "            ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 42), 42, $this->source);
            echo "
        ";
        } else {
            // line 44
            echo "            Error ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_title", [], "any", false, false, true, 44), 44, $this->source);
            echo "
        ";
        }
        // line 46
        echo "    </title>

    <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\"/>
    ";
        // line 49
        if (LS_Twig_Extension::imageSrc("./files/favicon.ico")) {
            // line 50
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo LS_Twig_Extension::imageSrc("./files/favicon.ico");
            echo "\"/>
    ";
        }
        // line 52
        echo "</head>

<body class=\"";
        // line 54
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 54), "body", [], "any", false, false, true, 54), 54, $this->source);
        echo " lang-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 54), 54, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(($context["surveyformat"] ?? null), 54, $this->source);
        echo "\" marginwidth=\"0\"
      marginheight=\"0\" ";
        // line 55
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 55), "body", [], "any", false, false, true, 55), 55, $this->source);
        echo ">
<div class=\"container\">
    <div id=\"error-card\" class=\"card w-75 mt-6 mb-0 mx-auto\">
        <div class=\"card-body\">
            <h2 class=\"card-title\">
                ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 60)) {
            // line 61
            echo "                    ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 61), 61, $this->source);
            echo "
                ";
        }
        // line 63
        echo "                ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "title", [], "any", false, false, true, 63), 63, $this->source);
        echo "
            </h2>
            <hr>
            <div class=\"card-text\">";
        // line 66
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "message", [], "any", false, false, true, 66), 66, $this->source);
        echo "</div>
            ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "contact", [], "any", false, false, true, 67)) {
            // line 68
            echo "                ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "contact", [], "any", false, false, true, 68), 68, $this->source);
            echo "
            ";
        } else {
            // line 70
            echo "                ";
            echo twig_sprintf(gT("For further information please contact %s:"), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "admin", [], "any", false, false, true, 70), 70, $this->source));
            echo "
                ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "adminemail", [], "any", false, false, true, 71)) {
                // line 72
                echo "                    <br>
                    <a class=\"card-link\" href='mailto:";
                // line 73
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "adminemail", [], "any", false, false, true, 73), 73, $this->source);
                echo "'>";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "adminemail", [], "any", false, false, true, 73), 73, $this->source);
                echo "</a>
                ";
            }
            // line 75
            echo "            ";
        }
        // line 76
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "trace", [], "any", false, false, true, 76))) {
            // line 77
            echo "                <pre>
                        ";
            // line 78
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "trace", [], "any", false, false, true, 78), 78, $this->source);
            echo "
                </pre>
            ";
        }
        // line 81
        echo "        </div>

    </div>
</div>
";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "</body>
</html>
";
    }

    // line 85
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__d38bd62e1a85c955c066e735b28cedcc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 86,  197 => 85,  191 => 88,  189 => 85,  183 => 81,  177 => 78,  174 => 77,  171 => 76,  168 => 75,  161 => 73,  158 => 72,  156 => 71,  151 => 70,  145 => 68,  143 => 67,  139 => 66,  132 => 63,  126 => 61,  124 => 60,  116 => 55,  108 => 54,  104 => 52,  98 => 50,  96 => 49,  91 => 46,  85 => 44,  79 => 42,  77 => 41,  59 => 32,  53 => 31,  49 => 29,  47 => 28,  43 => 27,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d38bd62e1a85c955c066e735b28cedcc", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "if" => 41, "block" => 85);
        static $filters = array("format" => 70);
        static $functions = array("registerTemplateCssFile" => 27, "imageSrc" => 49, "gT" => 70, "include" => 86);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['format'],
                ['registerTemplateCssFile', 'imageSrc', 'gT', 'include']
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
