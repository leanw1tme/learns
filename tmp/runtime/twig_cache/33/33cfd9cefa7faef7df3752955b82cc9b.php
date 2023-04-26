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

/* /survey/questions/answer/5pointchoice/answer.twig */
class __TwigTemplate_61707a133a03bb32d98cd7c0c55df724 extends Template
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
<!-- 5 point choice -->
<!-- answer -->

<ul class=\"";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 18, $this->source);
        echo " list-unstyled list-group list-group-horizontal\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 18, $this->source);
        echo "\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aRows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["aRow"]) {
            // line 20
            echo "        ";
            $this->loadTemplate("./survey/questions/answer/5pointchoice/rows/item_row.twig", "/survey/questions/answer/5pointchoice/answer.twig", 20)->display(twig_array_merge($context, $context["aRow"]));
            // line 21
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>

";
        // line 25
        echo "<input type=\"hidden\" name=\"java";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 25, $this->source);
        echo "\" id=\"java";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 25, $this->source);
        echo "\" disabled value=";
        echo $this->sandbox->ensureToStringAllowed(($context["sessionValue"] ?? null), 25, $this->source);
        echo " />


";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/5pointchoice/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  85 => 22,  71 => 21,  68 => 20,  51 => 19,  45 => 18,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/5pointchoice/answer.twig", "D:\\xamp\\htdocs\\learns\\application\\views\\survey\\questions\\answer\\5pointchoice\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 19, "include" => 20);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'include'],
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
