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

/* /survey/questions/answer/listradio/rows/answer_row.twig */
class __TwigTemplate_cf766617f4bcfe973e3b4ea718573652 extends Template
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
        // line 12
        echo "
<!-- answer_row -->
<li id='javatbd";
        // line 14
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 14, $this->source);
        echo "' class='answer-item radio-item' ";
        echo $this->sandbox->ensureToStringAllowed(($context["sDisplayStyle"] ?? null), 14, $this->source);
        echo " >
    <input
        type=\"radio\"
        value=\"";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 17, $this->source);
        echo "\"
        name=\"";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 18, $this->source);
        echo "\"
        id=\"answer";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 19, $this->source);
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 19, $this->source);
        echo "\"
        ";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 20, $this->source);
        echo "
        onclick=\"if (document.getElementById('answer";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 21, $this->source);
        echo "othertext') != null) document.getElementById('answer";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 21, $this->source);
        echo "othertext').value='';checkconditions(this.value, this.name, this.type)\"
     />
    <label for=\"answer";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 23, $this->source);
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 23, $this->source);
        echo "\" class=\"control-label radio-label\">
        ";
        // line 24
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null), 24, $this->source));
        echo "
    </label>
</li>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  75 => 23,  68 => 21,  64 => 20,  59 => 19,  55 => 18,  51 => 17,  43 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row.twig", "D:\\xamp\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\listradio\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("processString" => 24);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['processString']
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
