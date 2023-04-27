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

/* ./subviews/navigation/clearall_buttons.twig */
class __TwigTemplate_5af0ec635a794f893e443aeec3c3cb25 extends Template
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
        echo "
<div class=\"";
        // line 7
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 7), "clearallwrapper", [], "any", false, false, true, 7), 7, $this->source);
        echo "\">
    <div class=\"";
        // line 8
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 8), "clearallwrapper", [], "any", false, false, true, 8), 8, $this->source);
        echo "\">
        <label class=\"col-form-label fw-bold ";
        // line 9
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 9), "clearalllabel", [], "any", false, false, true, 9), 9, $this->source);
        echo "\">
            <input ";
        // line 10
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 10), "clearallconfirm", [], "any", false, false, true, 10), 10, $this->source);
        echo " class=\"me-2 ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 10), "clearallconfirm", [], "any", false, false, true, 10), 10, $this->source);
        echo "\"><span class=\"control-label\">";
        echo gT("Please confirm you want to clear your response?");
        echo "</span>
        </label>
        <button ";
        // line 12
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 12), "clearallbutton", [], "any", false, false, true, 12), 12, $this->source);
        echo " class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 12), "clearallbutton", [], "any", false, false, true, 12), 12, $this->source);
        echo " btn btn-link\" title=\"";
        echo gT("This action need to be confirmed.");
        echo "\">";
        echo gT("Exit and clear survey");
        echo "</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/clearall_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/clearall_buttons.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\navigation\\clearall_buttons.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("gT" => 10);

        try {
            $this->sandbox->checkSecurity(
                [],
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
