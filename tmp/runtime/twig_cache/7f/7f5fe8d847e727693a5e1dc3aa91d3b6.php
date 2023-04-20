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

/* __string_template__dd5b5f360716baf5abc347a9ed292eb4 */
class __TwigTemplate_1819bbfddd88168bb47a8d1829cc3c3a extends Template
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
        echo "<div class=\"card card-primary h-100\">
    <div class=\"card-header\">
        <h5 class=\"card-title\">";
        // line 3
        echo gT("Survey general settings");
        echo "</h5>
        <a class=\"float-end btn btn-outline-secondary btn-xs pjax\" data-bs-toggle=\"tooltip\" title=\"";
        // line 4
        echo gT("General survey settings");
        echo "\" href=\"";
        echo LS_Twig_Extension::createUrl("surveyAdministration/rendersidemenulink", ["subaction" => "generalsettings", "surveyid" => ($context["surveyid"] ?? null)]);
        echo "\">
            <i class=\"ri-tools-line\"></i>
        </a>
    </div>
    <ul class=\"list-group list-group-flush\">
        <!-- Owner -->

        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
               <div class=\"col-4 card-label\">
                    ";
        // line 14
        echo gT("Owner:");
        echo "
                </div>
                <div class=\"col-8\">
                        ";
        // line 17
        echo flattenText(((($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "aOptions", [], "any", false, false, true, 17)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["owner"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["users_name"] ?? null) : null), 17, $this->source) . " (") . $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "aOptions", [], "any", false, false, true, 17)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["owner"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["email"] ?? null) : null), 17, $this->source)) . ")"));
        echo "
                </div>
            </div>
        </li>
        <!-- Administrator -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
               <div class=\"col-4 card-label\">
                    ";
        // line 25
        echo gT("Administrator:");
        echo "
                </div>
                <div class=\"col-8\">
                        ";
        // line 28
        echo flattenText(((($this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "aOptions", [], "any", false, false, true, 28)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["admin"] ?? null) : null), 28, $this->source) . " (") . $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "aOptions", [], "any", false, false, true, 28)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["adminemail"] ?? null) : null), 28, $this->source)) . ")"));
        echo "
                </div>
            </div>
        </li>
        <!-- Theme -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
               <div class=\"col-4 card-label\">
                    ";
        // line 36
        echo gT("Theme:");
        echo "
                </div>
                <div class=\"col-8\">

                    ";
        // line 40
        if (array_key_exists("templateModel", $context)) {
            // line 41
            echo "                        ";
            if (LS_Twig_Extension::checkPermission("templates", "read")) {
                // line 42
                echo "                            ";
                $context["sTemplateOptionsUrl"] = LS_Twig_Extension::createUrl("themeOptions/updateSurvey", ["surveyid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 42)]);
                // line 43
                echo "                            ";
                $context["sTemplateEditorUrl"] = LS_Twig_Extension::createUrl("admin/themes/sa/view", ["templatename" => (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "aOptions", [], "any", false, false, true, 43)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["template"] ?? null) : null)]);
                // line 44
                echo "                            ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["templateModel"] ?? null), "title", [], "any", false, false, true, 44), 44, $this->source);
                echo " ( ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["templateModel"] ?? null), "name", [], "any", false, false, true, 44), 44, $this->source);
                echo ")
                            <a href='";
                // line 45
                echo $this->sandbox->ensureToStringAllowed(($context["sTemplateOptionsUrl"] ?? null), 45, $this->source);
                echo "' title=\"";
                echo gT("Edit theme options");
                echo "\" class=\"btn btn-outline-secondary btn-xs float-end\"><i class=\"ri-contrast-drop-line\"></i></a>
                            <a href='";
                // line 46
                echo $this->sandbox->ensureToStringAllowed(($context["sTemplateEditorUrl"] ?? null), 46, $this->source);
                echo "' title=\"";
                echo gT("Open theme editor in new window");
                echo "\" target=\"_blank\" class=\"btn btn-outline-secondary btn-xs float-end\"><i class=\"ri-pencil-line\"></i></a>
                        ";
            } else {
                // line 48
                echo "                            ";
                echo $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "aOptions", [], "any", false, false, true, 48)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["template"] ?? null) : null), 48, $this->source);
                echo "
                        ";
            }
            // line 50
            echo "                    ";
        } else {
            // line 51
            echo "                        ";
            $context["errorMessage"] = sprintf(gT("Error: Theme \"%s\" is not installed."), $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "aOptions", [], "any", false, false, true, 51)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["template"] ?? null) : null), 51, $this->source));
            // line 52
            echo "                        ";
            echo $this->sandbox->ensureToStringAllowed(($context["errorMessage"] ?? null), 52, $this->source);
            echo "
                    ";
        }
        // line 54
        echo "                </div>

            </div>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__dd5b5f360716baf5abc347a9ed292eb4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 54,  146 => 52,  143 => 51,  140 => 50,  134 => 48,  127 => 46,  121 => 45,  114 => 44,  111 => 43,  108 => 42,  105 => 41,  103 => 40,  96 => 36,  85 => 28,  79 => 25,  68 => 17,  62 => 14,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__dd5b5f360716baf5abc347a9ed292eb4", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40, "set" => 42);
        static $filters = array();
        static $functions = array("gT" => 3, "createUrl" => 4, "flattenText" => 17, "checkPermission" => 41, "sprintf" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['gT', 'createUrl', 'flattenText', 'checkPermission', 'sprintf']
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
