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

/* ./subviews/registration/register_message.twig */
class __TwigTemplate_37bd03625a2b776648f2d7adfc62b5ec extends Template
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
        // line 17
        echo "
";
        // line 18
        if (($context["registerSuccess"] ?? null)) {
            // line 19
            echo "    <h4 ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 19), "registermessageb", [], "any", false, false, true, 19), 19, $this->source);
            echo " >";
            echo gT("Thank you for registering. You will receive an email shortly.");
            echo "</h4>
";
        } else {
            // line 21
            echo "    ";
            if (($context["sStartDate"] ?? null)) {
                // line 22
                echo "    <h4 ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "registermessagea", [], "any", false, false, true, 22), 22, $this->source);
                echo " > ";
                echo gT("You may register for this survey but you have to wait for the {{sStartDate}} before starting the survey.");
                echo "</h4>
    ";
            } else {
                // line 24
                echo "    <h4  ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 24), "registermessageb", [], "any", false, false, true, 24), 24, $this->source);
                echo " >";
                echo gT("You may register for this survey if you wish to take part.");
                echo "</h4>
    ";
            }
            // line 26
            echo "    <h4  ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 26), "registermessagec", [], "any", false, false, true, 26), 26, $this->source);
            echo " >";
            echo gT("Enter your details below, and an email containing the link to participate in this survey will be sent immediately.");
            echo "</h4>
";
        }
        // line 28
        echo "
";
        // line 29
        if ( !empty(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aErrors", [], "any", false, false, true, 29))) {
            // line 30
            echo "    <ul class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 30), "maincoldivdivbul", [], "any", false, false, true, 30), 30, $this->source);
            echo " alert alert-danger list-unstyled' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 30), "maincoldivdivbul", [], "any", false, false, true, 30), 30, $this->source);
            echo ">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aErrors", [], "any", false, false, true, 31));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 32
                echo "            <li>";
                echo $this->sandbox->ensureToStringAllowed($context["error"], 32, $this->source);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/registration/register_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  95 => 32,  91 => 31,  84 => 30,  82 => 29,  79 => 28,  71 => 26,  63 => 24,  55 => 22,  52 => 21,  44 => 19,  42 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/registration/register_message.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\registration\\register_message.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "for" => 31);
        static $filters = array();
        static $functions = array("gT" => 19, "empty" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                [],
                ['gT', 'empty']
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
