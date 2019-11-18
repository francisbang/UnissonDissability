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

/* themes/unisson_disability_v2/templates/views-view--property-search--block-1.html.twig */
class __TwigTemplate_06912524faee165fb8f0a1c93b376f26f73506352c9de38408a0995f5738c2a0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 34, "if" => 45];
        $filters = ["clean_class" => 36, "escape" => 43];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
        // line 34
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null)))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null))), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["display_id"] ?? null))), 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : (""))];
        // line 42
        echo "
<div";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 45
        if (($context["title"] ?? null)) {
            // line 46
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
    ";
        }
        // line 48
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

    <section class=\"search-panel\">
      <div class=\"wrapper\">
              ";
        // line 52
        if (($context["header"] ?? null)) {
            // line 53
            echo "                <div class=\"view-header\">
                  ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 57
        echo "              ";
        if (($context["exposed"] ?? null)) {
            // line 58
            echo "                <div class=\"view-filters\">
                  ";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 62
        echo "              ";
        if (($context["attachment_before"] ?? null)) {
            // line 63
            echo "                <div class=\"attachment attachment-before\">
                  ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 67
        echo "      </div>
    </section>

    <section class=\"property-overview\">
      <div class=\"wrapper\">

              ";
        // line 73
        if (($context["rows"] ?? null)) {
            // line 74
            echo "                <div class=\"view-content\">
                  ";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
                </div>
              ";
        } elseif (        // line 77
($context["empty"] ?? null)) {
            // line 78
            echo "                <div class=\"view-empty\">
                  ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 82
        echo "
              ";
        // line 83
        if (($context["pager"] ?? null)) {
            // line 84
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
            echo "
              ";
        }
        // line 86
        echo "              ";
        if (($context["attachment_after"] ?? null)) {
            // line 87
            echo "                <div class=\"attachment attachment-after\">
                  ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 91
        echo "              ";
        if (($context["more"] ?? null)) {
            // line 92
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
              ";
        }
        // line 94
        echo "              ";
        if (($context["footer"] ?? null)) {
            // line 95
            echo "                <div class=\"view-footer\">
                  ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 99
        echo "              ";
        if (($context["feed_icons"] ?? null)) {
            // line 100
            echo "                <div class=\"feed-icons\">
                  ";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 104
        echo "
      </div>
    </section>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability_v2/templates/views-view--property-search--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 104,  202 => 101,  199 => 100,  196 => 99,  190 => 96,  187 => 95,  184 => 94,  178 => 92,  175 => 91,  169 => 88,  166 => 87,  163 => 86,  157 => 84,  155 => 83,  152 => 82,  146 => 79,  143 => 78,  141 => 77,  136 => 75,  133 => 74,  131 => 73,  123 => 67,  117 => 64,  114 => 63,  111 => 62,  105 => 59,  102 => 58,  99 => 57,  93 => 54,  90 => 53,  88 => 52,  80 => 48,  74 => 46,  72 => 45,  68 => 44,  64 => 43,  61 => 42,  59 => 39,  58 => 38,  57 => 37,  56 => 36,  55 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A css-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   Javascript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    'view',
    'view-' ~ id|clean_class,
    'view-id-' ~ id,
    'view-display-id-' ~ display_id,
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}

<div{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {% if title %}
      {{ title }}
    {% endif %}
    {{ title_suffix }}

    <section class=\"search-panel\">
      <div class=\"wrapper\">
              {% if header %}
                <div class=\"view-header\">
                  {{ header }}
                </div>
              {% endif %}
              {% if exposed %}
                <div class=\"view-filters\">
                  {{ exposed }}
                </div>
              {% endif %}
              {% if attachment_before %}
                <div class=\"attachment attachment-before\">
                  {{ attachment_before }}
                </div>
              {% endif %}
      </div>
    </section>

    <section class=\"property-overview\">
      <div class=\"wrapper\">

              {% if rows %}
                <div class=\"view-content\">
                  {{ rows }}
                </div>
              {% elseif empty %}
                <div class=\"view-empty\">
                  {{ empty }}
                </div>
              {% endif %}

              {% if pager %}
                {{ pager }}
              {% endif %}
              {% if attachment_after %}
                <div class=\"attachment attachment-after\">
                  {{ attachment_after }}
                </div>
              {% endif %}
              {% if more %}
                {{ more }}
              {% endif %}
              {% if footer %}
                <div class=\"view-footer\">
                  {{ footer }}
                </div>
              {% endif %}
              {% if feed_icons %}
                <div class=\"feed-icons\">
                  {{ feed_icons }}
                </div>
              {% endif %}

      </div>
    </section>

</div>
", "themes/unisson_disability_v2/templates/views-view--property-search--block-1.html.twig", "/Users/Simran/Sites/unissondissability/themes/unisson_disability_v2/templates/views-view--property-search--block-1.html.twig");
    }
}
