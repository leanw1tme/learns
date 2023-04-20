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

/* __string_template__8fb43323046378ab421189eb05262c08 */
class __TwigTemplate_612ed79b4b94411e5c0e78a64198618f extends Template
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
        echo "<!-- Survey's texts -->
<div class=\"card card-primary h-100\">
    <!-- Default panel contents -->
    <div class=\"card-header\">
        <h5 class=\"card-title\">";
        // line 5
        echo gT("Text elements");
        echo "</h5>
        <a class=\"float-end btn btn-outline-secondary btn-xs pjax\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo gT("Survey text elements");
        echo "\" href=\"";
        echo LS_Twig_Extension::createUrl("surveyAdministration/rendersidemenulink", ["subaction" => "surveytexts", "surveyid" => ($context["surveyid"] ?? null)]);
        echo "\">
          <i class=\"ri-tools-line\"></i>
        </a>
    </div>
    <!-- List group -->
    <ul class=\"list-group list-group-flush\">
            <!-- Description -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
                <div class=\"col-4 card-label\">
                    ";
        // line 16
        echo gT("Description:");
        echo "
                </div>
                <div class=\"col-8 \">
                        ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_description", [], "any", false, false, true, 19) != "")) {
            // line 20
            echo "                            <span id=\"description\" class=\"line-clamp-3\">
                                ";
            // line 21
            echo LS_Twig_Extension::getExpressionManagerOutput($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_description", [], "any", false, false, true, 21), 21, $this->source));
            echo "
                            </span>
                            ";
            // line 23
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_description", [], "any", false, false, true, 23)) > 50)) {
                // line 24
                echo "                                <a href=\"#\" onclick=\"{document.getElementById('description').classList.remove('line-clamp-3'); 
                                            this.style.display = 'none'}\"> ";
                // line 25
                echo gT("...more");
                echo "</a>
                            ";
            }
            // line 27
            echo "                        ";
        }
        // line 28
        echo "
                </div>
            </div>
        </li>
        <!-- Welcome -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
                <div class=\"col-4 card-label\">
                    ";
        // line 36
        echo gT("Welcome:");
        echo "
                </div>
                <div class=\"col-8\">
                        ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_welcometext", [], "any", false, false, true, 39) != "")) {
            // line 40
            echo "                            ";
            echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_welcometext", [], "any", false, false, true, 40), 40, $this->source), "welcome_text");
            echo "
                        ";
        }
        // line 42
        echo "                </div>
            </div>
        </li>

        <!-- End message -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
                <div class=\"col-4 card-label\">
                    ";
        // line 50
        echo gT("End message:");
        echo "
                </div>
                <div class=\"col-8\">
                    ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_endtext", [], "any", false, false, true, 53) != "")) {
            // line 54
            echo "                        ";
            echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_endtext", [], "any", false, false, true, 54), 54, $this->source), "end_text");
            echo "
                    ";
        }
        // line 56
        echo "                </div>
            </div>
        </li>
        ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 59) > 0)) {
            // line 60
            echo "                    <!-- Data security notice -->
                    <li class=\"list-group-item p-0 border-0\">
                        <div class=\"ls-flex-row col-12 gap-2\">
                            <div class=\"col-4 card-label\">
                                 ";
            // line 64
            echo gT("Privacy policy text:");
            echo "
                            </div>
                            <div class=\"col-8\">
                                ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice", [], "any", false, false, true, 67) != "")) {
                // line 68
                echo "                                    ";
                echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice", [], "any", false, false, true, 68), 68, $this->source), "security_notice");
                echo "
                                ";
            }
            // line 70
            echo "                            </div>
                        </div>
                    </li>
                    <!-- Data security notice error -->
                    <li class=\"list-group-item p-0 border-0\">
                        <div class=\"ls-flex-row col-12 gap-2\">
                            <div class=\"col-4 card-label\">
                                ";
            // line 77
            echo gT("Privacy policy error text:");
            echo "
                            </div>
                            <div class=\"col-8\">
                                ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_error", [], "any", false, false, true, 80) != "")) {
                // line 81
                echo "                                    ";
                echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_error", [], "any", false, false, true, 81), 81, $this->source), "security_error");
                echo "
                                ";
            }
            // line 83
            echo "                            </div>
                        </div>
                    </li>
                    <!-- Data security notice label -->
                    <li class=\"list-group-item p-0 border-0\">
                        <div class=\"ls-flex-row col-12 gap-2\">
                            <div class=\"col-4 card-label\">
                                ";
            // line 90
            echo gT("Privacy policy label text:");
            echo "
                            </div>
                            <div class=\"col-8\">
                                ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice_label", [], "any", false, false, true, 93) != "")) {
                // line 94
                echo "                                    ";
                echo LS_Twig_Extension::getExpressionManagerOutput($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice_label", [], "any", false, false, true, 94), 94, $this->source));
                echo "
                                ";
            }
            // line 96
            echo "                            </div>
                        </div>
                    </li>
            ";
        }
        // line 100
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__8fb43323046378ab421189eb05262c08";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 100,  214 => 96,  208 => 94,  206 => 93,  200 => 90,  191 => 83,  185 => 81,  183 => 80,  177 => 77,  168 => 70,  162 => 68,  160 => 67,  154 => 64,  148 => 60,  146 => 59,  141 => 56,  135 => 54,  133 => 53,  127 => 50,  117 => 42,  111 => 40,  109 => 39,  103 => 36,  93 => 28,  90 => 27,  85 => 25,  82 => 24,  80 => 23,  75 => 21,  72 => 20,  70 => 19,  64 => 16,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8fb43323046378ab421189eb05262c08", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("length" => 23);
        static $functions = array("gT" => 5, "createUrl" => 6, "getExpressionManagerOutput" => 21, "getTextDisplayWidget" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['length'],
                ['gT', 'createUrl', 'getExpressionManagerOutput', 'getTextDisplayWidget']
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
