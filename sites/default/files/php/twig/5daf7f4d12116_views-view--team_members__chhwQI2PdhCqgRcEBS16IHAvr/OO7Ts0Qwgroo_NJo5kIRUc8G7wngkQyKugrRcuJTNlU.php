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

/* themes/unisson_disability/templates/views-view--team_members_board_of_directors.html.twig */
class __TwigTemplate_1ff9d1b26dbee00b73d6f16a44b0e91e07eeaa6a745de9b4fbef892d0e7db5bb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 34];
        $filters = ["escape" => 33];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 34
        if (($context["title"] ?? null)) {
            // line 35
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 37
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 38
        if (($context["header"] ?? null)) {
            // line 39
            echo "    <div class=\"view-header\">
      ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 43
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 44
            echo "    <div class=\"view-filters\">
      ";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 48
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 49
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if (($context["rows"] ?? null)) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
  ";
        } elseif (        // line 56
($context["empty"] ?? null)) {
            // line 57
            echo "    <div class=\"view-empty\">
      ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        if (($context["pager"] ?? null)) {
            // line 63
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 65
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 66
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 70
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 71
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 73
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 74
            echo "    <div class=\"view-footer\">
      ";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 78
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 79
            echo "    <div class=\"feed-icons\">
      ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/views-view--team_members_board_of_directors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 80,  175 => 79,  172 => 78,  166 => 75,  163 => 74,  160 => 73,  154 => 71,  151 => 70,  145 => 67,  142 => 66,  139 => 65,  133 => 63,  131 => 62,  128 => 61,  122 => 58,  119 => 57,  117 => 56,  112 => 55,  110 => 54,  107 => 53,  101 => 50,  98 => 49,  95 => 48,  89 => 45,  86 => 44,  83 => 43,  77 => 40,  74 => 39,  72 => 38,  67 => 37,  61 => 35,  59 => 34,  55 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/views-view--team_members_board_of_directors.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/views-view--team_members_board_of_directors.html.twig");
    }
}
