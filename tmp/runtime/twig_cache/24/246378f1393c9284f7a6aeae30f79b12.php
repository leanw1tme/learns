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

/* ./subviews/navigation/question_index_menu.twig */
class __TwigTemplate_007f7afa89203c50459fe5d090ec8b88 extends Template
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
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 28), "bShow", [], "any", false, false, true, 28) == true)) {
            // line 29
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 29) == "G")) {
                // line 30
                echo "        <!-- Question index, group, ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 30), "type", [], "any", false, false, true, 30), 30, $this->source);
                echo " -->
        <li class=\"dropdown nav-item ls-no-js-hidden px-2 index-menu-";
                // line 31
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 31), "type", [], "any", false, false, true, 31), 31, $this->source);
                echo "\">
            <a class=\"dropdown-toggle nav-link\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
               aria-expanded=\"false\" href=\"#\">
                ";
                // line 34
                echo gT("Question index");
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 39
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 39), "items", [], "any", false, false, true, 39));
                foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                    // line 40
                    echo "                    ";
                    $context["statusClass"] = "";
                    // line 41
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 41), "index-item-unanswered", [], "any", true, true, true, 41) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 41), "index-item-unanswered", [], "any", false, false, true, 41) == true))) {
                        // line 42
                        echo "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 42, $this->source) . " bg-warning");
                        // line 43
                        echo "                    ";
                    }
                    // line 44
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 44), "index-item-error", [], "any", true, true, true, 44) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 44), "index-item-error", [], "any", false, false, true, 44) == true))) {
                        // line 45
                        echo "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 45, $this->source) . " bg-danger");
                        // line 46
                        echo "                    ";
                    }
                    // line 47
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 47), "index-item-current", [], "any", true, true, true, 47) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 47), "index-item-current", [], "any", false, false, true, 47) == true))) {
                        // line 48
                        echo "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 48, $this->source) . " disabled");
                        // line 49
                        echo "                    ";
                    }
                    // line 50
                    echo "                    <li class=\"list-group-item";
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "coreClass", [], "any", false, false, true, 50), 50, $this->source);
                    echo "\">
                        <a href='";
                    // line 51
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "url", [], "any", false, false, true, 51), 51, $this->source);
                    echo "' data-limesurvey-submit='";
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "submit", [], "any", false, false, true, 51), 51, $this->source);
                    echo "'
                           class='dropdown-item  ";
                    // line 52
                    echo $this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 52, $this->source);
                    echo "'>
                            ";
                    // line 53
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "text", [], "any", false, false, true, 53), 53, $this->source);
                    echo "
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "            </ul>
        </li>
    ";
            }
            // line 60
            echo "
    ";
            // line 62
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 62) == "S")) {
                // line 63
                echo "        <!-- Question index, question by question, ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 63), "type", [], "any", false, false, true, 63), 63, $this->source);
                echo " -->
        <li class=\"dropdown nav-item ls-no-js-hidden dropdown index-menu-";
                // line 64
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 64), "type", [], "any", false, false, true, 64), 64, $this->source);
                echo "\">
            <a class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
               aria-expanded=\"false\">
                ";
                // line 67
                echo gT("Question index");
                echo "
                <span class=\"caret\"></span>
            </a>
            <!-- TODO: Remove this when support is added -->
            <ul class=\"dropdown-sub-menu dropdown-menu\">
                ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 72), "items", [], "any", false, false, true, 72));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 73
                    echo "                    ";
                    // line 74
                    echo "                    <li>
                        <div class=\"dropdown-header\">
                            ";
                    // line 76
                    echo LS_Twig_Extension::flatEllipsizeText($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "text", [], "any", false, false, true, 76), 76, $this->source), true, 30, " &hellip; ", 0.6);
                    echo "
                            <span class=\"caret\"></span>
                        </div>
                        <ul class=\"dropdown-sub-menu dropdown-menu\">
                            ";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "questions", [], "any", false, false, true, 80));
                    foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                        // line 81
                        echo "                                ";
                        $context["statusClass"] = "";
                        // line 82
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 82), "index-item-unanswered", [], "any", true, true, true, 82) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 82), "index-item-unanswered", [], "any", false, false, true, 82) == true))) {
                            // line 83
                            echo "                                    ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 83, $this->source) . " bg-warning");
                            // line 84
                            echo "                                ";
                        }
                        // line 85
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 85), "index-item-error", [], "any", true, true, true, 85) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 85), "index-item-error", [], "any", false, false, true, 85) == true))) {
                            // line 86
                            echo "                                    ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 86, $this->source) . " bg-danger");
                            // line 87
                            echo "                                ";
                        }
                        // line 88
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 88), "index-item-current", [], "any", true, true, true, 88) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 88), "index-item-current", [], "any", false, false, true, 88) == true))) {
                            // line 89
                            echo "                                    ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 89, $this->source) . " disabled");
                            // line 90
                            echo "                                ";
                        }
                        // line 91
                        echo "                                <li class=\"";
                        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "coreClass", [], "any", false, false, true, 91), 91, $this->source);
                        echo " ";
                        echo $this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 91, $this->source);
                        echo "\">
                                    <a href='";
                        // line 92
                        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "url", [], "any", false, false, true, 92), 92, $this->source);
                        echo "' data-limesurvey-submit='";
                        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "submit", [], "any", false, false, true, 92), 92, $this->source);
                        echo "'
                                       class='animate'>
                                        ";
                        // line 94
                        echo LS_Twig_Extension::flatEllipsizeText($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "text", [], "any", false, false, true, 94), 94, $this->source), true, 30, " &hellip; ", 0.6);
                        echo "
                                    </a>
                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo "                        </ul>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 101), "type", [], "any", false, false, true, 101) == "full")) {
                    // line 102
                    echo "                    <li>
                        ";
                    // line 103
                    echo gT("Question by question mode not yet supported.");
                    echo "
                    </li>
                ";
                }
                // line 106
                echo "            </ul>
        </li>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 106,  247 => 103,  244 => 102,  241 => 101,  233 => 98,  223 => 94,  216 => 92,  209 => 91,  206 => 90,  203 => 89,  200 => 88,  197 => 87,  194 => 86,  191 => 85,  188 => 84,  185 => 83,  182 => 82,  179 => 81,  175 => 80,  168 => 76,  164 => 74,  162 => 73,  158 => 72,  150 => 67,  144 => 64,  139 => 63,  136 => 62,  133 => 60,  128 => 57,  118 => 53,  114 => 52,  108 => 51,  103 => 50,  100 => 49,  97 => 48,  94 => 47,  91 => 46,  88 => 45,  85 => 44,  82 => 43,  79 => 42,  76 => 41,  73 => 40,  68 => 39,  61 => 34,  55 => 31,  50 => 30,  47 => 29,  45 => 28,  42 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/question_index_menu.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\question_index_menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 28, "for" => 39, "set" => 40);
        static $filters = array();
        static $functions = array("gT" => 34, "flatEllipsizeText" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['gT', 'flatEllipsizeText']
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
