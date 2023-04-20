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

/* __string_template__61589bc425926282f84078b962b7ff1b */
class __TwigTemplate_d47c8c6b0c554952797c27a159d53f02 extends Template
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
        echo gT("Publication and access settings");
        echo "</h5>
        <a class=\"float-end btn btn-outline-secondary btn-xs pjax\" data-bs-toggle=\"tooltip\" title=\"";
        // line 4
        echo gT("Edit publication and access settings");
        echo "\" href=\"";
        echo LS_Twig_Extension::createUrl("surveyAdministration/rendersidemenulink", ["subaction" => "publication", "surveyid" => ($context["surveyid"] ?? null)]);
        echo "\">
           <i class=\"ri-key-line\"></i>
        </a>
    </div>
    <ul class=\"list-group list-group-flush\">
        <!-- Start date/time -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
               <div class=\"col-4 card-label\">
                    ";
        // line 13
        echo gT("Start date/time:");
        echo "
                </div>
                <div class=\"col-8\">
                    ";
        // line 16
        echo $this->sandbox->ensureToStringAllowed(($context["startdate"] ?? null), 16, $this->source);
        echo "
                </div>
            </div>
        </li>
        <!-- Expiration date/time -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
               <div class=\"col-4 card-label\">
                    ";
        // line 24
        echo gT("Expiration date/time:");
        echo "
                </div>
                <div class=\"col-8\">
                    ";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["expdate"] ?? null), 27, $this->source);
        echo "
                </div>
            </div>
        </li>
        <!-- Publicly available -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
               <div class=\"col-4 card-label\">
                    ";
        // line 35
        echo gT("Listed publicly:");
        echo "
                </div>
                <div class=\"col-8\">
                    ";
        // line 38
        echo ((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "isListPublic", [], "any", false, false, true, 38)) ? (gT("Yes")) : (gT("No")));
        echo "
                </div>
            </div>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__61589bc425926282f84078b962b7ff1b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 38,  95 => 35,  84 => 27,  78 => 24,  67 => 16,  61 => 13,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__61589bc425926282f84078b962b7ff1b", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("gT" => 3, "createUrl" => 4);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['gT', 'createUrl']
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
