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

/* ./subviews/survey/group_subviews/group_desc.twig */
class __TwigTemplate_0a0b88692fbd0f8868d7208e29f089f7 extends Template
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
";
        // line 21
        if (((twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "showgroupinfo", [], "any", false, false, true, 21) == "D") || (twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "showgroupinfo", [], "any", false, false, true, 21) == "B"))) {
            // line 22
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "description", [], "any", false, false, true, 22) != "")) {
                // line 23
                echo "        <!-- Group description -->
        <div class=\"";
                // line 24
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 24), "groupdesc", [], "any", false, false, true, 24), 24, $this->source);
                echo " row well space-col\" ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 24), "groupdesc", [], "any", false, false, true, 24), 24, $this->source);
                echo ">
            ";
                // line 25
                echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "description", [], "any", false, false, true, 25), 25, $this->source));
                echo "
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/survey/group_subviews/group_desc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 25,  50 => 24,  47 => 23,  44 => 22,  42 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/group_subviews/group_desc.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\survey\\group_subviews\\group_desc.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21);
        static $filters = array();
        static $functions = array("processString" => 25);

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
