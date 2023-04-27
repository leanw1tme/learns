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

/* ./subviews/content/main.twig */
class __TwigTemplate_59381bd593b6d56334f22c40a53d95e9 extends Template
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
        // line 24
        echo twig_include($this->env, $context, "./subviews/header/start_form.twig");
        echo " <!-- main form -->

    ";
        // line 27
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "EM", [], "any", false, false, true, 27), "ScriptsAndHiddenInputs", [], "any", false, false, true, 27), 27, $this->source);
        echo "

    ";
        // line 30
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/messages/no_js_alert.twig");
        echo "

    ";
        // line 33
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/privacy/allinone_mode_welcome_privacy.twig");
        echo "

    ";
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aGroups", [], "any", false, false, true, 42));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aGroup"]) {
            // line 43
            echo "        ";
            echo twig_include($this->env, $context, "./subviews/survey/group.twig");
            echo "
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    ";
        // line 47
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 47), "show", [], "any", false, false, true, 47)) {
            // line 48
            echo "        ";
            echo twig_include($this->env, $context, "./subviews/navigation/navigator.twig");
            echo "
    ";
        }
        // line 50
        echo "
</form> <!-- main form -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 50,  103 => 48,  100 => 47,  97 => 45,  80 => 43,  62 => 42,  56 => 33,  50 => 30,  44 => 27,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/main.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\content\\main.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 42, "if" => 47);
        static $filters = array();
        static $functions = array("include" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                [],
                ['include']
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
