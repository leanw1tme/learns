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

/* ./subviews/navigation/question_index_groups_buttons.twig */
class __TwigTemplate_f7e32ea013f3ceed2abdca6f8df16f31 extends Template
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
        // line 6
        echo "<div class=\"list-group index-button-full\">
  <div class=\"list-group-item\">
      <div class=\"h4 list-group-item-heading\">";
        // line 8
        echo gT("Question index");
        echo "</div>
  </div>
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 10), "items", [], "any", false, false, true, 10));
        foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
            // line 11
            echo "    ";
            $context["templateClass"] = "";
            // line 12
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 12), "index-item-unanswered", [], "any", true, true, true, 12) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 12), "index-item-unanswered", [], "any", false, false, true, 12) == true))) {
                // line 13
                echo "        ";
                $context["templateClass"] = ($this->sandbox->ensureToStringAllowed(($context["templateClass"] ?? null), 13, $this->source) . " list-group-item-warning");
                // line 14
                echo "    ";
            }
            // line 15
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 15), "index-item-error", [], "any", true, true, true, 15) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 15), "index-item-error", [], "any", false, false, true, 15) == true))) {
                // line 16
                echo "        ";
                $context["templateClass"] = ($this->sandbox->ensureToStringAllowed(($context["templateClass"] ?? null), 16, $this->source) . " list-group-item-danger");
                // line 17
                echo "    ";
            }
            // line 18
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 18), "index-item-current", [], "any", true, true, true, 18) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 18), "index-item-current", [], "any", false, false, true, 18) == true))) {
                // line 19
                echo "        ";
                $context["templateClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 19, $this->source) . " disabled");
                // line 20
                echo "    ";
            }
            // line 21
            echo "    <button type=\"submit\" name=\"move\" value=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "step", [], "any", false, false, true, 21), 21, $this->source);
            echo "\" class=\"list-group-item ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "coreClass", [], "any", false, false, true, 21), 21, $this->source);
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(($context["templateClass"] ?? null), 21, $this->source);
            echo "\" >";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "text", [], "any", false, false, true, 21), 21, $this->source);
            echo "</button>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_groups_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  48 => 10,  43 => 8,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/question_index_groups_buttons.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\question_index_groups_buttons.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 10, "set" => 11, "if" => 12);
        static $filters = array();
        static $functions = array("gT" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
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
