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

/* ./subviews/survey/group_subviews/group_name.twig */
class __TwigTemplate_525ebae4b323b9ae7dbd556eb5188cfd extends Template
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
        // line 20
        echo "
<!-- Group Name -->
";
        // line 22
        if (((twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "showgroupinfo", [], "any", false, false, true, 22) == "N") || (twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "showgroupinfo", [], "any", false, false, true, 22) == "B"))) {
            // line 23
            echo "    <div class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 23), "grouptitle", [], "any", false, false, true, 23), 23, $this->source);
            echo " text-center h3 space-col\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 23), "grouptitle", [], "any", false, false, true, 23), 23, $this->source);
            echo ">
        ";
            // line 24
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "name", [], "any", false, false, true, 24), 24, $this->source));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/survey/group_subviews/group_name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 24,  45 => 23,  43 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/group_subviews/group_name.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\survey\\group_subviews\\group_name.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array();
        static $functions = array("processString" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['processString']
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
