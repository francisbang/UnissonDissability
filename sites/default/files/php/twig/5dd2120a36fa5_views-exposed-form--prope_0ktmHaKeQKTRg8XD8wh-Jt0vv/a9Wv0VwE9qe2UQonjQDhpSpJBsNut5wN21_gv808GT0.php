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

/* themes/unisson_disability_v2/templates/views-exposed-form--property-search--block-1.html.twig */
class __TwigTemplate_f086cb4b6d7d68cadfe125f863a142dcaf5e3428b6d4b4297fee77faa7134909 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12];
        $filters = ["escape" => 17];
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
        // line 12
        if ( !twig_test_empty(($context["q"] ?? null))) {
            // line 13
            echo "  ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["q"] ?? null)), "html", null, true);
            echo "
";
        }
        // line 19
        echo "<div class=\"form--inline clearfix\">
  ";
        // line 21
        echo "  <div class=\"form-row\">
      <h4>Location</h4>
      <div class=\"form-group location\">
      ";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_property_geolocation_proximity", [])), "html", null, true);
        echo "
      <a href=\"#\" onClick=\"getLocation();\" class=\"button button-secondary\">Use Current Location</a>
      </div>
  </div>
  ";
        // line 34
        echo "  <div class=\"advanced-search\">
    <div class=\"form-row\">
        <div class=\"form-col\">
            <h4>Property type</h4>
            <div class=\"form-group property\">
                ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_property_type_target_id", [])), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"form-col\">
            <h4>Number of bedrooms</h4>
            <div class=\"form-group bedrooms\">
                ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_number_of_bedrooms_value", [])), "html", null, true);
        echo "
            </div>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-col\">
            <h4>Property Requirements</h4>
            <div class=\"form-group property-req\">
                ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_property_features_target_id", [])), "html", null, true);
        echo "
            </div>   
        </div>
        <div class=\"form-col\">
            <h4>Keywords</h4>
            <div class=\"form-group keyword\">
                ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "combine", [])), "html", null, true);
        echo "
            </div>
        </div>
    </div>
  </div>
  <div class=\"btn-holder\">
    ";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "actions", [])), "html", null, true);
        echo "
  </div>
  <a href=\"\" class=\"advanced-search-opener\">Advanced Search Options</a>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability_v2/templates/views-exposed-form--property-search--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 65,  115 => 59,  106 => 53,  95 => 45,  86 => 39,  79 => 34,  72 => 24,  67 => 21,  64 => 19,  59 => 17,  57 => 13,  55 => 12,);
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
 * Theme override for a views exposed form.
 *
 * Available variables:
 * - form: A render element representing the form.
 *
 * @see template_preprocess_views_exposed_form()
 */
#}
{% if q is not empty %}
  {#
    This ensures that, if clean URLs are off, the 'q' is added first,
    as a hidden form element, so that it shows up first in the POST URL.
  #}
{{ q }}
{% endif %}
<div class=\"form--inline clearfix\">
  {#{{ form }}#}
  <div class=\"form-row\">
      <h4>Location</h4>
      <div class=\"form-group location\">
      {{ form.field_property_geolocation_proximity }}
      <a href=\"#\" onClick=\"getLocation();\" class=\"button button-secondary\">Use Current Location</a>
      </div>
  </div>
  {#<div class=\"advanced-search\">
    <div class=\"form-row\">
      {{ form|without('field_property_geolocation_proximity') }}
    </div>
  </div>
  #}
  <div class=\"advanced-search\">
    <div class=\"form-row\">
        <div class=\"form-col\">
            <h4>Property type</h4>
            <div class=\"form-group property\">
                {{ form.field_property_type_target_id }}
            </div>
        </div>
        <div class=\"form-col\">
            <h4>Number of bedrooms</h4>
            <div class=\"form-group bedrooms\">
                {{ form.field_number_of_bedrooms_value }}
            </div>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-col\">
            <h4>Property Requirements</h4>
            <div class=\"form-group property-req\">
                {{ form.field_property_features_target_id }}
            </div>   
        </div>
        <div class=\"form-col\">
            <h4>Keywords</h4>
            <div class=\"form-group keyword\">
                {{ form.combine }}
            </div>
        </div>
    </div>
  </div>
  <div class=\"btn-holder\">
    {{ form.actions }}
  </div>
  <a href=\"\" class=\"advanced-search-opener\">Advanced Search Options</a>

</div>
", "themes/unisson_disability_v2/templates/views-exposed-form--property-search--block-1.html.twig", "/Users/Simran/Sites/unissondissability/themes/unisson_disability_v2/templates/views-exposed-form--property-search--block-1.html.twig");
    }
}
