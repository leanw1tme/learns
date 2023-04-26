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

/* answerOptionRow.twig */
class __TwigTemplate_24d6d444d245643be11e8fc0f0fa6cc1 extends Template
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
        // line 16
        echo "
<tr
    class='row-container'
    id='row_";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 19, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 19), 19, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 19, $this->source);
        echo "'
    data-common-id=\"";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 20), 20, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 20, $this->source);
        echo "\"
>

    ";
        // line 24
        echo "    ";
        if (($context["first"] ?? null)) {
            // line 25
            echo "        <!-- Move icon -->
        <td
          style=\"text-align: center;\"
        >
            <span
              class=\"fa fa-bars bigIcons move-icon\"
              role=\"button\"
              data-bs-toggle=\"tooltip\"
              data-title=\"";
            // line 33
            echo gT("Drag to sort");
            echo "\"
            ></span>
        </td>

        <!-- Code -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">

            ";
            // line 40
            if (($context["oldCode"] ?? null)) {
                // line 41
                echo "            <input
                type='hidden'
                class='oldcode code-title'
                id='answeroptions[";
                // line 44
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 44), 44, $this->source);
                echo "][";
                echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 44, $this->source);
                echo "][oldcode]'
                name='answeroptions[";
                // line 45
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 45), 45, $this->source);
                echo "][";
                echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 45, $this->source);
                echo "][oldcode]'
                value=\"";
                // line 46
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "code", [], "any", false, false, true, 46), 46, $this->source);
                echo "\"
            />
            ";
            }
            // line 49
            echo "
                <input
                    type='text'
                    class=\"code form-control input\"
                    id='answeroptions[";
            // line 53
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 53), 53, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 53, $this->source);
            echo "][code]'
                    name='answeroptions[";
            // line 54
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 54), 54, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 54, $this->source);
            echo "][code]'
                    class='code code-title'
                    value=\"";
            // line 56
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "code", [], "any", false, false, true, 56), 56, $this->source);
            echo "\"
                    maxlength='5'
                    required='required'
                    onfocusout=\"LS.questionEditor.showAnswerOptionCodeUniqueError(this);\"
                />
        </td>
        ";
            // line 63
            echo "    ";
        } else {
            // line 64
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">&nbsp;</td>
        <!-- Code -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">";
            // line 67
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "code", [], "any", false, false, true, 67), 67, $this->source);
            echo "</td>
    ";
        }
        // line 69
        echo "
    <!-- Assessment Value -->
    ";
        // line 71
        if ((($context["assessmentvisible"] ?? null) && ($context["first"] ?? null))) {
            // line 72
            echo "        <td class=\"assessment-value\">
            <input
                type='text'
                class='assessment form-control input'
                id='answeroptions[";
            // line 76
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 76), 76, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 76, $this->source);
            echo "][assessment]'
                name='answeroptions[";
            // line 77
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 77), 77, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 77, $this->source);
            echo "][assessment]'
                value=\"";
            // line 78
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "assessment_value", [], "any", false, false, true, 78), 78, $this->source);
            echo "\"
                maxlength='5'
                size='5'
                onkeypress=\"returnwindow.LS.goodchars(event,'-1234567890')\"
            />
        </td>
    ";
        } elseif (        // line 84
($context["first"] ?? null)) {
            // line 85
            echo "        <td style='display:none;' class=\"assessment-value\">
            <input
                type='text'
                class='assessment'
                id='answeroptions[";
            // line 89
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 89), 89, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 89, $this->source);
            echo "][assessment]'
                name='answeroptions[";
            // line 90
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 90), 90, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 90, $this->source);
            echo "][assessment]'
                value=\"";
            // line 91
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "assessment_value", [], "any", false, false, true, 91), 91, $this->source);
            echo "\"
                maxlength='5'
                size='5'
                onkeypress=\"returnwindow.LS.goodchars(event,'-1234567890')\"
            />
        </td>
    ";
        } elseif (        // line 97
($context["assessmentvisible"] ?? null)) {
            // line 98
            echo "        <td class=\"assessment-value\">
            ";
            // line 99
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "assessment_value", [], "any", false, false, true, 99), 99, $this->source);
            echo "
        </td>
    ";
        } else {
            // line 102
            echo "        <td style='display:none;' class=\"assessment-value\"></td>
    ";
        }
        // line 104
        echo "
    <!-- Answer -->
    <td  class=\"answeroption-text\" style=\"vertical-align: middle;\">
        <div class=\"input-group\">
            <input
                type='text'
                size='20'
                class='answer form-control input'
                id='answeroptions[";
        // line 112
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 112), 112, $this->source);
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 112, $this->source);
        echo "][answeroptionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 112, $this->source);
        echo "]'
                name='answeroptions[";
        // line 113
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 113), 113, $this->source);
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 113, $this->source);
        echo "][answeroptionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 113, $this->source);
        echo "]'
                placeholder='";
        // line 114
        echo gT("Some example answer option");
        echo "'
                data-contents-dir=\"";
        // line 115
        echo ((LS_Twig_Extension::getLanguageRTL($this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 115, $this->source))) ? ("rtl") : ("ltr"));
        echo "\"
                value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOptionl10n"] ?? null), "answer", [], "any", false, false, true, 116), 116, $this->source), "html_attr");
        echo "\"
            />
            <span class=\"input-group-addon\">
                ";
        // line 119
        echo getEditor("editanswer", (((((("answeroptions[" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 121
($context["answerOption"] ?? null), "aid", [], "any", false, false, true, 121), 121, $this->source)) . "][") . $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 121, $this->source)) . "][answeroptionl10n][") . $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 121, $this->source)) . "]"), (((("[" . gT("Answer option:", "js")) . "](") . $this->sandbox->ensureToStringAllowed(        // line 122
($context["language"] ?? null), 122, $this->source)) . ")"), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 123
($context["question"] ?? null), "sid", [], "any", false, false, true, 123), 123, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 124
($context["question"] ?? null), "gid", [], "any", false, false, true, 124), 124, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 125
($context["question"] ?? null), "qid", [], "any", false, false, true, 125), 125, $this->source), "editanswer");
        // line 127
        echo "
            </span>
        </div>
    </td>

    <!-- Icons edit/delete -->
    <td style=\"vertical-align: middle; white-space: nowrap;\" class=\"answeroption-actions\">
        ";
        // line 134
        if (($context["first"] ?? null)) {
            // line 135
            echo "            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm btnaddanswer\">
                <i
                    class=\"ri-add-circle-fill text-primary\"
                    data-assessmentvisible='";
            // line 138
            echo $this->sandbox->ensureToStringAllowed(($context["assessmentvisible"] ?? null), 138, $this->source);
            echo "'
                    data-position=\"";
            // line 139
            echo $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 139, $this->source);
            echo "\"
                    data-code=\"";
            // line 140
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["answerOption"] ?? null), "code", [], "any", false, false, true, 140), 140, $this->source);
            echo "\"
                    data-scale-id=\"";
            // line 141
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 141, $this->source);
            echo "\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"bottom\"
                    title=\"";
            // line 144
            echo gT("Insert a new answer option after this one");
            echo "\"
                ></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm btndelanswer\">
                <i class=\"ri-indeterminate-circle-fill text-danger \" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 148
            echo gT("Delete this entry");
            echo "\"></i>
            </button>
        ";
        }
        // line 151
        echo "    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "answerOptionRow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 151,  314 => 148,  307 => 144,  301 => 141,  297 => 140,  293 => 139,  289 => 138,  284 => 135,  282 => 134,  273 => 127,  271 => 125,  270 => 124,  269 => 123,  268 => 122,  267 => 121,  266 => 119,  260 => 116,  256 => 115,  252 => 114,  244 => 113,  236 => 112,  226 => 104,  222 => 102,  216 => 99,  213 => 98,  211 => 97,  202 => 91,  196 => 90,  190 => 89,  184 => 85,  182 => 84,  173 => 78,  167 => 77,  161 => 76,  155 => 72,  153 => 71,  149 => 69,  144 => 67,  139 => 64,  136 => 63,  127 => 56,  120 => 54,  114 => 53,  108 => 49,  102 => 46,  96 => 45,  90 => 44,  85 => 41,  83 => 40,  73 => 33,  63 => 25,  60 => 24,  52 => 20,  44 => 19,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "answerOptionRow.twig", "D:\\xamp\\htdocs\\learns\\application\\views\\questionAdministration\\answerOptionRow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24);
        static $filters = array("escape" => 116);
        static $functions = array("gT" => 33, "getLanguageRTL" => 115, "getEditor" => 119);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['gT', 'getLanguageRTL', 'getEditor']
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
