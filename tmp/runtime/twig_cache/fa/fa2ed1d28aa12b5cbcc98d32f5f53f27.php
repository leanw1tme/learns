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

/* ./subviews/content/register.twig */
class __TwigTemplate_1bae76a02638edcc29c565891ea3f7e2 extends Template
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
        // line 19
        echo "    <div class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 19), "register", [], "any", false, false, true, 19), 19, $this->source);
        echo " container\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 19), "register", [], "any", false, false, true, 19), 19, $this->source);
        echo ">
        ";
        // line 21
        echo "        ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "EM", [], "any", false, false, true, 21), "ScriptsAndHiddenInputs", [], "any", false, false, true, 21), 21, $this->source);
        echo "

        <div class=\"";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 23), "registerrow", [], "any", false, false, true, 23), 23, $this->source);
        echo " row\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 23), "registerrow", [], "any", false, false, true, 23), 23, $this->source);
        echo ">
            <div class='";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 24), "registerrowjumbotron", [], "any", false, false, true, 24), 24, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 24), "registerrowjumbotron", [], "any", false, false, true, 24), 24, $this->source);
        echo ">
                <div class=\"";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 25), "registerrowjumbotrondiv", [], "any", false, false, true, 25), 25, $this->source);
        echo " container clearfix\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 25), "registerrowjumbotrondiv", [], "any", false, false, true, 25), 25, $this->source);
        echo ">
                    ";
        // line 26
        echo twig_include($this->env, $context, "./subviews/registration/register_head.twig");
        echo "
                    ";
        // line 27
        echo twig_include($this->env, $context, "./subviews/registration/register_message.twig");
        echo "
                </div>
            </div>
        </div>
        ";
        // line 31
        echo twig_include($this->env, $context, "./subviews/registration/register_error.twig");
        echo "

        ";
        // line 33
        $context["sViewContent"] = (("./subviews/registration/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "registration_view", [], "any", false, false, true, 33), 33, $this->source)) . ".twig");
        // line 34
        echo "        ";
        $this->loadTemplate(($context["sViewContent"] ?? null), "./subviews/content/register.twig", 34)->display($context);
        // line 35
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  88 => 34,  86 => 33,  81 => 31,  74 => 27,  70 => 26,  64 => 25,  58 => 24,  52 => 23,  46 => 21,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/register.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\content\\register.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 33, "include" => 34);
        static $filters = array();
        static $functions = array("include" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                [],
                ['include']
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
