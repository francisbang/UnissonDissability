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

/* themes/unisson_disability_v2/templates/views-view-unformatted--property-search--block-1.html.twig */
class __TwigTemplate_45dd004bb9660e6bdf7a3256430ff0ab285e66bb9b162916c92f97fe12a7028e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 19, "for" => 25, "set" => 27];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
        // line 18
        echo "
    ";
        // line 19
        if (($context["title"] ?? null)) {
            // line 20
            echo "      <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if ( !twig_test_empty(($context["rows"] ?? null))) {
            // line 24
            echo "
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 26
                echo "        ";
                // line 27
                $context["row_classes"] = [0 => ((                // line 28
($context["default_row_class"] ?? null)) ? ("views-row") : ("")), 1 => "property-content"];
                // line 32
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null)], "method")), "html", null, true);
                echo ">";
                // line 33
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                // line 34
                echo "</div> 

      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "      <h3>No Results Found</h3>
    ";
        }
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability_v2/templates/views-view-unformatted--property-search--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  100 => 38,  97 => 37,  89 => 34,  87 => 33,  83 => 32,  81 => 28,  80 => 27,  78 => 26,  74 => 25,  71 => 24,  69 => 23,  66 => 22,  60 => 20,  58 => 19,  55 => 18,);
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
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}

    {% if title %}
      <h3>{{ title }}</h3>
    {% endif %}

    {% if rows is not empty %}

      {% for row in rows %}
        {%
          set row_classes = [
            default_row_class ? 'views-row',
            'property-content'
          ]
        %}
        <div{{ row.attributes.addClass(row_classes) }}>
              {{- row.content -}}
        </div> 

      {% endfor %}
    {% else %}
      <h3>No Results Found</h3>
    {% endif %}

", "themes/unisson_disability_v2/templates/views-view-unformatted--property-search--block-1.html.twig", "/Users/Simran/Sites/unissondissability/themes/unisson_disability_v2/templates/views-view-unformatted--property-search--block-1.html.twig");
    }
}
