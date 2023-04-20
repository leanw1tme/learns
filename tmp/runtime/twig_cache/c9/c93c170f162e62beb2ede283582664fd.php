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

/* ./subviews/messages/warnings.twig */
class __TwigTemplate_34b926e0f1bf838c81a826ae7e988731 extends Template
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
        // line 27
        echo "
";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "active", [], "any", false, false, true, 29) != "Y")) {
            // line 30
            echo "    <!-- Preview mode warning -->
    <div class=\"";
            // line 31
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 31), "activealert", [], "any", false, false, true, 31), 31, $this->source);
            echo " alert alert-warning alert-dismissible fade in show alert-dismissible\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 31), "activealert", [], "any", false, false, true, 31), 31, $this->source);
            echo " >
        <button  ";
            // line 32
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 32), "activealertbutton", [], "any", false, false, true, 32), 32, $this->source);
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 32), "activealertbutton", [], "any", false, false, true, 32), 32, $this->source);
            echo " btn-close\" ></button>
        ";
            // line 33
            echo gT("This survey is currently not active. You will not be able to save your responses.");
            echo "
    </div>
";
        }
        // line 36
        echo "
";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "errorHtml", [], "any", false, false, true, 38), "show", [], "any", false, false, true, 38)) {
            // line 39
            echo "    <p class=' ";
            echo " fade in show alert-dismissible alert alert-danger ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 39), "errorHtml", [], "any", false, false, true, 39), 39, $this->source);
            echo " ' role='alert'>
        <button  ";
            // line 40
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 40), "errorHtmlbutton", [], "any", false, false, true, 40), 40, $this->source);
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 40), "errorHtmlbutton", [], "any", false, false, true, 40), 40, $this->source);
            echo " btn-close\" ></button>
    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "errorHtml", [], "any", false, false, true, 41), "messages", [], "any", false, false, true, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["aMessage"]) {
                // line 42
                echo "        <!-- Error Html warnings -->
            ";
                // line 43
                echo $this->sandbox->ensureToStringAllowed($context["aMessage"], 43, $this->source);
                echo "
            <br/>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    </p>
";
        }
        // line 48
        echo "
";
        // line 49
        echo makeFlashMessage();
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/messages/warnings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 49,  102 => 48,  98 => 46,  89 => 43,  86 => 42,  82 => 41,  76 => 40,  70 => 39,  68 => 38,  65 => 36,  59 => 33,  53 => 32,  47 => 31,  44 => 30,  42 => 29,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/warnings.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\messages\\warnings.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 29, "for" => 41);
        static $filters = array();
        static $functions = array("gT" => 33, "makeFlashMessage" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                [],
                ['gT', 'makeFlashMessage']
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
