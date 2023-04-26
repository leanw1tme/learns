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

/* ./subviews/content/load.twig */
class __TwigTemplate_4773ec138407e05d312dce8730184763 extends Template
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
        // line 32
        echo "
    ";
        // line 34
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "EM", [], "any", false, false, true, 34), "ScriptsAndHiddenInputs", [], "any", false, false, true, 34), 34, $this->source);
        echo "

    <div class=\"";
        // line 36
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 36), "savemessage", [], "any", false, false, true, 36), 36, $this->source);
        echo " card card-body bg-light clearfix mb-3\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 36), "savemessage", [], "any", false, false, true, 36), 36, $this->source);
        echo ">
        <div class=\"";
        // line 37
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 37), "savemessagetitle", [], "any", false, false, true, 37), 37, $this->source);
        echo " card-title h2\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 37), "savemessagetitle", [], "any", false, false, true, 37), 37, $this->source);
        echo ">";
        echo gT("Load unfinished survey");
        echo "</div>
        <div class=\"";
        // line 38
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 38), "savemessagetext", [], "any", false, false, true, 38), 38, $this->source);
        echo " text-info\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 38), "savemessagetext", [], "any", false, false, true, 38), 38, $this->source);
        echo ">
            <p ";
        // line 39
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 39), "savemessagetextp", [], "any", false, false, true, 39), 39, $this->source);
        echo " > ";
        echo gT("You can load a survey that you have previously saved from this screen.");
        echo " </p>
            <p ";
        // line 40
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 40), "savemessagetextpb", [], "any", false, false, true, 40), 40, $this->source);
        echo " > ";
        echo gT("Type in the 'name' you used to save the survey, and the password.");
        echo " </p>
        </div>
    </div>

    <div class=\"";
        // line 44
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 44), "loadform", [], "any", false, false, true, 44), 44, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 44), "loadform", [], "any", false, false, true, 44), 44, $this->source);
        echo ">

        ";
        // line 46
        if ((LS_Twig_Extension::safecount(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 46), "aErrors", [], "any", false, false, true, 46)) > 0)) {
            // line 47
            echo "            <ul class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 47), "loadformul", [], "any", false, false, true, 47), 47, $this->source);
            echo " alert alert-danger list-unstyled \" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 47), "loadformul", [], "any", false, false, true, 47), 47, $this->source);
            echo " >
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 48), "aErrors", [], "any", false, false, true, 48));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 49
                echo "                    <li ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 49), "loadformulli", [], "any", false, false, true, 49), 49, $this->source);
                echo ">";
                echo $this->sandbox->ensureToStringAllowed($context["error"], 49, $this->source);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </ul>
        ";
        }
        // line 53
        echo "
        ";
        // line 59
        echo "        ";
        $context["htmlOptions"] = ["id" => "form-load", "name" => "form-load", "class" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 62), "loadformform", [], "any", false, false, true, 62)];
        // line 65
        echo "
        ";
        // line 71
        echo "        <!-- Save Form -->
        ";
        // line 72
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["C"] ?? null), "Html", [], "any", false, false, true, 73), "form", [0 => twig_get_attribute($this->env, $this->source,         // line 74
($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 74), 1 => "post", 2 =>         // line 76
($context["htmlOptions"] ?? null)], "method", false, false, true, 73), 73, $this->source);
        // line 78
        echo "
            <!-- Hidden fields  -->
            ";
        // line 80
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 80), "sHiddenField", [], "any", false, false, true, 80), 80, $this->source);
        echo "

            <!-- Name and Password -->
            <div class=\"";
        // line 83
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 83), "saveform", [], "any", false, false, true, 83), 83, $this->source);
        echo " col-lg-8 offset-lg-2\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 83), "saveform", [], "any", false, false, true, 83), 83, $this->source);
        echo ">

                <!-- Saved name  -->
                <div class=\"";
        // line 86
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 86), "saveformrow", [], "any", false, false, true, 86), 86, $this->source);
        echo " mb-3\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 86), "saveformrow", [], "any", false, false, true, 86), 86, $this->source);
        echo ">
                    <label class=\"";
        // line 87
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 87), "saveformrowlabel", [], "any", false, false, true, 87), 87, $this->source);
        echo " control-label\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 87), "saveformrowlabel", [], "any", false, false, true, 87), 87, $this->source);
        echo ">
                        ";
        // line 88
        echo gT("Saved name:");
        echo "
                        <small class=\"";
        // line 89
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 89), "saveformrowlabelsmall", [], "any", false, false, true, 89), 89, $this->source);
        echo " text-danger asterisk fa fa-asterisk float-start small\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 89), "saveformrowlabelsmall", [], "any", false, false, true, 89), 89, $this->source);
        echo " >&nbsp;</small>
                        <span class=\"";
        // line 90
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 90), "saveformrowlabelspan", [], "any", false, false, true, 90), 90, $this->source);
        echo " visually-hidden text-danger asterisk\"  ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 90), "saveformrowlabelspan", [], "any", false, false, true, 90), 90, $this->source);
        echo " >";
        echo gT("Mandatory");
        echo "<span>
                    </label>
                    <div class=\"";
        // line 92
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 92), "saveformrowcol", [], "any", false, false, true, 92), 92, $this->source);
        echo " input-cell\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 92), "saveformrowcol", [], "any", false, false, true, 92), 92, $this->source);
        echo ">
                        <input class=\"";
        // line 93
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 93), "saveformrowcolinput", [], "any", false, false, true, 93), 93, $this->source);
        echo " form-control\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 93), "saveformrowcolinput", [], "any", false, false, true, 93), 93, $this->source);
        echo " id=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 93), "saveformrowcolinput", [], "any", false, false, true, 93), 93, $this->source);
        echo "\" >
                    </div>
                </div>

                <!-- Password -->
                <div class=\"";
        // line 98
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 98), "passwordrow", [], "any", false, false, true, 98), 98, $this->source);
        echo " mb-3\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 98), "passwordrow", [], "any", false, false, true, 98), 98, $this->source);
        echo ">
                    <label class='";
        // line 99
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 99), "passwordrowcol", [], "any", false, false, true, 99), 99, $this->source);
        echo " control-label'  ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 99), "passwordrowcol", [], "any", false, false, true, 99), 99, $this->source);
        echo " >
                        ";
        // line 100
        echo gT("Password:");
        echo "
                        <small class=\"";
        // line 101
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 101), "passwordrowcolsmall", [], "any", false, false, true, 101), 101, $this->source);
        echo " text-danger asterisk fa fa-asterisk float-start small\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 101), "passwordrowcolsmall", [], "any", false, false, true, 101), 101, $this->source);
        echo ">&nbsp;</small>
                        <span class=\"";
        // line 102
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 102), "passwordrowcolspan", [], "any", false, false, true, 102), 102, $this->source);
        echo " visually-hidden text-danger asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 102), "passwordrowcolspan", [], "any", false, false, true, 102), 102, $this->source);
        echo ">";
        echo gT("Mandatory");
        echo "<span>
                    </label>

                    <div class='";
        // line 105
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 105), "passwordrowinput", [], "any", false, false, true, 105), 105, $this->source);
        echo "'>
                        <input class='form-control' ";
        // line 106
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 106), "passwordrowinputi", [], "any", false, false, true, 106), 106, $this->source);
        echo " >
                    </div>
                </div>

                ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 110), "aCaptcha", [], "any", false, false, true, 110), "show", [], "any", false, false, true, 110)) {
            // line 111
            echo "                    <!-- Captcha -->
                    <div class='";
            // line 112
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 112), "captcharow", [], "any", false, false, true, 112), 112, $this->source);
            echo " mb-3' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 112), "captcharow", [], "any", false, false, true, 112), 112, $this->source);
            echo ">
                        <label class='";
            // line 113
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 113), "captcharowlabel", [], "any", false, false, true, 113), 113, $this->source);
            echo " control-label'  ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 113), "captcharowlabel", [], "any", false, false, true, 113), 113, $this->source);
            echo ">
                            ";
            // line 114
            echo gT("Security question:");
            echo "
                        </label>
                        <div class='";
            // line 116
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 116), "captcharowcol", [], "any", false, false, true, 116), 116, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 116), "captcharowcol", [], "any", false, false, true, 116), 116, $this->source);
            echo ">
                            <div class='";
            // line 117
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 117), "captcharowcoldiv", [], "any", false, false, true, 117), 117, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 117), "captcharowcoldiv", [], "any", false, false, true, 117), 117, $this->source);
            echo ">
                                <span class='";
            // line 118
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 118), "captcharowcoldivdiv", [], "any", false, false, true, 118), 118, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 118), "captcharowcoldivdiv", [], "any", false, false, true, 118), 118, $this->source);
            echo " >
                                    <img src=\"";
            // line 119
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 119), "aCaptcha", [], "any", false, false, true, 119), "sImageUrl", [], "any", false, false, true, 119), 119, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 119), "captcharowcoldivdivimg", [], "any", false, false, true, 119), 119, $this->source);
            echo " />
                                </span>
                                <input id=\"";
            // line 121
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 121), "captcharowcoldivinput", [], "any", false, false, true, 121), 121, $this->source);
            echo "\" class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 121), "captcharowcoldivinput", [], "any", false, false, true, 121), 121, $this->source);
            echo " form-control' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 121), "captcharowcoldivinput", [], "any", false, false, true, 121), 121, $this->source);
            echo " />
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 126
        echo "
                <!-- load button -->
                <div class='";
        // line 128
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 128), "loadrow", [], "any", false, false, true, 128), 128, $this->source);
        echo " mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 128), "loadrow", [], "any", false, false, true, 128), 128, $this->source);
        echo ">
                    <div class='";
        // line 129
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 129), "loadrowcol", [], "any", false, false, true, 129), 129, $this->source);
        echo "  float-end' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 129), "loadrowcol", [], "any", false, false, true, 129), 129, $this->source);
        echo ">
                        <button class='";
        // line 130
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 130), "loadrowcolbutton", [], "any", false, false, true, 130), 130, $this->source);
        echo " btn btn-outline-secondary' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 130), "loadrowcolbutton", [], "any", false, false, true, 130), 130, $this->source);
        echo " >
                            ";
        // line 131
        echo gT("Load now");
        echo "
                        </button>
                    </div>
                </div>
            </div>


        <div class='";
        // line 138
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 138), "returntosurvey", [], "any", false, false, true, 138), 138, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 138), "returntosurvey", [], "any", false, false, true, 138), 138, $this->source);
        echo ">
            <div class=\"";
        // line 139
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 139), "returntosurveydiv", [], "any", false, false, true, 139), 139, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 139), "returntosurveydiv", [], "any", false, false, true, 139), 139, $this->source);
        echo ">
                <a href=\"";
        // line 140
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 140), 140, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 140), "returntosurveydiva", [], "any", false, false, true, 140), 140, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 140), "returntosurveydiva", [], "any", false, false, true, 140), 140, $this->source);
        echo "  >";
        echo gT("Return to survey");
        echo "</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/load.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 140,  343 => 139,  337 => 138,  327 => 131,  321 => 130,  315 => 129,  309 => 128,  305 => 126,  293 => 121,  286 => 119,  280 => 118,  274 => 117,  268 => 116,  263 => 114,  257 => 113,  251 => 112,  248 => 111,  246 => 110,  239 => 106,  235 => 105,  225 => 102,  219 => 101,  215 => 100,  209 => 99,  203 => 98,  191 => 93,  185 => 92,  176 => 90,  170 => 89,  166 => 88,  160 => 87,  154 => 86,  146 => 83,  140 => 80,  136 => 78,  134 => 76,  133 => 74,  132 => 73,  131 => 72,  128 => 71,  125 => 65,  123 => 62,  121 => 59,  118 => 53,  114 => 51,  103 => 49,  99 => 48,  92 => 47,  90 => 46,  83 => 44,  74 => 40,  68 => 39,  62 => 38,  54 => 37,  48 => 36,  42 => 34,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/load.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\content\\load.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 46, "for" => 48, "set" => 59);
        static $filters = array();
        static $functions = array("gT" => 37, "count" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['gT', 'count']
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
