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

/* themes/unisson_disability/templates/paragraph--paragraph-history-block.html.twig */
class __TwigTemplate_ca9bdc485a8393d45d02c819b1867f06089b6411522f66ab3e7472c73c8b5633 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 48, "if" => 53];
        $filters = ["clean_class" => 44, "escape" => 49, "render" => 53, "field_value" => 54];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'render', 'field_value'],
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
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 48
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 49
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "  </div>
";
    }

    // line 50
    public function block_content($context, array $blocks = [])
    {
        // line 51
        echo "      <section class=\"timeline\" id=\"timeline\">
      \t<div class=\"wrapper\">
      \t\t";
        // line 53
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_hb", [])))) {
            // line 54
            echo "      \t\t\t<h2>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_heading_hb", []))), "html", null, true);
            echo "</h2>
      \t\t";
        }
        // line 56
        echo "      \t\t";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_intro_text_hb", [])))) {
            // line 57
            echo "      \t\t<p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_intro_text_hb", []))), "html", null, true);
            echo "</p>
      \t\t";
        }
        // line 59
        echo "      \t\t<div class=\"timeline-slider\">
            <div class=\"timelinebg\"></div>
            \t";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_history_fields_hb", [])), "html", null, true);
        echo "
      \t\t</div>
      \t</div>
      </section>
    ";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/paragraph--paragraph-history-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 61,  103 => 59,  97 => 57,  94 => 56,  88 => 54,  86 => 53,  82 => 51,  79 => 50,  74 => 66,  72 => 50,  67 => 49,  61 => 48,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/paragraph--paragraph-history-block.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/paragraph--paragraph-history-block.html.twig");
    }
}
