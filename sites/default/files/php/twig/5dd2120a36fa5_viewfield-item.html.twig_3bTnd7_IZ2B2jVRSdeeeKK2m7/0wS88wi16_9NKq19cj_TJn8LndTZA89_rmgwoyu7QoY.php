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

/* modules/viewfield/templates/viewfield-item.html.twig */
class __TwigTemplate_9dbdf41ccd0202c67eb7f46619320ab1fc5f2d9c568958737abb1a97ccdde7db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "if" => 56, "block" => 60];
        $filters = ["escape" => 54];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
        // line 42
        $context["classes"] = [0 => "field__item", 1 => ("field__item-label-" . $this->sandbox->ensureToStringAllowed(        // line 44
($context["label_display"] ?? null)))];
        // line 48
        $context["title_classes"] = [0 => "field__item__label", 1 => (((        // line 50
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 53
        echo "
<div";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 56
        if ( !($context["label_hidden"] ?? null)) {
            // line 57
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
  ";
        }
        // line 59
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "</div>
";
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        // line 61
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "modules/viewfield/templates/viewfield-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 61,  95 => 60,  90 => 63,  88 => 60,  83 => 59,  75 => 57,  73 => 56,  69 => 55,  65 => 54,  62 => 53,  60 => 50,  59 => 48,  57 => 44,  56 => 42,);
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
 * Default theme implementation to display a viewfield item.
 *
  * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - viewfield-item--my-view--my-view-display.html.twig
 * - viewfield-item--my-view-display.html.twig
 * - viewfield-item--my-view.html.twig
 * - viewfield-item--field-foo--my-view--my-view-display.html.twig
 * - viewfield-item--field-foo--my-view-display.html.twig
 * - viewfield-item--field-foo--my-view.html.twig
 * - viewfield-item--field-foo--2.html.twig
 * - viewfield-item--field-foo.html.twig
 * - viewfield-item.html.twig
 *
 * Available variables:
 * - title: The title of this item if visible.
 * - content: The content of this item.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - delta: Ordinal specifying the item number in the field.
 * - entity: The entity object.
 * - view_mode: View mode; e.g., 'full', 'teaser', etc.
 *
 * @see template_preprocess_viewfield_item()
 *
 * @ingroup themeable
 */
#}
{%
set classes = [
  'field__item',
  'field__item-label-' ~ label_display,
]
%}
{%
set title_classes = [
  'field__item__label',
  label_display == 'visually_hidden' ? 'visually-hidden',
]
%}

<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if not label_hidden %}
    <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    {{ content }}
  {% endblock %}
</div>
", "modules/viewfield/templates/viewfield-item.html.twig", "/Users/Simran/Sites/unissondissability/modules/viewfield/templates/viewfield-item.html.twig");
    }
}
