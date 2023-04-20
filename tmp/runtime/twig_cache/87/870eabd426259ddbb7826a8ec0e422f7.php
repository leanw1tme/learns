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

/* ./subviews/privacy/privacy_modal.twig */
class __TwigTemplate_3cf76604a2135b12c08a1a0a9730b9d0 extends Template
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
        // line 17
        echo "
";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_error", [], "any", false, false, true, 18)) {
            // line 19
            echo "<div class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 19), "activealert", [], "any", false, false, true, 19), 19, $this->source);
            echo " alert alert-danger alert-dismissible fade in alert-dismissible ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecuritynotaccepted", [], "any", false, false, true, 19)) {
                echo "ls-js-hidden ";
            }
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 19), "activealert", [], "any", false, false, true, 19), 19, $this->source);
            echo " id=\"datasecurity_error\">
\t<a ";
            // line 20
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 20), "activealertbutton", [], "any", false, false, true, 20), 20, $this->source);
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 20), "activealertbutton", [], "any", false, false, true, 20), 20, $this->source);
            echo " btn-close\" aria-hidden=\"true\"></a>
\t";
            // line 21
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_error", [], "any", false, false, true, 21), 21, $this->source);
            echo "
</div>
\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecuritynotaccepted", [], "any", false, false, true, 23)) {
                // line 24
                echo "\t\t";
                $context["describeprivacy"] = ("datasecurity_error " . $this->sandbox->ensureToStringAllowed(($context["describeprivacy"] ?? null), 24, $this->source));
                // line 25
                echo "\t";
            }
        }
        // line 27
        echo "<div class=\"form-check\">
    <input required class=\"";
        // line 28
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 28), "privacydataseccheckbox", [], "any", false, false, true, 28), 28, $this->source);
        echo " form-check-input\" type=\"checkbox\" name=\"datasecurity_accepted\" id=\"datasecurity_accepted\" />
    <label for=\"datasecurity_accepted\" class=\"form-check-label fw-bold ";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 29), "privacydataseccheckboxlabel", [], "any", false, false, true, 29), 29, $this->source);
        echo "\">";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_notice_label", [], "any", false, false, true, 29), 29, $this->source);
        echo "</label>
</div>
<div class=\"collapse fade\" id=\"data-security-modal-";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 31), 31, $this->source);
        echo "\">
    <div class=\"card card-primary\">
        <div class=\"card-header bg-primary\">
            <h4 class=\"modal-title\">";
        // line 34
        echo gT("Privacy policy");
        echo "</h4>
        </div>
        <div class=\"card-body ";
        // line 36
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 36), "privacydatasecmodalbody", [], "any", false, false, true, 36), 36, $this->source);
        echo "\">
            ";
        // line 37
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_notice", [], "any", false, false, true, 37), 37, $this->source);
        echo "
        </div>
        <div class=\"ls-no-js-hidden card-footer\">
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"\$('#datasecurity_accepted').prop('checked',true).trigger('change');\" data-bs-dismiss=\"modal\">
                ";
        // line 41
        echo gT("Accept");
        echo "
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"\$('#data-security-modal-";
        // line 43
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 43), 43, $this->source);
        echo "').collapse('hide');\">
                ";
        // line 44
        echo gT("Close");
        echo "
            </button>
        </div>
    </div>
</div>
<script>
\$(function() {
    \$(\"#ls-button-submit\").on(\"click\", function() {
        if(!\$('#datasecurity_accepted').prop('checked')) {
            /* dynamic show error */
            \$('#datasecurity_error').removeClass(\"ls-js-hidden\");
            if(\$('#datasecurity_error').length) {
                /* add it in aria and role */
                \$('#datasecurity_error').attr(\"role\", \"alert\");
                \$('#datasecurity_accepted').attr(\"aria-describedby\", \"datasecurity_error ";
        // line 58
        echo $this->sandbox->ensureToStringAllowed(($context["datasecuritynotice"] ?? null), 58, $this->source);
        echo "\");
            }
        }
    });
});
\$(\"#datasecurity_accepted\").on(\"change\", function() {
    if(\$('#datasecurity_accepted').prop('checked')) {
        /* dynamic hide error */
        \$('#datasecurity_error').addClass(\"ls-js-hidden\");
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/privacy_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 58,  120 => 44,  116 => 43,  111 => 41,  104 => 37,  100 => 36,  95 => 34,  89 => 31,  82 => 29,  78 => 28,  75 => 27,  71 => 25,  68 => 24,  66 => 23,  61 => 21,  55 => 20,  44 => 19,  42 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/privacy/privacy_modal.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\privacy\\privacy_modal.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "set" => 24);
        static $filters = array();
        static $functions = array("gT" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
