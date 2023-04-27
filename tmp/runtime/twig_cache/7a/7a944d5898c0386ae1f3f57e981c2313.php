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

/* ./subviews/content/save.twig */
class __TwigTemplate_0aaa4bc7f131a1b01122ee9cdb908e60 extends Template
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
        // line 37
        echo twig_include($this->env, $context, "./subviews/header/start_form.twig");
        echo " <!-- main form -->

    ";
        // line 40
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "EM", [], "any", false, false, true, 40), "ScriptsAndHiddenInputs", [], "any", false, false, true, 40), 40, $this->source);
        echo "

    <div class=\"";
        // line 42
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 42), "savecontainer", [], "any", false, false, true, 42), 42, $this->source);
        echo " card bg-light mb-3 clearfix \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 42), "savecontainer", [], "any", false, false, true, 42), 42, $this->source);
        echo ">
        <div class=\"card-body\">
            <div class=\"";
        // line 44
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 44), "savecontainertitle", [], "any", false, false, true, 44), 44, $this->source);
        echo " h2\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 44), "savecontainertitle", [], "any", false, false, true, 44), 44, $this->source);
        echo ">";
        echo gT("Save your unfinished survey");
        echo "</div>
            <div class=\"";
        // line 45
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 45), "savecontainertext", [], "any", false, false, true, 45), 45, $this->source);
        echo " text-info\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 45), "savecontainertext", [], "any", false, false, true, 45), 45, $this->source);
        echo ">
                <p ";
        // line 46
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 46), "savecontainertextpa", [], "any", false, false, true, 46), 46, $this->source);
        echo "> ";
        echo gT("Enter a name and password for this survey and click save below.");
        echo " </p>
                <p ";
        // line 47
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 47), "savecontainertextpb", [], "any", false, false, true, 47), 47, $this->source);
        echo "> ";
        echo gT("Your survey will be saved using that name and password, and can be completed later by logging in with the same name and password.");
        echo " </p>
                <p class='";
        // line 48
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 48), "savecontainertextpc", [], "any", false, false, true, 48), 48, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 48), "savecontainertextpc", [], "any", false, false, true, 48), 48, $this->source);
        echo "> ";
        echo gT("If you give an email address, an email containing the details will be sent to you.");
        echo " </p>
                <p ";
        // line 49
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 49), "savecontainertextpd", [], "any", false, false, true, 49), 49, $this->source);
        echo "> ";
        echo gT("After having clicked the save button you can either close this browser window or continue filling out the survey.");
        echo " </p>
            </div>
            <div class=\"";
        // line 51
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 51), "savecontainerwarning", [], "any", false, false, true, 51), 51, $this->source);
        echo " text-warning\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 51), "savecontainerwarning", [], "any", false, false, true, 51), 51, $this->source);
        echo ">
                <p> ";
        // line 52
        echo gT("To remain anonymous please use a pseudonym as your username, also an email address is not required.");
        echo " </p>
            </div>
        </div>
    </div>

    <div class=\"";
        // line 57
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 57), "saveformcontainer", [], "any", false, false, true, 57), 57, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 57), "saveformcontainer", [], "any", false, false, true, 57), 57, $this->source);
        echo ">

        ";
        // line 59
        if ((LS_Twig_Extension::safecount(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 59), "aErrors", [], "any", false, false, true, 59)) > 0)) {
            // line 60
            echo "            <ul class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 60), "sClass", [], "any", false, false, true, 60), 60, $this->source);
            echo "  ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 60), "saveformcontainerul", [], "any", false, false, true, 60), 60, $this->source);
            echo " alert alert-danger list-unstyled '  >
                ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 61), "aErrors", [], "any", false, false, true, 61));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 62
                echo "                    <li ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 62), "saveformcontainerli", [], "any", false, false, true, 62), 62, $this->source);
                echo " >";
                echo $this->sandbox->ensureToStringAllowed($context["error"], 62, $this->source);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </ul>
        ";
        }
        // line 66
        echo "
        ";
        // line 72
        echo "        ";
        $context["htmlOptions"] = ["id" => "form-save", "name" => "form-save", "class" => "ls-form"];
        // line 78
        echo "
        ";
        // line 84
        echo "        <!-- Save Form -->
        ";
        // line 85
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["C"] ?? null), "Html", [], "any", false, false, true, 86), "form", [0 => twig_get_attribute($this->env, $this->source,         // line 87
($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 87), 1 => "post", 2 =>         // line 89
($context["htmlOptions"] ?? null)], "method", false, false, true, 86), 86, $this->source);
        // line 91
        echo "
            <!-- Hidden fields  -->
            ";
        // line 93
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 93), "sHiddenField", [], "any", false, false, true, 93), 93, $this->source);
        echo "

            <!-- Name and Password -->
            <div class='";
        // line 96
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 96), "saveformsurvey", [], "any", false, false, true, 96), 96, $this->source);
        echo " col-lg-8 offset-lg-2' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 96), "saveformsurvey", [], "any", false, false, true, 96), 96, $this->source);
        echo ">
                <div class='";
        // line 97
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 97), "saveformsurveydiva", [], "any", false, false, true, 97), 97, $this->source);
        echo " mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 97), "saveformsurveydiva", [], "any", false, false, true, 97), 97, $this->source);
        echo ">

                    <!-- Saved name  -->
                    <label class='";
        // line 100
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 100), "saveformsurveydivalabel", [], "any", false, false, true, 100), 100, $this->source);
        echo " control-label' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 100), "saveformsurveydivalabel", [], "any", false, false, true, 100), 100, $this->source);
        echo ">
                        ";
        // line 101
        echo gT("Name:");
        echo "
                        <small class=\"";
        // line 102
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 102), "saveformsurveydivalabelsmall", [], "any", false, false, true, 102), 102, $this->source);
        echo " text-danger asterisk fa fa-asterisk float-start small \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 102), "saveformsurveydivalabelsmall", [], "any", false, false, true, 102), 102, $this->source);
        echo " >&nbsp;</small>
                        <span class=\"";
        // line 103
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 103), "saveformsurveydivalabelspan", [], "any", false, false, true, 103), 103, $this->source);
        echo " visually-hidden text-danger asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 103), "saveformsurveydivalabelspan", [], "any", false, false, true, 103), 103, $this->source);
        echo ">";
        echo gT("Mandatory");
        echo "<span>
                    </label>
                    <div class='";
        // line 105
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 105), "saveformsurveydivb", [], "any", false, false, true, 105), 105, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 105), "saveformsurveydivb", [], "any", false, false, true, 105), 105, $this->source);
        echo ">

                        ";
        // line 107
        $context["htmlOptions"] = ["id" => "savename", "name" => "savename", "class" => "form-control", "required" => true];
        // line 114
        echo "
                        ";
        // line 116
        echo "                        ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 116), "textField", [0 => "savename", 1 => LS_Twig_Extension::getPost("savename"), 2 =>         // line 119
($context["htmlOptions"] ?? null)], "method", false, false, true, 116), 116, $this->source);
        // line 120
        echo "
                    </div>

                </div>

                <!-- Password -->
                <div class='";
        // line 126
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 126), "saveformsurveydivc", [], "any", false, false, true, 126), 126, $this->source);
        echo " row mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 126), "saveformsurveydivc", [], "any", false, false, true, 126), 126, $this->source);
        echo ">
                    <label class='";
        // line 127
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 127), "saveformsurveydivclabel", [], "any", false, false, true, 127), 127, $this->source);
        echo " control-label' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 127), "saveformsurveydivclabel", [], "any", false, false, true, 127), 127, $this->source);
        echo ">
                        ";
        // line 128
        echo gT("Password:");
        echo "
                        <small class=\"";
        // line 129
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 129), "saveformsurveydivcsmall", [], "any", false, false, true, 129), 129, $this->source);
        echo " text-danger asterisk fa fa-asterisk float-start small\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 129), "saveformsurveydivcsmall", [], "any", false, false, true, 129), 129, $this->source);
        echo " >&nbsp;</small>
                        <span class=\"";
        // line 130
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 130), "saveformsurveydivcspan", [], "any", false, false, true, 130), 130, $this->source);
        echo " visually-hidden text-danger asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 130), "saveformsurveydivcspan", [], "any", false, false, true, 130), 130, $this->source);
        echo ">";
        echo gT("Mandatory");
        echo "<span>
                    </label>

                    <div class='";
        // line 133
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 133), "saveformsurveydivcdiv", [], "any", false, false, true, 133), 133, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 133), "saveformsurveydivcdiv", [], "any", false, false, true, 133), 133, $this->source);
        echo ">

                        ";
        // line 135
        $context["htmlOptions"] = ["id" => "savepass", "name" => "savepass", "class" => "form-control", "required" => true];
        // line 142
        echo "
                        ";
        // line 143
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 143), "passwordField", [0 => "savepass", 1 => "", 2 =>         // line 146
($context["htmlOptions"] ?? null)], "method", false, false, true, 143), 143, $this->source);
        // line 147
        echo "
                    </div>
                </div>

                <!-- Confirm password -->
                <div class='";
        // line 152
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 152), "saveformsurveydivd", [], "any", false, false, true, 152), 152, $this->source);
        echo " mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 152), "saveformsurveydivd", [], "any", false, false, true, 152), 152, $this->source);
        echo ">
                    <label class='";
        // line 153
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 153), "saveformsurveydivdlabel", [], "any", false, false, true, 153), 153, $this->source);
        echo " control-label' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 153), "saveformsurveydivdlabel", [], "any", false, false, true, 153), 153, $this->source);
        echo " >
                        ";
        // line 154
        echo gT("Repeat password:");
        echo "
                        <small class=\"";
        // line 155
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 155), "saveformsurveydivdlabelsmall", [], "any", false, false, true, 155), 155, $this->source);
        echo "  text-danger asterisk fa fa-asterisk float-start small\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 155), "saveformsurveydivdlabelsmall", [], "any", false, false, true, 155), 155, $this->source);
        echo ">&nbsp;</small>
                        <span class=\"";
        // line 156
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 156), "saveformsurveydivdlabelspan", [], "any", false, false, true, 156), 156, $this->source);
        echo " visually-hidden text-danger asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 156), "saveformsurveydivdlabelspan", [], "any", false, false, true, 156), 156, $this->source);
        echo ">";
        echo gT("Mandatory");
        echo "<span>
                    </label>

                    <div class='";
        // line 159
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 159), "saveformsurveydivddiv", [], "any", false, false, true, 159), 159, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 159), "saveformsurveydivddiv", [], "any", false, false, true, 159), 159, $this->source);
        echo ">
                        ";
        // line 160
        $context["htmlOptions"] = ["id" => "savepass2", "name" => "savepass2", "class" => "form-control", "required" => true];
        // line 167
        echo "
                        ";
        // line 168
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 168), "passwordField", [0 => "savepass2", 1 => "", 2 =>         // line 171
($context["htmlOptions"] ?? null)], "method", false, false, true, 168), 168, $this->source);
        // line 172
        echo "
                    </div>
                </div>

                <!-- Email -->
                <div class='";
        // line 177
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 177), "saveformsurveydive", [], "any", false, false, true, 177), 177, $this->source);
        echo "  mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 177), "saveformsurveydive", [], "any", false, false, true, 177), 177, $this->source);
        echo ">
                    <label class='";
        // line 178
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 178), "saveformsurveydivelabel", [], "any", false, false, true, 178), 178, $this->source);
        echo " control-label' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 178), "saveformsurveydivelabel", [], "any", false, false, true, 178), 178, $this->source);
        echo " >
                        ";
        // line 179
        echo gT("Your email address:");
        echo "
                    </label>
                    <div class='";
        // line 181
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 181), "saveformsurveydivediv", [], "any", false, false, true, 181), 181, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 181), "saveformsurveydivediv", [], "any", false, false, true, 181), 181, $this->source);
        echo ">

                        ";
        // line 183
        $context["htmlOptions"] = ["id" => "saveemail", "name" => "saveemail", "class" => "form-control"];
        // line 189
        echo "
                        ";
        // line 190
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 190), "emailField", [0 => "saveemail", 1 => "", 2 =>         // line 193
($context["htmlOptions"] ?? null)], "method", false, false, true, 190), 190, $this->source);
        // line 194
        echo "
                    </div>
                </div>


                ";
        // line 199
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 199), "aCaptcha", [], "any", false, false, true, 199), "show", [], "any", false, false, true, 199)) {
            // line 200
            echo "                    <!-- Captcha -->
                    <div class='";
            // line 201
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 201), "saveformsurveydivf", [], "any", false, false, true, 201), 201, $this->source);
            echo " mb-3' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 201), "saveformsurveydivd", [], "any", false, false, true, 201), 201, $this->source);
            echo " >
                        <label class='";
            // line 202
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 202), "saveformsurveydivflabel", [], "any", false, false, true, 202), 202, $this->source);
            echo " control-label' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 202), "saveformsurveydivdlabel", [], "any", false, false, true, 202), 202, $this->source);
            echo "  >
                            ";
            // line 203
            echo gT("Security question:");
            echo "
                        </label>
                        <div class='";
            // line 205
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 205), "saveformsurveydivfdiv", [], "any", false, false, true, 205), 205, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 205), "saveformsurveydivddiv", [], "any", false, false, true, 205), 205, $this->source);
            echo " >
                            <div class='";
            // line 206
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 206), "saveformsurveydivfdivdiv", [], "any", false, false, true, 206), 206, $this->source);
            echo " input-group' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 206), "saveformsurveydivddivdiv", [], "any", false, false, true, 206), 206, $this->source);
            echo ">
                                <div class='";
            // line 207
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 207), "saveformsurveydivfdivdivdiv", [], "any", false, false, true, 207), 207, $this->source);
            echo " ' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 207), "saveformsurveydivddivdivdiv", [], "any", false, false, true, 207), 207, $this->source);
            echo " >
                                    <img src='";
            // line 208
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 208), "aCaptcha", [], "any", false, false, true, 208), "sImageUrl", [], "any", false, false, true, 208), 208, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 208), "saveformsurveydivddivdivdivimg", [], "any", false, false, true, 208), 208, $this->source);
            echo "   />
                                </div>
                                <input class='";
            // line 210
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 210), "saveformsurveydivfdivdivinput", [], "any", false, false, true, 210), 210, $this->source);
            echo "  form-control'  ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 210), "saveformsurveydivfdivdivinput", [], "any", false, false, true, 210), 210, $this->source);
            echo " />
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 215
        echo "
                <!-- save button -->
                <div class='";
        // line 217
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 217), "saveformsurveydivg", [], "any", false, false, true, 217), 217, $this->source);
        echo " mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 217), "saveformsurveydivg", [], "any", false, false, true, 217), 217, $this->source);
        echo ">
                    <div class='";
        // line 218
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 218), "saveformsurveydivgdiv", [], "any", false, false, true, 218), 218, $this->source);
        echo " float-end' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 218), "saveformsurveydivgdiv", [], "any", false, false, true, 218), 218, $this->source);
        echo ">
                        <button ";
        // line 219
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 219), "saveformsurveydivgdivbutton", [], "any", false, false, true, 219), 219, $this->source);
        echo "  class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 219), "saveformsurveydivgdivbutton", [], "any", false, false, true, 219), 219, $this->source);
        echo " btn btn-outline-secondary' >
                            ";
        // line 220
        echo gT("Save Now");
        echo "
                        </button>
                    </div>
                </div>
            </div>


        <div class='";
        // line 227
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 227), "saveformsurveydivh", [], "any", false, false, true, 227), 227, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 227), "saveformsurveydivh", [], "any", false, false, true, 227), 227, $this->source);
        echo ">
            <div class=\"";
        // line 228
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 228), "saveformsurveydivhdiv", [], "any", false, false, true, 228), 228, $this->source);
        echo " \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 228), "saveformsurveydivhdiv", [], "any", false, false, true, 228), 228, $this->source);
        echo ">
                <a href=\"";
        // line 229
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 229), 229, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 229), "saveformsurveydivhdiva", [], "any", false, false, true, 229), 229, $this->source);
        echo "\">";
        echo gT("Return to survey");
        echo "</a>
            </div>
        </div>
    </div>

</form> <!-- main form -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 229,  484 => 228,  478 => 227,  468 => 220,  462 => 219,  456 => 218,  450 => 217,  446 => 215,  436 => 210,  429 => 208,  423 => 207,  417 => 206,  411 => 205,  406 => 203,  400 => 202,  394 => 201,  391 => 200,  389 => 199,  382 => 194,  380 => 193,  379 => 190,  376 => 189,  374 => 183,  367 => 181,  362 => 179,  356 => 178,  350 => 177,  343 => 172,  341 => 171,  340 => 168,  337 => 167,  335 => 160,  329 => 159,  319 => 156,  313 => 155,  309 => 154,  303 => 153,  297 => 152,  290 => 147,  288 => 146,  287 => 143,  284 => 142,  282 => 135,  275 => 133,  265 => 130,  259 => 129,  255 => 128,  249 => 127,  243 => 126,  235 => 120,  233 => 119,  231 => 116,  228 => 114,  226 => 107,  219 => 105,  210 => 103,  204 => 102,  200 => 101,  194 => 100,  186 => 97,  180 => 96,  174 => 93,  170 => 91,  168 => 89,  167 => 87,  166 => 86,  165 => 85,  162 => 84,  159 => 78,  156 => 72,  153 => 66,  149 => 64,  138 => 62,  134 => 61,  127 => 60,  125 => 59,  118 => 57,  110 => 52,  104 => 51,  97 => 49,  89 => 48,  83 => 47,  77 => 46,  71 => 45,  63 => 44,  56 => 42,  50 => 40,  45 => 37,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/save.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\content\\save.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 59, "for" => 61, "set" => 72);
        static $filters = array();
        static $functions = array("include" => 37, "gT" => 44, "count" => 59, "getPost" => 118);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['include', 'gT', 'count', 'getPost']
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
