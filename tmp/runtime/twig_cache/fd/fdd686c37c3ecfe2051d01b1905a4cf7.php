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

/* ./subviews/header/custom_header.twig */
class __TwigTemplate_4a83a015ca6a814c9ada2623b0b604f1 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 19), "notables", [], "any", false, false, true, 19) == "2")) {
            // line 20
            echo "    ";
            echo LS_Twig_Extension::registerTemplateCssFile("./css/noTablesGeneral.css");
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 21), "notables", [], "any", false, false, true, 21) == "1")) {
            // line 22
            echo "    ";
            echo LS_Twig_Extension::registerTemplateCssFile("./css/noTablesOnMobile.css");
            echo "
";
        }
        // line 24
        echo "
";
        // line 26
        echo "<style>
    ";
        // line 27
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 27), "backgroundimage", [], "any", false, false, true, 27) == "on") && LS_Twig_Extension::imageSrc(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 27), "backgroundimagefile", [], "any", false, false, true, 27)))) {
            // line 28
            echo "        body {
            background-image: url(";
            // line 29
            echo LS_Twig_Extension::imageSrc($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 29), "backgroundimagefile", [], "any", false, false, true, 29), 29, $this->source));
            echo ");
            background-attachment: fixed;
            background-size: cover;

        }

        body .top-container {
            background-color: rgba(236, 240, 241, 0.2);
        }
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 40), "brandlogo", [], "any", false, false, true, 40) == "on")) {
            // line 41
            echo "        body .top-container {
            margin-top: 70px;
        }
    ";
        }
        // line 45
        echo "
    body {
         padding-bottom: 10px;
         /*padding-top: 60px;!* now is redefine in JS to fit any title length *!*/
         background-color:";
        // line 49
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 49), "bodybackgroundcolor", [], "any", false, false, true, 49), 49, $this->source);
        echo " ;
         color: ";
        // line 50
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 50), "fontcolor", [], "any", false, false, true, 50), 50, $this->source);
        echo ";
    }

    .navbar-default .navbar-nav > li > a:hover {
        color: ";
        // line 54
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 54), "fontcolor", [], "any", false, false, true, 54), 54, $this->source);
        echo ";
    }


    .question-container {
      background-color: ";
        // line 59
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 59), "questionbackgroundcolor", [], "any", false, false, true, 59), 59, $this->source);
        echo ";

      ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 61), "questionborder", [], "any", false, false, true, 61) == "on")) {
            // line 62
            echo "        border:  1px solid #e6e6e6;
      ";
        }
        // line 64
        echo "
      ";
        // line 65
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 65), "questioncontainershadow", [], "any", false, false, true, 65) == "on") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 65), "questionborder", [], "any", false, false, true, 65) == "on"))) {
            // line 66
            echo "        box-shadow: 0 1px 2px rgba(0,0,0,.2);
      ";
        }
        // line 68
        echo "    }

    ";
        // line 70
        $context["checkicon"] = (("\"\\" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 70), "checkicon", [], "any", false, false, true, 70), 70, $this->source)) . "\"");
        // line 71
        echo "    .checkbox-item input[type=\"checkbox\"]:checked + label::after, .checkbox-item input[type=\"radio\"]:checked + label::after {
        content: ";
        // line 72
        echo $this->sandbox->ensureToStringAllowed(($context["checkicon"] ?? null), 72, $this->source);
        echo ";
    }

    ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 75), "animatecheckbox", [], "any", false, false, true, 75) == "on")) {
            // line 76
            echo "
        ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 77), "checkboxanimationduration", [], "any", false, false, true, 77) < 1)) {
                // line 78
                echo "            ";
                $context["checkboxanimationduration"] = 500;
                // line 79
                echo "        ";
            } else {
                // line 80
                echo "            ";
                $context["checkboxanimationduration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 80), "checkboxanimationduration", [], "any", false, false, true, 80);
                // line 81
                echo "        ";
            }
            // line 82
            echo "
        .checkbox-item input[type=\"checkbox\"]:checked + label::after{
            animation-name: ";
            // line 84
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 84), "checkboxanimation", [], "any", false, false, true, 84), 84, $this->source);
            echo ";
            animation-duration: ";
            // line 85
            echo $this->sandbox->ensureToStringAllowed(($context["checkboxanimationduration"] ?? null), 85, $this->source);
            echo "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .checkbox-item input[type=\"checkbox\"] + label::after{
            display: none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 102
        echo "
    ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 103), "animateradio", [], "any", false, false, true, 103) == "on")) {
            // line 104
            echo "
        ";
            // line 105
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 105), "radioanimationduration", [], "any", false, false, true, 105) < 1)) {
                // line 106
                echo "            ";
                $context["radioanimationduration"] = 500;
                // line 107
                echo "        ";
            } else {
                // line 108
                echo "            ";
                $context["radioanimationduration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 108), "radioanimationduration", [], "any", false, false, true, 108);
                // line 109
                echo "        ";
            }
            // line 110
            echo "
        .radio-item input[type=\"radio\"]:checked + label::after{
            animation-name: ";
            // line 112
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 112), "radioanimation", [], "any", false, false, true, 112), 112, $this->source);
            echo ";
            animation-duration: ";
            // line 113
            echo $this->sandbox->ensureToStringAllowed(($context["radioanimationduration"] ?? null), 113, $this->source);
            echo "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .radio-item input[type=\"radio\"] + label::after{
            display:none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 130
        echo "
    ";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 131), "animatequestion", [], "any", false, false, true, 131) == "on")) {
            // line 132
            echo "
        ";
            // line 133
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 133), "questionanimationduration", [], "any", false, false, true, 133) < 1)) {
                // line 134
                echo "            ";
                $context["questionanimationduration"] = 500;
                // line 135
                echo "        ";
            } else {
                // line 136
                echo "            ";
                $context["questionanimationduration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 136), "questionanimationduration", [], "any", false, false, true, 136);
                // line 137
                echo "        ";
            }
            // line 138
            echo "
        .question-container {
            animation-name: ";
            // line 140
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 140), "questionanimation", [], "any", false, false, true, 140), 140, $this->source);
            echo ";
            animation-duration: ";
            // line 141
            echo $this->sandbox->ensureToStringAllowed(($context["questionanimationduration"] ?? null), 141, $this->source);
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 146), "animatealert", [], "any", false, false, true, 146) == "on")) {
            // line 147
            echo "
        ";
            // line 148
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 148), "alertanimationduration", [], "any", false, false, true, 148) < 1)) {
                // line 149
                echo "            ";
                $context["alertanimationduration"] = 500;
                // line 150
                echo "        ";
            } else {
                // line 151
                echo "            ";
                $context["alertanimationduration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 151), "alertanimationduration", [], "any", false, false, true, 151);
                // line 152
                echo "        ";
            }
            // line 153
            echo "
        .alert {
            animation-name: ";
            // line 155
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 155), "alertanimation", [], "any", false, false, true, 155), 155, $this->source);
            echo ";
            animation-duration: ";
            // line 156
            echo $this->sandbox->ensureToStringAllowed(($context["alertanimationduration"] ?? null), 156, $this->source);
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 160
        echo "
    ";
        // line 161
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 161), "animatebody", [], "any", false, false, true, 161) == "on")) {
            // line 162
            echo "
        ";
            // line 163
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 163), "bodyanimationduration", [], "any", false, false, true, 163) < 1)) {
                // line 164
                echo "            ";
                $context["bodyanimationduration"] = 500;
                // line 165
                echo "        ";
            } else {
                // line 166
                echo "            ";
                $context["bodyanimationduration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 166), "bodyanimationduration", [], "any", false, false, true, 166);
                // line 167
                echo "        ";
            }
            // line 168
            echo "
        #outerframeContainer {
            animation-name: ";
            // line 170
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 170), "bodyanimation", [], "any", false, false, true, 170), 170, $this->source);
            echo ";
            animation-duration: ";
            // line 171
            echo $this->sandbox->ensureToStringAllowed(($context["bodyanimationduration"] ?? null), 171, $this->source);
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 175
        echo "
    ";
        // line 176
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 176), "zebrastriping", [], "any", false, false, true, 176) == "on")) {
            // line 177
            echo "    .question-container:nth-of-type(odd){
        background-color: ";
            // line 178
            echo LS_Twig_Extension::darkencss($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 178), "questionbackgroundcolor", [], "any", false, false, true, 178), 178, $this->source));
            echo "
    }
    .question-container:nth-of-type(even){
        background-color: ";
            // line 181
            echo LS_Twig_Extension::lightencss($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 181), "questionbackgroundcolor", [], "any", false, false, true, 181), 181, $this->source));
            echo "
    }
    ";
        }
        // line 184
        echo "
    ";
        // line 185
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 185), "stickymatrixheaders", [], "any", false, false, true, 185) == "on")) {
            // line 186
            echo "
        .sticky .ls-heading.stickyBar {
            background: white;
            opacity: 1;
        }
        .sticky .ls-heading.stickyBar>td,
        .sticky .ls-heading.stickyBar>th {
            word-break: break-word;
        }

        .sticky .ls-heading.stickyBar>td:first-child {
            visibility: hidden;
        }

        .sticky .ls-heading:nth-child(n+2) {
            display: none;
            background: white;
        }

        tbody>.ls-heading-repeat:not(.stickyBar) {
            display: none;
        }
        @media (max-width: 1024px){
            .sticky .ls-heading.stickyBar {
                display: none;
            }
        }
    ";
        }
        // line 214
        echo "
    ";
        // line 215
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 215), "greyoutselected", [], "any", false, false, true, 215) == "on")) {
            // line 216
            echo "
        tr.radio-list.selected{
            opacity: 0.5;
        }
        tr.radio-list.selected:hover,
        tr.radio-list.selected:active{
            opacity: 1;
        }
    ";
        }
        // line 225
        echo "
    ";
        // line 226
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 226), "crosshover", [], "any", false, false, true, 226) == "on")) {
            // line 227
            echo "        @media (min-width: 1024px){
            table.ls-answers.table-hover,
            table.ls-answers.table-col-hover
            {
                overflow: hidden;
                }

            table.ls-answers.table-hover>tbody>tr:hover td,
            table.ls-answers.table-hover>tbody>tr:hover th,
            table.ls-answers.table-col-hover>tbody>tr:hover td,
            table.ls-answers.table-col-hover>tbody>tr:hover th {
                background-color: ";
            // line 238
            echo LS_Twig_Extension::darkencss($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 238), "questionbackgroundcolor", [], "any", false, false, true, 238), 238, $this->source), 50, 0.2);
            echo ";
            }

            table.ls-answers.table-hover>tbody>tr>td, th {
                position: relative;
            }
            table.ls-answers.table-col-hover>tbody>tr>td, th {
                position: relative;
            }
            table.ls-answers.table-hover>tbody>tr>td:hover::after,
            table.ls-answers.table-col-hover>tbody>tr>td:hover::after {
                content: \"\";
                position: absolute;
                background-color: ";
            // line 251
            echo LS_Twig_Extension::darkencss($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 251), "questionbackgroundcolor", [], "any", false, false, true, 251), 251, $this->source), 50, 0.2);
            echo ";
                left: 0;
                top: -5000px;
                height: 10000px;
                width: 100%;
                z-index: 2;
                pointer-events: none;
            }
        }
    ";
        }
        // line 261
        echo "
</style>


";
        // line 265
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 265), "stickymatrixheaders", [], "any", false, false, true, 265) == "on")) {
            // line 266
            echo "    ";
            echo LS_Twig_Extension::registerTemplateScript("scripts/sticky.min.js", "POS_BEGIN");
            echo "
    ";
            // line 267
            echo LS_Twig_Extension::registerScript("StickyMatrixHeaderScript", "
        var stickyRows = new StickyTableRows();
        \$('thead>tr.ls-heading').each(function(itrt, item){
            if(\$(item).closest('div.question-container').hasClass('array-flexible-dual-scale')) {
                return;
            }
            stickyRows.add(item);
        });
        stickyRows.init();
    ", "POS_POSTSCRIPT");
            // line 276
            echo "
";
        }
        // line 278
        echo "
";
        // line 279
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 279), "greyoutselected", [], "any", false, false, true, 279) == "on")) {
            // line 280
            echo "    ";
            echo LS_Twig_Extension::registerScript("GreyOutSelectedScript", "
    \$('td.radio-item > input[type=radio]').on('click', function(){
        if(\$(this).val() != '' ) {
            \$(this).closest('tr.radio-list').addClass('selected');
        } else {
            \$(this).closest('tr.radio-list').removeClass('selected');
        }
    })
    ", "POS_POSTSCRIPT");
            // line 288
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/custom_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 288,  511 => 280,  509 => 279,  506 => 278,  502 => 276,  491 => 267,  486 => 266,  484 => 265,  478 => 261,  465 => 251,  449 => 238,  436 => 227,  434 => 226,  431 => 225,  420 => 216,  418 => 215,  415 => 214,  385 => 186,  383 => 185,  380 => 184,  374 => 181,  368 => 178,  365 => 177,  363 => 176,  360 => 175,  353 => 171,  349 => 170,  345 => 168,  342 => 167,  339 => 166,  336 => 165,  333 => 164,  331 => 163,  328 => 162,  326 => 161,  323 => 160,  316 => 156,  312 => 155,  308 => 153,  305 => 152,  302 => 151,  299 => 150,  296 => 149,  294 => 148,  291 => 147,  289 => 146,  286 => 145,  279 => 141,  275 => 140,  271 => 138,  268 => 137,  265 => 136,  262 => 135,  259 => 134,  257 => 133,  254 => 132,  252 => 131,  249 => 130,  229 => 113,  225 => 112,  221 => 110,  218 => 109,  215 => 108,  212 => 107,  209 => 106,  207 => 105,  204 => 104,  202 => 103,  199 => 102,  179 => 85,  175 => 84,  171 => 82,  168 => 81,  165 => 80,  162 => 79,  159 => 78,  157 => 77,  154 => 76,  152 => 75,  146 => 72,  143 => 71,  141 => 70,  137 => 68,  133 => 66,  131 => 65,  128 => 64,  124 => 62,  122 => 61,  117 => 59,  109 => 54,  102 => 50,  98 => 49,  92 => 45,  86 => 41,  84 => 40,  81 => 39,  68 => 29,  65 => 28,  63 => 27,  60 => 26,  57 => 24,  51 => 22,  49 => 21,  44 => 20,  42 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/custom_header.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\fruity\\views\\subviews\\header\\custom_header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 70);
        static $filters = array();
        static $functions = array("registerTemplateCssFile" => 20, "imageSrc" => 27, "darkencss" => 178, "lightencss" => 181, "registerTemplateScript" => 266, "registerScript" => 267);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['registerTemplateCssFile', 'imageSrc', 'darkencss', 'lightencss', 'registerTemplateScript', 'registerScript']
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
