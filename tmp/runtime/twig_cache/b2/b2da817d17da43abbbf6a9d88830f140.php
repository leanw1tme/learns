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

/* subquestionRow.twig */
class __TwigTemplate_facf74158c62b7374f2c46af2f40f87f extends Template
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
<!-- subquestion row -->
<tr id='row_";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 18, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 18), 18, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 18, $this->source);
        echo "' class=\"row-container\" data-common-id=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 18), 18, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 18, $this->source);
        echo "\">
    ";
        // line 20
        echo "    ";
        if ((($context["activated"] ?? null) == "Y")) {
            // line 21
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <input
                type='text'
                class=\"code form-control input\"
                id='subquestions[";
            // line 31
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 31), 31, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 31, $this->source);
            echo "][code]'
                name='subquestions[";
            // line 32
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 32), 32, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 32, $this->source);
            echo "][code]'
                class='code code-title'
                value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 34), 34, $this->source), "html_attr");
            echo "\"
                required='required'
                maxlength=\"20\"
                ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "survey", [], "any", false, false, true, 37), "active", [], "any", false, false, true, 37) == "Y")) {
                // line 38
                echo "                readonly=\"readonly\"
                ";
            }
            // line 40
            echo "                onfocusout=\"LS.questionEditor.showSubquestionCodeUniqueError(this);\"
            />
        </td>

    ";
            // line 45
            echo "    ";
        } elseif (($context["first"] ?? null)) {
            // line 46
            echo "        ";
            $context["sPattern"] = ((twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 46)) ? ((("^([a-zA-Z0-9]*|" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 46), 46, $this->source)) . ")\$")) : ("^[a-zA-Z0-9]*\$"));
            // line 47
            echo "
        <!-- Move icon -->
        <td
          style=\"text-align: center;\"
        >
            <span
              class=\"fa fa-bars bigIcons move-icon\"
              role=\"button\"
              data-bs-toggle=\"tooltip\"
              data-title=\"";
            // line 56
            echo gT("Drag to sort");
            echo "\"
            ></span>
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <!-- TODO: What is \"oldCode\"??? -->
            ";
            // line 63
            if (($context["oldCode"] ?? null)) {
                // line 64
                echo "                <input
                    type='hidden'
                    class='oldcode code-title'
                    maxlength=\"20\"
                    id='subquestions[";
                // line 68
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 68), 68, $this->source);
                echo "][";
                echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 68, $this->source);
                echo "][oldcode]'
                    name='subquestions[";
                // line 69
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 69), 69, $this->source);
                echo "][";
                echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 69, $this->source);
                echo "][oldcode]'
                    value=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 70), 70, $this->source), "html_attr");
                echo "\"
                />
            ";
            }
            // line 73
            echo "
            <input
                type='text'
                class=\"code form-control input\"
                id='subquestions[";
            // line 77
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 77), 77, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 77, $this->source);
            echo "][code]'
                name='subquestions[";
            // line 78
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 78), 78, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 78, $this->source);
            echo "][code]'
                class='code code-title'
                value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 80), 80, $this->source), "html_attr");
            echo "\"
                required='required'
                maxlength=\"20\"
                ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "survey", [], "any", false, false, true, 83), "active", [], "any", false, false, true, 83) == "Y")) {
                // line 84
                echo "                readonly=\"readonly\"
                ";
            }
            // line 86
            echo "                onfocusout=\"LS.questionEditor.showSubquestionCodeUniqueError(this);\"
            />
        </td>

    ";
            // line 91
            echo "    ";
        } else {
            // line 92
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">
            ";
            // line 99
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 99), 99, $this->source), "html");
            echo "
        </td>
    ";
        }
        // line 102
        echo "
    <!-- Subquestion text -->
    <td  class=\"subquestion-text\" style=\"vertical-align: middle;\">
        <div class=\"input-group\">        
            <!-- NB: Class \"answer\" is used for both subquestions and answer options. -->
            <input
                type='text'
                size='20'
                class='answer form-control input'
                id='subquestions[";
        // line 111
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 111), 111, $this->source);
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 111, $this->source);
        echo "][subquestionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 111, $this->source);
        echo "]'
                name='subquestions[";
        // line 112
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 112), 112, $this->source);
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 112, $this->source);
        echo "][subquestionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 112, $this->source);
        echo "]'
                placeholder='";
        // line 113
        echo gT("Some example subquestion", "js");
        echo "'
                value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestionl10n"] ?? null), "question", [], "any", false, false, true, 114), 114, $this->source), "html_attr");
        echo "\"
                data-contents-dir=\"";
        // line 115
        echo ((LS_Twig_Extension::getLanguageRTL($this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 115, $this->source))) ? ("rtl") : ("ltr"));
        echo "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
            <span class=\"input-group-addon\">
                ";
        // line 119
        echo getEditor("editanswer", (((((("subquestions[" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 121
($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 121), 121, $this->source)) . "][") . $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 121, $this->source)) . "][subquestionl10n][") . $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 121, $this->source)) . "]"), (((("[" . gT("Subquestion:", "js")) . "](") . $this->sandbox->ensureToStringAllowed(        // line 122
($context["language"] ?? null), 122, $this->source)) . ")"), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 123
($context["subquestion"] ?? null), "sid", [], "any", false, false, true, 123), 123, $this->source), $this->sandbox->ensureToStringAllowed(        // line 124
($context["gid"] ?? null), 124, $this->source), ((twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source,         // line 125
($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 125))) ? (twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 125)) : ("")), "editanswer");
        // line 127
        echo "
            </span>
        </div>
    </td>

    <!-- Relevance equation -->
    ";
        // line 133
        if ((($context["first"] ?? null) && (($context["scale_id"] ?? null) == 0))) {
            // line 134
            echo "        <td class=\"relevance-equation\">
            <input
                data-bs-toggle=\"tooltip\"
                data-title=\"";
            // line 137
            echo gT("Click to expand");
            echo "\"
                type='text'
                class='relevance form-control input'
                id='subquestions[";
            // line 140
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 140), 140, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 140, $this->source);
            echo "][relevance]'
                name='subquestions[";
            // line 141
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 141), 141, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 141, $this->source);
            echo "][relevance]'
                value=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "relevance", [], "any", false, false, true, 142), 142, $this->source), "html_attr");
            echo "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
        </td>
    ";
        } else {
            // line 147
            echo "        <!-- TOOD: Why render and then hide? -->
        <span style=\"display: none\" class=\"relevance relevance-equation\">
            ";
            // line 150
            echo "        </span>
    ";
        }
        // line 152
        echo "
    <!-- Icons add/edit/delete -->
    <td style=\"vertical-align: middle; white-space: nowrap;\" class=\"subquestion-actions\">
        ";
        // line 155
        if (((($context["activated"] ?? null) != "Y") && ($context["first"] ?? null))) {
            // line 156
            echo "            <button class=\"btn btn-outline-secondary btn-sm btnaddsubquestion\">
                <i
                    class=\"ri-add-circle-fill text-primary\"
                    data-code=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 159), 159, $this->source), "html_attr");
            echo "\"
                    data-bs-toggle=\"tooltip\"
                    data-scale-id=\"";
            // line 161
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 161, $this->source);
            echo "\"
                    data-bs-placement=\"bottom\"
                    title=\"";
            // line 163
            echo gT("Insert a new subquestion after this one");
            echo "\"
                ></i>
            </button>
            <button class=\"btn btn-outline-secondary btn-sm btndelsubquestion\">
                <i
                    class=\"ri-indeterminate-circle-fill text-danger\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"bottom\"
                    title=\"";
            // line 171
            echo gT("Delete this subquestion");
            echo "\"
                ></i>
            </button>
        ";
        }
        // line 175
        echo "    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "subquestionRow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 175,  340 => 171,  329 => 163,  324 => 161,  319 => 159,  314 => 156,  312 => 155,  307 => 152,  303 => 150,  299 => 147,  291 => 142,  285 => 141,  279 => 140,  273 => 137,  268 => 134,  266 => 133,  258 => 127,  256 => 125,  255 => 124,  254 => 123,  253 => 122,  252 => 121,  251 => 119,  244 => 115,  240 => 114,  236 => 113,  228 => 112,  220 => 111,  209 => 102,  203 => 99,  194 => 92,  191 => 91,  185 => 86,  181 => 84,  179 => 83,  173 => 80,  166 => 78,  160 => 77,  154 => 73,  148 => 70,  142 => 69,  136 => 68,  130 => 64,  128 => 63,  118 => 56,  107 => 47,  104 => 46,  101 => 45,  95 => 40,  91 => 38,  89 => 37,  83 => 34,  76 => 32,  70 => 31,  58 => 21,  55 => 20,  43 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "subquestionRow.twig", "D:\\xamp\\htdocs\\learns\\application\\views\\questionAdministration\\subquestionRow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 46);
        static $filters = array("escape" => 34);
        static $functions = array("gT" => 56, "getLanguageRTL" => 115, "getEditor" => 119);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
