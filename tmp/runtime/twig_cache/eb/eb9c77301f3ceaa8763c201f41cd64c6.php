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

/* ./subviews/navigation/save_buttons.twig */
class __TwigTemplate_7d651dd70ff7090a19a0b42428f55426 extends Template
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
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 6), "load", [], "any", false, false, true, 6), "show", [], "any", false, false, true, 6) == "Y")) {
            // line 7
            echo "    <button ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 7), "loadbutton", [], "any", false, false, true, 7), 7, $this->source);
            echo " accesskey=\"l\" class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 7), "loadbutton", [], "any", false, false, true, 7), 7, $this->source);
            echo " action--ls-button-submit btn btn-outline-secondary\">";
            echo gT("Load unfinished survey");
            echo "</button>
";
        }
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 9), "save", [], "any", false, false, true, 9), "show", [], "any", false, false, true, 9) == "Y")) {
            // line 10
            echo "<button ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 10), "savebutton", [], "any", false, false, true, 10), 10, $this->source);
            echo " accesskey=\"s\" class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 10), "savebutton", [], "any", false, false, true, 10), 10, $this->source);
            echo " action--ls-button-submit btn btn-outline-secondary'>
    ";
            // line 11
            echo gT("Resume later");
            echo "
</button>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/save_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  53 => 10,  51 => 9,  41 => 7,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/save_buttons.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\navigation\\save_buttons.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array();
        static $functions = array("gT" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['gT']
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
