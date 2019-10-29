<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__dec42bb17cded214d5743f494b650a2161684b2e23ddc7ca37ff823fac1effe9 */
class __TwigTemplate_0a91a27fdb7a99c32401ad47666370c9d77b2a6f2ef952a2aa470f7dbec04525 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 2, "render" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"profile\">
\t\t\t<img src=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_image"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_name"] ?? null)), "html", null, true);
        echo "\">
\t\t\t<div class=\"links\">
\t\t\t\t<a href=\"#team-detail\" class=\"team-detail-link\" data-slideid=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["counter"] ?? null)), "html", null, true);
        echo "\"><img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_popup_icon"] ?? null)), "html", null, true);
        echo "\" width=\"50\" height=\"50\" alt=\"\"></a>
                ";
        // line 5
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["field_team_member_linkedin_link"] ?? null)))) {
            // line 6
            echo "                <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_linkedin_link"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\"><img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_linkedin_icon"] ?? null)), "html", null, true);
            echo "\" width=\"50\" height=\"50\" alt=\"\"></a>
                ";
        }
        // line 8
        echo "                
                <div class=\"team-detail mfp-hide\" id=\"team-detail\">
\t                <div class=\"team-detail-content\">
\t\t                <div class=\"profile-image\">
\t\t\t                <img src=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_image"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_name"] ?? null)), "html", null, true);
        echo "\">
\t\t\t            </div>\t
\t\t\t            <div class=\"profile-info\">
\t\t\t\t            <h2>";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_name"] ?? null)), "html", null, true);
        echo "</h2>
\t\t\t\t            <h4>";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_job_title"] ?? null)), "html", null, true);
        echo "</h4>
\t\t\t\t            ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_bio"] ?? null)), "html", null, true);
        echo "
\t\t\t\t            ";
        // line 18
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["field_team_member_linkedin_link"] ?? null)))) {
            // line 19
            echo "\t\t\t\t            <div class=\"social\">
                            <a href=\"";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_linkedin_link"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\"><img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_linkedin_icon"] ?? null)), "html", null, true);
            echo "\" width=\"50\" height=\"50\" alt=\"Unisson\"></a>
                            </div>
                            ";
        }
        // line 23
        echo "                        </div>
                        <div class=\"navigation\">
                                        <div class=\"prev\"><a href=\"#\"><img src=\"/themes/unisson_disability/css/images/sprite/prev@2x.png\" width=\"20\" height=\"20\" alt=\"Unisson\"> PREVIOUS</a></div>
                                        <div class=\"see-all\"><a href=\"#\"><img src=\"/themes/unisson_disability/css/images/sprite/see-all@2x.png\" width=\"40\" height=\"40\" alt=\"Unisson\"></a></div>
                                        <div class=\"next\"><a href=\"#\">NEXT <img src=\"/themes/unisson_disability/css/images/sprite/next@2x.png\" width=\"20\" height=\"20\" alt=\"Unisson\"></a></div>
                            </div>
\t                </div>
                </div>
\t\t\t</div>
\t</div>
\t<div class=\"profile-info\">
\t\t\t<h4>";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_name"] ?? null)), "html", null, true);
        echo "</h4>
            <p>";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_job_title"] ?? null)), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__dec42bb17cded214d5743f494b650a2161684b2e23ddc7ca37ff823fac1effe9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 35,  133 => 34,  120 => 23,  112 => 20,  109 => 19,  107 => 18,  103 => 17,  99 => 16,  95 => 15,  87 => 12,  81 => 8,  73 => 6,  71 => 5,  65 => 4,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__dec42bb17cded214d5743f494b650a2161684b2e23ddc7ca37ff823fac1effe9", "");
    }
}
