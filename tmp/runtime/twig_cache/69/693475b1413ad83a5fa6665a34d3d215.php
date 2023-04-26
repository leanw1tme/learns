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

/* /admin/labels/labelRow.twig */
class __TwigTemplate_af4555cb1e6fdca02c7a34eca206a072 extends Template
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
        // line 14
        echo "<tr class=\"labelDatas\" style='white-space: nowrap;' id='row_";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 14, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 14, $this->source);
        echo "'>
    ";
        // line 15
        if ( !($context["first"] ?? null)) {
            // line 16
            echo "        <td>";
            echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 16, $this->source);
            echo "</td>
        <td>";
            // line 17
            echo $this->sandbox->ensureToStringAllowed(($context["assessmentValue"] ?? null), 17, $this->source);
            echo "</td>
    ";
        } else {
            // line 19
            echo "        <td>
            <span class=\"ri-menu-fill bigIcons text-success\"></span>
        </td>

        <td>
            <input type='hidden' class='hiddencode' value='";
            // line 24
            echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 24, $this->source);
            echo "'/>
            <input type='text' class='codeval  form-control  ' id='code_";
            // line 25
            echo $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 25, $this->source);
            echo "' name='code_";
            echo $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 25, $this->source);
            echo "' maxlength='20' size='20' value='";
            echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 25, $this->source);
            echo "'/>
        </td>

        <td>
            <input type=\"number\" class='assessmentval  form-control  ' id='assessmentvalue_";
            // line 29
            echo $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 29, $this->source);
            echo "' style='text-align: right;' name='assessmentvalue_";
            echo $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 29, $this->source);
            echo "' maxlength='5' size='6' value='";
            echo $this->sandbox->ensureToStringAllowed(($context["assessmentValue"] ?? null), 29, $this->source);
            echo "'/>
        </td>
    ";
        }
        // line 32
        echo "
    <td>
        <input type='text' class=\" form-control  \" name='title_";
        // line 34
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 34, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 34, $this->source);
        echo "' id='title_";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 34, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 34, $this->source);
        echo "' maxlength='3000' size='80' value=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 34, $this->source);
        echo "\" />
    </td>
    <td>
        <div class=\"icon-btn-row\">
            ";
        // line 38
        if (($context["hasLabelSetUpdatePermission"] ?? null)) {
            // line 39
            echo "                <a
                    href='#'
                    class=\"btn btn-outline-secondary btn-sm htmleditor--openmodal\"
                    data-target-field-id=\"title_";
            // line 42
            echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 42, $this->source);
            echo "_";
            echo $this->sandbox->ensureToStringAllowed(($context["rowId"] ?? null), 42, $this->source);
            echo "\"
                    data-bs-toggle=\"tooltip\"
                    title=\"";
            // line 44
            echo gT("Open editor");
            echo "\">
                    <i class=\"ri-file-edit-line\"></i>
                </a>
                ";
            // line 47
            if (($context["first"] ?? null)) {
                // line 48
                echo "                    <button class=\"btn btn-outline-secondary btn-sm btnaddanswer\" type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                echo gT("Add label");
                echo "\">
                        <i class=\"ri-add-circle-fill text-success\"></i>
                    </button>
                    <button class=\"btn btn-outline-secondary btn-sm btndelanswer\" type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                // line 51
                echo gT("Delete label");
                echo "\">
                        <i class=\"ri-indeterminate-circle-fill text-danger\"></i>
                    </button>
                ";
            }
            // line 55
            echo "            ";
        }
        // line 56
        echo "        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "/admin/labels/labelRow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  145 => 55,  138 => 51,  131 => 48,  129 => 47,  123 => 44,  116 => 42,  111 => 39,  109 => 38,  94 => 34,  90 => 32,  80 => 29,  69 => 25,  65 => 24,  58 => 19,  53 => 17,  48 => 16,  46 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/labels/labelRow.twig", "D:\\xamp\\htdocs\\learns\\application\\views\\admin\\labels\\labelRow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array();
        static $functions = array("gT" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
