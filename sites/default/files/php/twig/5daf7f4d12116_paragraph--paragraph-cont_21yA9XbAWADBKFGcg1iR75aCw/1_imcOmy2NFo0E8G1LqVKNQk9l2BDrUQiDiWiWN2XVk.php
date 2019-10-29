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

/* themes/unisson_disability/templates/paragraph--paragraph-contact-form-address.html.twig */
class __TwigTemplate_c81b4567941696a9932494841e6bdf323944c9186676db79a4fb56b5b3c9fdf6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 42, "if" => 53];
        $filters = ["escape" => 41, "trim" => 44, "striptags" => 44, "render" => 44, "field_value" => 50];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape', 'trim', 'striptags', 'render', 'field_value'],
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
        // line 41
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "</div>
";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        // line 43
        echo "      <section class=\"contact-form\" id=\"contact-form-section\">
      \t<img src=\"";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_background_imag", []))))), "html", null, true);
        echo "\" class=\"s-shape\">
      \t<div class=\"wrapper\">
\t      \t<div class=\"contact-fields\">
\t      \t\t";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_block_reference", [])), "html", null, true);
        echo "
\t      \t</div>
\t      \t<div class=\"contact-info\">
\t      \t\t<h2>";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_heading", []))), "html", null, true);
        echo "</h2>
\t      \t\t";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_address", []))), "html", null, true);
        echo "
\t      \t\t<p>
\t      \t\t";
        // line 53
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_contact_us_telephone", [])))) {
            // line 54
            echo "\t      \t\t\t<strong>T</strong> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_telephone", []))), "html", null, true);
            echo "
\t      \t\t";
        }
        // line 56
        echo "\t      \t\t\t<br>
\t      \t\t";
        // line 57
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_contact_us_fax_number", [])))) {
            // line 58
            echo "\t      \t\t\t<strong>F</strong> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_fax_number", []))), "html", null, true);
            echo "
\t      \t\t";
        }
        // line 60
        echo "\t      \t\t<br>
\t      \t\t";
        // line 61
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_contact_us_email", [])))) {
            // line 62
            echo "\t      \t\t\t<strong>E</strong> <a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_email", []))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_email", []))), "html", null, true);
            echo "</a>
\t      \t\t";
        }
        // line 64
        echo "\t      \t\t<br>
\t      \t\t";
        // line 65
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_abn", [])))) {
            // line 66
            echo "\t      \t\t\t<strong>ABN</strong> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_abn", []))), "html", null, true);
            echo "
\t      \t\t";
        }
        // line 68
        echo "\t      \t\t<br>
\t      \t\t";
        // line 69
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_contact_us_", [])))) {
            // line 70
            echo "\t      \t\t\t<strong>ACN</strong> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_", []))), "html", null, true);
            echo "
\t      \t\t";
        }
        // line 72
        echo "\t      \t\t<br>
\t      \t\t";
        // line 73
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_contact_us_misc_text", [])))) {
            // line 74
            echo "\t      \t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_misc_text", []))), "html", null, true);
            echo "
\t      \t\t";
        }
        // line 76
        echo "\t      \t\t</p>
\t      \t\t
\t      \t\t";
        // line 78
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_contact_us_link_text", [])))) {
            // line 79
            echo "\t      \t\t\t<a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_link", []))), "html", null, true);
            echo "\" class=\"button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact_us_link_text", []))), "html", null, true);
            echo "</a>
\t      \t\t";
        }
        // line 81
        echo "\t      \t</div>
      \t</div>
      </section>
    ";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/paragraph--paragraph-contact-form-address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 81,  166 => 79,  164 => 78,  160 => 76,  154 => 74,  152 => 73,  149 => 72,  143 => 70,  141 => 69,  138 => 68,  132 => 66,  130 => 65,  127 => 64,  119 => 62,  117 => 61,  114 => 60,  108 => 58,  106 => 57,  103 => 56,  97 => 54,  95 => 53,  90 => 51,  86 => 50,  80 => 47,  74 => 44,  71 => 43,  68 => 42,  63 => 85,  61 => 42,  56 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/paragraph--paragraph-contact-form-address.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/paragraph--paragraph-contact-form-address.html.twig");
    }
}
