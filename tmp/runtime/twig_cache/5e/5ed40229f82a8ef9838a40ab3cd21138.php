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

/* /survey/questions/question_help/em_tip.twig */
class __TwigTemplate_c8975137ca532fe43365cf9f1bf9e273 extends Template
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
        // line 12
        if ( !($context["hideTip"] ?? null)) {
            // line 13
            echo "<div id='";
            echo $this->sandbox->ensureToStringAllowed(($context["coreId"] ?? null), 13, $this->source);
            echo "' class='ls-question-message ";
            echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 13, $this->source);
            echo "'>
    <span class='fa fa-exclamation-circle' aria-hidden=\"true\"></span>
   ";
            // line 15
            echo $this->sandbox->ensureToStringAllowed(($context["vtip"] ?? null), 15, $this->source);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/survey/questions/question_help/em_tip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  41 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/question_help/em_tip.twig", "D:\\xamp\\htdocs\\learns\\application\\views\\survey\\questions\\question_help\\em_tip.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                []
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
