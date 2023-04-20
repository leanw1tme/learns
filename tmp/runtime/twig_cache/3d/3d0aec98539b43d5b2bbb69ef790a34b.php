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

/* /subviews/privacy/privacy_datasecurity_notice_label.twig */
class __TwigTemplate_21af7f37ca07ec07dd0de4c83333a630 extends Template
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
        // line 4
        $context["STARTPOLICYLINK"] = "";
        // line 5
        $context["ENDPOLICYLINK"] = "";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 6) == 2)) {
            // line 7
            echo "    ";
            $context["STARTPOLICYLINK"] = (("<a href='#data-security-modal-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 7), 7, $this->source)) . "' data-bs-toggle='collapse'>");
            // line 8
            echo "    ";
            $context["ENDPOLICYLINK"] = "</a>";
            // line 9
            echo "    ";
            if (((strpos((" " . ($context["dataSecurityNoticeLabel"] ?? null)), "{STARTPOLICYLINK}") == false) && (strpos((" " . ($context["dataSecurityNoticeLabel"] ?? null)), "{ENDPOLICYLINK}") == false))) {
                // line 10
                echo "        ";
                $context["dataSecurityNoticeLabel"] = ((($this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 10, $this->source) . "<br/> {STARTPOLICYLINK}") . gT("Show policy")) . "{ENDPOLICYLINK}");
                // line 11
                echo "    ";
            }
        }
        // line 13
        $context["haveENDPOLICYLINK"] = strpos((" " . $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 13, $this->source)), "{ENDPOLICYLINK}");
        // line 14
        $context["dataSecurityNoticeLabel"] = str_replace("{STARTPOLICYLINK}", $this->sandbox->ensureToStringAllowed(($context["STARTPOLICYLINK"] ?? null), 14, $this->source), $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 14, $this->source));
        // line 15
        $context["dataSecurityNoticeLabel"] = str_replace("{ENDPOLICYLINK}", $this->sandbox->ensureToStringAllowed(($context["ENDPOLICYLINK"] ?? null), 15, $this->source), $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 15, $this->source));
        // line 16
        if ((($context["haveENDPOLICYLINK"] ?? null) == false)) {
            // line 17
            echo "    ";
            $context["dataSecurityNoticeLabel"] = ($this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 17, $this->source) . $this->sandbox->ensureToStringAllowed(($context["ENDPOLICYLINK"] ?? null), 17, $this->source));
        }
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null), 19, $this->source);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/subviews/privacy/privacy_datasecurity_notice_label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  69 => 17,  67 => 16,  65 => 15,  63 => 14,  61 => 13,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 7,  43 => 6,  41 => 5,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "/subviews/privacy/privacy_datasecurity_notice_label.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\privacy\\privacy_datasecurity_notice_label.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 6);
        static $filters = array();
        static $functions = array("strpos" => 9, "gT" => 10, "str_replace" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['strpos', 'gT', 'str_replace']
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
