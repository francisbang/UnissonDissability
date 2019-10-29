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

/* themes/unisson_disability/templates/field-collection-item--field-text-description-link-file.html.twig */
class __TwigTemplate_b2a5d8e17f22e20e1f206f0b050cff22654849ffc22b06d9b39b7af79a2ecf1e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 24];
        $filters = ["render" => 24, "escape" => 26, "field_value" => 26];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['render', 'escape', 'field_value'],
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
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image_ptdlf", [])))) {
            // line 25
            echo "<div class=\"image\">
\t";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image_ptdlf", []))), "html", null, true);
            echo "
</div>
";
        }
        // line 29
        echo "<div class=\"item-content\">
\t";
        // line 30
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_ptdlf", [])))) {
            // line 31
            echo "\t<h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_heading_ptdlf", []))), "html", null, true);
            echo "</h3>
\t";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_description_ptdlf", []))), "html", null, true);
            echo "
\t";
        }
        // line 34
        echo "\t";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link_text_ptdlf", [])))) {
            // line 35
            echo "\t\t";
            if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link_ptdlf", [])))) {
                echo "\t
\t\t\t<a href=\"";
                // line 36
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_link_ptdlf", []))), "html", null, true);
                echo "\" class=\"continue-reading\" target=\"_blank\" onClick=\"_gaq.push(['_trackPageview', '";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_file_ptdlf", []))), "html", null, true);
                echo "']);\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_link_text_ptdlf", []))), "html", null, true);
                echo "</a>
\t\t";
            } else {
                // line 38
                echo "\t\t\t<a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_file_ptdlf", []))), "html", null, true);
                echo "\" class=\"continue-reading\" target=\"_blank\" onClick=\"_gaq.push(['_trackPageview', '";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_file_ptdlf", []))), "html", null, true);
                echo "']);\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_link_text_ptdlf", []))), "html", null, true);
                echo "</a>\t\t\t\t
\t\t";
            }
            // line 40
            echo "\t";
        }
        // line 41
        echo "</div>
 
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/field-collection-item--field-text-description-link-file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  108 => 40,  98 => 38,  89 => 36,  84 => 35,  81 => 34,  76 => 32,  71 => 31,  69 => 30,  66 => 29,  60 => 26,  57 => 25,  55 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/field-collection-item--field-text-description-link-file.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/field-collection-item--field-text-description-link-file.html.twig");
    }
}
