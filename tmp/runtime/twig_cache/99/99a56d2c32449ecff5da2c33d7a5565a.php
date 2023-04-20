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

/* /survey/questions/answer/listradio/answer.twig */
class __TwigTemplate_3a641fa1f3bab94d9af4700df5aad06c extends Template
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
        echo "
<!-- List Radio -->

<!-- answer -->
";
        // line 13
        echo $this->sandbox->ensureToStringAllowed(($context["sTimer"] ?? null), 13, $this->source);
        echo "

<div class=\"";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 15, $this->source);
        echo " row\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 15, $this->source);
        echo "\">
    ";
        // line 17
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(($context["sRows"] ?? null), 17, $this->source);
        echo "
</div>
";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 20), "hiddenField", [0 => ("java" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 20, $this->source)), 1 => ($context["value"] ?? null), 2 => ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 21
($context["name"] ?? null), 21, $this->source)), "disabled" => true]], "method", false, false, true, 20), 20, $this->source);
        // line 24
        echo "
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  63 => 21,  62 => 20,  56 => 17,  50 => 15,  45 => 13,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/answer.twig", "D:\\xamp\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\listradio\\answer.twig");
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
