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

/* /survey/questions/answer/longfreetext/answer.twig */
class __TwigTemplate_0f833bf1eebfeae7b159a74ead75c934 extends Template
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
        // line 15
        echo "<!-- Long free text -->

<!-- answer -->
";
        // line 18
        if (($context["withColumn"] ?? null)) {
            // line 19
            echo "<div class='";
            echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 19, $this->source);
            echo " row'>
    <div class=\"";
            // line 20
            echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 20, $this->source);
            echo "\">
";
        } else {
            // line 22
            echo "<div class='";
            echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 22, $this->source);
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 22, $this->source);
            echo "'>
";
        }
        // line 24
        echo "    <textarea
        class=\"form-control ";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null), 25, $this->source);
        echo "\"
        name=\"";
        // line 26
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 26, $this->source);
        echo "\"
        id=\"answer";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 27, $this->source);
        echo "\"
        placeholder=\"";
        // line 28
        echo LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["placeholder"] ?? null), 28, $this->source), 1), 1);
        echo "\"
        rows=\"";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(($context["drows"] ?? null), 29, $this->source);
        echo "\"
        ";
        // line 30
        if (($context["inputsize"] ?? null)) {
            echo " cols=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["inputsize"] ?? null), 30, $this->source);
            echo "\" ";
        }
        // line 31
        echo "        ";
        if (($context["maxlength"] ?? null)) {
            echo " maxlength=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["maxlength"] ?? null), 31, $this->source);
            echo "\" ";
        }
        // line 32
        echo "        aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 32, $this->source);
        echo "\"
    >";
        // line 33
        echo $this->sandbox->ensureToStringAllowed(($context["dispVal"] ?? null), 33, $this->source);
        echo "</textarea>
";
        // line 34
        if (($context["withColumn"] ?? null)) {
            // line 35
            echo "    </div>
</div>
";
        } else {
            // line 38
            echo "</div>
";
        }
        // line 40
        echo "
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/longfreetext/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  116 => 38,  111 => 35,  109 => 34,  105 => 33,  100 => 32,  93 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  64 => 24,  56 => 22,  51 => 20,  46 => 19,  44 => 18,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/longfreetext/answer.twig", "D:\\xamp\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\longfreetext\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18);
        static $filters = array();
        static $functions = array("flatString" => 28, "processString" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['flatString', 'processString']
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
