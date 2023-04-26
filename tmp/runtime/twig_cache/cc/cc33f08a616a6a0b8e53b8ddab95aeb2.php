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

/* ./survey/questions/answer/5pointchoice/rows/item_row.twig */
class __TwigTemplate_ccb4b873cc98700197de3b492d0df8db extends Template
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
        // line 14
        echo "
<!-- item_row -->
<li id=\"javatbd";
        // line 16
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 16, $this->source);
        echo $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 16, $this->source);
        echo "\" class=\"answer-item radio-item ";
        echo $this->sandbox->ensureToStringAllowed(($context["itemExtraClass"] ?? null), 16, $this->source);
        echo "\">
    <input
        type=\"radio\"
        name=\"";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 19, $this->source);
        echo "\"
        id=\"answer";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 20, $this->source);
        echo "\"
        value=\"";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 21, $this->source);
        echo "\"
        ";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 22, $this->source);
        echo "
    />
    <label for=\"answer";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 24, $this->source);
        echo "\" class=\"control-label radio-label\">";
        echo $this->sandbox->ensureToStringAllowed(($context["labelText"] ?? null), 24, $this->source);
        echo "</label>
</li>
<!-- end of item_row -->
";
    }

    public function getTemplateName()
    {
        return "./survey/questions/answer/5pointchoice/rows/item_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  64 => 22,  60 => 21,  56 => 20,  52 => 19,  43 => 16,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "./survey/questions/answer/5pointchoice/rows/item_row.twig", "D:\\xamp\\htdocs\\learns\\application\\views\\survey\\questions\\answer\\5pointchoice\\rows\\item_row.twig");
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
