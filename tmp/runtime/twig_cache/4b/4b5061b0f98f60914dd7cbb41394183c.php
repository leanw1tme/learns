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

/* /survey/questions/question_help/mandatory_tip.twig */
class __TwigTemplate_9e1f85022653fdeb0747fef5778f10e7 extends Template
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
        // line 9
        echo "<div class='ls-question-mandatory ls-question-mandatory-";
        echo $this->sandbox->ensureToStringAllowed(($context["part"] ?? null), 9, $this->source);
        echo " text-danger ' role='alert'>
    <span class='fa fa-exclamation-circle' aria-hidden=\"true\"></span>
    ";
        // line 11
        echo $this->sandbox->ensureToStringAllowed(($context["sMandatoryText"] ?? null), 11, $this->source);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/question_help/mandatory_tip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/question_help/mandatory_tip.twig", "D:\\xamp\\htdocs\\learns\\application\\views\\survey\\questions\\question_help\\mandatory_tip.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
