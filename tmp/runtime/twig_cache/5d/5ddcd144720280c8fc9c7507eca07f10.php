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

/* ./subviews/navigation/clearall_links.twig */
class __TwigTemplate_5f57704d03c639d820d2f85f5e4e07c5 extends Template
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
        // line 16
        echo "
";
        // line 20
        echo "

 ";
        // line 22
        if (((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 22) == true) || (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 22) == null))) {
            // line 23
            echo "     ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 23), "showclearall", [], "any", false, false, true, 23) == "on")) {
                // line 24
                echo "         <!-- Exit and clear survey -->
         <li class=\"nav-item ls-no-js-hidden px-2\">
             <a href=\"#\" class='nav-link ls-link-action ls-link-clearall'
                data-limesurvey-submit='{ \"clearall\":\"clearall\" }'
                data-confirmedby='{ \"confirm-clearall\":\"confirm\" }'
                data-confirmlabel='";
                // line 29
                echo gT("Please confirm you want to clear your response?");
                echo "'>
                 ";
                // line 30
                echo gT("Exit and clear survey");
                echo "
             </a>
         </li>
     ";
            }
            // line 34
            echo " ";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/clearall_links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  62 => 30,  58 => 29,  51 => 24,  48 => 23,  46 => 22,  42 => 20,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/clearall_links.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\navigation\\clearall_links.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array();
        static $functions = array("gT" => 29);

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
