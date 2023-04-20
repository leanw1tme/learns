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

/* __string_template__b15b730ec6ba50e08a681ff7c24b3a5b */
class __TwigTemplate_ab2c151d05b162c646550199e7b5fa7d extends Template
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
    <!-- Default panel contents -->
    <div class=\"card-header\">
        <h5 class=\"card-title\">";
        // line 4
        echo gT("Share survey");
        echo "</h5>
    </div>
    <!-- List group -->
    <ul class=\"list-group list-group-flush\">
        <!-- Base language -->
        <li class=\"list-group-item p-0 border-0\" id=\"adminsidepanel__surveysummary--mainLanguageLink\">
            <div class=\"ls-flex-row col-12 gap-2\">
                <div class=\"col-4 card-label\">
                    ";
        // line 12
        echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 12), 12, $this->source), false);
        echo " (";
        echo gT("Base language");
        echo "):
                </div>
                <div class=\"col-8\">
                    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 15)) {
            echo " ";
            // line 16
            echo "                        ";
            $context["tmp_url"] = (($__internal_compile_0 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 16)] ?? null) : null);
            // line 17
            echo "                    ";
        }
        // line 18
        echo "                    <a href='";
        echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 18, $this->source);
        echo "' target='_blank'> ";
        echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 18, $this->source);
        echo " </a>
                </div>
            </div>
        </li>
        <!-- Additional languages  -->
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
            // line 24
            echo "        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
               <div class=\"col-4 card-label\">
                    ";
            // line 27
            echo (getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 27, $this->source), false) . ":");
            echo "
                </div>
                <div class=\"col-8\">
                    ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 30)) {
                echo " ";
                // line 31
                echo "                        ";
                $context["tmp_url"] = (($__internal_compile_1 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["langname"]] ?? null) : null);
                // line 32
                echo "                    ";
            }
            // line 33
            echo "                    <a href='";
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 33, $this->source);
            echo "' target='_blank'> ";
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 33, $this->source);
            echo " </a>
                </div>
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        <!-- End URL -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
               <div class=\"col-4 card-label\">
                    ";
        // line 43
        echo gT("End URL:");
        echo "
                </div>
                <div class=\"col-8\">
                        ";
        // line 46
        echo $this->sandbox->ensureToStringAllowed(($context["endurl"] ?? null), 46, $this->source);
        echo "
                </div>
            </div>
        </li>
        <!-- Number of questions/groups -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12 gap-2\">
               <div class=\"col-4 card-label\">
                    ";
        // line 54
        echo gT("Number of questions/groups:");
        echo "
                </div>
                <div class=\"col-8\">
                    ";
        // line 57
        echo (($this->sandbox->ensureToStringAllowed(($context["sumcount3"] ?? null), 57, $this->source) . "/") . $this->sandbox->ensureToStringAllowed(($context["sumcount2"] ?? null), 57, $this->source));
        echo "
                </div>
            </div>
        </li>
        <!-- Sharing panel -->
        ";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 62) == "Y")) {
            // line 63
            echo "            <li class=\"list-group-item p-0 border-0\">
                <div class=\"ls-flex-row col-12 gap-2\">
                   <div class=\"col-4 card-label\">
                        ";
            // line 66
            echo gT("Sharing panel:");
            echo "
                    </div>
                    <div class=\"col-8\">
                        <a href=\"#sharingdialog\" class=\"btn btn-outline-secondary selector_openSharePanel\" data-bs-toggle=\"modal\" id=\"sharePanelButton_";
            // line 69
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 69), 69, $this->source);
            echo "\" data-surveyid=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 69), 69, $this->source);
            echo "\">
                            ";
            // line 70
            echo gT("Open sharing panel");
            echo "
                        </a>
                    </div>
                </div>
            </li>
        ";
        }
        // line 76
        echo "    </ul>
</div>

";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 79) == "Y")) {
            // line 80
            echo "    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"sharingdialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 84
            echo gT("Share survey");
            echo "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">";
            // line 90
            echo gT("Share QR-code:");
            echo "</h5>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 94
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 94)) {
                echo " ";
                // line 95
                echo "                                    ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 95), "lang" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 95)]);
                // line 96
                echo "                                ";
            }
            // line 97
            echo "                                 <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 gap-2 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 100
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 100), 100, $this->source), false);
            echo "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <div class=\"selector__qrcode_container\">
                                                <button class=\"btn btn-outline-secondary selector__qrcode_trigger\">";
            // line 104
            echo gT("Generate QR-Code");
            echo "</button>
                                                <div class=\"selector__qrcode\" data-url=\"";
            // line 105
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 105, $this->source);
            echo "\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 111
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 111)) {
                    echo " ";
                    // line 112
                    echo "                                        ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 112), "lang" => $context["langname"]]);
                    // line 113
                    echo "                                    ";
                }
                // line 114
                echo "                                    <li class=\"list-group-item p-0 border-0";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 114)) {
                    echo " mb-2";
                }
                echo "\">
                                        <div class=\"ls-flex-row col-12 gap-2 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 117
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 117, $this->source), false);
                echo "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <div class=\"selector__qrcode_container\">
                                                    <button class=\"btn btn-outline-secondary selector__qrcode_trigger\">";
                // line 121
                echo gT("Generate QR-Code");
                echo "</button>
                                                    <div class=\"selector__qrcode\" data-url=\"";
                // line 122
                echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 122, $this->source);
                echo "\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">
                                ";
            // line 134
            echo gT("Share on Facebook:");
            echo "
                            </h5>
                            <button class=\"btn btn-xs btn-warning float-end facebook-button\" 
                                  id=\"selector_activateFacebookSharing\">";
            // line 137
            echo gT("Enable");
            echo "</button>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 141
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 141)) {
                echo " ";
                // line 142
                echo "                                    ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 142), "lang" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 142)]);
                // line 143
                echo "                                ";
            }
            // line 144
            echo "                                    <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 gap-2 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 147
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 147), 147, $this->source), false);
            echo "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <button class=\"btn btn-disabled facebook-button selector_fb_share_disabled\" disabled ><i class=\"ri-facebook-box-fill\"></i> ";
            // line 150
            echo gT("Disabled");
            echo "</button>
                                            <iframe class=\"selector_fb_share d-none\" data-src=\"https://www.facebook.com/plugins/share_button.php?href=";
            // line 151
            echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 151, $this->source));
            echo "&layout=button_count&size=large&mobile_iframe=true&appId=328433594315978&width=106&height=28\" width=\"106\" height=\"28\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 156
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 156)) {
                    echo " ";
                    // line 157
                    echo "                                        ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 157), "lang" => $context["langname"]]);
                    // line 158
                    echo "                                    ";
                }
                // line 159
                echo "                                    <li class=\"list-group-item p-0 border-0";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 159)) {
                    echo " mb-2";
                }
                echo "\">
                                        <div class=\"ls-flex-row col-12 gap-2 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 162
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 162, $this->source), false);
                echo "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <button class=\"btn btn-disabled facebook-button selector_fb_share_disabled\" disabled ><i class=\"ri-facebook-box-fill\"></i> ";
                // line 165
                echo gT("Disabled");
                echo "</button>
                                                <iframe class=\"selector_fb_share d-none h-12\" data-src=\"https://www.facebook.com/plugins/share_button.php?href=";
                // line 166
                echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 166, $this->source));
                echo "&layout=button_count&size=small&mobile_iframe=true&appId=1321262851319939&width=183&height=20\" width=\"103\" height=\"20\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
                                            </div>
                                        </div>
                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">
                                ";
            // line 177
            echo gT("Share on Twitter:");
            echo "
                            </h5>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 182
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 182)) {
                echo " ";
                // line 183
                echo "                                    ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 183), "lang" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 183)]);
                // line 184
                echo "                                ";
            }
            // line 185
            echo "                                <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 gap-2 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 188
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 188), 188, $this->source), false);
            echo "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <a class=\"btn btn-outline-secondary twitter-button\" target='_blank' href=\"https://twitter.com/intent/tweet?text=";
            // line 191
            echo twig_urlencode_filter(gT("Thanks for taking this survey!"));
            echo "&url=";
            echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 191, $this->source));
            echo "&hashtags=limesurvey,survey\">
                                                <i class=\"ri-twitter-fill\"></i>";
            // line 192
            echo gT("Tweet it");
            echo "
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 198
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 198)) {
                    echo " ";
                    // line 199
                    echo "                                        ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 199), "lang" => $context["langname"]]);
                    // line 200
                    echo "                                    ";
                }
                // line 201
                echo "                                    <li class=\"list-group-item p-0 border-0";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 201)) {
                    echo " mb-2";
                }
                echo "\">
                                        <div class=\"ls-flex-row col-12 gap-2 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 204
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 204, $this->source), false);
                echo "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <a class=\"btn btn-outline-secondary twitter-button\" target='_blank' href=\"https://twitter.com/intent/tweet?text=";
                // line 207
                echo twig_urlencode_filter(gT("Thanks for taking this survey!"));
                echo "&url=";
                echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 207, $this->source));
                echo "&hashtags=limesurvey,survey\">
                                                    <i class=\"ri-twitter-fill\"></i>";
                // line 208
                echo gT("Tweet it");
                echo "
                                                </a>
                                            </div>
                                        </div>
                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">";
            // line 219
            echo gT("Close");
            echo "</button>
                </div>
            </div>
        </div>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__b15b730ec6ba50e08a681ff7c24b3a5b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 219,  551 => 214,  531 => 208,  525 => 207,  519 => 204,  510 => 201,  507 => 200,  504 => 199,  500 => 198,  483 => 197,  475 => 192,  469 => 191,  463 => 188,  458 => 185,  455 => 184,  452 => 183,  449 => 182,  441 => 177,  433 => 171,  414 => 166,  410 => 165,  404 => 162,  395 => 159,  392 => 158,  389 => 157,  385 => 156,  368 => 155,  361 => 151,  357 => 150,  351 => 147,  346 => 144,  343 => 143,  340 => 142,  337 => 141,  330 => 137,  324 => 134,  316 => 128,  296 => 122,  292 => 121,  285 => 117,  276 => 114,  273 => 113,  270 => 112,  266 => 111,  249 => 110,  241 => 105,  237 => 104,  230 => 100,  225 => 97,  222 => 96,  219 => 95,  216 => 94,  209 => 90,  200 => 84,  194 => 80,  192 => 79,  187 => 76,  178 => 70,  172 => 69,  166 => 66,  161 => 63,  159 => 62,  151 => 57,  145 => 54,  134 => 46,  128 => 43,  121 => 38,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  92 => 27,  87 => 24,  83 => 23,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  55 => 12,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b15b730ec6ba50e08a681ff7c24b3a5b", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "set" => 16, "for" => 23);
        static $filters = array("url_encode" => 151);
        static $functions = array("gT" => 4, "getLanguageNameFromCode" => 12, "createAbsoluteUrl" => 95);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['url_encode'],
                ['gT', 'getLanguageNameFromCode', 'createAbsoluteUrl']
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
