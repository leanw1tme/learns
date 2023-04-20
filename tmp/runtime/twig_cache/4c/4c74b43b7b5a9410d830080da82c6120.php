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

/* __string_template__49d60551aa67aa57298068c9a575fdfd */
class __TwigTemplate_b5b62ca763ac3eba76aef8259ac0b24e extends Template
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
        // line 211
        echo "    </div>
</article>
";
        // line 213
        $this->displayBlock('footer', $context, $blocks);
        // line 216
        echo "<div id=\"bottomScripts\">
    <###end###>
</div>
";
        // line 219
        $this->displayBlock('themescripts', $context, $blocks);
        // line 224
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
        // line 205
        echo "

            ";
        // line 208
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
                            <div class=\"row justify-content-center\">
                                <div
                                    id=\"";
        // line 125
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 125), "surveylistrowjumbotron", [], "any", false, false, true, 125), 125, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 125), "surveylistrowjumbotron", [], "any", false, false, true, 125), 125, $this->source);
        echo ">
                                    ";
        // line 126
        echo LS_Twig_Extension::image("./files/survey_list_header.png", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 126), 126, $this->source), ["class" => "img-fluid mx-auto d-block"]);
        echo "
                                    <span class=\"text-center\">";
        // line 127
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteName", [], "any", false, false, true, 127), 127, $this->source);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-4\"></div>
                                <div class=\"col\">
                                    <div id=\"surveylist-language-changer\" class=\"ls-js-hidden\">
                                        ";
        // line 134
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer_form.twig");
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 140
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 140), "surveylistrowdiva", [], "any", false, false, true, 140), 140, $this->source);
        echo " col-12\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 140), "surveylistrowdiva", [], "any", false, false, true, 140), 140, $this->source);
        echo ">
                                    <div
                                        class='";
        // line 142
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 142), "surveylistrowdivadiv", [], "any", false, false, true, 142), 142, $this->source);
        echo " h3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 142), "surveylistrowdivadiv", [], "any", false, false, true, 142), 142, $this->source);
        echo ">
                                        ";
        // line 143
        echo gT("The following surveys are available:");
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 150
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 150), "surveylistrowdivb", [], "any", false, false, true, 150), 150, $this->source);
        echo " col-12\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 150), "surveylistrowdivb", [], "any", false, false, true, 150), 150, $this->source);
        echo ">
                                    <div
                                        class='";
        // line 152
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 152), "surveylistrowdivbdiv", [], "any", false, false, true, 152), 152, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 152), "surveylistrowdivbdiv", [], "any", false, false, true, 152), 152, $this->source);
        echo ">
                                        <ul class='";
        // line 153
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 153), "surveylistrowdivbdivul", [], "any", false, false, true, 153), 153, $this->source);
        echo " list-unstyled ' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 153), "surveylistrowdivbdivul", [], "any", false, false, true, 153), 153, $this->source);
        echo ">

                                            ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "publicSurveys", [], "any", false, false, true, 155));
        foreach ($context['_seq'] as $context["key"] => $context["oSurvey"]) {
            // line 156
            echo "                                                <li class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 156), "surveylistrowdivbdivulli", [], "any", false, false, true, 156), 156, $this->source);
            echo " btn-group col-12 col-md-6\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 156), "surveylistrowdivbdivulli", [], "any", false, false, true, 156), 156, $this->source);
            echo ">
                                                    <a
                                                        href=\"";
            // line 158
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["oSurvey"], "sSurveyUrl", [], "any", false, false, true, 158), 158, $this->source);
            echo "\"
                                                        title=\"";
            // line 159
            echo gT("Start survey");
            echo "\"
                                                        lang=\"";
            // line 160
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["oSurvey"], "language", [], "any", false, false, true, 160), 160, $this->source);
            echo "\"
                                                        class=\"";
            // line 161
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 161), "surveylistrowdivbdivullia", [], "any", false, false, true, 161), 161, $this->source);
            echo " btn btn-primary col-12\">
                                                        ";
            // line 162
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["oSurvey"], "localizedTitle", [], "any", false, false, true, 162), 162, $this->source);
            echo "
                                                    </a>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oSurvey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 172
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 172), "surveylistrowdivc", [], "any", false, false, true, 172), 172, $this->source);
        echo " col-12 \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 172), "surveylistrowdivc", [], "any", false, false, true, 172), 172, $this->source);
        echo ">
                                    ";
        // line 173
        echo sprintf(gT("Please contact %s ( %s ) for further assistance."), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteAdminName", [], "any", false, false, true, 173), 173, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteAdminEmail", [], "any", false, false, true, 173), 173, $this->source));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id=\"";
        // line 179
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 179), "surveylistfooter", [], "any", false, false, true, 179), 179, $this->source);
        echo "\"
                         class=\"";
        // line 180
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 180), "surveylistfooter", [], "any", false, false, true, 180), 180, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 180), "surveylistfooter", [], "any", false, false, true, 180), 180, $this->source);
        echo ">
                        <div
                            class=\"";
        // line 182
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 182), "surveylistfootercont", [], "any", false, false, true, 182), 182, $this->source);
        echo " container\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 182), "surveylistfootercont", [], "any", false, false, true, 182), 182, $this->source);
        echo ">
                            <div ";
        // line 183
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 183), "surveylistfootercontp", [], "any", false, false, true, 183), 183, $this->source);
        echo " class=\"row\">
                                <div class=\"col-6 col-md-12\">
                                    <a ";
        // line 185
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 185), "surveylistfootercontpaa", [], "any", false, false, true, 185), 185, $this->source);
        echo ">
                                        ";
        // line 186
        echo LS_Twig_Extension::image("./files/poweredby.png", "LimeSurvey Survey Software", ["class" => "img-fluid"]);
        echo "
                                    </a>
                                </div>
                                <div class=\"col-12 d-block d-sm-none d-md-block text-center\">
                                    <a ";
        // line 190
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 190), "surveylistfootercontpab", [], "any", false, false, true, 190), 190, $this->source);
        echo ">
                                        The Online Survey Tool
                                    </a>
                                    - Free & Open Source
                                </div>
                                <div class=\"col-6 d-none d-sm-block d-md-none text-center\">
                                    <a ";
        // line 196
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 196), "surveylistfootercontpab", [], "any", false, false, true, 196), 196, $this->source);
        echo ">
                                        Online Surveytool
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
    }

    // line 213
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
";
    }

    // line 219
    public function block_themescripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        echo "    <script>
        window.basicThemeScripts.init();
    </script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__49d60551aa67aa57298068c9a575fdfd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 220,  396 => 219,  389 => 214,  385 => 213,  372 => 196,  363 => 190,  356 => 186,  352 => 185,  347 => 183,  341 => 182,  334 => 180,  330 => 179,  321 => 173,  315 => 172,  307 => 166,  297 => 162,  293 => 161,  289 => 160,  285 => 159,  281 => 158,  273 => 156,  269 => 155,  262 => 153,  256 => 152,  249 => 150,  239 => 143,  233 => 142,  226 => 140,  217 => 134,  207 => 127,  203 => 126,  197 => 125,  190 => 122,  183 => 119,  179 => 118,  174 => 116,  171 => 115,  167 => 114,  160 => 109,  156 => 108,  148 => 208,  144 => 205,  141 => 114,  137 => 111,  134 => 108,  132 => 107,  128 => 106,  122 => 224,  120 => 219,  115 => 216,  113 => 213,  109 => 211,  107 => 106,  103 => 105,  99 => 103,  93 => 98,  76 => 95,  70 => 92,  59 => 89,  53 => 88,  49 => 86,  44 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__49d60551aa67aa57298068c9a575fdfd", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 95, "block" => 106, "for" => 155);
        static $filters = array();
        static $functions = array("include" => 92, "registerScript" => 208, "registerTemplateCssFile" => 116, "image" => 126, "gT" => 143, "sprintf" => 173);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for'],
                [],
                ['include', 'registerScript', 'registerTemplateCssFile', 'image', 'gT', 'sprintf']
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
