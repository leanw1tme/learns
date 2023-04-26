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

/* __string_template__f05c01dbab7ffb0f493ac0507a95dbf0 */
class __TwigTemplate_caaea76d15a30372bd5a7474c39d4445 extends Template
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
        echo "<input type='hidden' name='answeroptions_sortorder' value='' />
<input type='hidden' id='answeroptions_deletedqids' name='answeroptions_deletedqids' value='' />

";
        // line 4
        $context["first"] = true;
        // line 5
        $context["scale_id"] = 0;
        // line 6
        echo "
<!-- Loop all language, and then hide all but the current selected one with JS. -->
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allLanguages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 9
            echo "    <div class=\"lang-hide lang-";
            echo $this->sandbox->ensureToStringAllowed($context["lang"], 9, $this->source);
            echo " ";
            echo ((($context["first"] ?? null)) ? ("base-lang") : ("extra-lang"));
            echo "\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($context["scalecount"] ?? null) - 1)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scale_id"]) {
                // line 11
                echo "
            ";
                // line 12
                $context["position"] = 1;
                // line 13
                echo "            ";
                if ((($context["scalecount"] ?? null) > 1)) {
                    // line 14
                    echo "                <div class='header ui-widget-header' style='margin-top:5px;'>
                    <i>";
                    // line 15
                    echo sprintf(gT("Answer scale %s"), ($context["scale_id"] + 1));
                    echo "</i>
                </div>
            ";
                }
                // line 18
                echo "
            <!-- Answer options table -->
            <div class=\"answeroptions-table-wrapper\" style=\"max-height: 394px;\">
                <table
                    class='answertable answeroptions-table table table-responsive'
                    id='answeroptions_";
                // line 23
                echo $this->sandbox->ensureToStringAllowed($context["lang"], 23, $this->source);
                echo "_";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 23, $this->source);
                echo "'
                    data-scaleid='";
                // line 24
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 24, $this->source);
                echo "'
                    data-input-data-id='add-answer-option-input-javascript-datas'
                >

                    <!-- Headers -->
                    <thead>
                        <tr>
                            <th></th>
                            <th class='col-lg-1'>";
                // line 32
                echo gT("Code");
                echo "</th>

                            ";
                // line 34
                if (($context["assessmentvisible"] ?? null)) {
                    // line 35
                    echo "                                <th class='col-lg-1'>
                                    ";
                    // line 36
                    echo gT("Assessment value");
                    echo "
                                </th>
                            ";
                } else {
                    // line 39
                    echo "                                <th style='display:none;'>
                                    &nbsp;
                                </th>
                            ";
                }
                // line 43
                echo "
                            <th class='col-lg-8'>
                                ";
                // line 45
                echo gT("Answer options");
                echo "
                                <i class=\"fa fa-globe\" data-bs-toggle=\"tooltip\" title=\"";
                // line 46
                echo gT("This setting is localized");
                echo "\"></i>
                            </th>

                            <th class='col-lg-1'>
                                ";
                // line 50
                if (($context["first"] ?? null)) {
                    // line 51
                    echo "                                    ";
                    echo gT("Actions");
                    echo "
                                ";
                }
                // line 53
                echo "                            </th>
                        </tr>
                    </thead>

                    <!-- Body -->
                    <tbody>
                        ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["answers"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["scale_id"]] ?? null) : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["answerOption"]) {
                    // line 60
                    echo "                            <!-- Line tag -->
                            ";
                    // line 61
                    $this->loadTemplate("answerOptionRow.twig", "__string_template__f05c01dbab7ffb0f493ac0507a95dbf0", 61)->display(twig_array_merge($context, ["activated" =>                     // line 62
($context["activated"] ?? null), "position" =>                     // line 63
($context["position"] ?? null), "first" =>                     // line 64
($context["first"] ?? null), "assessmentvisible" =>                     // line 65
($context["assessmentvisible"] ?? null), "scale_id" =>                     // line 66
$context["scale_id"], "question" =>                     // line 67
($context["question"] ?? null), "answerOption" =>                     // line 68
$context["answerOption"], "answerOptionl10n" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,                     // line 69
$context["answerOption"], "answerl10ns", [], "any", false, false, true, 69)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["lang"]] ?? null) : null), "oldCode" => true, "language" =>                     // line 71
$context["lang"]]));
                    // line 73
                    echo "
                            ";
                    // line 74
                    $context["position"] = (($context["position"] ?? null) + 1);
                    // line 75
                    echo "                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answerOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                    </tbody>
                </table>
            </div>

            <div class=\"action-buttons\" style=\"padding-bottom: 10px;\">
                ";
                // line 81
                if (($context["first"] ?? null)) {
                    // line 82
                    echo "                    <!-- TODO: Not used??? -->
                    <input type='hidden' id='answercount_";
                    // line 83
                    echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 83, $this->source);
                    echo "' name='answercount_";
                    echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 83, $this->source);
                    echo "' value='";
                    echo $this->sandbox->ensureToStringAllowed(($context["anscount"] ?? null), 83, $this->source);
                    echo "' />
                    ";
                    // line 84
                    $context["disabled"] = "";
                    // line 85
                    echo "                ";
                }
                // line 86
                echo "
                <button
                    ";
                // line 88
                echo $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 88, $this->source);
                echo "
                    data-scale-id=\"";
                // line 89
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 89, $this->source);
                echo "\"
                    class='btnlsbrowser btn btn-outline-secondary'
                    type='button'
                    onclick=\"LS.questionEditor.showLabelSetPicker(event, 'answeroptions');\"
                >
                    ";
                // line 94
                echo gT("Load label set");
                echo "
                </button>

                ";
                // line 97
                if (($context["hasLabelSetPermission"] ?? null)) {
                    // line 98
                    echo "                    <button
                        class='bthsaveaslabel btn btn-outline-secondary'
                        id='bthsaveaslabel_";
                    // line 100
                    echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 100, $this->source);
                    echo "'
                        type='button'
                        onclick=\"LS.questionEditor.showLabelSetSaver(event, 'answeroptions-table');\"
                        data-bs-target=\"#saveaslabelModal\"
                    >
                        ";
                    // line 105
                    echo gT("Save label set");
                    echo "
                    </button>
                ";
                }
                // line 108
                echo "
                <button ";
                // line 109
                echo $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 109, $this->source);
                echo "  id='btnquickadd_";
                echo $this->sandbox->ensureToStringAllowed($context["lang"], 109, $this->source);
                echo "_";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 109, $this->source);
                echo "' data-scale-id=\"";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 109, $this->source);
                echo "\" class='btn btn-outline-secondary btnquickadd float-end' type='button'  data-bs-toggle=\"modal\" data-bs-target=\"#quickaddModal\" data-scale-id=\"";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 109, $this->source);
                echo "\">
                    ";
                // line 110
                echo gT("Quick add");
                echo "
                </button>
            </div>
            ";
                // line 113
                $context["position"] = sprintf("%05d", $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 113, $this->source));
                // line 114
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scale_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "    </div>
    ";
            // line 116
            $context["first"] = false;
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
<!--   Modals   -->
";
        // line 120
        if ((($context["first"] ?? null) == false)) {
            echo " ";
            // line 121
            echo "    ";
            $this->loadTemplate("modals.twig", "__string_template__f05c01dbab7ffb0f493ac0507a95dbf0", 121)->display($context);
        }
        // line 123
        echo "
<!-- For javascript -->
<input
    type=\"hidden\"
    id=\"add-answer-option-input-javascript-datas\"
    data-url=\"";
        // line 128
        echo LS_Twig_Extension::createUrl("/questionAdministration/getAnswerOptionRowForAllLanguages/");
        echo "\"
    data-quickurl=\"";
        // line 129
        echo LS_Twig_Extension::createUrl("/questionAdministration/getAnswerOptionRowQuickAdd", ["surveyid" => twig_get_attribute($this->env, $this->source,         // line 132
($context["question"] ?? null), "sid", [], "any", false, false, true, 132), "gid" => twig_get_attribute($this->env, $this->source,         // line 133
($context["question"] ?? null), "gid", [], "any", false, false, true, 133)]);
        // line 135
        echo "\"
    data-assessmentvisible=\"";
        // line 136
        if ((($context["assessmentvisible"] ?? null) == true)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\"
    data-errormessage=\"An error occured while processing the ajax request.\"
    data-languages='";
        // line 138
        echo CJSON::encode($this->sandbox->ensureToStringAllowed(($context["allLanguages"] ?? null), 138, $this->source));
        echo "'
    data-surveyid=\"";
        // line 139
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "sid", [], "any", false, false, true, 139), 139, $this->source);
        echo "\"
    data-gid=\"";
        // line 140
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "gid", [], "any", false, false, true, 140), 140, $this->source);
        echo "\"
    data-qid=\"";
        // line 141
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "qid", [], "any", false, false, true, 141), 141, $this->source);
        echo "\"
    data-scale-id=\"";
        // line 142
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 142, $this->source);
        echo "\" ";
        // line 143
        echo "/>
";
    }

    public function getTemplateName()
    {
        return "__string_template__f05c01dbab7ffb0f493ac0507a95dbf0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 143,  412 => 142,  408 => 141,  404 => 140,  400 => 139,  396 => 138,  387 => 136,  384 => 135,  382 => 133,  381 => 132,  380 => 129,  376 => 128,  369 => 123,  365 => 121,  362 => 120,  358 => 118,  344 => 116,  341 => 115,  327 => 114,  325 => 113,  319 => 110,  307 => 109,  304 => 108,  298 => 105,  290 => 100,  286 => 98,  284 => 97,  278 => 94,  270 => 89,  266 => 88,  262 => 86,  259 => 85,  257 => 84,  249 => 83,  246 => 82,  244 => 81,  237 => 76,  223 => 75,  221 => 74,  218 => 73,  216 => 71,  215 => 69,  214 => 68,  213 => 67,  212 => 66,  211 => 65,  210 => 64,  209 => 63,  208 => 62,  207 => 61,  204 => 60,  187 => 59,  179 => 53,  173 => 51,  171 => 50,  164 => 46,  160 => 45,  156 => 43,  150 => 39,  144 => 36,  141 => 35,  139 => 34,  134 => 32,  123 => 24,  117 => 23,  110 => 18,  104 => 15,  101 => 14,  98 => 13,  96 => 12,  93 => 11,  76 => 10,  69 => 9,  52 => 8,  48 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f05c01dbab7ffb0f493ac0507a95dbf0", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "for" => 8, "if" => 13, "include" => 61);
        static $filters = array("gT" => 46);
        static $functions = array("range" => 10, "sprintf" => 15, "gT" => 15, "createUrl" => 128, "json_encode" => 138);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['gT'],
                ['range', 'sprintf', 'gT', 'createUrl', 'json_encode']
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
