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

/* __string_template__756c994b5abe112e5a2cfa12f0ef7374 */
class __TwigTemplate_420a1aff89d882e2f85a7da410892087 extends Template
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
        echo "<!-- Hints  -->
<div class=\"card card-primary border-left-danger h-100\">
    <div class=\"card-header\">
        <h5 class=\"card-title\">";
        // line 4
        echo gT("Hints and warnings");
        echo "</h5>
    </div>
    <ul class=\"list-group list-group-flush\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["warnings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
            // line 8
            echo "        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 text-warning\">
                ";
            // line 10
            echo $this->sandbox->ensureToStringAllowed($context["warning"], 10, $this->source);
            echo "
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hints"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hint"]) {
            // line 15
            echo "        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
                ";
            // line 17
            echo $this->sandbox->ensureToStringAllowed($context["hint"], 17, $this->source);
            echo "
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__756c994b5abe112e5a2cfa12f0ef7374";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  77 => 17,  73 => 15,  68 => 14,  58 => 10,  54 => 8,  50 => 7,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__756c994b5abe112e5a2cfa12f0ef7374", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7);
        static $filters = array();
        static $functions = array("gT" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
