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

/* __string_template__b5b558dcc8741cf3c1915af63982b257 */
class __TwigTemplate_dd53379eb1b0443d56be7c4c92adbde3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'nav_bar' => [$this, 'block_nav_bar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'themescripts' => [$this, 'block_themescripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "


";
        // line 86
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 88
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 88), 88, $this->source);
        echo "\" dir=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 88), 88, $this->source);
        echo "\"
      class=\"";
        // line 89
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 89), 89, $this->source);
        echo " dir-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 89), 89, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 89), "html", [], "any", false, false, true, 89), 89, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 89), "html", [], "any", false, false, true, 89), 89, $this->source);
        echo ">

";
        // line 92
        echo twig_include($this->env, $context, "./subviews/header/head.twig");
        echo "

<body
    class=\" ";
        // line 95
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 95), "body", [], "any", false, false, true, 95), 95, $this->source);
        echo " font-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 95), "font", [], "any", false, false, true, 95), 95, $this->source);
        echo " lang-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 95), 95, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyformat", [], "any", false, false, true, 95), 95, $this->source);
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 95), "brandlogo", [], "any", false, false, true, 95) == "on")) {
            echo "brand-logo";
        }
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 95), "body", [], "any", false, false, true, 95), 95, $this->source);
        echo " >

";
        // line 98
        echo "<div id=\"beginScripts\">
    <###begin###>
</div>

";
        // line 103
        echo "<article>

    <div id=\"";
        // line 105
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 105), "dynamicreload", [], "any", false, false, true, 105), 105, $this->source);
        echo "\">
        ";
        // line 106
        $this->displayBlock('body', $context, $blocks);
        // line 193
        echo "    </div>
</article>
";
        // line 195
        $this->displayBlock('footer', $context, $blocks);
        // line 198
        echo "<div id=\"bottomScripts\">
    <###end###>
</div>
";
        // line 201
        $this->displayBlock('themescripts', $context, $blocks);
        // line 206
        echo "</body>
</html>
";
    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "            ";
        // line 108
        echo "            ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 111
        echo "

            ";
        // line 114
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 187
        echo "

            ";
        // line 190
        echo "            ";
        echo LS_Twig_Extension::registerScript("BasicThemeScripts", " if(window.basicThemeScripts === undefined){ window.basicThemeScripts = new ThemeScripts(); } basicThemeScripts.initGlobal(); ", "POS_END");
        echo "

        ";
    }

    // line 108
    public function block_nav_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "                ";
        echo twig_include($this->env, $context, "./subviews/header/nav_bar.twig");
        echo "
            ";
    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                <div class=\"container-fluid\">
                    ";
        // line 116
        echo LS_Twig_Extension::registerTemplateCssFile("./css/survey-list.css");
        echo "

                    <div class=\"";
        // line 118
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 118), "surveylistrow", [], "any", false, false, true, 118), 118, $this->source);
        echo " row\"
                         id=\"";
        // line 119
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 119), "surveylistrow", [], "any", false, false, true, 119), 119, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 119), "surveylistrow", [], "any", false, false, true, 119), 119, $this->source);
        echo ">
                        <div class=\"col-12\">
                            ";
        // line 122
        echo "                            ";
        echo twig_include($this->env, $context, "./subviews/messages/no_js_alert.twig");
        echo "
                            <div class=\"row\">
                                <div class=\"col-4\"></div>
                                <div class=\"col\">
                                    <div id=\"surveylist-language-changer\" class=\"ls-js-hidden\">
                                        ";
        // line 127
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer_form.twig");
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 133
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 133), "surveylistrowdiva", [], "any", false, false, true, 133), 133, $this->source);
        echo " col-12\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 133), "surveylistrowdiva", [], "any", false, false, true, 133), 133, $this->source);
        echo ">
                                    <div
                                        class='";
        // line 135
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 135), "surveylistrowdivadiv", [], "any", false, false, true, 135), 135, $this->source);
        echo " h3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 135), "surveylistrowdivadiv", [], "any", false, false, true, 135), 135, $this->source);
        echo ">
                                        ";
        // line 136
        echo gT("The following surveys are available:");
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 143
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 143), "surveylistrowdivb", [], "any", false, false, true, 143), 143, $this->source);
        echo " col-12\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 143), "surveylistrowdivb", [], "any", false, false, true, 143), 143, $this->source);
        echo ">
                                    <div
                                        class='";
        // line 145
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 145), "surveylistrowdivbdiv", [], "any", false, false, true, 145), 145, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 145), "surveylistrowdivbdiv", [], "any", false, false, true, 145), 145, $this->source);
        echo ">
                                        <ul class='";
        // line 146
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 146), "surveylistrowdivbdivul", [], "any", false, false, true, 146), 146, $this->source);
        echo " list-unstyled ' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 146), "surveylistrowdivbdivul", [], "any", false, false, true, 146), 146, $this->source);
        echo ">

                                            ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "publicSurveys", [], "any", false, false, true, 148));
        foreach ($context['_seq'] as $context["key"] => $context["oSurvey"]) {
            // line 149
            echo "                                                <li class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 149), "surveylistrowdivbdivulli", [], "any", false, false, true, 149), 149, $this->source);
            echo " btn-group col-12 col-md-6\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 149), "surveylistrowdivbdivulli", [], "any", false, false, true, 149), 149, $this->source);
            echo ">
                                                    <a
                                                        href=\"";
            // line 151
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["oSurvey"], "sSurveyUrl", [], "any", false, false, true, 151), 151, $this->source);
            echo "\"
                                                        title=\"";
            // line 152
            echo gT("Start survey");
            echo "\"
                                                        lang=\"";
            // line 153
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["oSurvey"], "language", [], "any", false, false, true, 153), 153, $this->source);
            echo "\"
                                                        class=\"";
            // line 154
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 154), "surveylistrowdivbdivullia", [], "any", false, false, true, 154), 154, $this->source);
            echo " btn btn-primary col-12\">
                                                        ";
            // line 155
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["oSurvey"], "localizedTitle", [], "any", false, false, true, 155), 155, $this->source);
            echo "
                                                    </a>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oSurvey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 165
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 165), "surveylistrowdivc", [], "any", false, false, true, 165), 165, $this->source);
        echo " col-12 \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 165), "surveylistrowdivc", [], "any", false, false, true, 165), 165, $this->source);
        echo ">
                                    ";
        // line 166
        echo sprintf(gT("Please contact %s ( %s ) for further assistance."), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteAdminName", [], "any", false, false, true, 166), 166, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteAdminEmail", [], "any", false, false, true, 166), 166, $this->source));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id=\"";
        // line 172
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 172), "surveylistfooter", [], "any", false, false, true, 172), 172, $this->source);
        echo "\"
                         class=\"";
        // line 173
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 173), "surveylistfooter", [], "any", false, false, true, 173), 173, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 173), "surveylistfooter", [], "any", false, false, true, 173), 173, $this->source);
        echo ">
                        <div
                            class=\"";
        // line 175
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 175), "surveylistfootercont", [], "any", false, false, true, 175), 175, $this->source);
        echo " container\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 175), "surveylistfootercont", [], "any", false, false, true, 175), 175, $this->source);
        echo ">
                            <div ";
        // line 176
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 176), "surveylistfootercontp", [], "any", false, false, true, 176), 176, $this->source);
        echo " class=\"row\">
                                <div class=\"col-12 d-block d-sm-none d-md-block text-center\">
                                    <a ";
        // line 178
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 178), "surveylistfootercontpab", [], "any", false, false, true, 178), 178, $this->source);
        echo ">
                                        The Online Survey Learns
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
    }

    // line 195
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 196
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
";
    }

    // line 201
    public function block_themescripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 202
        echo "    <script>
        window.basicThemeScripts.init();
    </script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b5b558dcc8741cf3c1915af63982b257";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 202,  358 => 201,  351 => 196,  347 => 195,  334 => 178,  329 => 176,  323 => 175,  316 => 173,  312 => 172,  303 => 166,  297 => 165,  289 => 159,  279 => 155,  275 => 154,  271 => 153,  267 => 152,  263 => 151,  255 => 149,  251 => 148,  244 => 146,  238 => 145,  231 => 143,  221 => 136,  215 => 135,  208 => 133,  199 => 127,  190 => 122,  183 => 119,  179 => 118,  174 => 116,  171 => 115,  167 => 114,  160 => 109,  156 => 108,  148 => 190,  144 => 187,  141 => 114,  137 => 111,  134 => 108,  132 => 107,  128 => 106,  122 => 206,  120 => 201,  115 => 198,  113 => 195,  109 => 193,  107 => 106,  103 => 105,  99 => 103,  93 => 98,  76 => 95,  70 => 92,  59 => 89,  53 => 88,  49 => 86,  44 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b5b558dcc8741cf3c1915af63982b257", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 95, "block" => 106, "for" => 148);
        static $filters = array();
        static $functions = array("include" => 92, "registerScript" => 190, "registerTemplateCssFile" => 116, "gT" => 136, "sprintf" => 166);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for'],
                [],
                ['include', 'registerScript', 'registerTemplateCssFile', 'gT', 'sprintf']
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
