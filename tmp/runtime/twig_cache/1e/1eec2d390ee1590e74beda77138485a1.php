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

/* ./subviews/content/firstpage.twig */
class __TwigTemplate_6055732bf26c81c990cd3e9d4653e1f5 extends Template
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
        // line 17
        echo "
";
        // line 19
        echo "
";
        // line 21
        echo twig_include($this->env, $context, "./subviews/messages/no_js_alert.twig");
        echo "

";
        // line 24
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer_first_page.twig");
        echo "

";
        // line 27
        echo twig_include($this->env, $context, "./subviews/header/start_form.twig");
        echo " <!-- main form -->

    ";
        // line 30
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "EM", [], "any", false, false, true, 30), "ScriptsAndHiddenInputs", [], "any", false, false, true, 30), 30, $this->source);
        echo "

    ";
        // line 33
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/messages/welcome.twig");
        echo "

    ";
        // line 35
        echo twig_include($this->env, $context, "./subviews/privacy/privacy.twig");
        echo "

    ";
        // line 38
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/navigation/navigator.twig");
        echo "
</form> <!-- main form -->

";
        // line 41
        echo LS_Twig_Extension::registerScript("BasicFirstPageThemeScripts", "
    if(window.basicThemeScripts === undefined){ 
        window.basicThemeScripts = new ThemeScripts(); 
    } 
", "POS_POSTSCRIPT");
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/firstpage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 45,  84 => 41,  77 => 38,  72 => 35,  66 => 33,  60 => 30,  55 => 27,  50 => 24,  45 => 21,  42 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/firstpage.twig", "D:\\xamp\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\content\\firstpage.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("include" => 21, "registerScript" => 41);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['include', 'registerScript']
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
