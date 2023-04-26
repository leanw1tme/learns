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

/* /survey/questions/question_help/help.twig */
class __TwigTemplate_0e98514537adcdd9a41802c8d457f6a4 extends Template
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
        // line 7
        echo "<div class=\"ls-question-help ";
        echo $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 7, $this->source);
        echo "\" role=\"alert\" ";
        if (($context["id"] ?? null)) {
            echo " id=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 7, $this->source);
            echo "\" ";
        }
        echo " >
    ";
        // line 8
        echo $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 8, $this->source);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/question_help/help.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/question_help/help.twig", "D:\\xamp\\htdocs\\learns\\application\\views\\survey\\questions\\question_help\\help.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
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
