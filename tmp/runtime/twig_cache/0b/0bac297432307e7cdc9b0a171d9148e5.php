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

/* ./subviews/registration/register_form.twig */
class __TwigTemplate_9a99280cbefcc36168b337330ca66d32 extends Template
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
        echo "
";
        // line 18
        echo "
<div class=\"";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 19), "registerform", [], "any", false, false, true, 19), 19, $this->source);
        echo " row\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 19), "registerform", [], "any", false, false, true, 19), 19, $this->source);
        echo ">
    ";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 20), "form", [0 => twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sRegisterFormUrl", [], "any", false, false, true, 20), 1 => "post", 2 => ["id" => "limesurvey", "role" => "form", "class" => "form"]], "method", false, false, true, 20), 20, $this->source);
        echo "

    ";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "registerform", [], "any", false, false, true, 22), "hiddeninputs", [], "any", false, false, true, 22), 22, $this->source);
        echo "

    <div class='";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 24), "registerformcol", [], "any", false, false, true, 24), 24, $this->source);
        echo " col-lg-8 offset-lg-2' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 24), "registerformcol", [], "any", false, false, true, 24), 24, $this->source);
        echo ">
        <div class=\"ls-js-hidden mb-3\">
            ";
        // line 26
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer.twig");
        echo "
        </div>
        ";
        // line 29
        echo "        <div class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 29), "registerformcolrow", [], "any", false, false, true, 29), 29, $this->source);
        echo " mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 29), "registerformcolrow", [], "any", false, false, true, 29), 29, $this->source);
        echo ">
            <label for='register_firstname' class='";
        // line 30
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 30), "registerformcolrowlabel", [], "any", false, false, true, 30), 30, $this->source);
        echo " control-label '>";
        echo gT("First name:");
        echo "</label>
            <div class=\"\">
                ";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 32), "textField", [0 => "register_firstname", 1 => twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sFirstName", [], "any", false, false, true, 32), 2 => ["id" => "register_firstname", "class" => "form-control"]], "method", false, false, true, 32), 32, $this->source);
        echo "
            </div>
        </div>

        ";
        // line 37
        echo "        <div class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 37), "registerformcolrowb", [], "any", false, false, true, 37), 37, $this->source);
        echo " mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 37), "registerformcolrowb", [], "any", false, false, true, 37), 37, $this->source);
        echo ">
            <label ";
        // line 38
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 38), "registerformcolrowblabel", [], "any", false, false, true, 38), 38, $this->source);
        echo "  class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 38), "registerformcolrowblabel", [], "any", false, false, true, 38), 38, $this->source);
        echo " control-label '>";
        echo gT("Last name:");
        echo "</label>
            <div ";
        // line 39
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 39), "registerformcolrowbdiv", [], "any", false, false, true, 39), 39, $this->source);
        echo " >
                ";
        // line 40
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 40), "textField", [0 => "register_lastname", 1 => twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sLastName", [], "any", false, false, true, 40), 2 => ["id" => "register_lastname", "class" => "form-control"]], "method", false, false, true, 40), 40, $this->source);
        echo "
            </div>
        </div>

        ";
        // line 45
        echo "        <div class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 45), "registerformcolrowc", [], "any", false, false, true, 45), 45, $this->source);
        echo " mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 45), "registerformcolrowc", [], "any", false, false, true, 45), 45, $this->source);
        echo ">
            <label ";
        // line 46
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 46), "registerformcolrowclabel", [], "any", false, false, true, 46), 46, $this->source);
        echo " class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 46), "registerformcolrowclabel", [], "any", false, false, true, 46), 46, $this->source);
        echo "  control-label'> ";
        echo gT("Email address:");
        echo " ";
        echo twig_include($this->env, $context, "./subviews/registration/required.twig");
        echo "</label>
            <div ";
        // line 47
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 47), "registerformcolrowcdiv", [], "any", false, false, true, 47), 47, $this->source);
        echo "  >
                ";
        // line 48
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 48), "emailField", [0 => "register_email", 1 => twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sEmail", [], "any", false, false, true, 48), 2 => ["id" => "register_email", "class" => "form-control input-sm", "required" => true]], "method", false, false, true, 48), 48, $this->source);
        echo "
            </div>
        </div>

        ";
        // line 53
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aExtraAttributes", [], "any", false, false, true, 53));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["aExtraAttribute"]) {
            // line 54
            echo "            <div class=' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 54), "registerformextras", [], "any", false, false, true, 54), 54, $this->source);
            echo " mb-3' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 54), "registerformextras", [], "any", false, false, true, 54), 54, $this->source);
            echo " >
                ";
            // line 55
            $context["registerKey"] = ("register_" . $this->sandbox->ensureToStringAllowed($context["key"], 55, $this->source));
            // line 56
            echo "                <label for=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["registerKey"] ?? null), 56, $this->source);
            echo "\" class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 56), "registerformextraslabel", [], "any", false, false, true, 56), 56, $this->source);
            echo " control-label '> ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["aExtraAttribute"], "caption", [], "any", false, false, true, 56), 56, $this->source);
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["aExtraAttribute"], "mandatory", [], "any", false, false, true, 56) == "Y")) {
                echo twig_include($this->env, $context, "./subviews/registration/required.twig");
            }
            echo "</label>
                <div ";
            // line 57
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 57), "registerformcolrowcdiv", [], "any", false, false, true, 57), 57, $this->source);
            echo " >
                    ";
            // line 58
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 58), "textField", [0 => ($context["registerKey"] ?? null), 1 => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aAttribute", [], "any", false, false, true, 58)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 2 => ["id" => ($context["registerKey"] ?? null), "class" => "form-control input-sm"]], "method", false, false, true, 58), 58, $this->source);
            echo "
                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['aExtraAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
        ";
        // line 64
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bCaptcha", [], "any", false, false, true, 64)) {
            // line 65
            echo "            <div class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 65), "registerformcaptcha", [], "any", false, false, true, 65), 65, $this->source);
            echo " mb-3\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 65), "maincolformdivb", [], "any", false, false, true, 65), 65, $this->source);
            echo ">
                <label class='";
            // line 66
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 66), "registerformcaptchalabel", [], "any", false, false, true, 66), 66, $this->source);
            echo " control-label ' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 66), "registerformcaptchalabel", [], "any", false, false, true, 66), 66, $this->source);
            echo " >";
            echo gT("Please solve the following equation:");
            echo " ";
            echo twig_include($this->env, $context, "./subviews/registration/required.twig");
            echo "</label>
                <div class=\"row\" ";
            // line 67
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 67), "registerformcaptchadiv", [], "any", false, false, true, 67), 67, $this->source);
            echo ">
                    <div class=\"";
            // line 68
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 68), "registerformcaptchadivb", [], "any", false, false, true, 68), 68, $this->source);
            echo " col-2\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 68), "registerformcaptchadivb", [], "any", false, false, true, 68), 68, $this->source);
            echo ">
                            ";
            // line 69
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, LS_Twig_Extension::renderCaptcha(), "renderOut", [], "method", false, false, true, 69), 69, $this->source);
            echo "
                    </div>
                    <div class=\"";
            // line 71
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 71), "registerformcaptchadivc", [], "any", false, false, true, 71), 71, $this->source);
            echo " col-1 align-self-center\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 71), "registerformcaptchadivc", [], "any", false, false, true, 71), 71, $this->source);
            echo ">
                        <a href=\"#\" class=\"btn btn-sm btn-outline-secondary\" id=\"reloadCaptcha\" title=\"";
            // line 72
            echo gT("Reload captcha");
            echo "\" data-toggle=\"captcha\"><i class=\"fa fa-refresh\"></i></a>
                    </div>
                    <div class=\"col-9 align-self-center\">
                        <input class='form-control ";
            // line 75
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 75), "registerformcaptchainput", [], "any", false, false, true, 75), 75, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 75), "registerformcaptchainput", [], "any", false, false, true, 75), 75, $this->source);
            echo ">
                    </div>
                </div>
            </div>
        ";
        }
        // line 80
        echo "
        ";
        // line 82
        echo "        <div class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 82), "registermandatoryinfo", [], "any", false, false, true, 82), 82, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 82), "registermandatoryinfo", [], "any", false, false, true, 82), 82, $this->source);
        echo " >
                ";
        // line 83
        echo gT("Fields marked with an asterisk are mandatory.");
        echo "
        </div>

        ";
        // line 87
        echo "        <div class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 87), "registersave", [], "any", false, false, true, 87), 87, $this->source);
        echo " mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 87), "registersave", [], "any", false, false, true, 87), 87, $this->source);
        echo " >
            <div class='";
        // line 88
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 88), "registersavediv", [], "any", false, false, true, 88), 88, $this->source);
        echo " float-end' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 88), "registersavediv", [], "any", false, false, true, 88), 88, $this->source);
        echo " >
                ";
        // line 89
        $context["continue"] = gT("Continue", "unescaped");
        // line 90
        echo "                <button ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 90), "registersavedivbutton", [], "any", false, false, true, 90), 90, $this->source);
        echo "  class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 90), "registersavedivbutton", [], "any", false, false, true, 90), 90, $this->source);
        echo " btn btn-outline-secondary' >
                    ";
        // line 91
        echo $this->sandbox->ensureToStringAllowed(($context["continue"] ?? null), 91, $this->source);
        echo "
                </button>
            </div>
        </div>

        ";
        // line 97
        echo "    </div>
    <div class='";
        // line 98
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 98), "registerformcoladdidtions", [], "any", false, false, true, 98), 98, $this->source);
        echo " col-lg-8 offset-lg-2' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 98), "registerformcoladdidtions", [], "any", false, false, true, 98), 98, $this->source);
        echo ">
        ";
        // line 99
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "formAdditions", [], "any", false, false, true, 99), 99, $this->source);
        echo "
    </div>

    ";
        // line 102
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 102), "endForm", [], "any", false, false, true, 102), 102, $this->source);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/registration/register_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 102,  325 => 99,  319 => 98,  316 => 97,  308 => 91,  301 => 90,  299 => 89,  293 => 88,  286 => 87,  280 => 83,  273 => 82,  270 => 80,  260 => 75,  254 => 72,  248 => 71,  243 => 69,  237 => 68,  233 => 67,  223 => 66,  216 => 65,  213 => 64,  210 => 62,  192 => 58,  188 => 57,  175 => 56,  173 => 55,  166 => 54,  148 => 53,  141 => 48,  137 => 47,  127 => 46,  120 => 45,  113 => 40,  109 => 39,  101 => 38,  94 => 37,  87 => 32,  80 => 30,  73 => 29,  68 => 26,  61 => 24,  56 => 22,  51 => 20,  45 => 19,  42 => 18,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/registration/register_form.twig", "D:\\xamp\\htdocs\\learns\\themes\\survey\\vanilla\\views\\subviews\\registration\\register_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 53, "set" => 55, "if" => 56);
        static $filters = array("raw" => 99);
        static $functions = array("include" => 26, "gT" => 30, "renderCaptcha" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['raw'],
                ['include', 'gT', 'renderCaptcha']
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
