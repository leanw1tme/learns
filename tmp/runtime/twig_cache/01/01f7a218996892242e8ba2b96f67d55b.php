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

/* ./subviews/navigation/language_changer.twig */
class __TwigTemplate_86ec6e4857c93c1e1e367bc91447c012 extends Template
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
        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 12), "show", [], "any", false, false, true, 12) == true)) {
            // line 13
            echo "    
    ";
            // line 15
            echo "    ";
            $context["aLCD"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 15), "datas", [], "any", false, false, true, 15);
            // line 16
            echo "
    ";
            // line 22
            echo "    ";
            $context["htmlOptions"] = ["class" => "form-control", "data-targeturl" => twig_get_attribute($this->env, $this->source,             // line 24
($context["aLCD"] ?? null), "targetUrl", [], "any", false, false, true, 24)];
            // line 27
            echo "    <!-- Language Changer -->
    <div class=\" ";
            // line 28
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 28), "formgroup", [], "any", false, false, true, 28), 28, $this->source);
            echo " form-change-lang row row-cols-lg-auto g-1\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 28), "formgroup", [], "any", false, false, true, 28), 28, $this->source);
            echo " >
        <label class=\"";
            // line 29
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 29), "controllabel", [], "any", false, false, true, 29), 29, $this->source);
            echo " col-form-label col-auto fw-bold\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 29), "controllabel", [], "any", false, false, true, 29), 29, $this->source);
            echo " for=\"lang\">
            <span class=\"control-label\" ";
            // line 30
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 30), "languagechanger", [], "any", false, false, true, 30), 30, $this->source);
            echo ">";
            echo gT("Language:");
            echo "</span>
        </label>
        <div class=\"col-auto\">
                ";
            // line 33
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
($context["C"] ?? null), "Html", [], "any", false, false, true, 34), "dropDownList", [0 => "lang", 1 => twig_get_attribute($this->env, $this->source,             // line 36
($context["aLCD"] ?? null), "sSelected", [], "any", false, false, true, 36), 2 => twig_get_attribute($this->env, $this->source,             // line 37
($context["aLCD"] ?? null), "aListLang", [], "any", false, false, true, 37), 3 =>             // line 38
($context["htmlOptions"] ?? null)], "method", false, false, true, 34), 34, $this->source);
            // line 40
            echo "
        </div>
        <div class=\"col-auto\">
        <!-- for no js functionality (need form) -->
        ";
            // line 44
            $context["buttonhtmlOptions"] = ["type" => "submit", "value" => "changelang", "name" => "move", "class" => "btn btn-primary ls-language-changer-item "];
            // line 51
            echo "        ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 52
($context["C"] ?? null), "Html", [], "any", false, false, true, 52), "htmlButton", [0 => gT("Change the language"), 1 =>             // line 54
($context["buttonhtmlOptions"] ?? null)], "method", false, false, true, 52), 52, $this->source);
            // line 56
            echo "
        </div>
    </div>

    ";
            // line 61
            echo "    ";
            echo LS_Twig_Extension::registerScript("activateLanguageChanger", "activateLanguageChanger(); ", "POS_END");
            echo "
    
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 61,  99 => 56,  97 => 54,  96 => 52,  94 => 51,  92 => 44,  86 => 40,  84 => 38,  83 => 37,  82 => 36,  81 => 34,  80 => 33,  72 => 30,  66 => 29,  60 => 28,  57 => 27,  55 => 24,  53 => 22,  50 => 16,  47 => 15,  44 => 13,  42 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/language_changer.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\navigation\\language_changer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "set" => 15);
        static $filters = array();
        static $functions = array("gT" => 30, "registerScript" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['gT', 'registerScript']
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
