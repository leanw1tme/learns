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

/* ./subviews/header/google_analytics.twig */
class __TwigTemplate_c7a6b32f8b8b3d434cb34da5a25cb01c extends Template
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
        // line 17
        if (((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", [], "any", true, true, true, 17) && twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", [], "any", false, false, true, 17)) && twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", [], "any", false, false, true, 17))) {
            // line 18
            echo "    ";
            // line 19
            echo "    ";
            if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", [], "any", false, false, true, 19)) && is_string($__internal_compile_1 = "UA-") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) {
                // line 20
                echo "        ";
                // line 21
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", [], "any", true, true, true, 21) && (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", [], "any", false, false, true, 21) == 1))) {
                    // line 22
                    echo "            <script>
            (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments) },i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '";
                    // line 28
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", [], "any", false, false, true, 28), 28, $this->source);
                    echo "', 'auto');  // Replace with your property ID.
            ga('send', 'pageview');
            </script>
        ";
                } else {
                    // line 32
                    echo "            ";
                    $context["trackUrl"] = LS_Twig_Extension::getGoogleAnalyticsTrackingUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 32), 32, $this->source), (((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "trackUrlPageName", [], "any", true, true, true, 32) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "trackUrlPageName", [], "any", false, false, true, 32)))) ? (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "trackUrlPageName", [], "any", false, false, true, 32)) : ("")));
                    // line 33
                    echo "            <script>
            (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments) }
            ,i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '";
                    // line 38
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", [], "any", false, false, true, 38), 38, $this->source);
                    echo "', 'auto');
            ga('send', 'pageview');
            ga('send', 'pageview', '";
                    // line 40
                    echo $this->sandbox->ensureToStringAllowed(($context["trackUrl"] ?? null), 40, $this->source);
                    echo "');
            </script>
        ";
                }
                // line 43
                echo "    ";
            } else {
                // line 44
                echo "        ";
                // line 45
                echo "        <!-- Google tag (gtag.js) -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=";
                // line 46
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", [], "any", false, false, true, 46), 46, $this->source);
                echo "\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '";
                // line 52
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", [], "any", false, false, true, 52), 52, $this->source);
                echo "');

            ";
                // line 54
                if ( !(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", [], "any", true, true, true, 54) && (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", [], "any", false, false, true, 54) == 1))) {
                    // line 55
                    echo "                ";
                    $context["trackUrl"] = LS_Twig_Extension::getGoogleAnalyticsTrackingUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 55), 55, $this->source), (((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "trackUrlPageName", [], "any", true, true, true, 55) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "trackUrlPageName", [], "any", false, false, true, 55)))) ? (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "trackUrlPageName", [], "any", false, false, true, 55)) : ("")));
                    // line 56
                    echo "                gtag('event', 'page_view', { page_title: '";
                    echo $this->sandbox->ensureToStringAllowed(($context["trackUrl"] ?? null), 56, $this->source);
                    echo "' })
            ";
                }
                // line 58
                echo "        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/google_analytics.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 58,  114 => 56,  111 => 55,  109 => 54,  104 => 52,  95 => 46,  92 => 45,  90 => 44,  87 => 43,  81 => 40,  76 => 38,  69 => 33,  66 => 32,  59 => 28,  51 => 22,  48 => 21,  46 => 20,  43 => 19,  41 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/google_analytics.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\header\\google_analytics.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "set" => 32);
        static $filters = array();
        static $functions = array("getGoogleAnalyticsTrackingUrl" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['getGoogleAnalyticsTrackingUrl']
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
