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

/* modules/contrib/better_exposed_filters/templates/bef-radios.html.twig */
class __TwigTemplate_70efbc8a39b23fdeb594126f34fbf87bc2929febd02c1afe56a59d0499a50d8b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "for" => 20, "if" => 22, "include" => 24];
        $filters = ["escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
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
        // line 13
        $context["classes"] = [0 => "form-radios", 1 => ((        // line 15
($context["is_nested"] ?? null)) ? ("bef-nested") : (""))];
        // line 18
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 19
        $context["current_nesting_level"] = 0;
        // line 20
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 21
            echo "    ";
            $context["item"] = $this->getAttribute(($context["element"] ?? null), $context["child"]);
            // line 22
            echo "    ";
            if (($context["is_nested"] ?? null)) {
                // line 23
                echo "      ";
                $context["new_nesting_level"] = $this->getAttribute(($context["depth"] ?? null), $context["child"]);
                // line 24
                echo "      ";
                $this->loadTemplate("@better_exposed_filters/bef-nested-elements.html.twig", "modules/contrib/better_exposed_filters/templates/bef-radios.html.twig", 24)->display($context);
                // line 25
                echo "      ";
                $context["current_nesting_level"] = ($context["new_nesting_level"] ?? null);
                // line 26
                echo "    ";
            } else {
                // line 27
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null)), "html", null, true);
                echo "
    ";
            }
            // line 29
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/better_exposed_filters/templates/bef-radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  107 => 29,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  83 => 21,  65 => 20,  63 => 19,  58 => 18,  56 => 15,  55 => 13,);
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
  Themes a single-select exposed form element as radio buttons.

  Available variables:
    - element: The collection of checkboxes.
    - children: An array of keys for the children of element.
    - is_nested: TRUE if this is to be rendered as a nested list.
    - depth: If is_nested is TRUE, this holds an array in the form of
      child_id => nesting_level which defines the depth a given element should
      appear in the nested list.
#}
{%
  set classes = [
    'form-radios',
    is_nested ? 'bef-nested'
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {% set current_nesting_level = 0 %}
  {% for child in children %}
    {% set item = attribute(element, child) %}
    {% if is_nested %}
      {% set new_nesting_level = attribute(depth, child) %}
      {% include '@better_exposed_filters/bef-nested-elements.html.twig' %}
      {% set current_nesting_level = new_nesting_level %}
    {% else %}
      {{ item }}
    {% endif %}
  {% endfor %}
</div>
", "modules/contrib/better_exposed_filters/templates/bef-radios.html.twig", "/Users/Simran/Sites/unissondissability/modules/contrib/better_exposed_filters/templates/bef-radios.html.twig");
    }
}
