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

/* themes/unisson_disability/templates/field-collection-item--field-tabbed-block-fields.html.twig */
class __TwigTemplate_1ff10884187e00a1d18ea8d41e8e029b153eea6befb7aae012c3278b82640bad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 25];
        $filters = ["render" => 25, "striptags" => 27, "escape" => 29, "field_value" => 29];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['render', 'striptags', 'escape', 'field_value'],
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
        // line 24
        echo "
";
        // line 25
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_tabbed_media_type", [])))) {
            // line 26
            echo "\t<div class=\"col1\">
\t";
            // line 27
            if (twig_in_filter("image", strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_tabbed_media_type", []))))) {
                echo "\t
\t<div class=\"media\">
\t\t\t<a href=\"";
                // line 29
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tabbed_image", []))), "html", null, true);
                echo "\" class=\"image\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tabbed_image", []))), "html", null, true);
                echo "\"></a>
\t</div>
\t";
            } else {
                // line 32
                echo "\t<div class=\"media video\">
\t\t\t<a href=\"";
                // line 33
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tabbed_media_video_link", []))), "html", null, true);
                echo "\" class=\"mfp-iframe\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tabbed_image", []))), "html", null, true);
                echo "\"></a>
\t</div>
\t";
            }
            // line 36
            echo "\t</div>
\t<div class=\"col2\">
\t\t<div class=\"content\">
\t\t\t";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tabbed_description", []))), "html", null, true);
            echo "
\t\t</div>
\t</div>\t
";
        } else {
            // line 43
            echo "\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tabbed_description", []))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/field-collection-item--field-tabbed-block-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 43,  92 => 39,  87 => 36,  79 => 33,  76 => 32,  68 => 29,  63 => 27,  60 => 26,  58 => 25,  55 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/field-collection-item--field-tabbed-block-fields.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/field-collection-item--field-tabbed-block-fields.html.twig");
    }
}
