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

/* __string_template__82a184cb345b3ea6255539683c5be4e3 */
class __TwigTemplate_c18b5801de06a8126cf62d96138afeb1 extends Template
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
        echo gT("Database usage");
        echo "</h5>
    </div>
    <ul class=\"list-group list-group-flush\">
        <!-- usage -->
        ";
        // line 7
        if ((($context["tableusage"] ?? null) != false)) {
            // line 8
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, ($context["tableusage"] ?? null), "dbtype", [], "any", false, false, true, 8) == "mysql") || (twig_get_attribute($this->env, $this->source, ($context["tableusage"] ?? null), "dbtype", [], "any", false, false, true, 8) == "mysqli"))) {
                // line 9
                echo "                ";
                $context["column_usage"] = (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["tableusage"] ?? null), "column", [], "any", false, false, true, 9)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) / (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["tableusage"] ?? null), "column", [], "any", false, false, true, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null)) * 100);
                // line 10
                echo "                ";
                $context["size_usage"] = (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["tableusage"] ?? null), "size", [], "any", false, false, true, 10)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null) / (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["tableusage"] ?? null), "size", [], "any", false, false, true, 10)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null)) * 100);
                // line 11
                echo "                <li class=\"list-group-item p-0 border-0\">
                    <div class=\"ls-flex-row col-12\">
                        <div class=\"col-4\">
                            ";
                // line 14
                echo gT("Table column usage");
                echo ":
                        </div>
                        <div class=\"col-8\">
                            <div class='progressbar' style='width:";
                // line 17
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["column_usage"] ?? null), 17, $this->source));
                echo "%; height:15px;' name='";
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["column_usage"] ?? null), 17, $this->source), 2);
                echo "'></div>
                        </div>
                    </div>
                </li>
                <li class=\"list-group-item p-0 border-0\">
                    <div class=\"ls-flex-row col-12\">
                        <div class=\"col-4\">
                            ";
                // line 24
                echo gT("Table size usage");
                echo "
                        </div>
                        <div class=\"col-8\">
                            <div class='progressbar' style='width:";
                // line 27
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["size_usage"] ?? null), 27, $this->source));
                echo "%; height:15px;' name='";
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["size_usage"] ?? null), 27, $this->source), 2);
                echo "'></div>
                        </div>
                    </div>
                </li>
            ";
            } elseif ((((twig_get_attribute($this->env, $this->source,             // line 31
($context["arrCols"] ?? null), "dbtype", [], "any", false, false, true, 31) == "mssql") || (twig_get_attribute($this->env, $this->source, ($context["arrCols"] ?? null), "dbtype", [], "any", false, false, true, 31) == "postgre")) || (twig_get_attribute($this->env, $this->source, ($context["arrCols"] ?? null), "dbtype", [], "any", false, false, true, 31) == "dblib"))) {
                // line 32
                echo "                ";
                $context["column_usage"] = (((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["tableusage"] ?? null), "column", [], "any", false, false, true, 32)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null) / (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["tableusage"] ?? null), "column", [], "any", false, false, true, 32)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null)) * 100);
                // line 33
                echo "                <li class=\"list-group-item p-0 border-0\">
                    <div class=\"ls-flex-row col-12\">
                        <div class=\"col-4\">
                            ";
                // line 36
                echo gT("Table column usage");
                echo "
                        </div>
                        <div class=\"col-8\">
                            <div class='progressbar' style='width:";
                // line 39
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["column_usage"] ?? null), 39, $this->source));
                echo "%; height:15px;' name='";
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["column_usage"] ?? null), 39, $this->source), 2);
                echo "'></div>
                        </div>
                    </div>
                </li>
            ";
            }
            // line 44
            echo "        ";
        } else {
            // line 45
            echo "        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
                ";
            // line 47
            echo gT("No info or no data found");
            echo "
            </div>
        </li>
        ";
        }
        // line 51
        echo "    </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__82a184cb345b3ea6255539683c5be4e3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 51,  132 => 47,  128 => 45,  125 => 44,  115 => 39,  109 => 36,  104 => 33,  101 => 32,  99 => 31,  90 => 27,  84 => 24,  72 => 17,  66 => 14,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  50 => 7,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__82a184cb345b3ea6255539683c5be4e3", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "set" => 9);
        static $filters = array("round" => 17);
        static $functions = array("gT" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['round'],
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
