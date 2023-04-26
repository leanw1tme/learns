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

/* ./subviews/messages/justsaved.twig */
class __TwigTemplate_b5cb03bc323be5c176c3096573506d75 extends Template
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
        // line 1
        if (((intval(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 1), "showpopups", [], "any", false, false, true, 1)) >= 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 1), "text", [], "any", false, false, true, 1))) {
            // line 2
            echo "    ";
            $context["savedClass"] = "success";
            // line 3
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 3), "success", [], "any", false, false, true, 3)) {
                // line 4
                echo "        ";
                $context["savedClass"] = "error";
                // line 5
                echo "    ";
            }
            // line 6
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "active", [], "any", false, false, true, 6) != "Y")) {
                // line 7
                echo "        ";
                $context["savedClass"] = "info";
                // line 8
                echo "    ";
            }
            // line 9
            echo "    <div class=\"alert alert-";
            echo $this->sandbox->ensureToStringAllowed(($context["savedClass"] ?? null), 9, $this->source);
            echo " alert-dismissible fade in";
            if ((intval(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 9), "showpopups", [], "any", false, false, true, 9)) > 0)) {
                echo " ls-js-hidden";
            }
            echo " \" role=\"alert\">
        <button class=\"btn-close ls-no-js-hidden\" data-bs-dismiss=\"alert\"><span class=\"visually-hidden\">";
            // line 10
            echo gT("Close");
            echo "</span></button>
        ";
            // line 11
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 11), "text", [], "any", false, false, true, 11), 11, $this->source);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/messages/justsaved.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  71 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/justsaved.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\messages\\justsaved.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array();
        static $functions = array("intval" => 1, "gT" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['intval', 'gT']
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
