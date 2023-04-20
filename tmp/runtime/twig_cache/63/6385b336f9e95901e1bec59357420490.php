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

/* ./subviews/messages/bootstrap_alert_modal.twig */
class __TwigTemplate_00691c2c2b43d1a03a28fc36a38be0ab extends Template
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
        // line 25
        if ((empty(LS_Twig_Extension::json_decode(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "jPopup", [], "any", false, false, true, 25))) == false)) {
            // line 26
            echo "    ";
            echo LS_Twig_Extension::registerScript("startPopup", ("LSvar.startPopups = " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "jPopup", [], "any", false, false, true, 26), 26, $this->source)), "POS_HEAD");
            echo "
    ";
            // line 27
            echo LS_Twig_Extension::registerScript("showStartPopups", (("window.templateCore.alertSurveyDialog(" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "jPopup", [], "any", false, false, true, 27), 27, $this->source)) . ");"), "POS_END");
            echo "
    ";
            // line 28
            echo LS_Twig_Extension::registerScript("activateSoftMandatory", "activateSoftMandatory();", "POS_END");
            echo "
";
        }
        // line 30
        echo "
<!-- Bootstrap Modal Alert -->
";
        // line 32
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 32), "alertmodal", [], "any", false, false, true, 32)) {
            // line 33
            echo "<div id=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 33), "alertmodal", [], "any", false, false, true, 33), 33, $this->source);
            echo "\" class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 33), "alertmodal", [], "any", false, false, true, 33), 33, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 33), "alertmodal", [], "any", false, false, true, 33), 33, $this->source);
            echo ">
    <div class=\"";
            // line 34
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 34), "modaldialog", [], "any", false, false, true, 34), 34, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 34), "modaldialog", [], "any", false, false, true, 34), 34, $this->source);
            echo ">
        <div class=\"";
            // line 35
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 35), "modalcontent", [], "any", false, false, true, 35), 35, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 35), "modalcontent", [], "any", false, false, true, 35), 35, $this->source);
            echo " >
            <div class=\"";
            // line 36
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 36), "modalheader", [], "any", false, false, true, 36), 36, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 36), "modalheader", [], "any", false, false, true, 36), 36, $this->source);
            echo " >
                <button  ";
            // line 37
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 37), "modalclosebutton", [], "any", false, false, true, 37), 37, $this->source);
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 37), "modalclosebutton", [], "any", false, false, true, 37), 37, $this->source);
            echo "\"  >&times;</button>
                <div class=\"";
            // line 38
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 38), "modaltitle", [], "any", false, false, true, 38), 38, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 38), "modaltitle", [], "any", false, false, true, 38), 38, $this->source);
            echo ">&nbsp;</div>
            </div>
            <div class=\"";
            // line 40
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 40), "modalbody", [], "any", false, false, true, 40), 40, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 40), "modalbody", [], "any", false, false, true, 40), 40, $this->source);
            echo ">
            </div>
            ";
            // line 42
            if (((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "mandNonSoft", [], "any", false, false, true, 42) == false) && twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "mandSoft", [], "any", false, false, true, 42))) {
                // line 43
                echo "            <div class=\"";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 43), "modalfooter", [], "any", false, false, true, 43), 43, $this->source);
                echo "\" ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 43), "modalfooter", [], "any", false, false, true, 43), 43, $this->source);
                echo ">
                <a id=\"";
                // line 44
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 44), "mandatorySoftModal", [], "any", false, false, true, 44), 44, $this->source);
                echo "\" class=\"";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 44), "modalfooterlink", [], "any", false, false, true, 44), 44, $this->source);
                echo "\" data-movenext=\"";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 44), "aMoveNext", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source);
                echo "\">";
                echo gT("Continue without answering");
                echo "</a>
                <a ";
                // line 45
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 45), "modalfooterlink", [], "any", false, false, true, 45), 45, $this->source);
                echo "  class=\"";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 45), "modalfooterlink", [], "any", false, false, true, 45), 45, $this->source);
                echo "\">";
                echo gT("Answer question");
                echo "</a>
            </div>
            ";
            } else {
                // line 48
                echo "            <div class=\"";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 48), "modalfooter", [], "any", false, false, true, 48), 48, $this->source);
                echo "\" ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 48), "modalfooter", [], "any", false, false, true, 48), 48, $this->source);
                echo ">
                <a ";
                // line 49
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 49), "modalfooterlink", [], "any", false, false, true, 49), 49, $this->source);
                echo "  class=\"";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 49), "modalfooterlink", [], "any", false, false, true, 49), 49, $this->source);
                echo "\">";
                echo gT("Close");
                echo "</a>
            </div>
            ";
            }
            // line 52
            echo "        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/messages/bootstrap_alert_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 52,  149 => 49,  142 => 48,  132 => 45,  122 => 44,  115 => 43,  113 => 42,  106 => 40,  99 => 38,  93 => 37,  87 => 36,  81 => 35,  75 => 34,  66 => 33,  64 => 32,  60 => 30,  55 => 28,  51 => 27,  46 => 26,  44 => 25,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/bootstrap_alert_modal.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\messages\\bootstrap_alert_modal.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 25);
        static $filters = array();
        static $functions = array("empty" => 25, "json_decode" => 25, "registerScript" => 26, "gT" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['empty', 'json_decode', 'registerScript', 'gT']
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
