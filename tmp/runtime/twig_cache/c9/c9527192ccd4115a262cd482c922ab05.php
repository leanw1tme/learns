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

/* ./subviews/navigation/language_changer_top_menu.twig */
class __TwigTemplate_e7305d57f227c0b437db19538b720021 extends Template
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
        // line 24
        echo "
";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 26), "show", [], "any", false, false, true, 26) == true)) {
            // line 27
            echo "
    ";
            // line 29
            echo "    ";
            $context["aLCD"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 29), "datas", [], "any", false, false, true, 29);
            // line 30
            echo "
    <!-- Language Changer, top menu version -->
    <li class=\"ls-no-js-hidden form-change-lang dropdown nav-item px-2\">
        <a class=\"nav-link dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\"
           data-bs-target=\"#language-dropdown\">
            ";
            // line 36
            echo "            ";
            echo gT("Language:");
            echo " ";
            echo $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["aLCD"] ?? null), "aListLang", [], "any", false, false, true, 36)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["aLCD"] ?? null), "sSelected", [], "any", false, false, true, 36)] ?? null) : null), 36, $this->source);
            echo "
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu dropdown-menu-end\" id=\"language-dropdown\">
            ";
            // line 41
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aLCD"] ?? null), "aListLang", [], "any", false, false, true, 41));
            foreach ($context['_seq'] as $context["value"] => $context["lang"]) {
                // line 42
                echo "                <li class=\"index-item\">
                    <a href='#' data-limesurvey-lang='";
                // line 43
                echo $this->sandbox->ensureToStringAllowed($context["value"], 43, $this->source);
                echo "' class=\"dropdown-item ls-language-link\">
                        ";
                // line 44
                echo $this->sandbox->ensureToStringAllowed($context["lang"], 44, $this->source);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </ul>
    </li>

";
        }
        // line 52
        echo "
";
        // line 53
        echo LS_Twig_Extension::registerScript("BasicThemeScripts-TopLanguageChanger", "basicThemeScripts.initTopMenuLanguageChanger('.ls-language-link ', 'form#limesurvey'); ", "POS_POSTSCRIPT");
        echo "

";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer_top_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 53,  95 => 52,  89 => 48,  79 => 44,  75 => 43,  72 => 42,  67 => 41,  57 => 36,  50 => 30,  47 => 29,  44 => 27,  42 => 26,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/language_changer_top_menu.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\language_changer_top_menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26, "set" => 29, "for" => 41);
        static $filters = array();
        static $functions = array("gT" => 36, "registerScript" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                [],
                ['gT', 'registerScript']
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
